<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{url ('user.png')}}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->fullname }}
                            <span class="user-level">{{ Auth::user()->role }}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <ul class="nav nav-primary">

                @if(Auth::user()->role === 'ADMIN')
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fa fa-th-list"></i>
                        <p>Daftar Merchant</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/admin/artikel/kelola-artikel">
                                    <span class="sub-item">Kelola Merchant</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts2">
                        <i class="fa fa-th-list"></i>
                        <p>Daftar Customer</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts2">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/admin/artikel/kelola-artikel">
                                    <span class="sub-item">Kelola Customer</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Merchant --}}
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts3">
                        <i class="fa fa-th-list"></i>
                        <p>Profil</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts3">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/admin/artikel/kelola-artikel">
                                    <span class="sub-item">Edit Profil</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts4">
                        <i class="fa fa-th-list"></i>
                        <p>Menu Makanan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts4">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/admin/artikel/kelola-artikel">
                                    <span class="sub-item">Kelola Menu</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts5">
                        <i class="fa fa-th-list"></i>
                        <p>Daftar Order</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts5">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/admin/artikel/kelola-artikel">
                                    <span class="sub-item">Kelola Order</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                <li class="mx-4 mt-2">
                    <a href="#" class="btn btn-primary btn-block" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">
                    <span class="btn-label mr-2"> 
                        <i class="fa fa-sign-out">
                    </i> 
                    </span>
                    Logout
                    </a> 
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none; ">
                    @csrf
                </form>	
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->