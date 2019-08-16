<header>
      <nav id="nav" class="navbar navbar-expand-lg navbar-dark _bgdegree">
            <a class="navbar-brand _logo" href="/rankfakenews">BullSheet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ml-md-auto">
               <li class="nav-item">
                 <a class="nav-link  _navItem " href="">FAQ </a>
               </li>
               <li class="nav-item ">
                 <a class="nav-link _navItem" href="">ABOUT</a>
               </li>
               <li class="nav-item ">
                 <a class="nav-link  _navItem" href="/rankfakenews">RANK</a>
               </li>
               <li class="nav-item ">
                 <a class="nav-link  _navItem" href="/fakenews">FAKE NEWS</a>
               </li>
               @auth
                 <li class="nav-item ">
                   <a class="nav-link  _navItem" href="fakenews/new">ADD FAKE NEWS</a>
                 </li>
               @endauth


<!--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RANKING</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/rankrealnews">Real News</a>
                    <a class="dropdown-item" href="/rankfakenews">Fake News</a>
                    </div>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    NEWS FEED</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/realnews">Real News</a>
                    <a class="dropdown-item" href="/fakenews">Fake News</a>
                    </div>
                </li>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ADD NEWS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/fakenews/new">Fake News</a>
                    <a class="dropdown-item" href="/realnews/new">Real News</a>
                    </div>
                </li>
-->

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->first_name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/profile">Ver Perfil <span class="sr-only">(current)</span></a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endauth
                {{-- </ul> --}}
                </li>
             </ul>
            </div>
     </nav>
     </header>
