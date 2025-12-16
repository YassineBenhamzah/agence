<header id="menu">
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="#menu"><img src="#" alt="" width="170"></a> </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="font2" class="active"><a class="scroll" href="{{url('/')}}">Principal</a></li>
              <li class="font2"><a class="scroll" href="{{url('/')}}">Qui sommes-nous</a></li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle font2" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/publication')}}" style="color:black;">Campagnes publicitaires </a></li>
                <li><a href="{{url('/cons')}}" style="color:black;">Construction et conception d’identité de marque </a></li>
                <li><a href="{{url('/reseau')}}"style="color:black;">Gestion des réseaux sociaux </a></li>
                <li><a href="{{url('/video')}}"style="color:black;">Vidéos marketing </a></li>
              </ul>
            </li>

              {{-- <li class="font11"><a class="scroll" href="{{url('/')}}">Team</a></li> --}}

              <li class=""><a class="scroll" href="{{url('/contact')}}">Contactez-nous</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </div>
    </div>
  </header>
