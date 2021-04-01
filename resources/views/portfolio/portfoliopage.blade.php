@extends('layout.master')

@section('title', 'Portfolio')


@section('content')
    <div class="container">
        <div class="row">
            <div class=" d-flex flex-row justify-content-end col-md-12">
                <div class=" d-flex flex-row align-items-center  justify-content-center ">
                    <a href="/profileedit" class="btn d-flex  flex-row align-items-center  justify-content-center" style="color: #000;">
                        <i class="fas fa-pen fa-lg p-2"></i>
                        <p class="p-0 m-0">แก้ไขประวัติ</p>
                    </a>

                </div>
                {{-- <div class=" d-flex flex-row  text-center pl-4 ml-2">
                    <label class="switch m-0 mt-1">
                        <input type="checkbox" class="success" id="customSwitch1">
                        <span class="slider round"></span>
                    </label>
                    <div class=" d-flex align-items-center">
                        <label for="customSwitch1" class="m-0 mt-1 ml-2" >หางาน</label>
                    </div>
                </div> --}}
            </div>
            <div class="profile rounded col-12 d-flex flex-row flex-wrap mt-2 align-items-start justify-content-between ">
                <div class="card p-3 col-12 col-md-5 col-lg-3" style=" height: 340px">

                    @if ($avatar_images[0]['avatar_path'] != null)
                    @foreach($avatar_images as $avatar_image)

                        <img class="card-img-top rounded" src='../avatar/{{ Auth::user()->id }}/{{ $avatar_image->avatar_path }}' alt="Card image cap" style="height: 250px;">
                    @endforeach

                    @else
                        <img class="card-img-top rounded" src='../access/imageweb/user2.png' alt="Card image cap" style="height: 250px;">
                    @endif

                </div>
                <div class="profile-about col-12 col-md-7 col-lg-9 p-0 m-0 pl-md-4 pt-3 pt-md-0 d-flex flex-column justify-content-between">
                    <div class=" d-flex flex-column   mb-4 ">
                        <div class=" d-flex flex-row   justify-content-between ">
                            <div class=" d-flex flex-column border col-12 p-0 rounded " style="width: 100%;">
                                <div class="name d-flex flex-column ">
                                    <div class=" d-flex flex-row align-content-center  pl-3 pr-2">
                                        <h1 class="p-1 pt-2 m-0"  style="font-size: 1.500em">{{ Auth::user()->name }}</h1>
                                        <h1 class="p-1 pt-2 m-0"  style="font-size: 1.500em; margin-left: 10px;">{{ Auth::user()->lastname }}</h1>
                                    </div>
                                </div>
                                <div class="name  pl-3 pr-2 mt-2">
                                    <p class="p-1 m-0 text-over-2" >{{ $profiledatas['profile_location'] }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <h1 class=" font-weight-normal" style="font-size: 1.250em;   ">แนะนำตัว</h1>
                    <div class="aboutme rounded p-1 pb-1" style="border: 1px solid #c1c1c1">

                        <div class=" " style="height: auto;">

                                <p class="p-3 m-0 text-over">
                                    {{ $profiledatas['profile_aboutme']}}
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-12 d-flex flex-row flex-wrap">
                <div class="contact col-12 col-md-12 col-lg-3 pr-0 p-0  d-flex d-lg-block flex-row  flex-wrap">
                    <div class="col-12 col-md-6 col-lg-12 pt-3 p-0 m-0 pr-0 pl-0 pl-md-1 pr-md-1  ">
                        <h2 style="font-weight: 400; font-size: 0.875em;">ข้อมูลส่วนตัว</h2>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#1787E2; border-radius: 5px;">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="color: #fff"></i>
                            </div>
                            <div >

                                <p class="m-0 p-2">อายุ : {{ $profiledatas['profile_age'] }} ปี</p>

                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#FF6660; border-radius: 5px;">

                                <i class="fas fa-venus-mars fa-sm p-2  rounded" style="color: #fff"></i>
                            </div>
                            <div >

                                <p class="m-0 p-2">เพศ : {{ $profiledatas['profile_sex'] }}</p>


                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#9B51E0; border-radius: 5px;">
                                <i class="fas fa-pen fa-sm p-2  rounded" style="color: #fff"></i>
                            </div>
                            <div >

                                <p class="m-0 p-2">สัญชาติ : {{ $profiledatas['profile_instinct'] }} </p>


                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#1787E2; border-radius: 5px;">
                                <i class="fas fa-map-marker-alt fa-sm p-2  rounded" style="width: 30px;color: #fff"></i>
                            </div>
                            <div >

                                <p class="m-0 p-2">จังหวัด : {{ $profiledatas['profile_province'] }} </p>


                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#5181B8; border-radius: 5px;">

                                <i class="fas fa-graduation-cap fa-sm p-2  rounded" style="color: #fff"></i>
                            </div>
                            <div >

                                <p class="m-0 p-2">การศึกษา : {{ $profiledatas['profile_education'] }} </p>


                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-12 p-0 m-0 pr-0 pl-0 pl-md-1 pr-md-1 ">
                        <h2 class="mt-3" style="font-weight: 400; font-size: 0.875em;">ช่องทางการติดต่อ</h2>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#4267B2; border-radius: 5px;">
                                <i class="fab fa-facebook-f fa-sm p-2  rounded" style="color: #fff"></i>

                            </div>
                            <div >

                                <p class="m-0 p-2"> {{ $profiledatas['profile_facebook'] }} </p>


                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#1DA1F2; border-radius: 5px;">
                                <i class="fas fa-phone-alt fa-sm p-2  rounded" style="color: #fff"></i>
                            </div>
                            <div >

                                <p class="m-0 p-2">{{ $profiledatas['profile_phone'] }} </p>

                            </div>

                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#5181B8; border-radius: 5px;">
                                <i class="fas fa-envelope fa-sm p-2  rounded" style="color: #fff"></i>
                            </div>
                            <div >

                                <p class="m-0 p-2">อีเมลล์ : {{ $profiledatas['profile_email'] }}  </p>


                            </div>
                        </div>
                        <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                            <div class="" style="width: 30px ;background:#3ACE01; border-radius: 5px;">
                                <i class="fab fa-line fa-sm p-2  rounded" style="color: #fff"></i>

                            </div>
                            <div >

                                <p class="m-0 p-2">Line : {{ $profiledatas['profile_line'] }} </p>


                            </div>
                        </div>
                    </div>
                </div>

                <div class=" d-flex  col-12 col-lg-9 p-0 m-0">
                        @include('portfolio.component.port-exp')

                </div>
            </div>

        </div>
    </div>


@endsection

{{-- @include('footer.footer') --}}
