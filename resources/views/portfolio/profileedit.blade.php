{{-- @include('component.header') --}}
@extends('layout.master')

@section('title', 'Portfolio')


@section('content')
    <div class="container">
        <div class="row">
            
                {{-- {{ csrf_field() }}
                {{ method_field('POST') }} --}}
                <div class="profile rounded col-12 d-flex flex-row mt-5 align-items-start justify-content-between ">
                    <div class="card p-3 col-3" style=" height: 340px">
                        @foreach($avatar_images as $avatar_image)
                        <img class="card-img-top rounded" src='../storage/{{ $avatar_image->avatar_path }}' alt="Card image cap" style="height: 250px;">
                        @endforeach
                        <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <input type="file" name="image" > 
                                <button type="submit" class="btn btn-light mt-2" style="width: 100%; border-radius: 20px;">+ Upload new photo</button>
                        </form>
                    </div>
                    <form class=" form-group w-100" action="/updateprofile/{id}" method="get" enctype="multipart/form-data">
                    <div class="profile-about col-12 h-100 d-flex flex-column justify-content-between">
                        <div class=" d-flex flex-column h-100 mb-4 ">
                            <div class=" d-flex flex-row h-100  justify-content-between ">
                                <div class=" d-flex flex-column border  mr-2" style="width: 70%">
                                    <div class="name d-flex flex-column ">
                                        <div class=" d-flex flex-column align-content-center  pl-3 pr-2">
    
                                            <div class="form-group form-row d-flex align-items-center   ">
                                                <div class="col-12 d-flex flex-row">
                                                    <div class="col-6  pl-0">
                                                        <input type="text" class="form-control " style="width: 100%" name="name" maxlength="30" id="name" aria-describedby="name" placeholder="{{ Auth::user()->name }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-row d-flex align-items-center   ">
                                                <div class="col-12 d-flex flex-row">
                                                    <div class="col-6  pl-0">
                                                        <input type="text" class="form-control " style="width: 100%" name="lastname" maxlength="30" id="lastname" aria-describedby="lastname" placeholder="{{ Auth::user()->lastname }}">
                                                    </div>
                                                </div>
                                            </div>
    
                                            {{-- <h1 class="p-1 m-0"  style="font-size: 1.500em">{{ Auth::user()->name }}</h1>
                                            <h1 class="p-1 m-0"  style="font-size: 1.500em; margin-left: 10px;">{{ Auth::user()->lastname }}</h1> --}}
                                        </div>
                                    </div>
                                    <div class="name  pl-3 pr-2 mt-2">
                                        <div class="form-group form-row d-flex align-items-center   ">
                                            <div class="col-12 d-flex flex-row">
                                                <div class="col-6  pl-0">
                                                    <input type="text" class="form-control " style="width: 100%" name="profile_location" maxlength="30" id="profile_location" 
                                                    aria-describedby="profile_location" placeholder="ที่อยู่" 
                                                    @foreach($users as $user)
                                                        value={{ $user->profile_location }}
                                                    @endforeach                                                   
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="width: 30%">
                                    <div class=" d-flex flex-column w-100">
                                        <div class=" d-flex flex-row align-items-center justify-content-start ">
                                            {{-- <a href="#"><i class="fas fa-pen fa-lg p-2"></i></a> --}}
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
                        <h1 class=" font-weight-normal" style="font-size: 1.250em;   ">แนะนำตัว</h1>                  
                        <input type="text" class="form-control input-lg aboutme rounded p-3 pb-2" style="width: 100%;height: 100%;" name="profile_aboutme" 
                                id="profile_aboutme" aria-describedby="profile_aboutme" placeholder="แนะนำตัว" 
                                @foreach($users as $user)
                                    value={{ $user->profile_aboutme }}
                                @endforeach     
                                >
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
                                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_phone" 
                                id="profile_phone" aria-describedby="profile_phone" placeholder="ระบุเบอร์โทร" 
                                @foreach($users as $user)
                                value={{ $user->profile_phone }}
                                @endforeach
                                >
                                </div>
    
                            </div>
                            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                                <div class="" style="width: 30px ;background:#5181B8; border-radius: 5px;">
                                    <i class="fas fa-envelope fa-sm p-2  rounded" style="color: #fff"></i>
                                </div>
                                <div class=" d-flex flex-row">                    
                                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_email" 
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
                                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_line" 
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
                                <div class=" d-flex flex-row p-0 m-0 col-12 flex-wrap  justify-content-start ">
                                    <ul class=" d-flex flex-row p-0 m-0 col-12 flex-wrap justify-content-start " id="listlimited">
                                        @foreach($imagecourses as $imagecourse)
                                        
                                        <li class=" col-3 p-0 m-0 mt-2 " id="myList" style="height:150px; border-radius:10px;" >
                                                <img src="../courseimages/{{ $imagecourse->images_path }}"  alt="" style="width: 90%; height:150px;border-radius: 10px;">
                                        </li>
                                                                          
                                        @endforeach
                                        
                                        <li class="col-3 p-0 m-0 mt-2" id="myList">
                                            <label class="col-12 p-0 m-0" >
                                                <div  class="bg-warning " id="openerupdate"  style="width: 90%; height:150px; border-radius:10px;" >
                                                    <i class="fas fa-plus"></i>
                                                    <p class="p-0 m-0">เพิ่มรูป</p>
                                                </div>
                                            </label>
                                        </li>
                                        
                                        
                                        
                                    </ul>
                                    <ul class=" mt-3 mb-3 w-100" style="border: solid 1px #c1c1c1"></ul>
                                </div>
                                
                                <div class=" bg-warning m-1 " id="opener" style="width: 100%; height:80px; border-radius:10px;">เพิ่มประสบการณ์</div>
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
            </form>
            <div id="dialog" title="show" style="display: none">
                {{-- <div>
                    <p class=" p-0 m-0">รุ่นที่</p>
                    <input type="text">
                </div>
                <div>
                    <p class=" p-0 m-0">ชื่อหลักสูตร</p>
                    <input type="text">
                </div>
                <div>
                    <p class=" p-0 m-0">สถานที่ศึกษาจบ</p>
                    <input type="text">
                </div>
                <div>
                    <p class=" p-0 m-0">อัพโหลดรูปภาพ</p>
                    <input name="upload[]" type="file" multiple="multiple" />
                </div>
        
                <button>ยืนยัน</button>
                <button data-role="close">ยกเลิก</button> --}}

                <form method="post" action="{{url('filecourse')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                      <div class="input-group hdtuto control-group lst increment" >
                        <input type="file" name="images[]" class="myfrm form-control">
                        <div class="input-group-btn"> 
                          <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                      </div>
                      <div class="clone hide">
                        <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                          <input type="file" name="images[]" class="myfrm form-control">
                          <div class="input-group-btn"> 
                            <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                          </div>
                        </div>
                      </div>
                  
                  
                      <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
                </form>  
            </div>
            <div class="" id="updateimages" title="update" >
                <form method="post" action="{{url('updateimages')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                      
                        <div class="input-group hdtuto control-group lst increment d-flex flex-row " >
                            <div class=" col-12">
                                @foreach ($imagecourses as $imagecourse)
                                    <img src="../courseimages/{{ $imagecourse->images_path }}"  alt="" style="width: 25%; height:125px;">
                                @endforeach
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

        </div>
    </div>


@endsection

