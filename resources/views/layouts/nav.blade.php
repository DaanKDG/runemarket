
<nav class="navbar navbar-expand-md navbar-light nav-color">

    <a class="navbar-brand" style='font-size: 1.8em; color: white; font-weight: bold;' href="{{ url('/') }}">
        <img height='55px' src="https://i.imgur.com/zEmWQIG.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item ml-3">
                <a class="nav-link" href="{{ route('accounts.index') }}">ACCOUNTS</a>
            </li>
            <li class="nav-item ml-3 button-dropdown">

                <a class="nav-link" href="#">SERVICES <i class="fas fa-caret-down pl-1 pb-1"
                                                                            style="font-size: 0.8em; vertical-align: middle;"></i></a>

                <ul class="dropdown">
                    <li><a href="{{ route('quest.index')}}" class="dropdown-link">Questing</a></li>
                    <li><a href="{{ route('minigames.index')}}" class="dropdown-link">Skilling</a></li>
                    <li><a href="{{ route('minigames.index')}}" class="dropdown-link">Minigames</a></li>
                </ul>

            </li>
            {{-- <li class="nav-item ml-3">
                <a class="nav-link" href="{{ route('login') }}">OSRS GOLD</a>
            </li>
            <li class="nav-item ml-3">
                <a class="nav-link" href="{{ route('login') }}">RENTAL</a>
            </li> --}}


        </ul>
    </div>
</nav>
