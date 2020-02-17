
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('/alte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Gestion Magasin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/alte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User Name</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-close">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  {{ __('text.accueil.lbl')}}
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview menu-{{  (request()->is('Stock/Depot')) ? 'open' : '' }}">
                <a href="" class="nav-link active">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>
                    {{ __('text.stocks.lbl')}}
                    <i class="right fas fa-angle-left" style="right: 10px;"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('depot.index') }}" class="nav-link {{  (request()->is('stock/depot')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ __('text.depots.lbl')}}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ __('text.lots.lbl')}}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ __('text.categories.lbl')}}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ __('text.produits.lbl')}}</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview menu-close">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-shipping-fast"></i>
                    <p>
                      {{ __('text.commandes.lbl')}}
                      <i class="right fas fa-angle-left" style="right: 10px;"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('text.fournisseurs.lbl')}}</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('text.clients.lbl')}}</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('text.devis.lbl')}}</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('text.achats.lbl')}}</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('text.ventes.lbl')}}</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-treeview menu-close">
                   <a href="#" class="nav-link active">
                     <i class="nav-icon fas fa-cash-register"></i>
                      <p>
                       {{ __('text.comptabilite.lbl')}}
                       <i class="right fas fa-angle-left" style="right: 10px;"></i>
                     </p>
                   </a>
                   <ul class="nav nav-treeview">
                     <li class="nav-item">
                       <a href="./index.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>{{ __('text.factures.lbl')}}</p>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="./index2.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>{{ __('text.caisses.lbl')}}</p>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="./index3.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>{{ __('text.cheques.lbl')}}</p>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="./index3.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>{{ __('text.reglements.lbl')}}</p>
                       </a>
                     </li>
                   </ul>
                </li>
                <li class="nav-item has-treeview menu-close">
                   <a href="#" class="nav-link active">
                     <i class="nav-icon fas fa-poll-h"></i>
                      <p>
                       {{ __('text.parametres.lbl')}}
                       <i class="right fas fa-angle-left" style="right: 10px;"></i>
                      </p>
                   </a>
                   <ul class="nav nav-treeview">
                     <li class="nav-item">
                       <a href="./index.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>{{ __('text.magasin.lbl')}}</p>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="./index2.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>{{ __('text.unite.lbl')}}</p>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="./index3.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>{{ __('text.personnels.lbl')}}</p>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="./index3.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>{{ __('text.roles.lbl')}}</p>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="./index3.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>{{ __('text.profile.lbl')}}</p>
                       </a>
                     </li>
                   </ul>
                </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
<!-- /.sidebar -->