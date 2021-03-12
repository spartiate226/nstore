
@extends('mainLayout')
@section('sidebar')
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light text-center"><span style="color: #feb914;font-weight:bold;font-size:25px">NAYA</span><span style="color: white;font-weight:bold;font-size:25px">MAX</span></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->nom." ".Auth::user()->prenom}}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{url('dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p style="font-weight:bold">
                                Tableau de bord
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p style="font-weight:bold">
                                Produits
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('dashboard/produitlist')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p style="font-weight:bold">Mes produits</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('dashboard/categorielist')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p style="font-weight:bold">Categories</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('dashboard/livraison')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p style="font-weight:bold">commandes</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('dashboard/user')}}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p style="font-weight:bold">
                                Utlisateurs
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            {{--              <li class="nav-item">--}}
                            {{--                <a href="{{url('dashboard/profile')}}" class="nav-link">--}}
                            {{--                  <i class="far fa-circle nav-icon"></i>--}}
                            {{--                  <p>Mon compte</p>--}}
                            {{--                </a>--}}
                            {{--              </li>--}}
                            {{--                <li class="nav-item">--}}
                            {{--                    <a href="{{url('dashboard/add_user')}}" class="nav-link">--}}
                            {{--                        <i class="far fa-circle nav-icon"></i>--}}
                            {{--                        <p>Ajouter un membres</p>--}}
                            {{--                    </a>--}}
                            {{--                </li>--}}
                            <li class="nav-item">
                                <a href="{{url('dashboard/user')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Membres</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('dashboard/')}}" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Apparences
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('dashboard/market')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Theme market</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('dashboard/upload_theme')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Uploader un theme</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('dashboard/customizer')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pesonnalisation</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('dashboard/phototeque')}}" class="nav-link">
                            <i class="nav-icon fa fa-film"></i>
                            <p>
                                Media
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin/logout')}}" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Deconnexion
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endsection
@section('script')
<script src="{{asset('custom/phototeque.js')}}"></script>
@endsection
