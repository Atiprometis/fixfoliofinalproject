<div class=" d-flex  flex-column col-12 col-lg-9 p-0 m-0">
    <div class="pr-3 pl-3 d-flex flex-column">
        <h1 class="m-0 mt-2 p-0 font-weight-normal" style="font-size: 1.250em;   font-weight: bold;">คอร์สที่เรียนจบ</h1>
        {{-- //เริ่ม  ทั้ทงหมด --}}

        <div class="mt-2  col-12  p-0 pl-3 pb-4 pr-3 m-0 d-flex flex-column position-relative" style="border-radius: 15px; border: solid 1px #c1c1c1;">
            <ul class="p-0 m-0">
                <li class="p-0 m-0">
                    @foreach($courseandimage as $imagecourse)

                    <div class="col-12 d-flex flex-row flex-wrap pt-4">

                        <div class="col-12 col-md-6 d-flex flex-column w-50 " >
                            <h1 class="m-0 p-0 font-weight-normal" style="font-size: 1.250em;">รุ่นที่ </h1>
                            <p class="m-0 p-0 font-weight-light" style="font-size: 1em;">{{$imagecourse->generation}}</p>
                        </div>
                        <div class="col-12 col-md-4 d-flex  flex-column w-50">
                            <h1 class="m-0 p-0 font-weight-normal" style="font-size: 1.250em;">{{$imagecourse->corse_name}}</h1>
                            <p class="m-0 p-0 font-weight-light" style="font-size: 1em;">{{$imagecourse->location}}</p>
                        </div>
                        <div class="col-12  col-md-2 p-0 m-0 ">
                            <div class="d-flex justify-content-center">
                                <button class="btn w-100 p-0 m-0" style="background-color: #fff; border:solid 1px #D3D3D3;" data-toggle="modal" data-target="#addimage{{ $imagecourse->course_final_id }} "><i class="fas fa-pen"></i></button>
                                <button class="btn w-100  m-0" style="background-color: #fff; border:solid 1px #D3D3D3;" onclick="deleteresult({{ $imagecourse->course_final_id }})"><i class="fas fa-trash-alt bg-danger p-2 rounded-circle text-light"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class=" d-flex flex-row p-0 m-0 col-12 flex-wrap  justify-content-start ">
                        <ul class=" d-flex flex-row p-0 m-0 col-12 flex-wrap justify-content-start " id="listlimited">
                            {{-- {{ $imagecoursefinals[1]['course_final_id'] }} --}}
                            @foreach ($imagecoursefinals as $index=>$image)
                                @if($imagecourse->course_final_id == $imagecoursefinals[$index]['course_final_id'])
                                <li class=" col-6 col-md-3 pr-1 pl-1 p-0 m-0 mt-2 " id="myList" style="height:150px; border-radius:10px;">
                                <a class="con-img"  onclick="deleteimages({{$image->course_final_images_id}})">
                                        <img class="hover-image" src="../courseimages/{{$image->images_path}}"  alt="" style="width: 100%; height:150px;border-radius: 10px;">
                                    <div class="overlay">
                                        <div class="overred d-flex justify-content-center align-items-center ">
                                            <div class="icon">
                                                <i class="fas fa-trash-alt fa-sm "></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </li>
                                @else
                                @endif
                            @endforeach
                            <li class="col-6 col-md-3 pr-1 pl-1 p-0 m-0 mt-2" id="myList">
                                <label class="col-12 p-0 m-0" style="cursor: pointer;"  data-toggle="modal" data-target="#addimage{{ $imagecourse->course_final_id }}">
                                    <div  class="bg-light d-flex flex-row justify-content-center align-items-center"   style="width: 100%; height:150px; border-radius:10px;" >
                                            <i class="fas fa-plus bg-danger mr-1 ml-1 p-2" style="border-radius: 20px;color:#fff;"></i>
                                            <p class="p-0 m-0">เพิ่มรูป</p>
                                    </div>
                                </label>
                            </li>
                        </ul>
                        <ul class=" mt-3 mb-3 w-100" style="border: solid 1px #c1c1c1"></ul>
                    </div>
                    <!-- Modal -->
                        <div class="modal fade" id="addimage{{ $imagecourse->course_final_id }}" tabindex="-1" role="dialog" aria-labelledby="Expwork" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มหลักสูตรที่เรียนจบ</h5>
                                </div>
                                <div class="modal-body">
                                <form method="post" action="{{url('updateresult')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <ul class="m-0 p-0 text-left">
                                        <li class="m-0 p-0">
                                            <p class=" p-0 m-0 mt-2 mb-2">รุ่นที่</p>
                                            <input type="text" maxlength="3" value="{{$imagecourse->generation}}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" id="position" name="generation" class="swal2-input m-0" placeholder="ระบุรุ่นที่" required>
                                        </li>
                                        <li>
                                            <p class=" p-0 m-0 mt-2 mb-2">ชื่อหลักสูตร</p>
                                            <input type="text" maxlength="60" value="{{$imagecourse->corse_name}}" id="company" name="corse_name" class="swal2-input m-0" placeholder="ระบุชื่อบริษัท" required>
                                        </li>
                                        <li>
                                            <p class=" p-0 m-0 mt-2 mb-2">สถานที่ศึกษาจบ</p>
                                            <input type="text" maxlength="80" value="{{$imagecourse->location}}" id="county" name="location" class="swal2-input m-0" placeholder="ระบุเขต" required>

                                        </li>
                                        <li>
                                            <input type="text" name="course_final_id" value="{{ $imagecourse->course_final_id }}" style="display: none">
                                        </li>
                                        <li>
                                            <p class=" p-0 m-0 mt-2 mb-2">รูปภาพผลงานของท่าน (สูงสุด 8 รูปภาพ)</p>
                                            <div class=" d-flex flex-row col-md-12 flex-wrap p-0 m-0">
                                                <ul class=" d-flex flex-row col-md-12 p-0 m-0 flex-wrap clone-result" id="listlimited" >
                                                    {{-- @for ($i = 0; $i < 8; $i++) --}}
                                                    {{-- <a class="clone-result  d-inline-block"> --}}
                                                    @foreach ($imagecoursefinals as $index=>$image)
                                                        @if($imagecourse->course_final_id == $imagecoursefinals[$index]['course_final_id'])
                                                            <li class=" col-3 p-0 m-0 mt-2 " id="myList">
                                                                        {{-- <a class="con-img"  onclick="deleteimages({{$image->course_final_images_id}})"> --}}
                                                                            <img class="hover-image" src="../courseimages/{{$image->images_path}}"  alt="" style="width: 90%; height:150px;border-radius: 10px;">
                                                                            <div class="overlayresulut">
                                                                                <div class="overred d-flex justify-content-center align-items-center ">
                                                                                    <div class="icon">
                                                                                        <i class="fas fa-trash-alt fa-sm "></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        {{-- </a> --}}
                                                            </li>
                                                        @else
                                                        @endif
                                                     @endforeach
                                                     @for ($i = 0; $i < 8; $i++)
                                                        <li class=" col-3 p-0 m-0 mt-2 " id="myList">
                                                            <label  class="position-relative col-md-12 p-0 m-0">
                                                                <img class="card-img-top insutition rounded " id="upload{{ $imagecourse->course_final_id }}{{ $i }}" src='{{ asset('access/imageweb/Placeholder.jpg') }}'   style="width: 90%;height: 150px; cursor: pointer"/>
                                                                    <input type="file" class="photo custom-file-input " id="uploadPhoto{{ $imagecourse->course_final_id }}{{ $i }}"   value="Placeholder.jpg" name="images[]" onchange="ShowImage{{ $i }}({{ $imagecourse->course_final_id }});" style="display: none"    />
                                                            </label>
                                                        </li>
                                                     @endfor
                                                </ul>
                                                {{-- <div class="col-cd-2 align-items-center d-flex justify-content-md-center">
                                                    <button class="btn addimageResult btn-danger" >เพิ่มรูป</button>
                                                </div> --}}

                                            </div>
                                        </li>
                                    </ul>
                                    <div class=" d-flex justify-content-md-center">
                                        <button  onclick="history.back()"  class="btn btn-secondary swa-confirm mr-2 ml-2" style="margin-top:10px">กลับ</button>
                                        <button type="submit" class="btn rounded" style="margin-top:10px; background-color:#F2C94C;">ยืนยัน</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>


                    <!-- Modal exp work -->
                    @endforeach
                </li>
            </ul>

            {{-- <a id="opener" > --}}
            <label data-toggle="modal" data-target="#addExpfinal" class=" p-0 pt-3 mt-1 m-0 ">
                <div class=" p-0 m-0 d-flex justify-content-center align-items-center text-center" style="width: 100%; height:50px; border-radius:10px;background-color: #8541B4;color:#fff;cursor: pointer;">เพิ่มประสบการณ์</div>
            </label>
        </div>

    </div>

    <div class="col-md-12 mb-5 d-flex flex-column" >
        <h1 class="m-0 mt-2 p-0 font-weight-normal mt-4" style="font-size: 1.250em;   font-weight: bold;">ประสบการณ์ทำงาน</h1>
        <div class="mt-2  p-0 pl-3 pb-4 pr-3 m-0 d-flex flex-column position-relative" style="border-radius: 15px; border: solid 1px #c1c1c1;">
           @foreach ($expworks as $expwork)
           <ul class="p-0 m-0">
            <li class="p-0 m-0">
                <div class="col-12 d-flex flex-row flex-wrap pt-4">
                    <div class="col-6 d-flex flex-column w-50 " >
                        <h1 class="m-0 p-0 font-weight-normal" style="font-size: 1.250em;">{{$expwork->company}}</h1>

                    </div>
                    <div class="col-6 p-0 col-md-4 d-flex flex-column w-50">
                        <h1 class="m-0 p-0 w-100 font-weight-normal" style="font-size: 1.250em;">{{$expwork->position}}</h1>
                        <p class="m-0 p-0 w-100 font-weight-light" style="font-size: 1em;">{{$expwork->province}}</p>
                        <div class=" d-flex flex-row">
                            <p class="m-0 p-0 w-100  mr-2 font-weight-light" style="font-size: 1em;">{{$expwork->year}} ปี</p>
                            <p class="m-0 p-0 w-100 ml-2 mr-2 font-weight-light" style="font-size: 1em;">{{$expwork->month}} เดือน</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 p-0 m-0 ">
                        <div class=" d-flex justify-content-center">
                            <button class="btn w-100" style="background-color: #fff; border:solid 1px #D3D3D3;" data-toggle="modal" data-target="#ExpworkUpdate{{ $expwork->exp_works_id }}"><i class="fas fa-pen"></i></button>
                            <button class="btn w-100" style="background-color: #fff; border:solid 1px #D3D3D3;" onclick="deleteExpwork({{ $expwork->exp_works_id }})"><i class="fas fa-trash-alt bg-danger p-2 rounded-circle text-light"></i></button>
                        </div>
                    </div>
                </div>
                <div class=" mt-3 mb-3 w-100" style="border: solid 1px #c1c1c1"></div>
            </li>
            </ul>

            <div class="modal fade" id="ExpworkUpdate{{ $expwork->exp_works_id }}" tabindex="-1" role="dialog" aria-labelledby="Expwork" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header d-flex justify-content-md-center">
                      <h5 class="modal-title" id="exampleModalLongTitle">อัพเดทข้อมูลประสบการณ์ทำงาน</h5>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="{{url('expworkUpdate')}}" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <input type="text" name="exp_works_id" value="{{ $expwork->exp_works_id }}" style="display: none">
                          <ul class="m-0 p-0 text-left">
                            <li class="m-0 p-0">
                                <p class=" p-0 m-0 mt-2 mb-2">ตำแหน่ง</p>
                                <input type="text" id="position" value="{{$expwork->position}}" name="positionUpdate" class="form-control m-0" placeholder="ระบุตำแหน่ง" required>
                            </li>
                            <li>
                                <p class=" p-0 m-0 mt-2 mb-2">ชื่อบริษัท</p>
                                <input type="text"  id="company" value="{{$expwork->company}}" name="companyUpdate" class="form-control m-0" placeholder="ระบุชื่อบริษัท" required>
                            </li>
                            <li>
                                <p class=" p-0 m-0 mt-2 mb-2">สถานที่ตั้งบริษัท</p>
                                <div class=" d-flex flex-row">
                                    <input type="text"  id="county" value="{{$expwork->position}}" name="countyUpdate" class="form-control mr-2" placeholder="ระบุเขต" required>
                                    <input type="text"  id="province" value="{{$expwork->province}}" name="provinceUpdate" class="form-control ml-2" placeholder="ระบุจังหวัด" required>
                                </div>
                            </li>
                            <li>
                                <p class=" p-0 m-0 mt-2 mb-2">ระยะเวลาทำงาน</p>
                                <div class=" flex-row d-flex col-md-12 p-0">
                                    <div class="mr-2 col-md-6 p-0  pr-2 mr-2">
                                        <small>จำนวนปี</small>
                                        <input type="text"  id="year" name="yearUpdate" value="{{$expwork->year}}" maxlength="2" class="form-control " placeholder="ระบุจำนวนปี" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                                    </div>
                                    <div class="form-group col-md-6 mr-2 pr-2 p-0 ">
                                        <small>จำนวนเดือน</small>
                                        <select class="form-control " id="month" name="monthUpdate">

                                            @for ($i = 1; $i <= 12; $i++)
                                            <option style="display: none">{{$expwork->month}}</option>
                                            <option>{{ $i }}</option>
                                            @endfor
                                        </select>

                                      </div>
                                </div>
                            </li>
                        </ul>
                            <div class=" d-flex justify-content-md-center">
                                <button type="submit" class="btn rounded" style="margin-top:10px; background-color:#F2C94C;">ยืนยัน</button>
                                <button  onclick="history.back()" class="btn btn-secondary swa-confirm mr-2 ml-2" style="margin-top:10px">กลับ</button>
                            </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
           @endforeach

            <label data-toggle="modal" data-target="#Expwork" class=" p-0 m-0 p-0 pt-3 ">
                <div class=" p-0 m-0 d-flex justify-content-center align-items-center text-center" style="width: 100%; height:50px; border-radius:10px;background-color: #8541B4;color:#fff;cursor: pointer;">เพิ่มประสบการณ์ทำงาน</div>
            </label>
        </div>
    </div>
</div>
