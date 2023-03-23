    <!-- navbar top -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#011627" role="navigation" id="navbar">
        <!-- navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- end navbar-header -->
        <!-- navbar-top-links -->
        <ul class="nav navbar-top-links navbar-right">
            <!-- main dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                </a>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                </a>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-3x"></i>
                </a>
                <!-- dropdown user-->
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{ url('/deconnexion') }}"><i class="fa fa-sign-out fa-fw"></i>Déconnexion</a>
                    </li>
                </ul>
                <!-- end dropdown-user -->
            </li>
            <!-- end main dropdown -->
        </ul>
        <!-- end navbar-top-links -->

    </nav>
    <!-- end navbar top -->
    <!-- navbar side -->
    <nav class="navbar-default navbar-static-side" style="background-color:#2ec4b6" role="navigation">
        <!-- sidebar-collapse -->
        <div class="sidebar-collapse" style="background-color:#2ec4b6">
            <!-- side-menu -->
            <ul class="nav" id="side-menu" style="background-color:#2ec4b6">
                <li>
                    <!-- user image section-->
                    <div class="user-section entete">
                        {{-- <div class="user-section-inner">
                            <img src="storage/img/logo.png" alt="">
                        </div> --}}
                        <div class="user-info">
                            <p class="auth-user">{{ $authuser }}</p>
                            <div class="user-text-online">
                                <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                            </div>
                        </div>
                    </div>
                    <!--end user image section-->
                </li>

                <li class="selected">
                    <a href="{{ route('admin') }}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                </li>
                <li class="selected">
                    <a href="{{ route('accueil') }}"><i class="fa fa-map-marker fa-fw"></i>Accueil</a>
                </li>
                @if ($authuserid == 1)
                    <li class="selected">
                        <a href="#"><i class="fa fa-map-marker fa-fw"></i>Administrateur<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ url('/employe/modifier/pwd/' . $authuserid) }}">Modifier mot de passe</a>
                            </li>
                        </ul>
                    </li>
                @else
                <li class="selected">
                    <a href="{{ route('accueil') }}"><i class="fa fa-map-marker fa-fw"></i>Employés<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('/employe/modifier/pwd/' . $authuserid) }}">Modifier mot de passe</a>
                        </li>

                    </ul>
                </li>
                @endif
                <li style="background-color:#2ec4b6">
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Ajout<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('creer-activite') }}">Activités</a>
                            {{-- <a class="open-form" onclick="openForm()">Open Form</a> --}}
                        </li>
                        <li>
                            <a href="{{ route('creer-actualite') }}">Actualités</a>
                        </li>

                        @if ($authuserid == 1)
                            <li>
                                <a href="{{ route('creer-employe') }}">Employés</a>
                            </li>
                        @endif

                        <li>
                            <a href="{{ route('creer-forfait') }}">Forfaits</a>
                        </li>
                    </ul>
                    <!-- second-level-items -->
                </li>
                <li>
                    <a href="{{ url('/deconnexion') }}"><i class="fa fa-sign-out fa-fw"></i>Deconnexion</a>
                </li>
            </ul>
            <!-- end side-menu -->
        </div>
        <!-- end sidebar-collapse -->
    </nav>
    <!-- end navbar side -->
