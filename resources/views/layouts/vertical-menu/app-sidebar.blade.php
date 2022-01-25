<!--APP-SIDEBAR-->

<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

                <aside class="app-sidebar">

                    <div class="side-header">

                        <a class="header-brand1" href="{{ url('/' . $page='index') }}">

                            <img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">

                            <img src="{{URL::asset('assets/images/brand/logo-1.png')}}"  class="header-brand-img toggle-logo" alt="logo">

                            <img src="{{URL::asset('assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">

                            <img src="{{URL::asset('assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">

                        </a><!-- LOGO -->

                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->

                    </div>

                    <div class="app-sidebar__user">

                        <div class="dropdown user-pro-body text-center">

                            <div class="user-pic">

                                <img src="{{URL::asset('assets/images/users/10.jpg')}}" alt="user-img" class="avatar-xl rounded-circle">

                            </div>

                            <div class="user-info">

                                <h6 class=" mb-0 text-dark">{{ Auth::user()->roles->first()->title}}</h6>

                                <span class="text-muted app-sidebar__user-name text-sm">Administrator</span>

                            </div>

                        </div>

                    </div>

                    <div class="sidebar-navs">

                        <ul class="nav  nav-pills-circle">

                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Settings">

                                <a class="nav-link text-center m-2">

                                    <i class="fe fe-settings"></i>

                                </a>

                            </li>

                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Chat">

                                <a class="nav-link text-center m-2">

                                    <i class="fe fe-mail"></i>

                                </a>

                            </li>

                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Followers">

                                <a class="nav-link text-center m-2">

                                    <i class="fe fe-user"></i>

                                </a>

                            </li>



           

                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">

                                <a href="{{ route('logout') }}" class="nav-link text-center m-2"  onclick="event.preventDefault();

                                                     document.getElementById('logout-form').submit();">

                                    <i class="fe fe-power"></i>

                                </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                                        @csrf

                                    </form>

                            </li>

                        </ul>

                    </div>

                    <ul class="side-menu mt-3" >

                        

                        <li class="slide">

                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-home"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>

                            <ul class="slide-menu">

                                <li><a href="{{ url('/' . $page='home') }}" class="slide-item">Sales</a></li>

                                <li class="sub-slide">

                                    <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Marketing</span><i class="sub-angle fa fa-angle-right"></i></a>

                                    <ul class="sub-slide-menu">

                                        <li><a class="sub-slide-item" href="{{ route('dashboard.dashboard.index') }}">Rewards</a></li>

                                    </ul>

                                </li>

                                <li><a href="{{ url('/' . $page='index3') }}" class="slide-item">Service</a></li>

                                <li><a href="{{ url('/' . $page='index4') }}" class="slide-item">Finance</a></li>

                                <li><a href="{{ url('/' . $page='index2') }}" class="slide-item">Operation</a></li>

                                <li><a href="{{ url('/' . $page='index5') }}" class="slide-item">Support</a></li>

                                <li><a href="{{ url('/' . $page='index3') }}" class="slide-item">Delivery</a></li>

                                <li><a href="{{ url('/' . $page='index4') }}" class="slide-item">Party</a></li>

                                <li><a href="{{ url('/' . $page='index5') }}" class="slide-item">IT</a></li>

                            </ul>

                        </li>

                        @can('product_management')

                        <li class="slide">

                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-bag"></i><span class="side-menu__label">Product</span><i class="angle fa fa-angle-right"></i></a>

                            <ul class="slide-menu">

                                @can('product_access')

                                <li><a href="{{ route('dashboard.product.index') }}" class="slide-item">All Product</a></li>

                                @endcan

                                @can('category_access')

                                <li><a href="{{ route('dashboard.category.index') }}" class="slide-item">Category</a></li>

                                @endcan

                                @can('attribute_access')

                                <li><a href="{{ route('dashboard.attribute.index') }}" class="slide-item">Attribute</a></li>

                             <!--    <li><a href="{{ route('dashboard.attribute-value.index') }}" class="slide-item">Attribute Value</a></li> -->

                                @endcan

                            </ul>

                        </li>

                        @endcan

                        @can('order_access')

                      <!--   <li>

                            <a class="side-menu__item" href="{{ route('dashboard.order.index') }}"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Order</span></a>

                        </li> -->

                         <li class="slide">

                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Order</span><i class="angle fa fa-angle-right"></i></a>

                            <ul class="slide-menu">

                                <li><a href="{{ route('dashboard.order.index') }}" class="slide-item">Ordered Items</a></li>

                                <li><a href="{{ route('dashboard.delivered-orders') }}" class="slide-item">Delivery Items</a></li>

                                

                            </ul>

                        </li>

                         @endcan

                        @can('page_access')

                        <li class="slide">

                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-book-open"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>

                            <ul class="slide-menu">

                                <li><a href="{{ route('dashboard.homepage.edit',1) }}" class="slide-item">Home</a></li>

                                <li><a href="{{ route('dashboard.pages.index') }}" class="slide-item">Page List</a></li>

                                <li><a href="{{ route('dashboard.pages.create') }}" class="slide-item">Add New </a></li>

                            </ul>

                        </li>

                        @endcan

                        @can('coupon_access')

                         <li>

                            <a class="side-menu__item" href="{{ route('dashboard.coupon.index') }}"><i class="side-menu__icon icon icon-trophy"></i><span class="side-menu__label">Coupon</span></a>

                        </li>

                        @endcan

                        @can('testimonal_access')

                        <li>

                            <a class="side-menu__item" href="{{ route('dashboard.testimonials.index') }}"><i class="side-menu__icon fe fe-message-circle"></i><span class="side-menu__label">Testimonal</span></a>

                        </li>
                        @endcan
                      
                         @can('menu_access')
                         <li>

                            <a class="side-menu__item" href="{{ route('dashboard.menus.index') }}"><i class="side-menu__icon icon icon-list"></i><span class="side-menu__label">Menus</span></a>

                        </li>
                         @endcan
                        @can('log_access')

                          <li>

                            <a class="side-menu__item" href="{{ route('dashboard.logActivity') }}"><i class="side-menu__icon icon icon-clock"></i><span class="side-menu__label"> Users Logs</span></a>

                        </li>

                        @endcan

                        @can('report_access')

                        <li>

                            <a class="side-menu__item" href="#"><i class="side-menu__icon fe fe-clipboard"></i><span class="side-menu__label">Reports</span></a>

                        </li>

                        @endcan

                          @can('widgets_access')

                        <li>

                            <a class="side-menu__item" href="#"><i class="side-menu__icon ti-package"></i><span class="side-menu__label">Widgets</span></a>

                        </li>

                        @endcan

                          @can('gift_card_access')
                          <li class="slide">

                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon icon icon-present"></i><span class="side-menu__label">Gift Card</span><i class="angle fa fa-angle-right"></i></a>

                            <ul class="slide-menu">

                                <li><a href="{{ route('dashboard.gift-card.create') }}" class="slide-item">Add New </a></li>

                                <li><a href="{{ route('dashboard.gift-card.index') }}" class="slide-item">Gift Card List</a></li>

                                <li><a href="{{ route('dashboard.card-deatils') }}" class="slide-item">Details of Gift Card</a></li>

                            </ul>

                        </li>
                         @endcan

                          @can('reviews_access')

                        <li>

                            <a class="side-menu__item" href="{{ route('dashboard.review.index') }}"><i class="side-menu__icon icon icon-star"></i><span class="side-menu__label">Reviews</span></a>

                        </li>

                         @endcan

                         @can('vuser_access')

                         {{--<li>

                            <a class="side-menu__item" href="{{ route('dashboard.user-index') }}"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">User</span></a>

                        </li>--}}

                         @endcan

                         @can('store_settings')
                            <li class="slide">

                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon icon icon-people"></i><span class="side-menu__label">Vendors</span><i class="angle fa fa-angle-right"></i></a>

                            <ul class="slide-menu">
                            @can('list_vendor')
                                <li><a href="{{ route('dashboard.vendorsettings.index') }}" class="slide-item">Vendor List</a></li>
                            @endcan

                              {{-- <li><a href="#" class="slide-item">Vendor Category</a></li>--}}
                              @can('general_setting')
                                <li class="sub-slide">
                                    <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Setting</span><i class="sub-angle fa fa-angle-right"></i></a>
                                    <ul class="sub-slide-menu">
                                        <li><a class="sub-slide-item" href="{{ route('dashboard.general-setting.index') }}">General setting</a></li>
                                    </ul>
                                </li>
                                @endcan
                                    <li><a href="{{ route('dashboard.withdrow.index') }}" class="slide-item">Withdrawal Request</a></li>
                                @if(Auth::user()->roles->first()->title == "Vendor")
                                    <li><a href="{{ route('dashboard.withdrow.create') }}" class="slide-item">Withdraw</a></li>
                                @endif

                            </ul>

                        </li>
                         @endcan
                        @can('vendor_settings')
                        <li>

                            <a class="side-menu__item" href="{{ route('dashboard.vendor-setting') }}"><i class="side-menu__icon icon icon-settings"></i><span class="side-menu__label">Settings</span></a>

                        </li>
                         @endcan


                         @can('user_management_access')

                           <li class="slide">

                                <a class="side-menu__item" data-toggle="slide" href="#"> <i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">Users Management</span><i class="angle fa fa-angle-right"></i></a>

                                <ul class="slide-menu">

                                    @can('role_access')

                                    <li><a href="{{ route('dashboard.roles.index') }}" class="slide-item">User Roles</a></li>

                                     @endcan

                                     @can('permission_access')

                                    <li><a href="{{ route('dashboard.permissions.index') }}" class="slide-item">Role Permissions</a></li>

                                     @endcan

                                     @can('user_access')

                                    <li><a href="{{ route('dashboard.users.index') }}" class="slide-item">User</a></li>

                                     @endcan

                                </ul>

                           </li>

                         @endcan

                       @can('web_settings')

                          <li class="slide">

                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label"> Web Settings</span><i class="angle fa fa-angle-right"></i></a>

                            <ul class="slide-menu">

                               
                               
                                <li><a href="{{ route('dashboard.mail.index') }}" class="slide-item">Mail Template</a></li>

                                <li><a href="{{ route('dashboard.tax.index') }}" class="slide-item">Tax Settings</a></li>

                                <li><a href="{{ route('dashboard.settings.index') }}" class="slide-item">Commision</a></li>

                                <li><a href="{{ route('dashboard.settings.index') }}" class="slide-item">Settings</a></li>

                            </ul>

                        </li>

                        @endcan 

                      

                        </li>

                           

                    </ul>

                </aside>

<!--/APP-SIDEBAR-->

