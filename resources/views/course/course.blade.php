
@extends('layout.master')

@section('title', 'COURSE PAGE')

@section('content')

    <div class="">
        <div class="container px-0">
            <div class="row">
                <div class="col-12 mt-3 mb-4 ">

                    <div class=" mt-3 position-relative d-flex flex-row flex-wrap " >
                @foreach ($course_type as $index=>$type)

                        <div class="col-6 col-md-3 col-lg-2 mt-4 position-relative  p-0 m-0 pl-3 pr-2 ">
                            {!! Form::open(array('url' => 'linkfilter', 'method'=>'get' )) !!}
                            <label>
                            <p class="text-c text-light m-0  w-100 " style="cursor: pointer;">{{ $type->type_name }}</p>
                            <button  type="submit" class="btn p-0 m-0 " style="width: 160px; height: 106px; cursor: pointer; border-radius: 20px;" >
                                <input type="text" value="{{ $type->type_name }}" name="type" style="display: none">
                                <div class="b-image " style="height: 106px; border-radius: 20px; background-color:#000; cursor: pointer;"></div>
                                    <img src=" {{ asset('/access/images/category-'. $index .'.jpg') }}" class=" "  style="height: 106px; cursor: pointer; width: 160px; border-radius: 20px;">
                            </button>
                            </label>
                            {!! Form::close() !!}
                        </div>

                @endforeach

                    <div class="col-6 col-md-3 mt-4 position-relative  p-0 m-0 pl-3 pr-2">
                        {!! Form::open(array('url' => 'linkfilter', 'method'=>'get' )) !!}
                        <label>
                        <p class="text-c text-light m-0  w-100 " style="cursor: pointer;">ทั้งหมด</p>
                        <button  type="submit" class="btn p-0 m-0 s" style="width: 160px; height: 106px; cursor: pointer;border-radius: 20px;" >
                            <input type="text" value="ทั้งหมด" name="type" style="display: none">
                            <div class="text-center" style="background-color: #69299C;height: 106px; width:160px; border-radius: 20px;"></div>
                        </button>
                        </label>
                        {!! Form::close() !!}
                    </div>

                    </div>


                </div>
            </div>
        </div>

            <div class="course-search pt-4 pb-2 col-md-12 d-flex align-items-lg-center " style="background-color: #69299C">
                <div class="container">
                    <div class="row mr-0 ml-0 d-flex flex-column">
                        {!! Form::open(array('url' => 'searchfilter', 'method'=>'post' ,'enctype' => 'multipart/form-data')) !!}
                         @include('component.search-select-item')
                        {!! Form::close() !!}
                        <div class=" d-flex flex-row pt-3 pb-3">
                            {{-- <a href="#" style="color:#F9C226; ">
                                <p class="p-0 m-0 mr-3">เรียนฟรี</p>
                            </a>
                            <a href="#" style="color:#F9C226; ">
                                <p class="p-0 m-0 mr-3">กำลังเปิดรับสมัคร</p>
                            </a> --}}
                        </div>

                    </div>
                </div>
            </div>

            <div class="course-all ">
                <div class="container">
                    <div class="row">
                        <div class="d-flex flex-row w-100 text-institution align-items-end justify-content-between">
                        <h1 class="p-0 m-0 ml-2 mt-5 mb-2" style="font-size: 1.750em;">คอร์สเรียนทั้งหมด

                        </h1>

                    </div>
                    <div class="col-12 p-0 m-0">
                        @php
                            $i = 1;
                        @endphp
                        @foreach($allcourses as $course)
                                @if ($course->status != 0 )
                    {{-- <a href="/coursedetail/{{$course->course_id}}" style="color: inherit;"> --}}
                                <a href="{{route('course-detail.show', $course->course_id)}}" style="color: inherit;">

                                    <div class=" col-12 col-md-6 col-lg-4  p-2   float-left " >
                                        <div class=" w-100 " >
                                                <div class=" position-relative">
                                                    <div class="d-flex flex-row w-100 justify-content-md-end p-3 position-absolute">
                                                        {{-- <div class="open-online ">เปิดรับสมัคร</div> --}}
                                                        {{-- <div class="open-course  ">{{ $course->course_online }}</div> --}}
                                                    </div>
                                                    @foreach ($thumbnail as $image)
                                                        @if ($image->course_id == $course->course_id)
                                                        <img src="{{ asset('/course/thumbnail/'.$image->thumbnails_images.'') }}" class="insutition-all">

                                                        @endif
                                                    @endforeach


                                                </div>
                                            <div class="  d-flex flex-column text-insutition pl-3 pt-1" style="height: 140px">
                                                <div class=" d-flex justify-content-between mt-2">
                                                    <p class="d-inline-block text-truncate" style="font-size: 1em;">{{$course->course_name}}</p>
                                                    <p class="pl-2 mr-3" style="font-size: 1em;">{{$course->course_cost}}</p>
                                                </div>
                                                <div class=" d-flex flex-row p-0 m-0">
                                                    <i class="far fa-calendar-alt fa-1x p-0 m-0" class="ml-2 mr-2"></i>
                                                    <p class="ml-2 mr-2 p-0">
                                                            @foreach ($courseDay as $day)
                                                                @if ($day->course_final_id == $course->course_id)
                                                                    <p class="p-0 m-0">{{$day->course_day}}</p> <p class="p-0 m-0"> </p>
                                                                @endif
                                                            @endforeach
                                                    </p>
                                                </div>
                                                <div class=" d-flex flex-row ">
                                                    <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                                    <p class="ml-2 mr-2 mb-1 p-0">
                                                             เวลา {{\Carbon\Carbon::createFromFormat('H:i:s',$course->course_learn_start)->format('H:i')}} - {{\Carbon\Carbon::createFromFormat('H:i:s',$course->course_learn_end)->format('H:i')}} น.
                                                    </p>
                                                </div>
                                                <div class=" d-flex justify-content-between ">
                                                    <div class=" d-flex flex-row ">
                                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                                        <p class="ml-2 mr-2">{{$course->course_hours}} ชั่วโมง</p>
                                                    </div>

                                                    <p class=" mr-3" style="font-size: 1em;">
                                                        @foreach ($schoolsName as $name)
                                                            @if ($name->schools_id == $course->course_school)
                                                                    {{$name->schools_name}}
                                                            @endif
                                                        @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endif

                        @endforeach
                                @if ($allcourses[0] == null)
                                <h2 class=" m-0 pt-4 pb-4" style="color: #69299C">การค้นหาของคุณไม่ตรงกับข้อมูลใดๆ</h2>
                                <ul style="color: #69299C" >
                                    <li style="font-size: 1.2em;">ตรวจดูให้แน่ใจว่าสะกดถูกต้องทุกคำ</li>
                                    <li style="font-size: 1.2em;">ลองใช้คีย์เวิร์ดอื่นๆ</li>
                                </ul>
                                @endif
                    </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col col-12 d-flex justify-content-center justify-content-md-end">
                        {!! $allcourses->render() !!}
                    </div>
                </div>
            </div>
            {{-- ไว้ทำทีหลัง ดึงข้อมูลทีละชุด --}}
            {{-- <div>

                <input id="datalimit" value="{{$datalimit}}">
                <button type="submit" id="updatedataCourse" class="col col-12 " >click</button>

            </div> --}}


    </div>
@endsection

