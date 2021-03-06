@extends('layout.app')
{{-- @extends('layout.master') --}}

@section('content')

    <div class="bg-login">
        <img class="img-login" src=" {{ asset('access/images/login-1.png') }}" >
        <div class="container">
            <div class="row ">
                <div class=" col-12  d-flex align-items-center justify-content-end" style="height: 100vh;">
                    {{-- login  --}}

                    <div class="form-login2 flex-column col-6 p-5 w-100">
                        <h1 class="d-flex justify-content-center h1-page m-0 p-0">ยินดีต้อนรับ !</h1>
                        <p class="d-flex justify-content-center mb-2 m-0 p-0">DSP ศูนย์ฝึกอาชีพเขตกรุงเทพมหานคร</p>
                        <form class=" d-flex flex-column justify-content-center align-items-center w-100"  method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="form-group row  w-75">
                                <div class=" w-100 d-flex ">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" pattern="[0]{1}[0-9]{9}" maxlength="10" name="username" placeholder="เบอร์โทร" value="{{ old('username') }}" required autocomplete="username">

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row w-75">
                                <div class="w-100 d-flex">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="รหัสผ่าน" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row w-100">
                                <div class="col-md-6 offset-md-8 ">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('ลืมรหัสผ่าน') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0 w-100">
                                <div class="w-100 d-flex flex-column justify-content-xl-center">
                                    <div class=" d-flex flex-row mt-3 mb-3 justify-content-xl-center align-items-center">
                                        <button  type="submit" class="btn text-light ml-2 mr-2 " style="background-color: #741CC7;border-radius: 20px;">{{ __('เข้าสู่ระบบ') }}</button>
                                        {{-- <p class="p-0 m-0">หรือ</p>
                                        <button type="submit" class="btn text-light ml-2 mr-2" style="background-color: #4151F0;border-radius: 20px;" >FACEBOOK</button> --}}

                                    </div>
                                    <small id="passwordlHelp" class="form-text text-muted d-flex justify-content-center m-t-20">คุณยังไม่ได้ลงทะเบียนใช่หรือไม่? <a class="register-text" href="/register">ลงทะเบียน</a></small>
                                    {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('คุณยังไม่ได้ลงทะเบียนใช่หรือไม่') }}
                                    </a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
