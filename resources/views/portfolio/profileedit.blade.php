{{-- @include('component.header') --}}
@extends('layout.master')

@section('title', 'Portfolio')


@section('content')
    <div class="container">
        <div class="row">

                {{-- {{ csrf_field() }}
                {{ method_field('POST') }} --}}
                <div class="profile rounded col-12 d-flex flex-row  mt-5 align-items-start">
                    {{-- << รูป profile >> --}}
                    <div class="card p-3 col-3" style=" height: 360px">
                        @foreach($avatar_images as $avatar_image)
                        <img class="card-img-top rounded" src='../avatar/{{ $avatar_image->avatar_path }}' alt="Card image cap" style="height: 250px;">
                        @endforeach
                        <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <input type="file" name="image" >
                                <button type="submit" class="btn btn-light mt-2" style="width: 100%; border-radius: 20px;">+ Upload new photo</button>
                        </form>
                    </div>
                    {{-- << รูป profile >> --}}
                    {{-- <<อัพเดท profile >> --}}
                    <div class="d-flex flex-column col-9">
                        <form class=" form-group w-100 d-flex flex-row" action="/updateFnameSname" method="get" enctype="multipart/form-data">
                            <div class="profile-about col-12 h-100 d-flex flex-column justify-content-between">
                                <div class=" d-flex flex-column h-100 mb-4 ">
                                    <div class=" d-flex flex-row h-100  justify-content-between ">
                                        <div class=" d-flex flex-column border  mr-2" style="width: 100%">
                                            <div class="name d-flex flex-column ">
                                                <div class=" d-flex flex-column align-content-center  pl-0 pr-0">

                                                    <div class=" d-flex flex-row col-12 ml-0 pt-2 pb-2 ml-0 mr-0">
                                                                <div class="ml-1 mr-1 pl-0 w-100">
                                                                    <input type="text" class=" border-input"  name="name" maxlength="30" id="name" aria-describedby="name" placeholder="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}">
                                                                </div>
                                                                <div class="ml-1 mr-1  pl-0 w-100">
                                                                    <input type="text" class=" border-input" name="lastname" maxlength="30" id="lastname" aria-describedby="lastname" placeholder="{{ Auth::user()->lastname }}" value="{{ Auth::user()->lastname }}">
                                                                </div>
                                                    </div>

                                                </div>
                                            </div> {{-- /// ชื่อ สกุล //// --}}
                                            <div class="name  pl-3 pr-2 mt-2">
                                                <div class="form-group form-row d-flex align-items-center   ">
                                                    <div class="col-12 d-flex flex-row">
                                                        <div class="col-12  pl-0">
                                                            <input type="text" class="border-input " style="width: 100%" name="profile_location" maxlength="30" id="profile_location"
                                                            aria-describedby="profile_location" placeholder="ระบุที่อยู่ แขวง/ แขต/ จังหวัด/ รหัสไปรษณีย์"
                                                            @foreach($users as $user)
                                                                value={{ $user->profile_location }}
                                                            @endforeach
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> {{-- //ที่อยู่ --}}
                                        </div>
                                        <div class="" style="width: 20%">
                                            <div class=" d-flex flex-column w-100">
                                                <div class=" d-flex flex-row align-items-center justify-content-start ">

                                                    <button  class="btn " style="background-color: #F2C94C">
                                                    <p class="p-0 m-0" style="font-size: 1em">บันทึกการแก้ไข</p>
                                                    </button>
                                                </div>

                                                <div class=" d-flex flex-row  text-center ">
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
                            </div>

                        </form>
                        <div class="col-12">
                            <h1 class=" font-weight-normal" style="font-size: 1.250em;   ">แนะนำตัว</h1>
                            <input type="text" class="form-control input-lg aboutme rounded p-3 pb-2" style="width: 100%; height: 100%;" name="profile_aboutme"
                                id="profile_aboutme" aria-describedby="profile_aboutme" placeholder="แนะนำตัว"
                                @foreach($users as $user)
                                    value={{ $user->profile_aboutme }}
                                @endforeach
                                >
                        </div>
                    </div>

                    </div>

                    {{-- <<อัพเดท profile >> --}}
                </div>
                <div class=" col-12 d-flex flex-row">
                    <div class="contact col-3 pr-0 p-0  d-flex flex-column ">
                        <div class="contact-me pt-3">
                            <h2 style="font-weight: 400; font-size: 0.875em;">ข้อมูลส่วนตัว</h2>
                            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                                <div class="" style="width: 30px ;background:#1787E2; border-radius: 5px;">
                                    <i class="fas fa-pen fa-sm p-2  rounded" style="color: #fff"></i>
                                </div>
                                <div class=" d-flex flex-row">
                                    <p class="m-0 p-2">อายุ </p>
                                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_age"
                                id="profile_age" aria-describedby="profile_age" placeholder="อายุ"
                                @foreach($users as $user)
                                value={{ $user->profile_age }}
                                @endforeach
                                >

                                </div>

                            </div>
                            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                                <div class="" style="width: 30px ;background:#FF6660; border-radius: 5px;">

                                    <i class="fas fa-venus-mars fa-sm p-2  rounded" style="color: #fff"></i>
                                </div>
                                <div class=" d-flex flex-row">
                                    <p class="m-0 p-2">เพศ </p>
                                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_sex"
                                id="profile_sex" aria-describedby="profile_sex" placeholder=""
                                @foreach($users as $user)
                                value={{ $user->profile_sex }}
                                @endforeach
                                >

                                </div>

                            </div>
                            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                                <div class="" style="width: 30px ;background:#9B51E0; border-radius: 5px;">
                                    <i class="fas fa-pen fa-sm p-2  rounded" style="color: #fff"></i>
                                </div>
                                <div class=" d-flex flex-row">
                                    <p class="m-0 p-2">สัญชาติ</p>
                                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_instinct"
                                id="profile_instinct" aria-describedby="profile_instinct" placeholder=""
                                @foreach($users as $user)
                                value={{ $user->profile_instinct }}
                                @endforeach
                                >

                                </div>

                            </div>
                            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                                <div class="" style="width: 30px ;background:#1787E2; border-radius: 5px;">
                                    <i class="fas fa-map-marker-alt fa-sm p-2  rounded" style="width: 30px;color: #fff"></i>
                                </div>
                                <div class=" d-flex flex-row">
                                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_province"
                                id="profile_province" aria-describedby="profile_province" placeholder="จังหวัดที่อยู่"
                                @foreach($users as $user)
                                value={{ $user->profile_province }}
                                @endforeach
                                >
                                </div>


                            </div>
                            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                                <div class="" style="width: 30px ;background:#5181B8; border-radius: 5px;">

                                    <i class="fas fa-graduation-cap fa-sm p-2  rounded" style="color: #fff"></i>
                                </div>
                                <div class=" d-flex flex-row">
                                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_education"
                                id="profile_education" aria-describedby="profile_education" placeholder="การศึกษา"
                                @foreach($users as $user)
                                value={{ $user->profile_education }}
                                @endforeach
                                >
                                </div>

                            </div>
                            <h2 class="mt-4" style="font-weight: 400; font-size: 0.875em;">ช่องทางการติดต่อ</h2>
                            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                                <div class="" style="width: 30px ;background:#4267B2; border-radius: 5px;">
                                    <i class="fab fa-facebook-f fa-sm p-2  rounded" style="color: #fff"></i>

                                </div>
                                <div class=" d-flex flex-row">
                                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_facebook"
                                id="profile_facebook" aria-describedby="profile_facebook" placeholder="ระบุ facebook"
                                @foreach($users as $user)
                                value={{ $user->profile_facebook }}
                                @endforeach
                                >
                                </div>

                            </div>
                            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                                <div class="" style="width: 30px ;background:#1DA1F2; border-radius: 5px;">
                                    <i class="fas fa-phone-alt fa-sm p-2  rounded" style="color: #fff"></i>
                                </div>
                                <div class=" d-flex flex-row">
                                    <input type="text" class="form-control outline-none aboutme rounded " pattern="[0]{1}[0-9]{9}" maxlength="10" style="width: 100%;height: 100%;" name="profile_phone"
                                id="profile_phone" aria-describedby="profile_phone" placeholder="ระบุเบอร์โทร"
                                @foreach($users as $user)
                                value="0{{ $user->profile_phone }}"
                                @endforeach
                                >
                                </div>

                            </div>
                            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                                <div class="" style="width: 30px ;background:#5181B8; border-radius: 5px;">
                                    <i class="fas fa-envelope fa-sm p-2  rounded" style="color: #fff"></i>
                                </div>
                                <div class=" d-flex flex-row">
                                    <input type="email" maxlength="40" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_email"
                                id="profile_email" aria-describedby="profile_email" placeholder="ระบุ E-mail"
                                @foreach($users as $user)
                                value={{ $user->profile_email }}
                                @endforeach
                                >
                                </div>
                            </div>
                            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                                <div class="" style="width: 30px ;background:#3ACE01; border-radius: 5px;">
                                    <i class="fab fa-line fa-sm p-2  rounded" style="color: #fff"></i>

                                </div>
                                <div class=" d-flex flex-row">
                                    <input type="text" maxlength="40" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_line"
                                id="profile_line" aria-describedby="profile_line" placeholder="ระบุ Line ID"
                                @foreach($users as $user)
                                value={{ $user->profile_line }}
                                @endforeach
                                >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" d-flex flex-column w-100 col-12 p-0 m-0">
                        <div class="col-9 d-flex flex-column">
                            <h1 class="m-0 mt-2 p-0 font-weight-normal" style="font-size: 1.250em;   font-weight: bold;">คอร์สที่เรียนจบ</h1>
                            {{-- //เริ่ม  ทั้ทงหมด --}}

                            <div class="mt-2  p-0 pl-3 pb-4 pr-3 m-0 d-flex flex-column position-relative" style="border-radius: 15px; border: solid 1px #c1c1c1;">
                                <ul class="p-0 m-0">
                                    <li class="p-0 m-0">
                                        @foreach($imagecourses as $imagecourse)
                                        <div class=" d-flex flex-row pt-4">
                                            <div class=" d-flex flex-column w-50 ml-2" >
                                                <h1 class="m-0 p-0 font-weight-normal" style="font-size: 1.250em;">รุ่นที่ {{$imagecourse->generation}}</h1>
                                                <p class="m-0 p-0 font-weight-light" style="font-size: 1em;">ม.ค.2563 - ก.พ.2563</p>
                                            </div>
                                            <div class=" d-flex flex-column w-50">
                                                <h1 class="m-0 p-0 font-weight-normal" style="font-size: 1.250em;">{{$imagecourse->corse_name}}</h1>
                                                <p class="m-0 p-0 font-weight-light" style="font-size: 1em;">{{$imagecourse->location}}</p>
                                            </div>
                                        </div>

                                        <div class=" d-flex flex-row p-0 m-0 col-12 flex-wrap  justify-content-start ">
                                            <ul class=" d-flex flex-row p-0 m-0 col-12 flex-wrap justify-content-start " id="listlimited">
                                                @foreach ($imagecoursefinals as $imagecoursefinal)
                                                @if($imagecourse->course_final_id == $imagecoursefinal->course_final_id)
                                                <li class=" col-3 p-0 m-0 mt-2 " id="myList" style="height:150px; border-radius:10px;">
                                                <a class="con-img"  onclick="deleteimages({{$imagecoursefinal->course_final_images_id}})">

                                                        <img class="hover-image" src="../courseimages/{{$imagecoursefinal->images_path}}"  alt="" style="width: 90%; height:150px;border-radius: 10px;">

                                                    <div class="overlay">
                                                        <div class="overred d-flex justify-content-center align-items-center ">
                                                            <div class="icon">
                                                                <i class="fas fa-trash-alt fa-sm "></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </li>
                                                @endif
                                                @endforeach
                                                <li class="col-3 p-0 m-0 mt-2" id="myList">
                                                    <label class="col-12 p-0 m-0" style="cursor: pointer;"  data-toggle="modal" data-target="#exampleModalCenter">
                                                        <div  class="bg-light d-flex flex-row justify-content-center align-items-center"   style="width: 90%; height:150px; border-radius:10px;" >
                                                                <i class="fas fa-plus bg-danger mr-1 ml-1 p-2" style="border-radius: 20px;color:#fff;"></i>
                                                                <p class="p-0 m-0">เพิ่มรูป</p>
                                                        </div>
                                                    </label>
                                                </li>
                                            </ul>
                                            <ul class=" mt-3 mb-3 w-100" style="border: solid 1px #c1c1c1"></ul>
                                        </div>
                                        @endforeach
                                    </li>
                                </ul>
                                {{-- <a id="opener" > --}}
                                <label id="addExp" class=" p-0 m-0 ">
                                    <div class=" p-0 m-0 d-flex justify-content-center align-items-center text-center" style="width: 100%; height:50px; border-radius:10px;background-color: #8541B4;color:#fff;cursor: pointer;">เพิ่มประสบการณ์</div>
                                </label>
                            </div>

                        </div>
                        <div class="col-9 d-flex flex-column">
                            <h1 class="m-0 mt-2 p-0 font-weight-normal mt-4" style="font-size: 1.250em;   font-weight: bold;">ประสบการณ์ทำงาน</h1>
                            <div class="mt-2  p-0 pl-3 pb-4 pr-3 m-0 d-flex flex-column position-relative" style="border-radius: 15px; border: solid 1px #c1c1c1;">
                               @foreach ($expworks as $expwork)
                               <ul class="p-0 m-0">
                                <li class="p-0 m-0">
                                    <div class=" d-flex flex-row pt-4">
                                        <div class=" d-flex flex-column w-50 ml-2" >
                                            <h1 class="m-0 p-0 font-weight-normal" style="font-size: 1.250em;">{{$expwork->company}}</h1>
                                            {{-- <p class="m-0 p-0 font-weight-light" style="font-size: 1em;">ม.ค.2563 - ก.พ.2563</p> --}}
                                        </div>
                                        <div class=" d-flex flex-column w-50">
                                            <h1 class="m-0 p-0 font-weight-normal" style="font-size: 1.250em;">{{$expwork->position}}</h1>
                                            <p class="m-0 p-0 font-weight-light" style="font-size: 1em;">{{$expwork->province}}</p>
                                        </div>
                                    </div>
                                    <div class=" mt-3 mb-3 w-100" style="border: solid 1px #c1c1c1"></div>
                                </li>
                            </ul>
                               @endforeach

                                <label data-toggle="modal" data-target="#Expwork" class=" p-0 m-0 ">
                                    <div class=" p-0 m-0 d-flex justify-content-center align-items-center text-center" style="width: 100%; height:50px; border-radius:10px;background-color: #8541B4;color:#fff;cursor: pointer;">เพิ่มประสบการณ์ทำงาน</div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div id="insertimage" title="show" style="display: none">
                <form method="get" action="addExpp/'sadasd'/'asda'" enctype="multipart/form-data">
                    <ul class="m-0 p-0 text-left">
                        <li class="m-0 p-0">
                            <p class=" p-0 m-0 mt-2 mb-2">รุ่นที่</p>
                            <input id="swal-input1" name="generation" class="swal2-input m-0">
                        </li>
                        <li>
                            <p class=" p-0 m-0 mt-2 mb-2">ชื่อหลักสูตร</p>
                            <input id="swal-input2" name="corse_name" class="swal2-input m-0">
                        </li>
                        <li>
                            <p class=" p-0 m-0 mt-2 mb-2">สถานที่ศึกษาจบ</p>
                            <input id="swal-input3" name="location" class="swal2-input m-0">
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
                </form>

                <form method="post" action="{{url('filecourse')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                      <div class="input-group hdtuto control-group lst increment" >
                        <input type="file" name="images[]" class="myfrm form-control">
                        <div class="input-group-btn">
                          <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                      </div>
                      <div class="clone hide">
                        {{-- <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                          <input type="file" name="images[]" class="myfrm form-control">
                          <div class="input-group-btn">
                            <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                          </div>
                        </div> --}}
                      </div>


                      <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
                </form>


            </div>


            <div class="" id="updateimages" title="update" style="display: none">
                <form method="post" action="{{url('filecourse')}}" enctype="multipart/form-data">
                    {{csrf_field()}}

                        <div class="input-group hdtuto control-group lst increment d-flex flex-row " >
                            <div class=" col-12">
                                <ul class=" d-flex flex-row p-0 m-0 col-12 flex-wrap justify-content-start " id="listlimited">
                                    @foreach ($imagecoursefinals as $imagecoursefinal)
                                    <li class=" col-3 p-0 m-0 mt-2 " id="myList" style="height:150px; border-radius:10px;" >
                                    <a class="con-img"  onclick="deleteimages({{$imagecoursefinal->course_final_images_id}})">
                                        <img class="hover-image" src="../courseimages/{{$imagecoursefinal->images_path}}"  alt="" style="width: 90%; height:150px;border-radius: 10px;">
                                        <div class="overlay">
                                            <div class="overred d-flex justify-content-center align-items-center ">
                                                <div class="icon">
                                                    <i class="fas fa-trash-alt fa-sm "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                            {{-- <button onclick=""></button> --}}
                                    </li>
                                    @endforeach

                                </ul>
                            </div>

                            <div class="input-group-btn">
                              <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                            </div>
                        </div>

                      <div class="clone hide">
                        {{-- <div class="hdtuto control-group lst input-group"  style="margin-top:10px">
                          <input type="file" name="updateimages[]" class="myfrm form-control">
                          <div class="input-group-btn">
                            <button class="btn btn-danger" id="removeall" type="button">
                                <i class="fldemo glyphicon glyphicon-remove"></i> Remove
                            </button>
                          </div>
                        </div> --}}
                      </div>


                      <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
                </form>

            </div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มรูป</h5>

      </div>
      <div class="modal-body">

        <form method="post" action="{{url('filecourse/83')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{-- @foreach($imagecourses as $imagecourse) --}}
                <div class="input-group hdtuto control-group lst increment d-flex flex-row " >
                    <div class=" col-12">
                        <ul class=" d-flex flex-row p-0 m-0 col-12 flex-wrap justify-content-start " id="listlimited">
                            @foreach ($imagecoursefinals as $imagecoursefinal)
                            @if($imagecourse->course_final_id == $imagecoursefinal->course_final_id)
                                <li class=" col-3 p-0 m-0 mt-2 " id="myList" style="height:150px; border-radius:10px;" >
                                <a class="con-img"  onclick="deleteimages({{$imagecoursefinal->course_final_images_id}})">
                                    <img class="hover-image" src="../courseimages/{{$imagecoursefinal->images_path}}"  alt="" style="width: 90%; height:150px;border-radius: 10px;">
                                    <div class="overlay">
                                        <div class="overred d-flex justify-content-center align-items-center ">
                                            <div class="icon">
                                                <i class="fas fa-trash-alt fa-sm "></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>

                    <div class="input-group-btn mt-2 mb-2">
                      <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                    </div>
                </div>
                {{-- @endforeach --}}
              <div class="clone hide">
                {{-- <div class="hdtuto control-group lst input-group"  style="margin-top:10px">
                  <input type="file" name="updateimages[]" class="myfrm form-control">
                  <div class="input-group-btn">
                    <button class="btn btn-danger" id="removeall" type="button">
                        <i class="fldemo glyphicon glyphicon-remove"></i> Remove
                    </button>
                  </div>
                </div> --}}
              </div>
              <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- Modal exp work -->
<div class="modal fade" id="Expwork" tabindex="-1" role="dialog" aria-labelledby="Expwork" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มประสบการณ์ทำงาน</h5>
        </div>
        <div class="modal-body">
          <form method="post" action="{{url('expwork')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <ul class="m-0 p-0 text-left">
                <li class="m-0 p-0">
                    <p class=" p-0 m-0 mt-2 mb-2">ตำแหน่ง</p>
                    <input id="position" name="position" class="swal2-input m-0" placeholder="ระบุตำแหน่ง" required>
                </li>
                <li>
                    <p class=" p-0 m-0 mt-2 mb-2">ชื่อบริษัท</p>
                    <input id="company" name="company" class="swal2-input m-0" placeholder="ระบุชื่อบริษัท" required>
                </li>
                <li>
                    <p class=" p-0 m-0 mt-2 mb-2">สถานที่ตั้งบริษัท</p>
                    <input id="county" name="county" class="swal2-input m-0" placeholder="ระบุเขต" required>
                    <input id="province" name="province" class="swal2-input m-0" placeholder="ระบุจังหวัด" required>
                </li>
                <li>
                    <p class=" p-0 m-0 mt-2 mb-2">ระยะเวลาทำงาน</p>
                    <input id="year" name="year" class="swal2-input m-0" placeholder="ระบุจำนวนปี" required>
                    <input id="month" name="month" class="swal2-input m-0" placeholder="ระบุจำนวนเดือน" required>
                </li>
            </ul>
                <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- Modal exp work  end -->
        </div>
</div>




    @endsection

