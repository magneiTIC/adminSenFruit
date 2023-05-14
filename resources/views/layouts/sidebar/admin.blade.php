<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
  
        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <a href="#" class="simple-text logo-normal">
        {{ __('SEN FRUIT 221') }}
      </a>
    </div>

    <div class="sidebar-wrapper" >
        <ul class="nav" >
          <li class="nav-item{{ $activePage == 'admin' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('dashboardAdmin') }}">
              <i class="material-icons">dashboard</i>
              {{-- <i class=" fa fa-dashboard"></i> --}}
                <p>{{ __('Tableau de bord') }}</p>
            </a>
          </li>
                <!-- Vendeur -->
          <li class="nav-item {{ ($activePage == 'vendeur-add' || $activePage == 'vendeur-list') ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#vendeur" aria-expanded="true">
              {{-- <i class="material-icons">person  </i> --}}
              <i class=" fa fa-user"></i>

              <p>{{ __('Vendeurs') }}
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse show" id="vendeur">
              <ul class="nav">
                <li class="nav-item{{ $activePage == 'vendeur-add' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('vendeur.add') }}">
                    {{-- <i class="material-icons"> person_add </i> --}}
                    <i class=" fa fa-user-plus "></i>


                    <span class="sidebar-normal">{{ __('Ajout vendeur ') }} </span>
                  </a>
                </li>
                <li class="nav-item{{ $activePage == 'vendeur-list' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('vendeur.list') }}">
                    {{-- <i class="material-icons"> content_paste </i> --}}
                    <i class=" fa fa-clipboard"></i>

                    <span class="sidebar-normal"> {{ __('Gestion Vendeurs') }} </span>
                  </a>
                </li>
              </ul>
            </div>   
          </li>

           <!-- fruit -->

          <li class="nav-item {{ ($activePage == 'fruit-add' || $activePage == 'fruit-list') ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#fruit" aria-expanded="true">
              {{-- <i class="material-icons"> store </i> --}}
              <i class=" fa fa-lemon-o"></i>

              <i class="bi bi-basket3-fill"></i>
              <p>{{ __('Fruits') }}
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse show" id="fruit">
              <ul class="nav">
                <li class="nav-item{{ $activePage == 'fruit-add' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('fruit.add') }}">
                    {{-- <i class="material-icons">add</i> --}}
                    <i class=" fa fa-plus"></i>

                      <p>{{ __('Ajout Fruit') }}</p>
                  </a>
                </li>
               <li class="nav-item{{ $activePage == 'fruit-list' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('fruit.list') }}">
                    {{-- <i class="material-icons">list</i> --}}
                    <i class=" fa fa-list"></i>

                      <p>{{ __('Liste Fruit') }}</p>
                  </a>
                </li>
          
              </ul>
            </div>   
          </li>
    
          <!-- Client -->

          <li class="nav-item{{ $activePage == 'client-list' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('client.list') }}">
              {{-- <i class="material-icons">person</i> --}}
              <i class=" fa fa-user"></i>

                <p>{{ __('Clients') }}</p>
            </a>
          </li>
    
          <li class="nav-item{{ $activePage == 'commande-list' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('commande.list') }}">
              {{-- <i class="material-icons">shop</i> --}}
              <i class="fa fa-shopping-basket"></i>


                <p>{{ __('Commandes') }}</p>
            </a>
          </li>
    
    
          {{-- <li class="nav-item{{ $activePage == 'facture-list' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('facture.list') }}">
              <i class="material-icons">content_paste</i>
                <p>{{ __('Factures') }}</p>
            </a>
          </li> --}}

          <li class="nav-item{{ $activePage == 'supp' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('supp') }}">
              {{-- <i class="material-icons"> close</i> --}}
              <i class=" fa fa-user-times"></i>

                <p>{{ __('Comptes Supprimes') }}</p>
            </a>
          </li>
    
          <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('profile.edit') }}">
              {{-- <i class="material-icons"> settings</i> --}}
              <i class=" fa fa-cogs"></i>

                <p>{{ __('Compte') }}</p>
            </a>
          </li>

        </ul>
      </div>

  
  </div>
  