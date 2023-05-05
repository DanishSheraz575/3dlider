<!-- main menu-->
<!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
<div data-active-color="white" data-background-color="man-of-steel"
     data-image="{{asset('public/app-assets/img/sidebar-bg/01.png')}}" class="app-sidebar">
    <!-- main menu header-->
    <!-- Sidebar Header starts-->
    <div class="sidebar-header">
        <div class="logo clearfix">
            <a href="{{ route('dashboard') }}" class="logo-text float-left">
                <div class="logo-img"><img src="{{asset('public/app-assets/img/rcm_logo.png')}}"/></div>
                <span class="text align-middle text-white">RCM-CRM</span>
            </a>
            <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block">
                <i data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a>
            <a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none">
                <i class="ft-x"></i></a>
        </div>
    </div>
    <!-- Sidebar Header Ends-->
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="sidebar-content">
        <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true"
                class="navigation navigation-main">
                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a href="{{route('dashboard')}}"><i
                            class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
                </li>
                <li class="nav-item {{ (request()->is('company')) ? 'active' : '' }}"><a href="{{route('company')}}">
                        <i class="fa fa-building-o" aria-hidden="true"></i>
                        <span data-i18n="" class="menu-title">Company</span></a>
                </li>
                <li class="nav-item {{ (request()->is('staff')) ? 'active' : '' }}"><a href="{{route('staff')}}">
                        <i class="ft-users"></i><span data-i18n="" class="menu-title">Staff Management</span></a>
                </li>
                {{--<li class="nav-item {{ (request()->is('customer_list')) ? 'active' : '' }}"><a href="{{route('customer_list')}}"><i class="icon-users"></i><span data-i18n="" class="menu-title">Customers</span><span class="tag badge badge-pill badge-danger float-right mr-1 mt-1" id="customer_unread_count"></span></a>
                </li>
                <li class="has-sub nav-item {{ (request()->is('inbox')) ? 'nav-collapse-open active' : '' }}
                {{ (request()->is('lead_inbox')) ? 'nav-collapse-open active' : '' }}
                {{ (request()->is('closed_lead')) ? 'nav-collapse-open active' : '' }}"><a href="#"><i class="ft-mail"></i><span data-i18n="" class="menu-title">Chat</span><span class="tag badge badge-pill badge-danger float-right mr-1 mt-1" id="un_read_chat_count"></span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('inbox')) ? 'active' : '' }}"><a href="{{route('inbox')}}" class="menu-item"><i class="ft-inbox"></i>Inbox<span class="tag badge badge-pill badge-danger float-right mr-1 mt-1" id="sms_count">0</span></a>
                        </li>
                        <li class="{{ (request()->is('lead_inbox')) ? 'active' : '' }}"><a href="{{route('lead_inbox')}}" class="menu-item"><i class="ft-check-square"></i>Leads<span class="tag badge badge-pill badge-danger float-right mr-1 mt-1" id="lead_sms_count">0</span></a>
                        </li>
                        <li class="{{ (request()->is('closed_lead')) ? 'active' : '' }}"><a href="{{route('closed_lead')}}" class="menu-item"><i class="ft-cloud-off"></i>Closed Leads<span class="tag badge badge-pill badge-danger float-right mr-1 mt-1" id="archived_sms_count">0</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ (request()->is('customer_report')) ? 'active' : '' }}"><a href="{{route('customer_report')}}"><i class="icon-users"></i><span data-i18n="" class="menu-title">Customer Report</span></a>
                </li>
                <li class="nav-item {{ (request()->is('do_not_text')) ? 'active' : '' }}"><a href="{{route('do_not_text')}}"><i class="ft-alert-triangle"></i><span data-i18n="" class="menu-title">DNT List</span></a>
                </li>
                <li class="has-sub nav-item"><a href="#"><i class="icon-settings"></i><span data-i18n="" class="menu-title">Settings</span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('role')) ? 'active' : '' }}"><a href="{{route('role')}}" class="menu-item"><i class="ft-bar-chart"></i>Roles</a>
                        </li>
                        <li class="{{ (request()->is('users')) ? 'active' : '' }}"><a href="{{route('users')}}" class="menu-item"><i class="ft-user"></i>User</a>
                        </li>
                        <li class="{{ (request()->is('insurance_list')) ? 'active' : '' }}"><a href="{{route('insurance_list')}}" class="menu-item"><i class="icon-diamond"></i>Insurances</a>
                        </li>
                    </ul>
                </li>--}}
            </ul>
        </div>
    </div>
    <!-- main menu content-->
    <div class="sidebar-background"></div>
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
<!-- / main menu-->
