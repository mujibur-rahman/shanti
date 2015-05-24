<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleCategoryStoreRequest;
use App\Models\ArticleCategory;
use App\Models\ArticleCategoriesLanguage;
use App\Models\Language;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class ArticleCategoryController extends Controller {

	/**
     * @var ArticleCategory
     * @var ArticleCategoryLanguage
     * @var Language
     */
    private $articleCategory;
    private $articleCategoriesLanguage;
    private $languages;
    /**
     * Constructor.
     *
     * @param ArticleCategory $articleCategory
     */
    public function  __construct(ArticleCategory $articleCategory, ArticleCategoriesLanguage $articleCategoriesLanguage, Language $language)
    {
        $this->articleCategory = $articleCategory;
        $this->articleCategoriesLanguage = $articleCategoriesLanguage;
        $this->language = $language;
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
		$categories = $this->articleCategory->paginate($limit);
		return view('category.index', compact('categories', 'articleCategoryLang','limit'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('category.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( ArticleCategoryStoreRequest $request )
	{
		$limit = 10;
		$activate = 0;
		if( $request['active'] )
			$activate = 1;
		$category = $this->articleCategory->create([
			'title' => $request['title'],
			'meta_keyword' => $request['keyword'],
			'meta_description' => $request['description'],
			'isactive' => $activate,
			'bnTitle' => $request['bengaliTitle']
			]);
		$cat_id = $category->id; //last inserted ID

		$this->articleCategoriesLanguage->create([
			'article_category_id' => $cat_id,
			'title' => $request['bengaliTitle'],
			'meta_keyword' => $request['bengaliKeyword'],
			'meta_description' => $request['bengaliDescription'],
			'language_id' => 1, //Todo: Mujib: Used 1 for Bengali 
			'isactive' => $activate
		]);
		return redirect()->route('category.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$category = $this->articleCategory->findOrFail( $id );
		$articleCategoryLang = $this->articleCategoriesLanguage
									->whereArticleCategoryId( $id )
									->first();
		return view('category.show', compact('category', 'articleCategoryLang'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = $this->articleCategory->findOrFail( $id );
		$articleCategoryLang = $this->articleCategoriesLanguage
									->whereArticleCategoryId( $id )
									->first();
		return view('category.edit', compact('category', 'articleCategoryLang'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ArticleCategoryStoreRequest $request, $id)
	{
		$article = [];
		$articleLang = [];
		$activate = 0;
		if( $request['active'] )
			$activate = 1;
		$articleCat = $this->articleCategory->findOrFail( $id );
		$article['title'] = $request['title'];
		$article['meta_keyword'] = $request['keyword'];
		$article['meta_description'] = $request['description'];
		$article['isactive'] = $activate;
		$article['bnTitle'] = $request['bengaliTitle'];
		$this->articleCategory->where('id', $id)->update( $article );
		//After updating article category then same entry should go to article category language table.
		$articleLang['title'] = $request['bengaliTitle'];
		$articleLang['meta_keyword'] = $request['bengaliKeyword'];
		$articleLang['meta_description'] = $request['bengaliDesc'];
		$articleLang['isactive'] = $activate;
		$articleLang['article_category_id'] = $id;
		$articleLang['language_id'] = 1;
		$this->articleCategoriesLanguage->where('article_category_id', $id)->update( $articleLang );

		return redirect()->route('category.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$limit = 10;
		$articleCategoryLang = $this->articleCategoriesLanguage
									->whereArticleCategoryId( $id )
									->delete();
		$articleCat = $this->articleCategory->findOrFail( $id )->delete();
		return view('category.index', compact('limit'));
	}

}
