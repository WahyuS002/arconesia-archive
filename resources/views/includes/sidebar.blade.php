<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="mdi mdi-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">
            
            <a href="index.html" class="logo"><img src="{{ asset('zinzer/assets/images/logo_dark.png') }}" height="20" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">
        
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li class="{{ request()->is('dashboard') ? ' nav-active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span> Dashboard <span class="badge badge-success badge-pill float-right">3</span></span>
                    </a>
                </li>               

                <li class="{{ request()->is('post') ? ' nav-active' : '' }}">
                    <a href="{{ route('post') }}" class="waves-effect"><i class="dripicons-calendar"></i><span> Post </span></a>
                </li>                

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span> Tables </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="tables-basic.html">Basic Tables</a></li>                        
                    </ul>
                </li>                                

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->