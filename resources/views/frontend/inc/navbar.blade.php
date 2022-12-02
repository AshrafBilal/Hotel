

    <div class="menu-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="nav-menu">
                        <nav class="mainmenu">
                            <ul>
                                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="{{ url('/properties') }}">Properties</a></li>
                                <li><a href="{{ url('/rooms') }}">Rooms</a></li>
                                <li><a href="{{ url('/reservation/create') }}">Make reservation</a></li>
                                <li><a href="./pages.html">{{ Auth::user()->name }}</a>
                                    <ul class="dropdown">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                 <i class="mdi mdi-logout text-primary"></i>{{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                             </form>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
