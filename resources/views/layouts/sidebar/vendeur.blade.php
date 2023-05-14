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
          <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('dashboardVendeur') }}">
              <i class="material-icons">dashboard</i>
              {{-- <i class=" fa fa-dashboard"></i> --}}

                <p>{{ __('Tableau de bord') }}</p>
            </a>
          </li>         

          <li class="nav-item {{ ($activePage == 'ligneVente-add' || $activePage == 'ligneVente-list') ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#fruit" aria-expanded="true">
              {{-- <i class="material-icons"> store </i> --}}
              <i class=" fa fa-lemon-o"></i>
              <p>{{ __('Fruits') }}
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse show" id="fruit">
              <ul class="nav">
                <li class="nav-item{{ $activePage == 'ligneVente-add' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('ligneVente.add') }}">
                    {{-- <i class="material-icons">add</i> --}}
                    <i class=" fa fa-plus"></i>
                      <p>{{ __('Ajout Fruit') }}</p>
                  </a>
                </li>
               <li class="nav-item{{ $activePage == 'ligneVente-list' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('ligneVente.list') }}">
                    {{-- <i class="material-icons">list</i> --}}
                    <i class=" fa fa-list"></i>

                      <p>{{ __('Liste Fruit') }}</p>
                  </a>
                </li>
          
              </ul>
            </div>   
          </li>
    
          <li class="nav-item{{ $activePage == 'calendrier' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('calendrier') }}">
              {{-- <i class="material-icons">calendar</i> --}}
              <i class="fa fa-calendar"></i>
                <p>{{ __('Calendrier') }}</p>
            </a>
          </li>

          {{-- <li class="nav-item{{ $activePage == 'facture-list' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('facture.list.vendeur') }}">
              <i class="material-icons">content_paste</i>
                <p>{{ __('Factures') }}</p>
            </a>
          </li> --}}
    
          {{-- <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('profile.edit') }}">
              <i class="material-icons"> settings</i>
                <p>{{ __('Compte') }}</p>
            </a>
          </li> --}}

          <li class="nav-item{{ $activePage == 'vendeur-editV' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('vendeur.editV') }}">
              {{-- <i class="material-icons"> settings</i> --}}
              <i class=" fa fa-cogs"></i>
                <p>{{ __('Compte') }}</p>
            </a>
          </li>
    
          
        </ul>
      </div>

  
  </div>
  