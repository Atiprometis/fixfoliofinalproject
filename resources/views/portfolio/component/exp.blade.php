<div class=" d-flex flex-column w-100 col-9 p-0 m-0">
    <div class="col-12 d-flex flex-column">
        <h1 class="m-0 mt-2 p-0 font-weight-normal" style="font-size: 1.250em;   font-weight: bold;">คอร์สที่เรียนจบ</h1>
        {{-- //เริ่ม  ทั้ทงหมด --}}

        <div class="mt-2  p-0 pl-3 pb-4 pr-3 m-0 d-flex flex-column position-relative" style="border-radius: 15px; border: solid 1px #c1c1c1;">
            <ul class="p-0 m-0">
                <li class="p-0 m-0">
                    @foreach($courseandimage as $imagecourse)
                    <div class=" d-flex flex-row pt-4">
                        <div class=" d-flex flex-column w-50 ml-2" >
                            {{-- {{ $courseandimage }} --}}
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
                            {{-- {{ $imagecoursefinals[1]['course_final_id'] }} --}}

                            @foreach ($imagecoursefinals as $index=>$image)
                                @if($imagecourse->course_final_id == $imagecoursefinals[$index]['course_final_id'])
                                {{-- {{ $imagecoursefinals[$index]['course_final_id'] }} --}}
                                <li class=" col-3 p-0 m-0 mt-2 " id="myList" style="height:150px; border-radius:10px;">
                                <a class="con-img"  onclick="deleteimages({{$image->course_final_images_id}})">
                                        <img class="hover-image" src="../courseimages/{{$image->images_path}}"  alt="" style="width: 90%; height:150px;border-radius: 10px;">
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

                                    {{-- <li class=" col-3 p-0 m-0 mt-2 " id="myList" style="height:150px; border-radius:10px;">
                                        <a class="con-img"  onclick="deleteimages()">
                                                <img class="hover-image" src="../courseimages/{{$image->images_path}}"  alt="" style="width: 90%; height:150px;border-radius: 10px;">
                                            <div class="overlay">
                                                <div class="overred d-flex justify-content-center align-items-center ">
                                                    <div class="icon">
                                                        <i class="fas fa-trash-alt fa-sm "></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        </li> --}}
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
                                                    {{-- @endif --}}
                                                    {{-- @endforeach --}}
                                                </ul>
                                            </div>

                                            <div class="input-group-btn mt-2 mb-2">
                                                <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                            </div>
                                        </div>
                                        {{-- @endforeach --}}

                                        <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
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
            <label data-toggle="modal" data-target="#addExpfinal" class=" p-0 m-0 ">
                <div class=" p-0 m-0 d-flex justify-content-center align-items-center text-center" style="width: 100%; height:50px; border-radius:10px;background-color: #8541B4;color:#fff;cursor: pointer;">เพิ่มประสบการณ์</div>
            </label>
        </div>

    </div>





    <div class="col-12 d-flex flex-column">
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
