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
use App\Models\ArticleLanguages;
use App\Models\EventLanguages;
use App\Models\Language;
use App\Models\Addresses;
use App\Models\Articles;
use App\Models\Ads;
use App\Models\AdPositions;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	private $articleCategory;
	private $country;
	private $divisions;
	private $districts;
	private $thanas;
	private $events;
	private $eventLanguages;
	private $languages;
	private $address;
	private $articles;
	private $articleLanguages;
	private $ads;
	private $adPosition;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function  __construct(ArticleCategory $articleCategory, 
    	Divisions $divisions, Districts $districts, Thanas $thanas,
    	Countries $country, Events $events, EventLanguages $eventLanguages,
    	Language $language, Addresses $address, Articles $articles, 
    	ArticleLanguages $articleLanguages, Ads $ads, AdPositions $adPosition)
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
       	$this->articleLanguages = $articleLanguages;
       	$this->articles = $articles;
       	$this->ads = $ads;
		$this->adPosition = $adPosition;
        //$this->middleware('auth');
    }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = $this->articles->with('article_category')
									->whereIsActive(1)
									->whereFeatured(0)
									->get()
									->take(2);
		$featuredArticles = $this->articles->with('article_category')
									->whereIsActive(1)
									->whereFeatured(1)
									->get()
									->take(2);
		$moreTagArticles = 	$this->articles->with('article_category')
									->whereIsActive(1)
									->whereFeatured(0)
									->whereMoreFromDhaka(1)
									->get()
									->take(10);
		$ads = $this->ads
						->with('ad_position')
						->whereIsActive(1)
						->get([
							'ads.id',
							'ads.image',
							'ads.short_desc',
							'ads.link',
							'ads.ad_position_id'
							])
						->take(5);
		//print "<pre>"; print_r($ads); print "</pre>";
		//die();
		$events = $this->events
								->with('article_category')
								->with('address')
								->whereIsActive(1)
								->whereFeatured(0)
								->whereLastMinute(1)
								->get([
										'events.id',
										'events.media',
										'events.title',
										'events.featured_title',
										'events.price',
										'events.strike_price',
										'events.address_id',
										'events.opening_date'
									])
								->take(2);
		$featuredEvents = $this->events
								->with('article_category')
								->with('address')
								->whereIsActive(1)
								->whereFeatured(1)
								->whereLastMinute(0)
								->get()
								->take(2);
		//print "<pre>"; print_r($article); print "</pre>";
		return view('front.index', compact('articles', 'ads', 'featuredArticles', 'events', 'featuredEvents', 'moreTagArticles'));

	}
	
	public function dashboard(){
		return view('dashboard');
	}
}
