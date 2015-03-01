<aside class="left-side sidebar-offcanvas" style="min-height: 1051px;">
    <section class="sidebar purplebg">
        <div class="page-sidebar  sidebar-nav">
            <div class="nav_icons">
                <ul class="sidebar_threeicons">
                    <li><a href="#" class="settings">Settings</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu" id="menu">
                <li>
                    <a href="/home">
                        <i data-loop="true" data-hc="#418BCA" data-c="#418BCA" data-size="18" data-name="home" class="livicon" id="livicon-29" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; top: -0.5px;" id="canvas-for-livicon-29"><desc>Created with Raphaël 2.1.0</desc><defs/><path style="" fill="#418bca" stroke="none" d="M29.719,15.469L24,9.751V5H21V6.752L17.414,3.167L16.424000000000003,2.1769999999999996C16.19,1.9429999999999996,15.810000000000002,1.9429999999999996,15.575000000000003,2.1769999999999996L14.585000000000003,3.167L2.282,15.469C2.048,15.703,2.048,16.083,2.282,16.317999999999998L2.847,16.883999999999997C3.081,17.116999999999997,3.461,17.118,3.6959999999999997,16.883999999999997L16,4.58L28.304000000000002,16.884C28.537000000000003,17.117,28.918000000000003,17.118000000000002,29.153000000000002,16.884L29.718000000000004,16.318C29.952,16.083,29.952,15.704,29.719,15.469ZM16,6.701L6,16.701V30H12V19.6C12,19.269000000000002,12.269,19,12.6,19H19.4C19.730999999999998,19,20,19.269,20,19.6V30H26V16.701L16,6.701ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)"/><path style="" fill="#418bca" stroke="none" d="M18.4,20H13.599999999999998C13.267999999999997,20,12.999999999999998,20.269,12.999999999999998,20.6V30H19V20.6C19,20.269,18.731,20,18.4,20Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0"/></svg></i>
                        <span class="title">Dashboard</span>
                    </a>

                </li>
                <li>
                    <a href="#"><span class="title">Users</span><span class="fa arrow"></span></a>
                    <ul class="sub-menu collapse">
                        <li>
                            <a href="{{ url('/user') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Users
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/user/create') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Add New User
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><span class="title">Category</span><span class="fa arrow"></span></a>
                    <ul class="sub-menu collapse">
                        <li>
                            <a href="{{ url('/category') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/category/create') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Add New Category
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><span class="title">Articles</span><span class="fa arrow"></span></a>
                    <ul class="sub-menu collapse">
                        <li>
                            <a href="{{ url('/articles') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Article lists
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/articles/create') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Add New article
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><span class="title">Events</span><span class="fa arrow"></span></a>
                    <ul class="sub-menu collapse">
                        <li>
                            <a href="{{ url('/events') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Event lists
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/events/create') }}">
                                <i class="fa fa-angle-double-right"></i>
                                Add New event
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </section>
</aside>
