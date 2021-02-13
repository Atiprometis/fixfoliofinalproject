{{-- @include('component.header') --}}
@extends('layout.master')

@section('title', 'Portfolio')


@section('content')
    <div class="container">
        <div class="row">

                {{-- {{ csrf_field() }}
                {{ method_field('POST') }} --}}
                <div class=" d-flex flex-row col-md-12 d-flex justify-content-end  text-center ">
                    <label class="switch m-0 mt-1">
                        <input type="checkbox" class="success" id="customSwitch1">
                        <span class="slider round"></span>
                    </label>
                    <div class=" d-flex align-items-center mr-5">
                        <label for="customSwitch1" class="m-0 mt-1 ml-2" >หางาน</label>
                    </div>
                </div>
                <div class="profile rounded col-12 d-flex flex-row  mt-3 mb-3 align-items-start">
                    {{-- << รูป profile >> --}}
                    <div class="card p-3 col-3" style=" height: 360px">
                        <label>
                        @if ($avatar_images[0]['avatar_path'] != null)
                        @foreach($avatar_images as $avatar_image)
                        <img class="card-img-top rounded" src='../avatar/{{ Auth::user()->id }}/{{ $avatar_image->avatar_path }}'   alt="Card image cap" style="height: 250px;">
                        @endforeach
                        @else
                        <img class="card-img-top rounded" src='../access/imageweb/user2.png' style="cursor: pointer" alt="Card image cap" style="height: 250px;">
                        @endif

                        <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                        <input type="file" name="image" style="display: none">
                        </label>
                        <small>คลิ๊กที่รูปเพื่อเลือกรูป</small>
                                <button type="submit" class="btn btn-light mt-2" style="width: 100%; border-radius: 20px;">อัพโหลดรูป</button>
                        </form>
                    </div>
                    {{-- << รูป profile >> --}}
                    {{-- <<อัพเดท profile >> --}}
                    <form class=" form-group col-md-9 h-50" action="/updateFnameSname" method="get" enctype="multipart/form-data">
                    <div class="d-flex flex-column col-12 h-100 ">

                        @include('portfolio.component.aboutme')

                        <div class="col-12">
                            <h1 class=" font-weight-normal" style="font-size: 1.250em;   ">แนะนำตัว</h1>
                            @foreach($users as $user)
                            <textarea  class="form-control  " name="profile_aboutme" id="profile_aboutme" style=" height: 80%;"
                             aria-label="aaaad"
                            >{{ $user->profile_aboutme }}</textarea>
                            @endforeach
                        </div>
                        {{-- <div class="" style="width: 100%">
                            <div class=" d-flex flex-column w-100">
                                <div class="mt-1 d-flex flex-row justify-content-end align-items-center justify-content-start ">
                                    <button  class="btn mr-3" style="background-color: #F2C94C">
                                    <p class="p-0 m-0" style="font-size: 1em">บันทึกการแก้ไข</p>
                                    </button>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                    </form>
                </div>

        </div>

                    {{-- <<อัพเดท profile >> --}}
            <div class=" col-12 d-flex flex-ro m-0 p-0">
                @include('portfolio.component.about')
                @include('portfolio.component.exp')
            </div>

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
                            {{-- @foreach ($imagecoursefinals as $imagecoursefinal) --}}
                            {{-- @if($imagecourse->course_final_id == $imagecoursefinal->course_final_id) --}}
                                <li class=" col-3 p-0 m-0 mt-2 " id="myList" style="height:150px; border-radius:10px;" >
                                {{-- <a class="con-img"  onclick="deleteimages({{$imagecoursefinal->course_final_images_id}})"> --}}
                                    <a class="con-img"  onclick="deleteimages()">
                                    <img class="hover-image" src="../courseimages/{{ Auth::user()->id }}"  alt="" style="width: 90%; height:150px;border-radius: 10px;">
                                    {{-- <img class="hover-image" src="../courseimages/{{$imagecoursefinal->images_path}}"  alt="" style="width: 90%; height:150px;border-radius: 10px;"> --}}
                                    <div class="overlay">
                                        <div class="overred d-flex justify-content-center align-items-center ">
                                            <div class="icon">
                                                <i class="fas fa-trash-alt fa-sm "></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </li>
                            {{-- @endif
                            @endforeach --}}
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

@include('portfolio.component.expwork')
<!-- Modal exp work  end -->
        </div>
</div>




    @endsection

