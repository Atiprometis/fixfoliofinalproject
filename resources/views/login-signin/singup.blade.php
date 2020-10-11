@extends('layout.master')

@section('title', 'SINGUP')


@section('content')
    <div class="wraper-login d-flex flex-row justify-content-lg-center align-items-lg-center">
        <div class="container">
            <div class="row">
                <div class="form-sigup1 col-lg-6 col-sm-0  " style="height: auto">

                </div>
                <div class="form-sigup2 flex-column col-lg-6 col-sm-12">
                    <h1 class="d-flex justify-content-center h1-page">สมัครสมาชิก !</h1>
                    ​<p class="d-flex justify-content-center m-b-20">DSP ศูนย์ฝึกอาชีพเขตกรุงเทพมหานคร</p>


                    <form class="form-login " name="frm"  action="/home"   method="get">
                        <div class="signincheck " id="signincheck">
                            <div class="form-group d-flex flex-row">
                                <div class="form-row">
                                    <div class="col-sm-6 ">
                                        <input type="text" class="form-control p-4" name="username"  id="username" maxlength="30"  aria-describedby="usernamelHelp" placeholder="ชื่อจริง" required>
                                    </div>

                                    <div class="col-sm-6 pt-lg-0 pt-3">
                                        <input type="text" class="form-control p-4" name="usersurname" id="usersurname" maxlength="30" aria-describedby="usersurnamelHelp" placeholder="นามสกุล" required>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="collapse-Box">
                                <div class="form-group">

                                    <input type="text" class="form-control  p-4" name="companysignup"  id="companysignup" aria-describedby="company" placeholder="ชื่อบริษัท" >

                                </div>
                                <div class="form-group">

                                    <input type="text" class="form-control  p-4" name="businesssignup" id="businesssignup" aria-describedby="business" placeholder="ประเภทของธุรกิจ (ร้านอาหาร, บริการ, รับซ่อม, อื่นๆ)" >

                                </div>

                            </div>
                            <div class="form-group">

                              <input type="tel" class="form-control  p-4" id="telphone" name="telphone"  aria-describedby="telphonelHelp" title="ใส่หมายเลข" pattern="[0]{1}[0-9]{9}" maxlength="10"  placeholder="เบอร์โทรศัพท์" required>

                            </div>
                            <div class="form-group">

                              <input type="password" class="form-control p-4" id="InputPassword" name="InputPassword" placeholder="รหัสผ่าน (ตัวอักษรหรือตัวเลข 6-8 หลัก)" minlength="6" maxlength="20" required>

                            </div>
                            {{-- <div class="form-group">

                                <input type="password" class="form-control p-4" id="exampleInputPassword1" placeholder="ยืนยันรหัสผ่าน" maxlength="20" required>

                            </div> --}}

                            <div class="form-group justify-content-lg-center d-flex flex-row align-items-lg-center">

                                <button type="submit" onclick="signinCheck()" class="btn btn-login">เข้าสู่ระบบ</button>
                                <p class="p-and">หรือ</p>
                                <button type="submit" class="btn btn-facebook">FACEBOOK</button>

                            </div>
                            <div class="form-check d-flex justify-content-center">
                                <input class="form-check-input position-static" id="checkboxsingup" onclick="checkBoxsignup()" data-toggle="collapse" href="#collapse-Box" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                <label class="form-check-label" for="exampleRadios1">
                                    เป็นผู้ประกอบการ กำลังมองหาคนทำงาน
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
