<div class="navbar-header">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
</div>

<div id="main-menu" class="main-menu collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li>
            <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
        </li>
        <h3 class="menu-title">News</h3><!-- /.menu-title -->
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>New</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-puzzle-piece"></i><a href="{{asset("list-new")}}">List</a></li>
                <li><i class="fa fa-id-badge"></i><a href="{{asset("add-new")}}">Add</a></li>
                
            </ul>
        </li>
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>User</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-puzzle-piece"></i><a href="{{asset("list-user")}}">List</a></li>
                <li><i class="fa fa-id-badge"></i><a href="{{route("add-user")}}">Add</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Category</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-puzzle-piece"></i><a href="{{asset("list-category")}}">List</a></li>
                <li><i class="fa fa-id-badge"></i><a href="{{asset("add-category")}}">Add</a></li>
            </ul>
        </li>

        {{-- <h3 class="menu-title">Icons</h3><!-- /.menu-title --> --}}

        {{-- <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
            </ul>
        </li>
        <li>
            <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
        </li>
        <li class="menu-item-has-children active dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
            </ul>
        </li>

        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
            </ul>
        </li>
        <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
            </ul>
        </li> --}}
    </ul>
</div>