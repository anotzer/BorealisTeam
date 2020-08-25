<nav id="nav-left" class="nav-left">
    <div class="nav-left-scroll">
        <strong class="logo">
            <a href="/">
                <span class="logo-name logo-name--violet">Borealis</span>
                <img src="https://blazingboost.com/skin/front/images/bb-logo-icon.png" class="bt-logo__icon" alt="BorealisTeam Boost">
                <span class="logo-name">Team</span>
            </a>
        </strong>
        <ul id="before_login" class="list register">
            @auth
                <li>
                    <a href="{{route('admin-panel')}}" class="simplebox-registration">
                        Admin Panel
                    </a>
                </li>
                <li>
                    <a href="{{route('profile')}}" class="simplebox-registration">
                        PROFILE
                    </a>
                </li>
                <li>
                    <a href="{{route('list.view')}}" class="simplebox-registration">
                        List Tasks
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @else
                <li>
                    <a href="{{route('register')}}" class="simplebox-registration">
                        REGISTER
                    </a>
                </li>
                <li class="login">
                    <a href="{{route('login')}}" class="simplebox-registration">
                        LOGIN
                    </a>
                </li>
            @endauth
        </ul>
        <ul class="list">
            <li>
                <a class="cart cartlogin" href=""> Cart (<span>$0.00</span>) </a>
            </li>
            <li class=""> <a href="{{route('home')}}"> HomePage </a>
            </li><li class=""> <a href=""> Offers </a>
            </li><li class=""> <a href="">About Us</a></li>
            <li class=""> <a href=""> Jobs / Sell </a></li>
            <li class="nav-link-wow-classic "> <a href="/"> JOBS - DESTINY 2<span class="new-show"></span> </a></li>
            <li class=""> <a href="/">Questions</a></li>
        </ul>
    </div>
</nav>
