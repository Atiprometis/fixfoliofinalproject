{{-- @include('component.header') --}}
@extends('layout.master')

@section('title', 'Portfolio')


@section('content')
    <div class="container">
        <div class="row">
            <div class="profile rounded col-12 d-flex flex-row mt-5 align-items-end">
                <div class="card p-3 col-3" style=" height: 340px">
                    <img class="card-img-top rounded" src='../access/images/people-1.png' alt="Card image cap" style="height: 250px; border: 1px solid #c1c1c1">
                      <button type="summit" class="btn btn-light mt-2" style="width: 100%; border-radius: 20px;">+ Upload new photo</button>
                </div>
                <div class="profile-about col-9 mt-2 ">
                    <div class=" d-flex flex-column mb-4 ">
                        <div class=" d-flex flex-row justify-content-between">
                            <div class=" d-flex flex-column ">
                                <div class="name d-flex flex-column">
                                    <div class=" d-flex flex-row">
                                        <h1 style="font-size: 1.500em">{{ Auth::user()->name }}</h1>
                                        <h1 style="font-size: 1.500em; margin-left: 10px;">{{ Auth::user()->lastname }}</h1>
                                    </div>
                                </div>
                                <div class="name ">
                                    <p>อโศก   ดินแดง   กรุงเทพมหานคร  10400</p>
                                </div>
                            </div>
                            <div class=" d-flex flex-row align-items-center">
                                <a href="#"><i class="fas fa-pen fa-lg p-2"></i></a>
                                <button onclick="window.print();" class="btn " style="background-color: #F2C94C">บันทึกแฟ้มสะสมผลงาน</button>
                            </div>
                        </div>
                    </div>
                    <h1 class=" font-weight-normal" style="font-size: 1.250em;   ">แนะนำตัว</h1>
                    <div class="aboutme rounded p-3 " style="border: 1px solid #c1c1c1">

                        <div class="about-text" style="height: 150px">
                            มหภาคเมี่ยงคำสไลด์เซาท์ ซัมเมอร์สมาพันธ์แจ็กพ็อตยากูซ่าแครอท บัลลาสต์สุริยยาตร
                            ราเม็งซื่อบื้อวิทย์งี้ โปรเจ็คท์อุปัทวเหตุไงปาสกาล ออโต้ แบตแคนูอึ้มแป๋ว มายองเนสซัพพลาย
                            ไฮกุมาราธอนเลกเชอร์แอสเตอร์คลาสสิก ทริปเซ็กซ์แจ็กเก็ต โมเต็ลแชมเปญติ๋มแพลน แบล็ก
                            มหภาคเมี่ยงคำสไลด์เซาท์ ซัมเมอร์สมาพันธ์แจ็กพ็อตยากูซ่าแครอท บัลลาสต์สุริยยาตร
                            ราเม็งซื่อบื้อวิทย์งี้ โปรเจ็คท์อุปัทวเหตุไงปาสกาล ออโต้ แบตแคนูอึ้มแป๋ว มายองเนสซัพพลาย

                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-12 d-flex flex-row">
                <div class="contact col-3 pr-0 p-0  d-flex flex-column ">
                    <div class="contact-me pt-3">
                        <h2 style="font-weight: 400; font-size: 0.875em;">ข้อมูลส่วนตัว</h2>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="border: solid 1px #000"></i>
                            </div>
                            <div >
                                <p class="m-0 p-2">อายุ 10 ปี</p>
                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="border: solid 1px #000"></i>
                            </div>
                            <div >
                                <p class="m-0 p-2">เพศ ชาย</p>
                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="border: solid 1px #000"></i>
                            </div>
                            <div >
                                <p class="m-0 p-2">สัญชาติ  ไทย</p>
                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="border: solid 1px #000"></i>
                            </div>
                            <div >
                                <p class="m-0 p-2">จตุจักร  กรุงเทพมหานคร</p>
                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="border: solid 1px #000"></i>
                            </div>
                            <div >
                                <p class="m-0 p-2">ปริญญาตรี</p>
                            </div>

                        </div>
                        <h2 class="mt-4" style="font-weight: 400; font-size: 0.875em;">ช่องทางการติดต่อ</h2>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="border: solid 1px #000"></i>
                            </div>
                            <div >
                                <p class="m-0 p-2">aaaaPrasit</p>
                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="border: solid 1px #000"></i>
                            </div>
                            <div >
                                <p class="m-0 p-2">081-123-4567</p>
                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="border: solid 1px #000"></i>
                            </div>
                            <div >
                                <p class="m-0 p-2">VKontakte@gmail.com</p>
                            </div>
                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="border: solid 1px #000"></i>
                            </div>
                            <div >
                                <p class="m-0 p-2">Line ID</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" d-flex flex-column w-100 col-12 p-0 m-0">
                    <div class="col-9 d-flex flex-column">
                        <h1 class="m-0 mt-2 p-0 font-weight-normal" style="font-size: 1.250em;   font-weight: bold;">คอร์สที่เรียนจบ</h1>
                        <div class="mt-2  p-0 pl-3 pb-4 pr-3 m-0 d-flex flex-column position-relative" style="border-radius: 15px; border: solid 1px #c1c1c1;">
                            <div class=" d-flex flex-row pt-4">
                                <div class=" d-flex flex-column w-50 ml-2" >
                                    <h1 class="m-0 p-0 font-weight-normal" style="font-size: 1.250em;">รุ่นที่ 10</h1>
                                    <p class="m-0 p-0 font-weight-light" style="font-size: 1em;">ม.ค.2563 - ก.พ.2563</p>
                                </div>
                                <div class=" d-flex flex-column w-50">
                                    <h1 class="m-0 p-0 font-weight-normal" style="font-size: 1.250em;">เบเกอรี่</h1>
                                    <p class="m-0 p-0 font-weight-light" style="font-size: 1em;">ศูนย์ฝึกอาชีพ จตุจักร</p>
                                </div>
                            </div>
                            <div class=" d-flex flex-row  w-100 flex-wrap  justify-content-start ">
                               <?php
                                for($i=0; $i<8; $i++){
                               ?>

                                    <div class=" bg-info m-1 mr-auto ml-auto" style="width: 23%; height:125px; border-radius:10px;" >
                                        <img src="" alt="">
                                    </div>

                               <?php
                                }
                                ?>
                            </div>
                            <div class=" mt-3 mb-3 w-100" style="border: solid 1px #c1c1c1"></div>
                        </div>
                    </div>
                    <div class="col-9 d-flex flex-column">
                        <h1 class="m-0 mt-2 p-0 font-weight-normal mt-4" style="font-size: 1.250em;   font-weight: bold;">ประสบการณ์ทำงาน</h1>
                        <div class="mt-2  p-0 pl-3 pb-4 pr-3 m-0 d-flex flex-column position-relative" style="border-radius: 15px; border: solid 1px #c1c1c1;">
                            <div class=" d-flex flex-row pt-4">
                                <div class=" d-flex flex-column w-50 ml-2" >
                                    <h1 class="m-0 p-0 font-weight-normal" style="font-size: 1.250em;">ร้านอาหาร กอขอคองอจอฉอ</h1>
                                    {{-- <p class="m-0 p-0 font-weight-light" style="font-size: 1em;">ม.ค.2563 - ก.พ.2563</p> --}}
                                </div>
                                <div class=" d-flex flex-column w-50">
                                    <h1 class="m-0 p-0 font-weight-normal" style="font-size: 1.250em;">เบเกอรี่</h1>
                                    <p class="m-0 p-0 font-weight-light" style="font-size: 1em;">ศูนย์ฝึกอาชีพ จตุจักร</p>
                                </div>
                            </div>
                            <div class=" mt-3 mb-3 w-100" style="border: solid 1px #c1c1c1"></div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection

