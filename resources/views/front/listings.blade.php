<div class="blog-post">
	<h1>Listings</h1>
	<div class="pic-area">    
		<div id="flexiselDemo2"> 
			@foreach($listArticles as $list)
			<div class="pic-box">
				<a href="/details/article/{{ $list->id }}"><img src="/images/articles/{{ $list->media }}"></a><br>
				<a href="/details/article/{{ $list->id }}"><p>{{ $list->title }}</p></a>
				<div class="clearfix"></div>
			</div>
			@endforeach
		</div>
	<div class="clearfix"></div>
	</div>
</div>

<script type="text/javascript">

$(window).load(function() {
    $("#flexiselDemo2").flexisel({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

   
    
});
</script>
