	<!--Menubar-->
		<div class="row">
			<div class="col-md-12"><div class="top-menu">
				<nav class="navbar" role="navigation">
					<div class="navbar-inner">
						<!-- Menu -->
						<ul class="nav navbar-nav l_tinynav1" id="nav">
						<li><a href="/" title="" {!! (session('locale') == 'bg' ? 'style="font-size: 20px !important; border: 1px solid #5b575b !important;"' : '')  !!} >{{ trans('front/menu.home')}}</a></li>
						<li><a href="/category/article/1" title="" {!! (session('locale') == 'bg' ? 'style="font-size: 20px !important; border: 1px solid #5b575b !important;"' : '')  !!}>
						{{ trans('front/menu.restaurant')}} 
						</a></li>      
						<li><a href="/category/article/3" title="" {!! (session('locale') == 'bg' ? 'style="font-size: 20px !important; border: 1px solid #5b575b !important;"' : '')  !!}>{{ trans('front/menu.club')}} </a></li>
						<li><a href="/category/article/4" title="" {!! (session('locale') == 'bg' ? 'style="font-size: 20px !important; border: 1px solid #5b575b !important;"' : '')  !!}>{{ trans('front/menu.science')}} </a></li> 
						<li><a href="/category/article/5" title="" {!! (session('locale') == 'bg' ? 'style="font-size: 20px !important; border: 1px solid #5b575b !important;"' : '')  !!}>{{ trans('front/menu.shopping')}} </a></li>    
						<li><a href="/category/article/6" title="" {!! (session('locale') == 'bg' ? 'style="font-size: 20px !important; border: 1px solid #5b575b !important;"' : '')  !!} >{{ trans('front/menu.citylife')}} </a></li>
						<li><a href="http://www.shantidhaka.com/blog/" target="_blank" title="" {!! (session('locale') == 'bg' ? 'style="font-size: 20px !important; border: 1px solid #5b575b !important;"' : '')  !!}>{{ trans('front/menu.blog')}} </a></li> 
						<li><a href="/category/article/7" title="" {!! (session('locale') == 'bg' ? 'style="font-size: 20px !important; border: 1px solid #5b575b !important;"' : '')  !!} >{{ trans('front/menu.guide')}} </a></li> 
						<li><a href="#" title="" {!! (session('locale') == 'bg' ? 'style="font-size: 25px !important; border: 1px solid #5b575b !important;padding-right: 37px;"' : 'style="padding-right: 27px;"')  !!} > &nbsp;&nbsp;{{ trans('front/menu.more')}} <span class="caret"></span></a>
							<!-- Submenu -->
							<ul>
							<li><a href="/category/article/15" title="">{{ trans('front/menu.child')}} </a></li>
							<li><a href="/category/article/16" title="">{{ trans('front/menu.advertise')}} </a></li>
							</ul>
							<!-- Submenu End -->  
						</li> 
						</ul>
						<!-- Menu End --> 
						</div>  
					</nav>
				</div>
			</div>
		</div>
		<!--menubar finish-->
		<!--Submenu -->
		<div class="row">
			<div class="col-md-12">
				<div class="sub-menu">
					<nav class="navbar-2" role="navigation">
						<div class="navbar-inner">
							<!-- Menu -->
							<ul class="nav navbar-nav " id="nav">
							<li><a href="#" title="">LISTS</a></li>
							<li><a href="/category/article/8" title="">{{ trans('front/menu.museum')}} </a></li>      
							<li><a href="/category/article/9" title="">{{ trans('front/menu.lunch')}} </a></li>           
							<li><a href="/category/article/10" title="">{{ trans('front/menu.activities')}} </a></li> 
							<li><a href="/category/article/11" title="">{{ trans('front/menu.brunch')}} </a></li>    
							<li><a href="/category/article/12" title="">{{ trans('front/menu.weekend')}} </a></li>
							<li><a href="/category/article/13" title="">{{ trans('front/menu.children')}} </a></li> 
							<li><a href="/category/article/14" title="" class="last">{{ trans('front/menu.kickoff')}} </a></li> 
							</ul>
							<!-- Menu End --> 
						</div>  
					</nav>
				</div>
			</div>
		</div>
		<!-- Finish sub menu -->
