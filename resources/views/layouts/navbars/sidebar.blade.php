<div class="sidebar" data-color="azure" data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-4.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->

  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      CT
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      Creative Tim
    </a>
  </div>

  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="{{Storage::url(Auth()->user()->photo)}}">
      </div>


      <div class="user-info">
        <a data-toggle="collapse" href="#collapseExample" class="username collapsed nav-link show" aria-expanded="true">
          <span>
            {{Auth()->user()->name}}
            <b class="caret"></b>
          </span>
        </a>
        <div class="collapse {{$activePage == 'myperfil' || $activePage == 'editarperfil' || $activePage == 'configurarperfil' ? ' show' : ''}}" id="collapseExample" >
          <ul class="nav">
            <li class="nav-item {{ $activePage == 'myperfil' ? ' active' : '' }}  ">
              <a class="nav-link" href="{{route('profile.show')}}">
                <span class="sidebar-mini"> MP </span>
                <span class="sidebar-normal"> Mi perfil </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('profile.edit',Auth()->user()->id)}}">
                <span class="sidebar-mini"> EP </span>
                <span class="sidebar-normal"> Edit Profile </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="sidebar-mini"> S </span>
                <span class="sidebar-normal"> Salir </span>
              </a>
            </li>
          </ul>
        </div>




<ul class="nav">

          <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
              <a class="nav-link show" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                  <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                  <p>Usuario y Roles
                      <b class="caret"></b>
                  </p>
              </a>
              <div class="collapse {{$activePage == 'user-management' || $activePage == 'roles' ? ' show' : ''}}" id="laravelExample">
                  <ul class="nav">

                      @can('listaU')
                          <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                              <a class="nav-link" href="{{ route('listaU') }}">
                                  <span class="sidebar-mini"> UM </span>
                                  <span class="sidebar-normal"> {{ __('User Management') }} </span>
                              </a>
                          </li>
                      @endcan
                      <li class="nav-item{{ $activePage == 'providers' ? ' active' : '' }}">
                          <a class="nav-link" href="{{ route('listaPR') }}">
                              <span class="sidebar-mini"> UM </span>
                              <span class="sidebar-normal"> {{ __('Proveedores') }} </span>
                          </a>
                      </li>
                      @can('listaU')
                          <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
                              <a class="nav-link" href="{{ route('listaR') }}">
                                  <span class="sidebar-mini"> UM </span>
                                  <span class="sidebar-normal"> {{ __('Roles') }} </span>
                              </a>
                          </li>
                      @endcan
                  </ul>
              </div>
          </li>

</ul>
      </div>
    </div>

    <ul class="nav">


      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>Inicio</p>
        </a>
      </li>


{{--nav productos--}}
      <li class="nav-item{{ $activePage == 'products' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('listaP') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Productos') }}</p>
        </a>
      </li>
{{--nav ventas--}}
        <li class="nav-item{{ $activePage == 'sales' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('listaVen') }}">
                <i class="material-icons">bubble_chart</i>
                <p>{{ __('Ventas') }}</p>
            </a>
        </li>


















        <li class="nav-item {{ $activePage == 'history-purchase' ? ' active' : '' }}">
            <a class="nav-link show" data-toggle="collapse" href="#report" aria-expanded="true">
                <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                <p>Reportes
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse {{$activePage == 'purchase'? ' show' : ''}}" id="report">
                <ul class="nav">

                        <li class="nav-item{{ $activePage == 'history-purchase' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('listaCOM') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('Historial de Compras') }} </span>
                            </a>
                        </li>

                </ul>
            </div>
        </li>


    </ul>
  </div>
</div>
