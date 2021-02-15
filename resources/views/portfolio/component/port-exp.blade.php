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
                            <h1 class="m-0 p-0 font-weight-normal" style="font-size: 1.250em;">รุ่นที่ {{$imagecourse->generation}}</h1>
                            {{-- <p class="m-0 p-0 font-weight-light" style="font-size: 1em;">ม.ค.2563 - ก.พ.2563</p> --}}
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
                                <li class=" col-3 p-0 m-0 mt-2 " id="myList" style="height:150px; border-radius:10px;">
                                        <img class="hover-image" src="../courseimages/{{$image->images_path}}"  alt="" style="width: 90%; height:150px;border-radius: 10px;">
                                    <div class="overlay">
                                        <div class="overred d-flex justify-content-center align-items-center ">
                                            <div class="icon">
                                                <i class="fas fa-trash-alt fa-sm "></i>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                @else
                                @endif
                            @endforeach

                        </ul>

                    </div>
                    @endforeach
                </li>
            </ul>
            {{-- <a id="opener" > --}}

        </div>

    </div>





    <div class="col-12 mb-5 d-flex flex-column">
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
                        <div class=" d-flex flex-row">
                            <p class="m-0 p-0   mr-2 font-weight-light" style="font-size: 1em;">{{$expwork->year}} ปี</p>
                            <p class="m-0 p-0 ml-2 mr-2 font-weight-light" style="font-size: 1em;">{{$expwork->month}} เดือน</p>
                        </div>
                    </div>

                </div>

            </li>
            </ul>
           @endforeach
        </div>
    </div>
</div>
