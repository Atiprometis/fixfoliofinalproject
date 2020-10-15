@include('component.header')
@extends('layout.master')

@section('title', 'Print')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <div class="d-flex flex-column justify-content-center align-items-md-center w-100">
                    <div class=" d-flex mt-3 mb-2 flex-row">
                        {{-- <div class=" bg-danger" style="width: 50px; height:50px;"></div> --}}
                        <h1 class="p-0 m-0">FIX-Folio</h1>
                    </div>
                    <h2 class="p-0 m-0" style="font-size: 1.500em;">ใบสมัครเรียน/ใบรายงานตัว</h2>
                    <p class="p-0 m-0 font-weight-normal" style="font-size: 1em;">กรมฝึกแรงงาน เขต13 กรุงเทพมหานคร</p>
                    <p class="p-0 m-0 font-weight-light" style="font-size: 1em;">สำนักพัฒนาแรงงาน กรุงเทพมหานคร</p>
                </div>
                @include('component.line')
            </div>
            {{--  --}}
            <div class="col-12 d-flex flex-column">
                <div class="d-flex flex-column justify-content-center align-items-md-center w-100">
                    <h2 class="p-0 m-0 mt-3" style="font-size: 1.300em;">หลักสูตรอาหารไทย  80 ชั่วโมง สาขาประกอบอาหาร</h2>
                    <p class="p-0 m-0  mb-3 font-weight-normal" style="font-size: 1em;">ภาคเรียนที่ 1/2563 รุ่นที่ 13 จันทร์-ศุกร์ (9:00-15:00)</p>

                </div>
                @include('component.line')
            </div>
            {{-- 1 --}}
            <div class="col-12 d-flex ml-1 row justify-content-start align-items-center">
                <div class=" ml-2 mr-4 rounded d-flex justify-content-center align-items-center" style="width: 40px; height:40px;border:solid 1px #828282; ">
                    <h3 class="p-0 m-0">1</h3>
                </div>
                <div class=" d-flex flex-column">
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            ชื่อนาย <p class="p-0 m-0 mr-3 font-weight-normal">ประสิทธิ์  แสงสว่างจ้า</p>
                        </p>
                        <p class="p-0 m-0 mr-3  font-weight-bold" style="font-size: 1em;">
                            วันที่มอบตัว <p class="p-0 m-0 mr-3 font-weight-normal">31/10/2563</p>
                        </p>
                    </div>
                    <div class=" d-flex flex-row align-items-start">
                        <p class="p-0 m-0  mr-3 font-weight-bold" style="font-size: 1em;">
                            เลขประจำตัวประชาชน <p class="p-0 m-0 mr-3 font-weight-normal">1100110011001</p>
                        </p>
                        <p class="p-0 m-0  mr-3  font-weight-bold" style="font-size: 1em;">
                            วัน/เดือน/ปีเกิด <p class="p-0 m-0 mr-3 font-weight-normal">31/10/2530</p>
                        </p>
                        <p class="p-0 m-0  mr-3 font-weight-bold" style="font-size: 1em;">
                            อายุ<p class="p-0 m-0 mr-3 font-weight-normal">33 </p>ปี
                        </p>
                    </div>
                </div>

                    @include('component.line')
            </div>
            {{-- ---- 2 ---- --}}
            <div class="col-12 d-flex ml-1 row justify-content-start align-items-center">
                <div class=" ml-2 mr-4 rounded d-flex justify-content-center align-items-center" style="width: 40px; height:40px;border:solid 1px #828282; ">
                    <h3 class="p-0 m-0">2</h3>
                </div>
                <div class=" d-flex flex-column">
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            ประวัติส่วนตัว นับถือศาสนา <p class="p-0 m-0 mr-3 font-weight-normal">พุทธ</p>
                        </p>
                        <p class="p-0 m-0 mr-3  font-weight-bold" style="font-size: 1em;">
                            สัญชาติ <p class="p-0 m-0 mr-3 font-weight-normal">ไทย</p>
                        </p>
                        <p class="p-0 m-0 mr-3  font-weight-bold" style="font-size: 1em;">
                            เชื้อชาติ <p class="p-0 m-0 mr-3 font-weight-normal">ไทย</p>
                        </p>
                        <p class="p-0 m-0 mr-3  font-weight-bold" style="font-size: 1em;">
                            อาชีพ <p class="p-0 m-0 mr-3 font-weight-normal">ผู้ช่วยเชฟ</p>
                        </p>
                    </div>
                    <div class=" d-flex flex-row align-items-start">
                        <p class="p-0 m-0  mr-3 font-weight-bold" style="font-size: 1em;">
                            เบอร์โทรศัพท์ <p class="p-0 m-0 mr-3 font-weight-normal">0811111110</p>
                        </p>
                        <p class="p-0 m-0  mr-3  font-weight-bold" style="font-size: 1em;">
                            อีเมล์ <p class="p-0 m-0 mr-3 font-weight-normal">AAasalsdksl@gmail.com</p>
                        </p>



                    </div>
                    <div class=" d-flex flex-row align-items-start">
                        <p class="p-0 m-0  mr-3 font-weight-bold" style="font-size: 1em;">
                            ชื่อสถานศึกษา<p class="p-0 m-0 mr-3 font-weight-normal">โรงเรียนอนุอนุอนุ </p>
                        </p>
                        <p class="p-0 m-0  mr-3 font-weight-bold" style="font-size: 1em;">
                            สาขาที่จบ<p class="p-0 m-0 mr-3 font-weight-normal">วิท-คณิต </p>
                        </p>
                        <p class="p-0 m-0  mr-3 font-weight-bold" style="font-size: 1em;">
                            วุฒิที่จบ<p class="p-0 m-0 mr-3 font-weight-normal">มัธยมศึกษาปีที่ 6  </p>
                        </p>
                        <p class="p-0 m-0  mr-3 font-weight-bold" style="font-size: 1em;">
                            ผลการเรียน<p class="p-0 m-0 mr-3 font-weight-normal">3.00 </p>
                        </p>
                    </div>
                    <div class=" d-flex flex-row align-items-start">
                        <p class="p-0 m-0  mr-3 font-weight-bold" style="font-size: 1em;">
                            ชื่อบิดา<p class="p-0 m-0 mr-3 font-weight-normal">นายกอกอกอกอกอ ขอขอขอขขอ </p>
                        </p>
                    </div>
                    <div class=" d-flex flex-row align-items-start">
                        <p class="p-0 m-0  mr-3 font-weight-bold" style="font-size: 1em;">
                            ชื่อมารดา<p class="p-0 m-0 mr-3 font-weight-normal">นายกอกอกอกอกอ ขอขอขอขขอ </p>
                        </p>
                    </div>

                </div>

                    @include('component.line')
            </div>
            {{-- ---- 3 ---- --}}
            <div class="col-12 d-flex ml-1 row justify-content-start align-items-center">
                <div class=" ml-2 mr-4 rounded d-flex justify-content-center align-items-center" style="width: 40px; height:40px;border:solid 1px #828282; ">
                    <h3 class="p-0 m-0">3</h3>
                </div>
                <div class=" d-flex flex-column">
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            ภูมิลำเนาตามทะเบียนบ้าน <p class="p-0 m-0 mr-3 font-weight-normal">บ้านเลขที่ 1100/2-4 หมู่ 23 ซอย กอกอขอขอขอ ตำบล/แขวง กอขอขออขขอขอ</p>
                        </p>

                    </div>
                    <div class=" d-flex flex-row align-items-start">
                        <p class="p-0 m-0  mr-3 font-weight-bold" style="font-size: 1em;">
                            อำเภอ/เขต <p class="p-0 m-0 mr-3 font-weight-normal">ชานเมือง</p>
                        </p>
                        <p class="p-0 m-0  mr-3  font-weight-bold" style="font-size: 1em;">
                            จังหวัด <p class="p-0 m-0 mr-3 font-weight-normal">กรุงเทพมหานคร</p>
                        </p>
                        <p class="p-0 m-0  mr-3  font-weight-bold" style="font-size: 1em;">
                            รหัสไปรษณีย์ <p class="p-0 m-0 mr-3 font-weight-normal">10400</p>
                        </p>
                    </div>
                </div>
                    @include('component.line')
            </div>
            {{-- ---- 4 ---- --}}
            <div class="col-12 d-flex ml-1 row justify-content-start align-items-center">
                <div class=" ml-2 mr-4 rounded d-flex justify-content-center align-items-center" style="width: 40px; height:40px;border:solid 1px #828282; ">
                    <h3 class="p-0 m-0">4</h3>
                </div>
                <div class=" d-flex flex-column">
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            ที่อยู่ระหว่างพักอาศัย <p class="p-0 m-0 mr-3 font-weight-normal">บ้านเลขที่ 1100/2-4 หมู่ 23 ซอย กอกอขอขอขอ ตำบล/แขวง กอขอขออขขอขอ</p>
                        </p>

                    </div>
                    <div class=" d-flex flex-row align-items-start">
                        <p class="p-0 m-0  mr-3 font-weight-bold" style="font-size: 1em;">
                            อำเภอ/เขต <p class="p-0 m-0 mr-3 font-weight-normal">ชานเมือง</p>
                        </p>
                        <p class="p-0 m-0  mr-3  font-weight-bold" style="font-size: 1em;">
                            จังหวัด <p class="p-0 m-0 mr-3 font-weight-normal">กรุงเทพมหานคร</p>
                        </p>
                        <p class="p-0 m-0  mr-3  font-weight-bold" style="font-size: 1em;">
                            รหัสไปรษณีย์ <p class="p-0 m-0 mr-3 font-weight-normal">10400</p>
                        </p>
                    </div>
                </div>
                    @include('component.line')
            </div>
            {{-- ---- 5 ---- --}}
            <div class="col-12 d-flex ml-1 row justify-content-start align-items-center">
                <div class=" ml-2 mr-4 rounded d-flex justify-content-center align-items-center" style="width: 40px; height:40px;border:solid 1px #828282; ">
                    <h3 class="p-0 m-0">5</h3>
                </div>
                <div class=" d-flex flex-column">
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            หลักฐานที่นำมาสมัคร(ถ่ายสำเนาเฉพาะข้อ 5.1, 5.2 และ 5.3 เท่านั้น)
                        </p>

                    </div>
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            5.1 สำเนาทะเบียนบ้าน จำนวน 1 ฉบับ
                        </p>

                    </div>
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            5.2 สำเนาบัตรประชาชน จำนวน 1 ฉบับ
                        </p>

                    </div>
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            5.3 สำเนาใบวุฒิการศึกษา ที่นำมาแทนคือ............................................................จำนวน 1 ฉบับ
                        </p>

                    </div>
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            5.4 รูปถ่ายหน้าตรงสวมเสื้อเชิ้ตขาว ไม่สวมหมวกและใส่แว่นตาดำ จำนวน 1 รูป
                        </p>

                    </div>

                </div>
                    @include('component.line')
            </div>
            {{-- ---- 6 ---- --}}
            <div class="col-12 d-flex ml-1 row justify-content-start align-items-center">
                <div class=" ml-2 mr-4 rounded d-flex justify-content-center align-items-center" style="width: 40px; height:40px;border:solid 1px #828282; ">
                    <h3 class="p-0 m-0">6</h3>
                </div>
                <div class=" d-flex flex-column">
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            ข้าพเจ้าทราบข่าวสารการรับสมัครจาก
                        </p>
                    </div>
                    <div class=" d-flex flex-row align-items-end">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">หนังสือพิมพ์</label>
                          </div>
                    </div>
                    <div class=" d-flex flex-row align-items-end">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">วิทยุ</label>
                          </div>
                    </div>
                    <div class=" d-flex flex-row align-items-end">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">โทรทัศน์</label>
                          </div>
                    </div>
                    <div class=" d-flex flex-row align-items-end">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">อินเตอร์เน็ต</label>
                          </div>
                    </div><div class=" d-flex flex-row align-items-end">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio5">เพื่อน</label>
                          </div>
                    </div>
                    <div class=" d-flex flex-row align-items-end">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio6">แผ่นพับโฆษณาของโรงเรียน</label>
                          </div>
                    </div><div class=" d-flex flex-row align-items-end">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio7">เว็บไซต์ FIX-Forlio</label>
                          </div>
                    </div>
                </div>
                    @include('component.line')
            </div>
            {{-- ---- 7 ---- --}}
            <div class="col-12 d-flex ml-1 row justify-content-start align-items-center">
                <div class=" ml-2 mr-4 rounded d-flex justify-content-center align-items-center" style="width: 40px; height:40px;border:solid 1px #828282; ">
                    <h3 class="p-0 m-0">7</h3>
                </div>
                <div class=" d-flex flex-column">
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            ปัจจุบัน
                        </p>
                    </div>
                    <div class=" d-flex flex-row align-items-end">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio10" name="customRadio1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio10">ทำงาน</label>
                          </div>
                    </div>
                    <div class=" d-flex flex-row align-items-end">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio11" name="customRadio1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio11">ว่างงาน</label>
                          </div>
                    </div>


                </div>
                    @include('component.line')
            </div>
            {{-- ---- 8 ---- --}}
            <div class="col-12 d-flex ml-1 row justify-content-start align-items-center">
                <div class=" d-flex flex-column">
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            วันที่สมัคร  <p class="p-0 m-0 mr-3 font-weight-normal">20/10/2563</p>
                        </p>
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            วันที่มอบตัว  <p class="p-0 m-0 mr-3 font-weight-normal">31/10/2563</p>
                        </p>
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            มอบตัวเวลา  <p class="p-0 m-0 mr-3 font-weight-normal">13:00 น.</p>
                        </p>
                    </div>
                    <div class=" d-flex flex-row align-items-end">
                        <p class="p-0 m-0 mt-1 mr-3 font-weight-bold " style="font-size: 1em;">
                            หมายเหตุ  หากมาสายเกิน 45 นาที ถือว่าสละสิทธิ์
                        </p>
                    </div>
                </div>

            </div>
            {{-- ---- 9 ---- --}}
            <p class="p-0 m-0 mt-5 mr-3 mb-3 w-100 font-weight-bold  d-flex justify-content-center" style="font-size: 1em;">
                ข้าพเจ้าขอรับรองว่าข้อความข้างต้นนี้ เป็นความจริงทุกประการ
            </p>
            {{-- ---- 10 ---- --}}
            <div class=" d-flex flex-row w-100 mt-3">
                <div class=" d-flex justify-content-center flex-column mr-auto ml-auto" >
                    <p class="p-0 m-0 mt-1 mr-3 w-100 font-weight-bold  d-flex justify-content-center" style="font-size: 1em;">
                        ลงชื่อ(..........................................................................................)
                    </p>
                    <p class="p-0 m-0 mt-1 mr-3 w-100 font-weight-bold  d-flex justify-content-center" style="font-size: 1em;">
                        นาย ประสิทธิ์ แสงสว่างจ้า
                    </p>
                </div>
                <div class=" d-flex justify-content-center flex-column mr-auto ml-auto" >
                    <p class="p-0 m-0 mt-1 mr-3 w-100 font-weight-bold  d-flex justify-content-center" style="font-size: 1em;">
                        ลงชื่อ(..........................................................................................)
                    </p>
                    <p class="p-0 m-0 mt-1 mr-3 w-100 font-weight-bold  d-flex justify-content-center" style="font-size: 1em;">
                        เจ้าหน้าที่ตรวจและรับหลักฐาน
                    </p>
                    <p class="p-0 m-0 mt-1 mr-3 w-100 font-weight-bold  d-flex justify-content-center" style="font-size: 1em;">
                        วันที่................เดือน..............................................พ.ศ........................
                    </p>
                </div>

            </div>
            {{-- ---- 11 ---- --}}
            <div class=" d-flex  flex-row w-100 mt-4 mb-5 justify-content-center" >
                <button id="hid" class="btn mr-3 ml-3  p-2 pl-4 pr-4 " style="background-color: #F2C94C" onclick="buttonprint()">บันทึกใบสมัคร</button>
                <button id="hid" class="btn mr-3 ml-3 p-2 pl-4 pr-4 " style="background-color: #CCCCCC; color:#fff;" >ยกเลิก</button>
            </div>
        </div>
    </div>

@endsection

