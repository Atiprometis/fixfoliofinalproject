<nav class="navbar navbar-expand-md navbar-light shadow-sm " style="background-color: #69299C;">
    <div class="container">
        <a class="navbar-brand text-light" href="{{ url('/home') }}">
            FIXFOLIO
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto" >
                <li class="nav-item active">
                    <a class="nav-link text-light"style="font-weight: 300;" href="/home">หน้าหลัก<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-light"style="font-weight: 300;" href="/institution">สถาบันทั้งหมด<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-light"style="font-weight: 300;" href="/courses">คอร์สเรียนทั้งหมด<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-light"style="font-weight: 300;" href="/searchportfolio">ค้นหาผลงาน<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-light"style="font-weight: 300;" href="#">ติดต่อเรา <span class="sr-only">(current)</span></a>
                </li>
            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->role == 'superadmin')
                                <li>
                                    <a class="dropdown-item" href="/admin">
                                        <i class="fas fa-user-shield"></i>
                                        แอดมิน Dashboard
                                    </a>
                                </li>
                            @endif

                            @if (Auth::user()->role == 'admin')
                            <li>
                                <a class="dropdown-item" href="/dashbord">
                                    <i class="fas fa-user"></i>
                                    Dashboard
                                </a>
                            </li>
                            @endif
                            @if(Auth::user()->role == 'superadmin')
                            <li>
                                <a class="dropdown-item" href="/dashbord">
                                    <i class="fas fa-user"></i>
                                    Dashboard
                                </a>
                            </li>
                            @endif


                            <li>
                                <a class="dropdown-item" href="/addid">
                                    <i class="fas fa-address-card"></i>
                                    โปรไฟล์
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                {{ __('ออกจากระบบ') }}
                                </a>
                            </li>
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
