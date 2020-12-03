{{-- @include('component.header') --}}
@extends('layout.master')

@section('title', 'Portfolio')


@section('content')
    <div class="container">
        <div class="row">
            <div class="profile rounded col-12 d-flex flex-row mt-5 align-items-start justify-content-between ">
                <div class="card p-3 col-3" style=" height: 340px">
                    <img class="card-img-top rounded" src='../access/images/people-1.png' alt="Card image cap" style="height: 250px;">
                      {{-- <button type="summit" class="btn btn-light mt-2" style="width: 100%; border-radius: 20px;">+ Upload new photo</button> --}}
                </div>
                <div class="profile-about col-9 h-100 d-flex flex-column justify-content-between">
                    <div class=" d-flex flex-column h-100 mb-4 ">
                        <div class=" d-flex flex-row h-100  justify-content-between ">
                            <div class=" d-flex flex-column border  mr-2" style="width: 70%">
                                <div class="name d-flex flex-column ">
                                    <div class=" d-flex flex-row align-content-center  pl-3 pr-2">
                                        <h1 class="p-1 m-0"  style="font-size: 1.500em">{{ Auth::user()->name }}</h1>
                                        <h1 class="p-1 m-0"  style="font-size: 1.500em; margin-left: 10px;">{{ Auth::user()->lastname }}</h1>
                                    </div>
                                </div>
                                @foreach($profiledatas as $profiledata)

                                
                    
                                <div class="name  pl-3 pr-2 mt-2">
                                    <p class="p-1 m-0 text-over-2" >{{ $profiledata->profile_location }}</p>
                                </div>
                                @endforeach
                            </div>
                            <div class="" style="width: 30%">
                                <div class=" d-flex flex-column w-100">
                                    <div class=" d-flex flex-row align-items-center justify-content-end ">
                                        <a href="/profileedit/{{ Auth::user()->id }}"><i class="fas fa-pen fa-lg p-2"></i></a>
                                        <button onclick="window.print();" class="btn " style="background-color: #F2C94C">
                                        <p class="p-0 m-0" style="font-size: 1em">บันทึกแฟ้มสะสมผลงาน</p>
                                        </button>
                                    </div>
                                    
                                    <div class=" d-flex flex-row  text-center pl-4 ml-2">
                                        <label class="switch m-0 mt-1">
                                            <input type="checkbox" class="success" id="customSwitch1">
                                            <span class="slider round"></span>
                                        </label>
                                        <div class=" d-flex align-items-center">
                                            <label for="customSwitch1" class="m-0 mt-1 ml-2" >หางาน</label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class=" font-weight-normal" style="font-size: 1.250em;   ">แนะนำตัว</h1>
                    <div class="aboutme rounded p-3 pb-2" style="border: 1px solid #c1c1c1">

                        <div class=" " style="height: 150px;">
                            @foreach($profiledatas as $profiledata)
                                <p class="p-0 m-0 text-over">
                                    {{ $profiledata->profile_aboutme }}
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-12 d-flex flex-row">
                <div class="contact col-3 pr-0 p-0  d-flex flex-column ">
                    <div class="contact-me pt-3">
                        <h2 style="font-weight: 400; font-size: 0.875em;">ข้อมูลส่วนตัว</h2>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#1787E2; border-radius: 5px;">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="color: #fff"></i>
                            </div>
                            <div >
                                @foreach($profiledatas as $profiledata)
                                <p class="m-0 p-2">อายุ {{ $profiledata->profile_age }} ปี</p>
                                @endforeach
                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#FF6660; border-radius: 5px;">
                                
                                <i class="fas fa-venus-mars fa-sm p-2  rounded" style="color: #fff"></i>
                            </div>
                            <div >
                                @foreach($profiledatas as $profiledata)
                                <p class="m-0 p-2">เพศ {{ $profiledata->profile_sex }}</p>
                                @endforeach
                                
                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#9B51E0; border-radius: 5px;">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="color: #fff"></i>
                            </div>
                            <div >
                                @foreach($profiledatas as $profiledata)
                                <p class="m-0 p-2">สัญชาติ {{ $profiledata->profile_instinct }} </p>
                                @endforeach
                                
                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#1787E2; border-radius: 5px;">
                                <i class="fas fa-map-marker-alt fa-sm p-2  rounded" style="width: 30px;color: #fff"></i>
                            </div>
                            <div >
                                @foreach($profiledatas as $profiledata)
                                <p class="m-0 p-2"> {{ $profiledata->profile_province }} </p>
                                @endforeach
                                
                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#5181B8; border-radius: 5px;">
                                
                                <i class="fas fa-graduation-cap fa-sm p-2  rounded" style="color: #fff"></i>
                            </div>
                            <div >
                                @foreach($profiledatas as $profiledata)
                                <p class="m-0 p-2"> {{ $profiledata->profile_education }} </p>
                                @endforeach
                                
                            </div>

                        </div>
                        <h2 class="mt-4" style="font-weight: 400; font-size: 0.875em;">ช่องทางการติดต่อ</h2>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#4267B2; border-radius: 5px;">
                                <i class="fab fa-facebook-f fa-sm p-2  rounded" style="color: #fff"></i>
                                
                            </div>
                            <div >
                                @foreach($profiledatas as $profiledata)
                                <p class="m-0 p-2"> {{ $profiledata->profile_facebook }} </p>
                                @endforeach
                                
                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#1DA1F2; border-radius: 5px;">
                                <i class="fas fa-phone-alt fa-sm p-2  rounded" style="color: #fff"></i>
                            </div>
                            <div >
                                @foreach($profiledatas as $profiledata)
                                <p class="m-0 p-2"> {{ $profiledata->profile_phone }} </p>
                                @endforeach
                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#5181B8; border-radius: 5px;">
                                <i class="fas fa-envelope fa-sm p-2  rounded" style="color: #fff"></i>
                            </div>
                            <div >
                                @foreach($profiledatas as $profiledata)
                                <p class="m-0 p-2"> {{ $profiledata->profile_email }} </p>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#3ACE01; border-radius: 5px;">
                                <i class="fab fa-line fa-sm p-2  rounded" style="color: #fff"></i>
                                
                            </div>
                            <div >
                                @foreach($profiledatas as $profiledata)
                                <p class="m-0 p-2"> {{ $profiledata->profile_line }} </p>
                                @endforeach
                                
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

