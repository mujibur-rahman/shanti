@extends('front.template')
	@section('details')
		<!-- START: left container -->
				<div class="col-md-9">
					@include('front.search')
					<div class="row" style="margin-top:25px;">
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-12">
									<div class="article-style-5">
										<div class="row">
										<div class="col-md-6"><div class="pic-header">ARTICLE <small> Home / {{ $article->article_category->title }}</small></div></div>
											<div class="col-md-6"><div class="pic-credit text-right">Publ. {{ \Carbon::parse($article->created_at)->format('D H:i') }}</div></div>
										</div>
										<div class="picbox"><img src="/images/articles/{{ $article->media }}" class="img-responsive"></div>
										<div class="pic-credit text-right">Foto: Carolina Byrmo</div>
										<h1>{{ $article->title }}</h1>
										<div class="row">
											<div class="col-md-8">
											@if($article->is_reviewing)
												<div class="row">
													<div class="col-md-6">
														<p>
														</p><div class="fz-ratings">
													<a href=""><i class="fa fa-star fa-2x"></i></a>
													<a href=""><i class="fa fa-star fa-2x"></i></a>
													<a href=""><i class="fa fa-star fa-2x"></i></a>
													<a href=""><i class="fa fa-star fa-2x"></i></a>
													<a href=""><i class="fa fa-star fa-2x"></i></a>
												</div>
												READERS GRADE <b>4</b><br>
												NUMBER OF VOTES <span class="badge badge-style-1 ">3</span><br>
												<i>Click on the symble</i>
													</div>
													<div class="col-md-6">
														<p>
														<i class="fa fa-plus fa-lg color-yellow m-t-10"></i>
														<i class="fa fa-plus fa-lg color-yellow"></i>
														<i class="fa fa-plus fa-lg color-yellow"></i><br>
														AOS GRADE <b>3</b></p>
													</div>
												</div>
											@endif

												<p><b>
													{{ strip_tags($article->short_detail) }}
												</b></p>
												{{ strip_tags($article->details) }}												
											</div>
											<div class="col-md-4">
												<br><br>
												<address>
												<h4>INFO</h4>
												  <strong>{{ $article->address->location }}</strong><br />
												  {{ $article->address->division->title }} ,
												  {{ $article->address->district->title }},
												  {{ $article->address->thana->title }},
												  {{ $article->address->country->title }}
												  <br />
												  <abbr title="Phone">P:</abbr> {{ $article->phone }}
												</address>

												<address>
													<h4>MAP</h4>
												    <a href="mailto:#">{{ $article->email }}</a>
												</address>
												<img src="/img/225.gif">
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<!--div class="row">
								<div class="col-md-12">
									@include('front.article-more-info')
								</div>

							</div-->
							<div class="row">
								<div class="col-md-12">
									@include('front.social')
                                </div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="comment-block">
										<!-- Disqus comments -->
										<script type="text/javascript">
										    /* * * CONFIGURATION VARIABLES * * */
										    var disqus_shortname = 'shantidhaka';
										    
										    /* * * DON'T EDIT BELOW THIS LINE * * */
										    (function () {
										        var s = document.createElement('script'); s.async = true;
										        s.type = 'text/javascript';
										        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
										        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
										    }());
										</script>										
										<div id="disqus_thread"></div>
										<script type="text/javascript">
										    /* * * CONFIGURATION VARIABLES * * */
										    var disqus_shortname = 'shantidhaka';
										    
										    /* * * DON'T EDIT BELOW THIS LINE * * */
										    (function() {
										        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
										        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
										        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
										    })();
										</script>
										<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
										
									</div>
								</div>
							</div>
							<div class="row" style="margin-top:25px;">
								@include('front.related-articles')
							</div>
							<div class="row">
								<div class="col-md-12">
									@include('front.blog-posts')
								</div>
							</div>
							<div class="row">
								@include('front.mostread-editor-choice')
							</div>
						</div>

						<div class="col-md-4">
							@include('front.feature-deal')
							
						</div>
					</div>

					<div class="row" style="margin-top:25px;">
						<div class="col-md-12">
							@include('front.listings')
						</div>
					</div>
					<div class="row">
						<div class="col-md-12"><h1 class="article-4">MORE FROM ALL OF STOCKHOLM</h1></div>
					</div>
					<div class="row" style="margin-top:0px;">
						<div class="clearfix"></div>
						@include('front.extra-category')
					</div>
				</div>
				<!-- END: left container -->

				@section('ads')
					<div class="col-md-3">
						@include('front.ads')
					</div>
				@endsection
	@endsection

@stop
		
