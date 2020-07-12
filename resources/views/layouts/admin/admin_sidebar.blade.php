<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('asset/images/logo/logo.png') }}" alt="AdminLTE Logo"
             class="brand-image  elevation-5"
             style="max-height: 51px; margin-top: 6px;">
        <span class="text-left brand-text font-weight-light">United <br>Insurance</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('images/admin_images/small/'.Auth::guard('admin')->user()->image)}}"
                     class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ucwords(Auth::guard('admin')->user()->name)}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="{{url('/admin/dashboard')}}"
                       class="nav-link {{ Route::currentRouteNamed('dashboard.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{ Request::path() === 'admin/bod' ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            About Us
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('about.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('about.index') ? 'active' : '' }}">
                                <i class="far fa-id-card nav-icon"></i>
                                <p>Company Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('bod.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('bod.index') ? 'active' : '' }}">
                                <i class="fas fa-sitemap nav-icon"></i>
                                <p>Board of Directors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('team.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('team.index') ? 'active' : '' }}">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Team Members</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('branches.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('branches.index') ? 'active' : '' }}">
                                <i class="fas fa-landmark nav-icon"></i>
                                <p>Branch List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('agents.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('agents.index') ? 'active' : '' }}">
                                <i class="fas fa-user-friends nav-icon"></i>
                                <p>Agents</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('surveyors.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('surveyors.index') ? 'active' : '' }}">
                                <i class="fas fa-universal-access nav-icon"></i>
                                <p>Surveyors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('citizens.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('citizens.index') ? 'active' : '' }}">
                                <i class="fas fa-balance-scale nav-icon"></i>
                                <p>Citizen Charters</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('faqs.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('faqs.index') ? 'active' : '' }}">
                                <i class="fas fa-book-reader nav-icon"></i>
                                <p>FAQs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('infos.create')}}"
                               class="nav-link {{ Route::currentRouteNamed('infos.create') ? 'active' : '' }}">
                                <i class="far fa-id-card nav-icon"></i>
                                <p>Information</p>
                            </a>
                        </li>
                    </ul>
                </li>
{{--                @if(Session::get('adminDetails')['type']=="Admin")--}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>
                                Products
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('products.index')}}"
                                   class="nav-link {{ Route::currentRouteNamed('products.index') ? 'active' : '' }}">
                                    {{--                                <i class="fas fa-sitemap nav-icon"></i>--}}
                                    <p>Product Details</p>
                                </a>
                            </li>
                        </ul>
                    </li>
{{--                @endif--}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Financial Statement
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('capital.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('capital.index') ? 'active' : '' }}">
                                <i class="far fa-id-card nav-icon"></i>
                                <p>Capital Structure</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('premium.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('premium.index') ? 'active' : '' }}">
                                <i class="fas fa-sitemap nav-icon"></i>
                                <p>Premium Structure</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('investment.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('investment.index') ? 'active' : '' }}">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Investment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('reserve.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('reserve.index') ? 'active' : '' }}">
                                <i class="fas fa-trophy nav-icon"></i>
                                <p>Reserves</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('quarter.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('quarter.index') ? 'active' : '' }}">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Quarterly Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('financial.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('financial.index') ? 'active' : '' }}">
                                <i class="fas fa-landmark nav-icon"></i>
                                <p>Financial Report</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('reinsurer.index')}}"
                       class="nav-link {{ Route::currentRouteNamed('reinsurer.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Re-insurers
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview ">
                    <a href="{{route('quote.index')}}"
                       class="nav-link {{ Route::currentRouteNamed('quote.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Quotes
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview ">
                    <a href="{{route('makeClaim.index')}}"
                       class="nav-link {{ Route::currentRouteNamed('makeClaim.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Make Claim
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('popups.index')}}"
                       class="nav-link {{ Route::currentRouteNamed('popups.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Pop-Up
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('contacts.contact')}}"
                       class="nav-link {{ Route::currentRouteNamed('contacts.contact') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Contact Us
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('galleries.index')}}"
                       class="nav-link {{ Route::currentRouteNamed('galleries.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Downloads
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('agm.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('agm.index') ? 'active' : '' }} ">
                                <i class="fas fa-user nav-icon"></i>
                                <p>AGM Minute</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('kyc.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('kyc.index') ? 'active' : '' }}">
                                <i class="fas fa-user-tag nav-icon"></i>
                                <p>KYC Forms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('claim.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('claim.index') ? 'active' : '' }}">
                                <i class="fas fa-user-tag nav-icon"></i>
                                <p>Claim Forms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('rightshare.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('rightshare.index') ? 'active' : '' }}">
                                <i class="fas fa-user-tag nav-icon"></i>
                                <p>Right Share Forms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('policyForm.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('policyForm.index') ? 'active' : '' }}">
                                <i class="fas fa-user-tag nav-icon"></i>
                                <p>Policy Proposal Forms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('surveyor-application.index')}}" class="nav-link">
                                <i class="fas fa-user-tag nav-icon"></i>
                                <p>Surveyor Listing Applicatio Forms</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            News and Notices
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('news.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('news.index') ? 'active' : '' }}">
                                {{--                                <i class="fas fa-sitemap nav-icon"></i>--}}
                                <p>News</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview ">
                    <a href="#"
                       class="nav-link {{ Route::currentRouteNamed('users.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            User Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('users.index') ? 'active' : '' }}">
                                {{--                                <i class="fas fa-sitemap nav-icon"></i>--}}
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('roles.index')}}"
                               class="nav-link {{ Route::currentRouteNamed('roles.index') ? 'active' : '' }}">
                                {{--                                <i class="fas fa-sitemap nav-icon"></i>--}}
                                <p>Roles</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('update.password')}}"
                               class="nav-link {{ Route::currentRouteNamed('update.password') ? 'active' : '' }}">
                                {{--                                <i class="fas fa-sitemap nav-icon"></i>--}}
                                <p>Update Admin Password</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
