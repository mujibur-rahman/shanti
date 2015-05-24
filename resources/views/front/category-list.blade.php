@foreach($articles as $article)
<div class="article-style-1">
	<div class="picbox">
		<a href="/details/article/{{ $article->id }}" title="{!! $article->title !!}">
			<img src="/images/articles/{{ $article->media }}" class="img-responsive" />		
			<div class="as1-tag tag-1">
                    {!! (session('locale') == "en" ? $article->article_category->title : $article->article_category->bnTitle) !!}
            </div>
		</a>
	</div>
	<a href="/details/article/{{ $article->id }}" title="{!! $article->title !!}"><h1>
         {!! (session('locale') == "en" ? $article->title : $article->bnTitle) !!}
        </h1></a>
            {!! (session('locale') == "en" ? $article->short_detail : $article->bnShort_detail) !!}
	
	<div class="clearfix"></div>
</div>
@endforeach
<div id="results"></div>
<div align="center">
<button class="btn btn-block viewmoreArticle" id="load_more_button">View more</button>
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
			url: '/articles/more?page=' + perPage,
			type: 'GET',
			dataType: 'json',
		}).done(function( json ) {            
            $(".viewmoreArticle").show(); //bring back load more button                
            data = [];
            var category = "";
            var title = "";
            var shortDetail = "";
            $.each(json.articles, function(index, val) {
                <?php if(session('locale') == "en"){?>
                title = val.title;
                category = val.article_category.title;
                shortDetail = val.short_detail;
                <?php }else{?>
                    title = val.bnTitle;
                    category = val.article_category.bnTitle;
                    shortDetail = val.bnShort_detail;
                <?php }?>
            	 var result = '<div class="article-style-1"><div class="picbox"><a href="/details/article/' + val.id + '" title="' + title + '"><img src="/images/articles/' + val.media + '" class="img-responsive" /><div class="as1-tag tag-1">' + category + '</div></a></div><a href="/details/article/' + val.id + '" title="' + title + '"><h1>' + title + '</h1></a>' + shortDetail + '<div class="clearfix"></div></div>';
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
