  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ url('') }}">স্বপ্ন কথা<small> - আমরা মুক্তিযুদ্ধের চেতনায় দেশ ভাষা সংস্কৃতির কথা বলি</small></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link text-center" href="#" >
            <i class="fa fa-user-circle fa-lg"></i><br>
            <span class="nav-link-text">{{ Auth::user()->name }}</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{route('post.index')}}">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Product</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{route('youtubes.index')}}">
            <i class="fa fa-fw fa-youtube"></i>
            <span class="nav-link-text">YOUTUBE VIDEO ADD</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{route('categorys.index')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Cagetorys</span>
          </a>
        </li>
        @if(Auth::user()->hasRole('superadministrator'))
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion" aria-expanded="false">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Ads</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents" style="">
            <li>
              <a href="{{ route('single_ads.index') }}">Single Page</a>
            </li>
            <li>
              <a href="{{ route('index_ads.index') }}">Main Page</a>
            </li>
          </ul>
        </li>
        @endif
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{route('user.index')}}">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">User</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{route('address.index')}}">
           <i class="fa fa-address-card" aria-hidden="true"></i>
            <span class="nav-link-text">Address</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li><a href="{{ route('logout') }}" class='text-white'
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </li>
      </ul>
    </div>
  </nav>