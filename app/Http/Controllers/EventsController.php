<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\EventStoreRequests;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Models\ArticleCategory;
use App\Models\Divisions;
use App\Models\Districts;
use App\Models\Thanas;
use App\Models\Countries;
use App\Models\Events;
use App\Models\EventLanguages;
use App\Models\Language;
use App\Models\Addresses;

class EventsController extends Controller {

	private $articleCategory;
	private $country;
	private $divisions;
	private $districts;
	private $thanas;
	private $events;
	private $eventLanguages;
	private $languages;
	private $address;

	 /**
     * Constructor.
     *
     * @param ArticleCategory $articleCategory
     */
    public function  __construct(ArticleCategory $articleCategory, 
    	Divisions $divisions, Districts $districts, Thanas $thanas,
    	Countries $country, Events $events, EventLanguages $eventLanguages,
    	Language $language, Addresses $address)
    {
        $this->articleCategory = $articleCategory;
        $this->country = $country;
        $this->divisions = $divisions;
        $this->districts = $districts;
        $this->thanas = $thanas;
       	$this->language = $language;
       	$this->eventLanguages = $eventLanguages;
       	$this->events = $events;
       	$this->address = $address;
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
		$events = $this->events
							->with('address')
							//->with('article_category')
							//->whereIsActive(1)
							->paginate($limit);
		//dd($events);
		return view('events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$category = $this->articleCategory->all()->lists('title', 'id');
		$division = $this->divisions->all()->lists('title', 'id');
		$district = $this->districts->all()->lists('title', 'id');
		$thana = $this->thanas->all()->lists('title', 'id');
		$country = $this->country->all()->lists('title', 'id');
		$url = "www.localhost.com";
		return view('events.create', compact('category','division', 'district', 'thana', 'country','url'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(EventStoreRequests $request)
	{
		//dd($request);
		$activate = 0;
		$featured = 0;
		$last_minute = 0;
		if( $request['active'] )
			$activate = 1;
		if( $request['featured'] )
			$featured = 1;
		if( $request['last_minute'] )
			$last_minute = 1;
		$address = $this->address->create([
			'location' 		=> 	$request['address'],
			'thana_id' 		=> 	$request['thana'],
			'district_id' 	=> 	$request['district'],
			'division_id' 	=> 	$request['division'],
			'country_id' 	=>	$request['country'],
			'is_active' 	=> 	$activate
		]);
		$lastAddressId = $address->id;
		$destinationPath = "images/events/";
		if( $request->hasFile('media') ){
			$date = date('Y-m-d H.i.s') ;
			$unix_date = strtotime($date) + rand(5, 15);
			$fileName =  $request->file('media')->getClientOriginalName();
			$request->file('media')->move($destinationPath, $unix_date . '-' . $fileName);
			$media = $unix_date . '-' . $fileName;
		}
		$event = $this->events->create([
			'article_category_id' 	=> $request['category'],
			'title' 				=> $request['title'],
			'info_title' 			=> $request['infoTitle'],
			'details' 				=> $request['details'],
			'meta_keyword' 			=> $request['keyword'],
			'meta_description' 		=> $request['description'],
			'website' 				=> $request['website'],
			'phone' 				=> $request['phone'],
			'entrance' 				=> $request['entrance'],
			'entrance_fees' 		=> $request['fees'],
			'opening_date' 			=> $request['openingDate'],
			'ending_date' 			=> $request['endingDate'],
			//'email'		=> 		$request['email'],
			'is_active' 			=> $activate,
			'address_id' 			=> $lastAddressId,
			'media'					=> 	$media,
			'last_minute'			=>	$last_minute,
			'featured'				=>	$featured,
			'featured_title'		=>	$request['featured_title'],
			'price'					=>	$request['price'],
			'strike_price'			=>	$request['strike_price'],
			'featured_details'		=> 	$request['featured_details'],
			'bn_featured_title'		=>	$request['bn_featured_title'],
			'bn_price'			=>	$request['bn_price'],
			'bn_strike_price'		=>	$request['bn_strike_price'],
			'bn_featured_details'		=>	$request['bn_featured_details'],
			'bnTitle' 			=>	$request['bengaliTitle'],
			'bnInfo_title'			=>	$request['bengaliInfoTitle'],
			'bnDetails'			=>	$request['bengaliDetails']
			]);
		$lastInsertedEventId = $event->id;
		$this->eventLanguages->create([
			'event_id' 				=> $lastInsertedEventId,
			'title' 				=> $request['bengaliTitle'],
			'info_title' 			=> $request['bengaliInfoTitle'],
			'details' 				=> $request['bengaliDetails'],
			'meta_keyword' 			=> $request['bengaliKeyword'],
			'meta_description' 		=> $request['bengaliDescription'],
			'language_id' 			=> 2, //Todo: Mujib: Used 2 for Bengali 
			'is_active' 			=> $activate
		]);
		return redirect()->route('events.index');
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
		$category = $this->articleCategory->all()->lists('title', 'id');
		$division = $this->divisions->all()->lists('title', 'id');
		$district = $this->districts->all()->lists('title', 'id');
		$thana 	  = $this->thanas->all()->lists('title', 'id');
		$country  = $this->country->all()->lists('title', 'id');
		$event  = $this->events->find($id);
									//->with('address');
									//->with('article_category')
									//->first();
		$eventLang = $this->eventLanguages
							->with('events')
							->whereEventId($id)
							->first();
		//dd($eventLang);
		$url = "www.localhost.com";				
		return view('events.edit', compact('category','division', 'district', 'thana', 'country','event', 'eventLang', 'url')); 
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EventStoreRequests $request, $id)
	{
		$ExistingEvents = $this->events->findOrFail($id);
		$ExistingEventLang = $this->eventLanguages->whereEventId($id);
		$ExistingAddress = $this->address->findOrFail( $ExistingEvents->address_id );
		$media = '';
		$activate = 0;
		$featured = 0;
		$last_minute = 0;
		if( $request['active'] )
			$activate = 1;
		if( $request['featured'] )
			$featured = 1;
		if( $request['last_minute'] )
			$last_minute = 1;

		$address  = [];
		$address['location']  	= $request['address'];
		$address['thana_id']  	= $request['thana'];
		$address['district_id'] = $request['district'];
		$address['division_id'] = $request['division'];
		$address['country_id']  = $request['country'];
		//$address['is_active']  	= $activate;
		$this->address->where('id', $ExistingAddress->id)->update( $address );
		
		$destinationPath = "images/events/";
		if( $request->hasFile('media') ){
			$date = date('Y-m-d H.i.s') ;
			$unix_date = strtotime($date) + rand(5, 15);
			$fileName =  $request->file('media')->getClientOriginalName();
			$request->file('media')->move($destinationPath, $unix_date . '-' . $fileName);
			$media = $unix_date . '-' . $fileName;
		}

		$event = [];
		$event['article_category_id']	= $request['category'];
		$event['title'] 				= $request['title'];
		$event['info_title'] 			= $request['infoTitle'];
		$event['details'] 				= $request['details'];
		$event['meta_keyword'] 			= $request['keyword'];
		$event['meta_description'] 		= $request['description'];
		$event['website'] 				= $request['website'];
		$event['phone'] 				= $request['phone'];
		$event['entrance'] 				= $request['entrance'];
		$event['entrance_fees'] 		= ($request['entrance'] == "1" ? '0.00' : $request['fees']);
		$event['opening_date'] 			= $request['openingDate'];
		$event['ending_date'] 			= $request['endingDate'];
		$event['is_active'] 			= $activate;
		$event['address_id'] 			= $ExistingAddress->id;
		if( $media )
			$event['media']			= 	$media;
		$event['last_minute']			=	$last_minute;
		$event['featured']			=	$featured;
		$event['featured_title']		=	$request['featured_title'];
		$event['price']				=	$request['price'];
		$event['strike_price']			=	$request['strike_price'];
		$event['featured_details']		= 	$request['featured_details'];
		$event['bn_featured_title']		=	$request['bn_featured_title'];
		$event['bn_price']			=	$request['bn_price'];
		$event['bn_strike_price']		=	$request['bn_strike_price'];
		$event['bn_featured_details']		= 	$request['bn_featured_details'];
		$event['bnTitle'] 			=	$request['bengaliTitle'];
		$event['bnInfo_title']			=	$request['bengaliInfoTitle'];
		$event['bnDetails']			=	$request['bengaliDetails'];
		$this->events->where('id', $id)->update( $event );

		$eventLangs = [];
		$eventLangs['title']			= $request['bengaliTitle'];
		$eventLangs['info_title'] 		= $request['bengaliInfoTitle'];
		$eventLangs['details'] 			= $request['bengaliDetails'];
		$eventLangs['meta_keyword'] 		= $request['bengaliKeyword'];
		$eventLangs['meta_description'] 	= $request['bengaliDescription'];
		$eventLangs['language_id'] 		= 2;
		$eventLangs['is_active'] 		= $activate;
		$eventLangs['event_id']			= $id;

		$this->eventLanguages->where('event_id', $id)->update( $eventLangs );

		return redirect()->route('events.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ExistingEvent = $this->events->findOrFail($id);
		$ExistingEventLang = $this->eventLanguages
									->whereEventId($id)
									->delete();
		$ExistingEvent->delete();
		$ExistingAddress = $this->address
								->findOrFail( $ExistingEvent->address_id )
								->delete();
		return redirect()->route('events.index');
	}

}
