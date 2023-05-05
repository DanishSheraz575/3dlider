<!-- Navbar (Header) Starts-->
<nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="d-lg-none navbar-right navbar-collapse-toggle">
                <a aria-controls="navbarSupportedContent" href="javascript:;" class="open-navbar-container black">
                    <i class="ft-more-vertical"></i>
                </a>
            </span>
        </div>
        <div class="text-center">
            <h4>{{ $page_title }}</h4>
        </div>
        <div class="navbar-container">
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item mr-2 d-none d-lg-block">
                        <a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen">
                            <i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                            <p class="d-none">fullscreen</p>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                            <i class="ft-flag font-medium-3 blue-grey darken-4"></i>
                            <span class="selected-language d-none"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right text-left">
                            <a href="javascript:;" class="dropdown-item py-1">
                                <img src="{{asset('public/app-assets/img/flags/us.png')}}" class="langimg" alt=""/>
                                <span> English</span>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <img src="{{asset('public/app-assets/img/flags/de.png')}}" class="langimg" alt=""/>
                                <span> French</span>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                            <i class="ft-user font-medium-3 blue-grey darken-4"></i>
                            <p class="d-none">User Settings</p></a>
                        <div aria-labelledby="dropdownBasic3" class="dropdown-menu text-left dropdown-menu-right">
                            <div aria-labelledby="dropdownBasic3" class="dropdown-menu text-left dropdown-menu-right">
                                <a href="#" class="dropdown-item py-1">
                                    <i class="ft-edit mr-2"></i><span>My Profile</span>
                                </a>
                                <a href="{{route('logout')}}" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar (Header) Ends-->
