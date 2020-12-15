@extends('layout.app')

@section('content')


<div class=" bg-login">
    <img class="img-login" src=" {{ asset('access/images/singup-1.png') }}" >
        <div class="container">
            <div class="row justify-content-end align-items-center " style="height: 100vh;">
                <div class="col-md-5">
                    <div class="card p-4" style="border-radius: 20px">
                        <div class="card-body">
                            <h1 class="d-flex justify-content-center mt-1 mb-4 h1-page">สมัครสมาชิก !</h1>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group form-row d-flex flex-row">
                                    <div class="col-md-6">
                                        <input id="name" type="text" placeholder="ชื่อจริง" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <input id="lastname" type="text" placeholder="นามสกุล" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                        @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <input id="username" type="text" placeholder="เบอร์ศัพท์" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group form-row">

                                    <div class="col-md-12">

                                    <input id="password" type="password" placeholder="รหัสผ่าน (ตัวอักษรหรือตัวเลข 6-8 หลัก)" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">


                                    <div class="col-md-12">
                                        <input id="password-confirm" placeholder="ยืนยันรหัสผ่าน" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group p-0 m-0 mb-0 w-100">
                                    <div class="w-100 d-flex flex-column justify-content-xl-center">
                                        <div class=" d-flex flex-row mt-3 mb-3 justify-content-xl-center align-items-center">
                                            <button  type="submit" class="btn text-light ml-2 mr-2 " style="background-color: #741CC7;border-radius: 20px; width: 100px" >{{ __('สมัคร') }}</button>
                                            <p class="p-0 m-0">หรือ</p>
                                            <button type="submit" class="btn text-light ml-2 mr-2" style="background-color: #4151F0;border-radius: 20px;" >FACEBOOK</button>

                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection
