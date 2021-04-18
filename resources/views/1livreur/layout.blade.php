@extends('mainLayout')
@section('sidebar')
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">1Livreur</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="{{url('1livreur/profile')}}" class="d-block">{{Auth::user()->nom." ".Auth::user()->prenom}}</a>
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
                        <a href="{{url('1livreur/index')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Tableau de bord
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Collaborateurs
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('1livreur/livreur')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Liveurs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('1livreur/collaborateur')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Administrateurs</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('1livreur/livraison')}}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Livraisons
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('1livreur/livraisonmap')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Map</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Setting</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Localites
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('1livreur/pays')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pays</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('1livreur/villes')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Villes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('1livreur/zones')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Zones</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('1livreur/quartiers')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Quartier</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="3" class="nav-link">
                            <i class="nav-icon fas fa-money"></i>
                            <p>
                                Demandes de retraits
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('1livreur/demande_retrait')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Demandes actuelles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('1livreur/historique_retrait')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Historiques</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('admin/logout')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
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
