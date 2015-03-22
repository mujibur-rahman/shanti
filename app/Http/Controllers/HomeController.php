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

    function getAds(){
    	return $this->ads
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
									->whereMoreFromDhaka(0)
									->whereListTag(0)
									->whereIsReviewing(0)
									->orderBy('id', 'desc')
									->get()
									->take(2);
		$featuredArticles = $this->articles->with('article_category')
									->whereIsActive(1)
									->whereFeatured(1)
									->whereMoreFromDhaka(0)
									->whereListTag(0)
									->whereIsReviewing(0)
									->get()
									->take(2);
		$moreTagArticles = 	$this->articles->with('article_category')
									->whereIsActive(1)
									->whereFeatured(0)
									->whereMoreFromDhaka(1)
									->whereListTag(0)
									->whereIsReviewing(0)
									->get()
									->take(10);
		$ads = $this->getAds();
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
		$listArticles = $this->articles->with('article_category')
									->whereIsActive(1)
									->whereListTag(1)
									->whereMoreFromDhaka(0)
									->whereFeatured(0)
									->whereIsReviewing(0)
									->get()
									->take(3);

		$reviewArticles = $this->articles->with('article_category')
									->whereIsActive(1)
									->whereListTag(0)
									->whereMoreFromDhaka(0)
									->whereFeatured(0)
									->whereIsReviewing(1)
									->get()
									->take(3);
		
		//print "<pre>"; print_r($listArticles); print "</pre>";
		$mostReads = $this->articles
									->whereIsActive(1)
									->orderBy('page_view_count', 'desc')
									->get()
									->take(5);

		return view('front.index', compact('articles', 'ads', 'featuredArticles', 'events', 'featuredEvents', 'moreTagArticles', 'listArticles', 'mostReads', 'reviewArticles'));

	}

	public function featuredArticles(){
		return $this->articles->with('article_category')
									->whereIsActive(1)
									->whereFeatured(1)
									->whereMoreFromDhaka(0)
									->whereListTag(0)
									->whereIsReviewing(0)
									->get()
									->take(2);
	}
	public function getEvents(){
		return $this->events
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
	}

	public function featuredEvents(){
		return $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->whereFeatured(1)
					->whereLastMinute(0)
					->get()
					->take(2);
	}
	public function moreTaggedArticles(){
		return $this->articles->with('article_category')
									->whereIsActive(1)
									->whereFeatured(0)
									->whereMoreFromDhaka(1)
									->whereListTag(0)
									->whereIsReviewing(0)
									->get()
									->take(10);
	}
	public function moreTaggedArticlesByCategoryId( $id ){
		return $this->articles->with('article_category')
									->whereIsActive(1)
									->whereFeatured(0)
									->whereMoreFromDhaka(1)
									->whereListTag(0)
									->whereIsReviewing(0)
									->whereArticleCategoryId( $id )
									->get()
									->take(10);
	}
	public function listTaggedArticles(){
		return $this->articles->with('article_category')
									->whereIsActive(1)
									->whereListTag(1)
									->whereMoreFromDhaka(0)
									->whereFeatured(0)
									->whereIsReviewing(0)
									->get()
									->take(3);
	}
	public function mostReadArticles(){
		return $this->articles
					->whereIsActive(1)
					->orderBy('page_view_count', 'desc')
					->get()
					->take(5);
	}
	public function articleDetails( $id ){

		$ads 				= $this->getAds();
		$featuredArticles 	= $this->featuredArticles();
		$events 			= $this->getEvents();
		$featuredEvents 	= $this->featuredEvents();
		$moreTagArticles 	= $this->moreTaggedArticles();
		$listArticles 		= $this->listTaggedArticles();
		$mostReads 			= $this->mostReadArticles();

		$article 			= $this->articles
										->with('article_category')
										->with('address')
										->findOrFail( $id );

		$total = 1;
		if( $article->page_view_count )
			$total += $article->page_view_count;

		$article->where('id', $id)->update([
											'page_view_count' => $total
										]);
		return view('front.details-article', compact('article', 'ads', 'featuredArticles', 'events', 'featuredEvents', 'moreTagArticles', 'listArticles', 'mostReads'));
	}
	public function articleCategory( $id ){
		$ads 				= $this->getAds();
		$featuredArticles 	= $this->featuredArticles();
		$events 			= $this->getEvents();
		$featuredEvents 	= $this->featuredEvents();
		$moreTagArticles 	= $this->moreTaggedArticlesByCategoryId($id);
		$listArticles 		= $this->listTaggedArticles();
		$mostReads 			= $this->mostReadArticles();
		$reviewArticles = $this->articles->with('article_category')
									->whereIsActive(1)
									->whereListTag(0)
									->whereMoreFromDhaka(0)
									->whereFeatured(0)
									->whereIsReviewing(1)
									->get()
									->take(3);
		$articles = $this->articles->with('article_category')
									->whereIsActive(1)
									->whereFeatured(0)
									->whereMoreFromDhaka(0)
									->whereListTag(0)
									->whereIsReviewing(0)
									->whereArticleCategoryId( $id )
									->orderBy('id', 'desc')
									->get()
									->take(5);
									
		return view('front.category-articles', compact('articles', 'ads', 'featuredArticles', 'events', 'featuredEvents', 'moreTagArticles', 'listArticles', 'mostReads', 'reviewArticles') );
	}

	public function eventDetails( $id ){
		print( "Event: " . $id );
		$ads 				= $this->getAds();
		$featuredArticles 	= $this->featuredArticles();
		$events 			= $this->getEvents();
		$featuredEvents 	= $this->featuredEvents();
		$moreTagArticles 	= $this->moreTaggedArticles();
		$listArticles 		= $this->listTaggedArticles();
		$mostReads 			= $this->mostReadArticles();

		$event 			= $this->events
										->with('article_category')
										->with('address')
										->findOrFail( $id );

		$total = 1;
		if( $event->page_view_count )
			$total += $event->page_view_count;

		$event->where('id', $id)->update([
											'page_view_count' => $total
										]);
		return view('front.details-event', compact('event', 'ads', 'featuredArticles', 'events', 'featuredEvents', 'moreTagArticles', 'listArticles', 'mostReads'));
	}
	public function featuredEventsPaging(){
		return $this->events
					->with('article_category')
					->with('address')
					->whereIsActive(1)
					->whereFeatured(1)
					->whereLastMinute(0)
					->paginate(10);
	}
	public function feventsLists(){
		$ads 				= $this->getAds();
		$featuredArticles 	= $this->featuredArticles();
		$events 			= $this->getEvents();
		$featuredEvents 	= $this->featuredEventsPaging();
		$moreTagArticles 	= $this->moreTaggedArticles();
		$listArticles 		= $this->listTaggedArticles();
		$mostReads 			= $this->mostReadArticles();

		return view('front.all-events', compact('featuredArticles','ads', 'events', 'featuredEvents', 'moreTagArticles', 'listArticles', 'mostReads'));
	}

	public function dashboard(){
		return view('dashboard');
	}
}
