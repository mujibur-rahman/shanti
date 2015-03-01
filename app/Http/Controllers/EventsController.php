<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\EventStoreRequests;

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
							->whereIsActive(1)
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
		if( $request['active'] )
			$activate = 1;
		$address = $this->address->create([
			'location' 		=> 	$request['address'],
			'thana_id' 		=> 	$request['thana'],
			'district_id' 	=> 	$request['district'],
			'division_id' 	=> 	$request['division'],
			'country_id' 	=>	$request['country'],
			'is_active' 	=> 	$activate
		]);
		$lastAddressId = $address->id;
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
			]);
		$lastInsertedEventId = $event->id;
		$this->eventLanguages->create([
			'event_id' 				=> $lastInsertedEventId,
			'title' 				=> $request['bengaliTitle'],
			'info_title' 			=> $request['bengaliInfoTitle'],
			'details' 				=> $request['bengaliDetails'],
			'meta_keyword' 			=> $request['bengaliKeyword'],
			'meta_description' 		=> $request['bengaliDescription'],
			'language_id' 			=> 1, //Todo: Mujib: Used 1 for Bengali 
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
		print $id;
		//dd($request);
		$ExistingEvents = $this->events->findOrFail($id);
		$ExistingEventLang = $this->eventLanguages->whereEventId($id);
		$ExistingAddress = $this->address->findOrFail( $ExistingEvents->address_id );
		
		print "Addres" . $ExistingAddress->id;
		$activate = 0;
		if( $request['active'] )
			$activate = 1;
		$address  = [];
		$address['location']  	= $request['address'];
		$address['thana_id']  	= $request['thana'];
		$address['district_id'] = $request['district'];
		$address['division_id'] = $request['division'];
		$address['country_id']  = $request['country'];
		$address['is_active']  	= $activate;
		$this->address->where('id', $ExistingAddress->id)->update( $address);
		
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
		$this->events->where('id', $id)->update( $event );

		$eventLangs = [];
		$eventLangs['title']			= $request['bengaliTitle'];
		$eventLangs['info_title'] 		= $request['bengaliInfoTitle'];
		$eventLangs['details'] 			= $request['bengaliDetails'];
		$eventLangs['meta_keyword'] 	= $request['bengaliKeyword'];
		$eventLangs['meta_description'] = $request['bengaliDescription'];
		$eventLangs['language_id'] 		= 1;
		$eventLangs['is_active'] 		= $activate;
		$eventLangs['event_id']		= $id;

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
