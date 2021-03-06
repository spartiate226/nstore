@extends('mainLayout')
@section('sidebar')
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Nayamax</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="{{url('1livreur/profile')}}" class="d-block">{{Auth::user()->nom." ".Auth::user()->prenom}}</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{url('nym/index')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Tableau de bord
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('nym/theme')}}" class="nav-link">
                            <i class="nav-icon fa fa-file-alt"></i>
                            <p>
                                Themes
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('nym/boutique')}}" class="nav-link">
                            <i class="nav-icon fa fa-store"></i>
                            <p>
                                Boutiques
                            </p>
                        </a>
                    </li>
                                        <li class="nav-item">
                                            <a href="{{url('nym/packs')}}" class="nav-link">
                                                <i class="nav-icon fas fa-hdd"></i>
                                                <p>
                                                    Packs
                                                </p>
                                            </a>
                                        </li>
                    <li class="nav-item">
                        <a href="{{url('nym/user')}}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Utilisateurs
                            </p>
                        </a>
                    </li>
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fas fa-tachometer-alt"></i>--}}
                    {{--                            <p>--}}
                    {{--                               Paramètre--}}
                    {{--                            </p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}

                    <li class="nav-item">
                        <a href="3" class="nav-link">
                            <i class="nav-icon fas fa-money-bill-alt"></i>
                            <p>
                                Demandes de retraits
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('nym/demande_retrait')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Demandes actuelles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('nym/historique_retrait')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Historiques</p>
                                </a>
                            </li>
                        </ul>
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
