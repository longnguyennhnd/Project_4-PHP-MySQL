@extends('admin_layout')
@section('admin_content')
    <header class="content__title">
        <h1>Chào mừng bạn đến với trang quản trị</h1>

        <div class="actions">
            <a href="" class="actions__item zmdi zmdi-trending-up"></a>
            <a href="" class="actions__item zmdi zmdi-check-all"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="" class="dropdown-item">Refresh</a>
                    <a href="" class="dropdown-item">Manage Widgets</a>
                    <a href="" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
    </header>


    <div data-columns>
        

        <div class="card widget-visitors">
            <div class="card-body">
                <h4 class="card-title">Thời gian thực khách hàng online</h4>
                <h6 class="card-subtitle">Thời gian</h6>

                <div class="widget-visitors__stats">
                    <div>
                        <strong>23</strong>
                        <small>Khách hàng ghé thăm trong 24h qua</small>
                    </div>
                    <div>
                        <strong>1</strong>
                        <small>Khách hàng ghé thăm trong 30' qua</small>
                    </div>
                </div>

                <div class="widget-visitors__map map-visitors"></div>
            </div>

            <div class="listview listview--striped">
                <div class="listview__item">
                    <div class="listview__content">
                        <p>Chủ nhật, tháng 6, 21:44:02 (2 Mins 56 Seconds)</p>
                        <div class="listview__attrs">
                            <span><img class="widget-visitors__country" src="backend/demo/img/flags/United_States_of_America.png" alt=""> United States</span>
                            <span>Firefox</span>
                            <span>Mac OSX</span>
                        </div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="listview__content">
                        <p>Chủ nhật, tháng 6, 21:44:02 (2 Mins 56 Seconds)</p>

                        <div class="listview__attrs">
                            <span><img class="widget-visitors__country" src="backend/demo/img/flags/Australia.png" alt=""> Australia</span>
                            <span>Chrome</span>
                            <span>Android</span>
                        </div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="listview__content">
                        <p>Chủ nhật, tháng 6, 21:44:02 (2 Mins 56 Seconds)</p>

                        <div class="listview__attrs">
                            <span><img class="widget-visitors__country" src="backend/demo/img/flags/Brazil.png" alt=""> Brazil</span>
                            <span>Edge</span>
                            <span>Windows</span>
                        </div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="listview__content">
                        <p>Chủ nhật, tháng 6, 21:44:02 (2 Mins 56 Seconds)</p>

                        <div class="listview__attrs">
                            <span><img class="widget-visitors__country" src="backend/demo/img/flags/South_Korea.png" alt=""> South Korea</span>
                            <span>Chrome</span>
                            <span>Android</span>
                        </div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="listview__content">
                        <p>Chủ nhật, tháng 6, 21:44:02 (2 Mins 56 Seconds)</p>

                        <div class="listview__attrs">
                            <span><img class="widget-visitors__country" src="backend/demo/img/flags/Japan.png" alt=""> Japan</span>
                            <span>Chrome</span>
                            <span>Windows</span>
                        </div>
                    </div>
                </div>

                <div class="p-2"></div>
            </div>
        </div>

        <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sales Statistics</h4>
                    <h6 class="card-subtitle">Vestibulum purus quam scelerisque, mollis nonummy metus</h6>

                    <div class="flot-chart flot-curved-line"></div>
                    <div class="flot-chart-legends flot-chart-legends--curved"></div>
                </div>
            </div>

        <div class="card">
            <img class="card-img-top" src="demo/img/widgets/note.png" alt="">
            <div class="card-body">
                <h4 class="card-title">Pellentesque Ligula Fringilla</h4>
                <h6 class="card-subtitle">by Malinda Hollaway on 19th June 2015 at 09:10 AM</h6>

                <p>Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra.</p>
                <a href="" class="view-more text-left">View Article...</a>
            </div>
        </div>

        <div class="card widget-calendar">
            <div class="widget-calendar__header">
                <div class="widget-calendar__year"></div>
                <div class="widget-calendar__day"></div>

                <div class="actions actions--inverse">
                    <a href="calendar.html" class="actions__item"><i class="zmdi zmdi-refresh-alt"></i></a>
                    <a href="calendar.html" class="actions__item"><i class="zmdi zmdi-plus"></i></a>
                </div>
            </div>

            <div class="widget-calendar__body"></div>
        </div>

        <div class="card card--inverse widget-past-days">
            <div class="card-body">
                <h4 class="card-title">For the past 30 days</h4>
                <h6 class="card-subtitle">Pellentesque ornare sem lacinia quam</h6>
            </div>

            <div class="widget-past-days__main">
                <div class="flot-chart flot-chart--sm flot-past-days"></div>
            </div>

            <div class="listview listview--inverse listview--striped">
                <div class="listview__item">
                    <div class="widget-past-days__info">
                        <small>Page Views</small>
                        <h3>47,896,536</h3>
                    </div>

                    <div class="widget-past-days__chart hidden-sm">
                        <div class="sparkline-bar-stats">6,9,5,6,3,7,5,4,6,5,6,4,2,5,8,2,6,9</div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="widget-past-days__info">
                        <small>Site Visitors</small>
                        <h3>24,456,799</h3>
                    </div>

                    <div class="widget-past-days__chart hidden-sm">
                        <div class="sparkline-bar-stats">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="widget-past-days__info">
                        <small>Total Clicks</small>
                        <h3>13,965</h3>
                    </div>

                    <div class="widget-past-days__chart hidden-sm">
                        <div class="sparkline-bar-stats">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="widget-past-days__info">
                        <small>Total Returns</small>
                        <h3>198</h3>
                    </div>

                    <div class="widget-past-days__chart hidden-sm">
                        <div class="sparkline-bar-stats">3,9,1,3,5,6,7,6,8,2,5,2,7,5,6,7,6,8</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card--inverse widget-pie">
            <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                <div class="easy-pie-chart" data-percent="50" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                    <span class="easy-pie-chart__value">92</span>
                </div>
                <div class="widget-pie__title">Email<br> Scheduled</div>
            </div>

            <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                <div class="easy-pie-chart" data-percent="11" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                    <span class="easy-pie-chart__value">11</span>
                </div>
                <div class="widget-pie__title">Email<br> Bounced</div>
            </div>

            <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                <div class="easy-pie-chart" data-percent="52" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                    <span class="easy-pie-chart__value">52</span>
                </div>
                <div class="widget-pie__title">Email<br> Opened</div>
            </div>

            <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                <div class="easy-pie-chart" data-percent="44" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                    <span class="easy-pie-chart__value">44</span>
                </div>
                <div class="widget-pie__title">Storage<br>Remaining</div>
            </div>

            <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                <div class="easy-pie-chart" data-percent="78" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                    <span class="easy-pie-chart__value">78</span>
                </div>
                <div class="widget-pie__title">Web Page<br> Views</div>
            </div>

            <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                <div class="easy-pie-chart" data-percent="32" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                    <span class="easy-pie-chart__value">32</span>
                </div>
                <div class="widget-pie__title">Server<br> Processing</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recent Posts</h4>
                <h6 class="card-subtitle">Venenatis portauam Inceptos ameteiam</h6>
            </div>

            <div class="listview listview--hover">
                <a class="listview__item">
                    <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                    <div class="listview__content">
                        <div class="listview__heading">Jeannette Lawson</div>
                        <p>Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</p>
                    </div>
                </a>

                <a class="listview__item">
                    <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                    <div class="listview__content">
                        <div class="listview__heading">David Villa Jacobs</div>
                        <p>Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</p>
                    </div>
                </a>

                <a class="listview__item">
                    <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                    <div class="listview__content">
                        <div class="listview__heading">Candice Barnes</div>
                        <p>Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur</p>
                    </div>
                </a>

                <a class="listview__item">
                    <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                    <div class="listview__content">
                        <div class="listview__heading">Darla Mckinney</div>
                        <p>Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</p>
                    </div>
                </a>

                <a class="listview__item">
                    <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                    <div class="listview__content">
                        <div class="listview__heading">Rudolph Perez</div>
                        <p>Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</p>
                    </div>
                </a>

                <a href="" class="view-more">View All Posts</a>
            </div>
        </div>

        <div class="card todo">
            <div class="card-body">
                <h4 class="card-title">Todo lists</h4>
                <h6 class="card-subtitle">Venenatis portauam Inceptos ameteiam</h6>
            </div>

            <div class="listview">
                <div class="listview__item">
                    <div class="checkbox checkbox--char todo__item">
                        <input type="checkbox" id="todo-1">
                        <label for="todo-1" class="bg-red checkbox__char">F</label>

                        <div class="listview__content">
                            <div class="listview__heading">Fivamus sagittis lacus vel augue laoreet rutrum faucibus dolor</div>
                            <p>Today at 8.30 AM</p>
                        </div>

                        <div class="listview__attrs">
                            <span>#Messages</span>
                            <span>!!!</span>
                        </div>
                    </div>

                    <div class="actions listview__actions">
                        <div class="dropdown actions__item">
                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="">Mark as completed</a>
                                <a class="dropdown-item" href="">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="checkbox checkbox--char todo__item">
                        <input type="checkbox" id="todo-2">
                        <label class="checkbox__char bg-light-blue" for="todo-2">N</label>

                        <div class="listview__content">
                            <div class="listview__heading">Nullam id dolor id nibh ultricies vehicula ut id elit</div>
                            <p>Today at 12.30 PM</p>
                        </div>

                        <div class="listview__attrs">
                            <span>#Clients</span>
                            <span>!!</span>
                        </div>
                    </div>

                    <div class="actions listview__actions">
                        <div class="dropdown actions__item">
                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="">Mark as completed</a>
                                <a class="dropdown-item" href="">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="checkbox checkbox--char todo__item">
                        <input  type="checkbox" id="todo-3">
                        <label class="checkbox__char bg-amber" for="todo-3">C</label>

                        <div class="listview__content">
                            <div class="listview__heading">Cras mattis consectetur purus sit amet fermentum</div>
                            <p>Tomorrow at 10.30 AM</p>
                        </div>

                        <div class="listview__attrs">
                            <span>#Clients</span>
                            <span>!!</span>
                        </div>
                    </div>

                    <div class="actions listview__actions">
                        <div class="dropdown actions__item">
                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="">Mark as completed</a>
                                <a class="dropdown-item" href="">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="checkbox checkbox--char todo__item">
                        <input  type="checkbox" id="todo-4">
                        <label class="checkbox__char bg-lime" for="todo-4">I</label>

                        <div class="listview__content">
                            <div class="listview__heading">Integer posuere erat a ante venenatis dapibus posuere velit aliquet</div>
                            <small>05/08/2017 at 08.00 AM</small>
                        </div>

                        <div class="listview__attrs">
                            <span>#Server</span>
                            <span>!</span>
                        </div>
                    </div>

                    <div class="actions listview__actions">
                        <div class="dropdown actions__item">
                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="">Mark as completed</a>
                                <a class="dropdown-item" href="">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="checkbox checkbox--char todo__item">
                        <input  type="checkbox" id="todo-5">
                        <label class="checkbox__char bg-purple" for="todo-5">P</label>

                        <div class="listview__content">
                            <div class="listview__heading">Praesent commodo cursus magnavel scelerisque nisl consectetur</div>
                            <small>10/08/2016 at 04.00 AM</small>
                        </div>

                        <div class="listview__attrs">
                            <span>#Server</span>
                            <span>!!!</span>
                        </div>
                    </div>

                    <div class="actions listview__actions">
                        <div class="dropdown actions__item">
                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="">Mark as completed</a>
                                <a class="dropdown-item" href="">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="todo-lists.html" class="view-more">View More</a>
            </div>
        </div>

        <div class="card widget-contacts">
            <div class="card-body">
                <h4 class="card-title">Contact Information</h4>
                <h6 class="card-subtitle">Fusce eget dolor id justo luctus commodo vel pharetra nisi</h6>

                <ul class="icon-list">
                    <li><i class="zmdi zmdi-phone"></i> 00971123456789</li>
                    <li><i class="zmdi zmdi-email"></i> malinda.h@gmail.com</li>
                    <li><i class="zmdi zmdi-facebook-box"></i> malinda.hollaway</li>
                    <li><i class="zmdi zmdi-twitter"></i> @malinda (twitter.com/malinda)</li>
                    <li><i class="zmdi zmdi-pin"></i>
                        <address>
                            44-46 Morningside Road,
                            Edinburgh,
                            Scotland
                        </address>
                    </li>
                </ul>
            </div>

            <a class="widget-contacts__map" href="">
                <img src="demo/img/widgets/map.png" alt="">
            </a>
        </div>

        <div class="card">
