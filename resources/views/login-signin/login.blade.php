@extends('layout.master')

@section('title', 'LOGIN')


@section('content')
    <div class="wraper-login d-flex flex-row justify-content-lg-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="form-login1 col-6 ">

                </div>
                <div class="form-login2 flex-column col-6">
                    <h1 class="d-flex justify-content-center h1-page">ยินดีต้อนรับ !</h1>
                    ​<p class="d-flex justify-content-center m-b-20">DSP ศูนย์ฝึกอาชีพเขตกรุงเทพมหานคร</p>
                    <form class="form-login">
                        <div class="form-group">

                          <input type="email" class="form-control email-login" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="อีเมลล์ หรือ เบอร์โทรศัพท์">

                        </div>
                        <div class="form-group">

                          <input type="password" class="form-control password-login" id="exampleInputPassword1" placeholder="รหัสผ่าน">
                          <small id="passwordlHelp" class="form-text text-muted d-flex justify-content-end"><a class="re-password" href="#">ลืมรหัสผ่าน?</a></small>
                        </div>

                        <button type="submit" class="btn btn-login">เข้าสู่ระบบ</button>
                        หรือ
                        <button type="submit" class="btn btn-facebook">FACEBOOK</button>

                        <small id="passwordlHelp" class="form-text text-muted d-flex justify-content-center m-t-20">คุณยังไม่ได้ลงทะเบียนใช่หรือไม่? <a class="register-text" href="/singup">ลงทะเบียน</a></small>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection
