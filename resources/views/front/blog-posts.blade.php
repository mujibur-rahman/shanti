<div class="blog-post">
	<h1>BLOG POSTS</h1>
	<div class="pic-area" id="blogData">
		
        </div>
</div>
<script type="text/javascript">
	var content = '';
	var ses = '<?php echo session('locale');?>';
	jQuery.get('http://www.shantidhaka.com/blog/bengali-json/', {'session': ses}).done(function(data){
		var obj = jQuery.parseJSON( data )
		jQuery.each(obj, function(i,v){
		if(v.image == false){
			img = "/img/blog-post-pic-1.png";
		}else{
			img = v.image;
		}
		content += '<div class="pic-box-blog"><a href="'+ v.url+'" _target="blank"> <img src="' + img + '"></a><br><p>'+ v.title +'</p></div>';

		});
		content += '<div class="clearfix"></div>';
		jQuery('#blogData').html(content);
	});
	//jQuery('#blogData').html(content);
</script>
