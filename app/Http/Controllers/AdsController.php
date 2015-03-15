<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\AdsStoreRequests;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Models\Ads;
use App\Models\AdPositions;

use Illuminate\Contracts\Auth\Guard;


class AdsController extends Controller {

	private $ads;
	private $adPosition;

	public function __construct(Ads $ads, AdPositions $adPosition){
		$this->ads = $ads;
		$this->adPosition = $adPosition;
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$limit = 10;
		$ads = $this->ads
						->with('ad_position')
						->whereIsActive(1)
						->paginate($limit);

		return view('ads.index', compact('ads'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('ads.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AdsStoreRequests $request)
	{
		$activate 	= 0;
		$paid 		= 0;
		$lifetime 	= 0;
		$pending 	= 0;
		$content = "";
		$destinationPath = "images/";
		if( $request['active'] ) 		$activate = 1;
		if( $request['is_paid'] ) 		$paid = 1;
		if( $request['is_lifetime'] ) 	$lifetime = 1;
		if( $request['is_pending'] ) 	$pending = 1;

		$ad_position = $this->adPosition->create([
			'title' 			=> 	$request['title'],
			'type' 				=> 	$request['type'],
			'details' 			=> 	$request['ad_detail'],
			'duration' 			=> 	$request['duration'],
			'rate' 				=>	$request['rate'],
			'maximum_ad_limit' 	=>	$request['ad_limit'],
			'is_active' 		=> 	$activate
		]);
		$lastAdPositionId = $ad_position->id;
		
		$ads = $this->ads->create([
			'short_desc' 		=> 	$request['short_desc'],
			'details' 			=> 	$request['details'],
			'start_date' 		=> 	$request['startDate'],
			'end_date' 			=>	$request['endDate'],
			'link' 				=>	$request['website'],
			'meta_keyword' 		=>	$request['keyword'],
			'meta_description' 	=>	$request['description'],
			'is_paid' 			=>	$paid,
			'is_lifetime' 		=>	$lifetime,
			'is_pending' 		=>	$pending,
			'ad_position_id' 	=>	$lastAdPositionId,
			'user_id' 			=>	\Auth::user()->id,
			'is_active' 		=> 	$activate
		]);

		if($request['type'] == 'Image'){
			$fileName =  $request->file('image')->getClientOriginalName();
			$request->file('image')->move($destinationPath, $ads->id . '-' . $fileName);
			$content = $ads->id . '-' . $fileName;
		}else if($request['type'] == 'Flash' ) {
			$content = $request['flash'];
		}else{
			$content = '';
		}
		$this->ads->where('id', $ads->id)->update([
				'image' => 	$content
		]);
		return redirect()->route('ads.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ad = $this->ads->findOrFail( $id );
						//->with('ad_position');
						//->first();
		//print "<pre>"; print_r($ad); print "</pre>";
		return view('ads.edit', compact('ad'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(AdsStoreRequests $request, $id)
	{
		$ExistingAds = $this->ads->findOrFail($id);
		$ExistingAdsPosition = $this->adPosition->findOrFail( $ExistingAds->ad_position_id );

		$activate 	= 0;
		$paid 		= 0;
		$lifetime 	= 0;
		$pending 	= 0;
		$content = "";
		$destinationPath = "images/";
		if( $request['active'] ) 		$activate = 1;
		if( $request['is_paid'] ) 		$paid = 1;
		if( $request['is_lifetime'] ) 	$lifetime = 1;
		if( $request['is_pending'] ) 	$pending = 1;

		if($request['type'] == 'Image'){

			$fileName =  $request->file('image')->getClientOriginalName();
			$request->file('image')->move($destinationPath, $ExistingAds->id . '-' . $fileName);
			$content = $ExistingAds->id . '-' .$fileName;
		}else if($request['type'] == 'Flash' ) {
			$content = $request['flash'];
		}else{
			$content = '';
		}
		
		$position = [];
		$position['title'] 				= 	$request['title'];
		$position['type'] 				= 	$request['type'];
		$position['details'] 			= 	$request['ad_detail'];
		$position['duration'] 			= 	$request['duration'];
		$position['rate'] 				=	$request['rate'];
		$position['maximum_ad_limit'] 	=	$request['ad_limit'];
		$position['is_active'] 			= 	$activate;
		$this->adPosition->where('id', $ExistingAdsPosition->id)->update( $position );

		$ad = [];
		$ad['image'] 			= 	$content;
		$ad['short_desc'] 		= 	$request['short_desc'];
		$ad['details'] 			= 	$request['details'];
		$ad['start_date'] 		= 	$request['startDate'];
		$ad['end_date'] 		=	$request['endDate'];
		$ad['link'] 			=	$request['website'];
		$ad['meta_keyword'] 	=	$request['keyword'];
		$ad['meta_description'] =	$request['description'];
		$ad['is_paid'] 			=	$paid;
		$ad['is_lifetime'] 		=	$lifetime;
		$ad['is_pending'] 		=	$pending;
		$ad['ad_position_id'] 	=	$ExistingAdsPosition->id;
		$ad['user_id'] 			=	\Auth::user()->id;
		$ad['is_active'] 		= 	$activate;

		$this->ads->where('id', $id)->update( $ad );

		return redirect()->route('ads.index');

	}	

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ads = $this->ads->findOrFail($id);
		$ads->delete();
		return redirect()->route('ads.index');
	}

}
