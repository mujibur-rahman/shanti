@foreach($articles as $article)
<div class="article-style-1">
	<div class="picbox">
		<a href="/details/article/{{ $article->id }}" title="{!! $article->title !!}">
			<img src="/images/articles/{{ $article->media }}" class="img-responsive" />		
			<div class="as1-tag tag-1">{!! $article->article_category->title !!}</div>
		</a>
	</div>
	<a href="/details/article/{{ $article->id }}" title="{!! $article->title !!}"><h1>{!! $article->title !!}</h1></a>
	{!! $article->short_detail !!}
	<div class="clearfix"></div>
</div>
@endforeach
<div id="results">
@if(count($articles) <= 0)
    No Article found!<br />
@endif
</div>
<div align="center">
@if($total > 2)
    <button class="btn btn-block viewmoreArticle" id="load_more_button">View more</button>
@else
<button class="btn btn-block viewmoreArticle" disabled id="load_more_button">View more</button>
@endif
<div class="animation_image" style="display:none;"><img src="/img/ajax-loader.gif"> Loading...</div>
</div>
<!--a href="#btn-block" class="btn btn-block" id="viewmoreArticle">View more</a-->


<script language="javascript">
$(document).ready(function(){
    var perPage = 2; //track user click on "load more" button, righ now it is 2 click    
    var total_pages = <?php echo $total;?>;
    $(".viewmoreArticle").click(function (e){  
        $(this).hide(); //hide load more button on click
        $('.animation_image').show(); //show loading image
        //Number and load returned data into result element
        $.ajax({
			url: '/articles/category/more/<?=$categoryId?>?page=' + perPage,
			type: 'GET',
			dataType: 'json',
		}).done(function( json ) {            
            $(".viewmoreArticle").show(); //bring back load more button                
            data = [];
            //console.log('message' , data);
            $.each(json.articles, function(index, val) {
            	 var result = '<div class="article-style-1"><div class="picbox"><a href="/details/article/' + val.id + '" title="' + val.title + '"><img src="/images/articles/' + val.media + '" class="img-responsive" /><div class="as1-tag tag-1">' + val.article_category.title + '</div></a></div><a href="/details/article/' + val.id + '" title="' + val.title + '"><h1>' + val.title + '</h1></a>' + val.short_detail + '<div class="clearfix"></div></div>';
            	data.push( result );
            });
            $("#results").append( data ); //append data received from server
            //scroll page smoothly to button id
           $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);
            
            //hide loading image
            $('.animation_image').hide(); //hide loading image once data is received

            perPage = perPage + 1; //user click increment on load button
        
        }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
            alert(thrownError); //alert with HTTP error
            $(".viewmoreArticle").show(); //bring back load more button
            $('.animation_image').hide(); //hide loading image once data is received
        });            
        
        if(perPage >= total_pages-3)
        {
            //reached end of the page yet? disable load button
            $(".viewmoreArticle").attr("disabled", "disabled");
        }
          
        });
});
</script>