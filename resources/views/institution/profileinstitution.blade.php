{{-- @include('component.header') --}}

@extends('layout.master')

@section('title', 'institution')

@section('content')
    <div class="container">
        <div class="row">
            <div class="profile rounded col-12 d-flex flex-row mt-5 mb-4 align-items-end">
                <div class=" p-3 col-3">
                    <img class="card-img-top  rounded-circle" src='../access/images/photo-9.png' alt="Card image cap" style="height: 250px; border: 1px solid #c1c1c1">

                </div>
                <div class="profile-about col-7 mt-2 ">
                    <div class=" d-flex flex-column  ">
                        <div class=" d-flex flex-row justify-content-between">
                            <div class=" d-flex flex-column ">
                                <div class="name d-flex flex-column">
                                    <div class=" d-flex flex-row">

                                    </div>
                                </div>
                                <div class="name ml-3">
                                    <h2 style="color: #69299C;">Foodpandy</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="aboutme rounded p-3 " >
                        <div class=" d-flex flex-row">
                            <h1 style="font-size: 1.250em;   font-weight: 400;">คอร์สเรียนทั้งหมด</h1>
                            <h1 class="ml-2" style="font-size: 1.250em;   font-weight: 400; color: #69299C;">15</h1>
                        </div>
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

                <div class="d-flex flex-row w-100 text-institution align-items-end justify-content-between">
                        <h1 class="p-0 m-0 ml-2" style="font-size: 1.750em;">คอร์สเรียนสอนโดย Foodpandy</h1>
                        <div class=" d-flex flex-row">
                            <p class="p-0 m-2"></p>
                        </div>
                </div>
                <div class="col-12 p-0 m-0">
                    <?php
                        for ($i = 1; $i <= 12; $i++) {
                    ?>
                        <div class=" col-4  p-2   float-left " >
                            <div class="  ">
                                <img src="{{ asset('/access/images/photo-5.png') }}" class="insutition-all">
                                <div class="  d-flex flex-column text-insutition pl-3 pt-" style="">
                                    <div class=" d-flex justify-content-between mt-2">
                                        <p class="" style="font-size: 1em;">เบเกอรี่</p>
                                        <p class=" mr-3" style="font-size: 1em;">ฟรี</p>
                                    </div>
                                    <div class=" d-flex flex-row ">
                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                        <p class="ml-2 mr-2 mb-1 p-0">จ-ศ 9:00 - 15:00</p>
                                    </div>
                                    <div class=" d-flex justify-content-between">
                                        <div class=" d-flex flex-row ">
                                            <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                            <p class="ml-2 mr-2">90 ชั่วโมง</p>
                                        </div>
                                        <p class=" mr-3" style="font-size: 1em;">ศูนย์ฝึกอาชีพเขตมีนบุรี</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <div class=" d-flex w-100 flex-row align-items-center justify-content-center ">
                    <a href="#" class=" d-flex flex-row align-items-center justify-content-center">
                        <p class=" text-center mt-3">แสดงเพิ่มเติม</p>
                        <i class="fas fa-chevron-down ml-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