<div class="card-body">
<h4 class="card-title">Tree view</h4>
<h6 class="card-subtitle">Maecenas seddiam eget risusvarius blandit</h6>

<div class="treeview"></div>
</div>
</div>

        <div>
<div class="widget-time bg-light-blue">
<div class="time">
<span class="time__hours"></span>
<span class="time__min"></span>
<span class="time__sec"></span>
</div>
</div>

<div class="widget-time bg-green">
<div class="time">
<span class="time__hours"></span>
<span class="time__min"></span>
<span class="time__sec"></span>
</div>
</div>

<div class="widget-time bg-red">
<div class="time">
<span class="time__hours"></span>
<span class="time__min"></span>
<span class="time__sec"></span>
</div>
</div>

<div class="widget-time bg-amber">
<div class="time">
<span class="time__hours"></span>
<span class="time__min"></span>
<span class="time__sec"></span>
</div>
</div>

<div class="widget-time bg-teal">
<div class="time">
<span class="time__hours"></span>
<span class="time__min"></span>
<span class="time__sec"></span>
</div>
</div>
</div>

        <div>
<div class="widget-search">
<i class="zmdi zmdi-search"></i>
<input type="text" class="widget-search__input" placeholder="Search...">
</div>

<div class="widget-search widget-search--inverse bg-blue-grey">
<i class="zmdi zmdi-search"></i>
<input type="text" class="widget-search__input" placeholder="Search...">
</div>

<div class="widget-search widget-search--inverse bg-cyan">
<i class="zmdi zmdi-search"></i>
<input type="text" class="widget-search__input" placeholder="Search...">
</div>

<div class="widget-search widget-search--inverse bg-blue">
<i class="zmdi zmdi-search"></i>
<input type="text" class="widget-search__input" placeholder="Search...">
</div>

<div class="widget-search widget-search--inverse bg-purple">
<i class="zmdi zmdi-search"></i>
<input type="text" class="widget-search__input" placeholder="Search...">
</div>

<div class="widget-search widget-search--inverse bg-green">
<i class="zmdi zmdi-search"></i>
<input type="text" class="widget-search__input" placeholder="Search...">
</div>

<div class="widget-search widget-search--inverse bg-red">
<i class="zmdi zmdi-search"></i>
<input type="text" class="widget-search__input" placeholder="Search...">
</div>
</div>

        <div class="card">
<div class="card-body">
<h4 class="card-title">Categories</h4>
<h6 class="card-subtitle">Etiam porta malesuada magna mollis</h6>


</div>
</div>
    </div>
@endsection
