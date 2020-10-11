@include('component.header')
@extends('layout.master')

@section('title', 'Portfolio')


@section('content')
    <div class="container">
        <div class="row">
            <div class="profile rounded col-12 d-flex flex-row mt-5 align-items-end">
                <div class="card p-3 col-3 offset-sm-1" style=" height: 340px">
                    <img class="card-img-top rounded" src='../access/images/photo-2.png' alt="Card image cap" style="height: 250px; border: 1px solid #c1c1c1">
                      <button type="summit" class="btn btn-light mt-2" style="width: 100%; border-radius: 20px;">+ Upload new photo</button>
                </div>
                <div class="profile-about col-7 mt-2 ">
                    <div class=" d-flex flex-column mb-4 ">
                        <div class=" d-flex flex-row justify-content-between">
                            <div class=" d-flex flex-column ">
                                <div class="name d-flex flex-column">
                                    <div class=" d-flex flex-row">
                                        <h1 style="font-size: 1.500em">ประสิทธิ์</h1>
                                        <h1 style="font-size: 1.500em">สงสว่างจ้า</h1>
                                    </div>
                                </div>
                                <div class="name ">
                                    <p>อโศก   ดินแดง   กรุงเทพมหานคร  10400</p>
                                </div>
                            </div>
                            <div class=" d-flex flex-row align-items-center">
                                <i class="fas fa-pen fa-lg p-2"></i>
                                <button class="btn btn-danger">บันทึกแฟ้มสะสมผลงาน</button>
                            </div>
                        </div>
                    </div>
                    <div class="aboutme rounded p-3 " style="border: 1px solid #c1c1c1">
                        <h1 style="font-size: 1.250em;   font-weight: bold;">แนะนำตัว</h1>
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
            <div class="contact col-3 pr-0 offset-sm-1 d-flex flex-column ">
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
                            <p class="m-0 p-2">อายุ 10 ปี</p>
                        </div>

                    </div>
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
                            <p class="m-0 p-2">อายุ 10 ปี</p>
                        </div>

                    </div>
                    <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                        <div class="">
                            <i class="fas fa-pen fa-sm p-2  rounded" style="border: solid 1px #000"></i>
                        </div>
                        <div >
                            <p class="m-0 p-2">อายุ 10 ปี</p>
                        </div>

                    </div>
                    <h2 class="mt-4" style="font-weight: 400; font-size: 0.875em;">ช่องทางการติดต่อ</h2>
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
                            <p class="m-0 p-2">อายุ 10 ปี</p>
                        </div>

                    </div>
                    <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                        <div class="">
                            <i class="fas fa-pen fa-sm p-2  rounded" style="border: solid 1px #000"></i>
                        </div>
                        <div >
                            <p class="m-0 p-2">อายุ 10 ปี</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

