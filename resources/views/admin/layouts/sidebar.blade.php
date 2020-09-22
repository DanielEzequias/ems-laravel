
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{url('/')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Departiments
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if (isset(auth()->user()->role->permission['name']['department']['can-add']))
                                    <a class="nav-link" href="{{route('department.create')}}">Create Departiments</a>
                                    @endif
                                    @if (isset(auth()->user()->role->permission['name']['department']['can-list']))
                                    <a class="nav-link" href="{{route('department.index')}}">View Departments</a>
                                    @endif
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Roles
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    @if (isset(auth()->user()->role->permission['name']['role']['can-add']))
                                    <a class="nav-link collapsed" href="{{route('role.create')}}">Create Role </a>
                                    @endif
                                    @if (isset(auth()->user()->role->permission['name']['role']['can-list']))
                                    <a class="nav-link collapsed" href="{{route('role.index')}}" >View Rules </a>
                                    @endif
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages2">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    @if (isset(auth()->user()->role->permission['name']['user']['can-add']))
                                    <a class="nav-link collapsed" href="{{route('user.create')}}">Create User </a>
                                   @endif
                                   @if (isset(auth()->user()->role->permission['name']['user']['can-list']))
                                    <a class="nav-link collapsed" href="{{route('user.index')}}" >View Users </a>
                                    @endif
                                    @if (isset(auth()->user()->role->permission['name']['permission']['can-add']))
                                    <a class="nav-link collapsed" href="{{route('permission.create')}}">Create Permissions </a>
                                    @endif
                                    @if (isset(auth()->user()->role->permission['name']['permission']['can-list']))
                                    <a class="nav-link collapsed" href="{{route('permission.index')}}" >View Permissions </a>
                                    @endif
                                </nav>
                            </div>
                           


                          
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="false" aria-controls="collapsePages2">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Staff
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages3" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    @if (isset(auth()->user()->role->permission['name']['leave']['can-list']))
                                    <a class="nav-link collapsed" href="{{route('leave.index')}}" >View Leaves </a>
                                    @endif
                                    <a class="nav-link collapsed" href="{{route('leave.create')}}" >Create Leaves </a>
                                   
                                   
                                </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">Others</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesnotice" aria-expanded="false" aria-controls="collapsePages2">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Notice
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePagesnotice" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    @if (isset(auth()->user()->role->permission['name']['notice']['can-add']))
                                    <a class="nav-link collapsed" href="{{route('notice.create')}}">Create Notice </a>
                                   @endif
                                   @if (isset(auth()->user()->role->permission['name']['notice']['can-list']))
                                    <a class="nav-link collapsed" href="{{route('notice.index')}}" >View Noti e </a>
                                    @endif
                                   
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{auth()->user()->designation}}
                    </div>
                </nav>
            </div>