{{-- @include('component.header') --}}
@extends('layout.master')

@section('content')
    <img class=" img-fluid col-12 p-0" src="{{ asset('access/images/hero-banner-1.png') }}" alt="Responsive image" style="background-color: red; height: 50vh;">
    <div class="container">
        <div class="row">
            {{-- 1 --}}
            <div class="1 col-lg-12 d-flex flex-row p-4 mt-4 justify-content-between">
                <div class="class-all d-flex flex-column col-lg-7 ">

                    {{-- <h2 class="">asd</h2> --}}
                    {{-- <h4 class="">ชื่อโรงเรียน {{$dataHomeEdit->course_school_name}}</h4> --}}
                    {{-- <p class="mt-3 ">asd --}}

                    <h2 class="">{{$courseAll->course_name}}</h2>
                    {{-- <h4 class="">ชื่อโรงเรียน {{$dataHomeEdit->course_school_name}}</h4> --}}
                    <p class="mt-3 ">{{$courseAll->course_detail}}

                    </p>
                </div>
                <div class="box-register-all d-flex flex-column col-lg-3 offset-lg-0 p-0" >

                    <a href="/registercourse/{{ $courseID }}" class="btn  register-open-website-b " style="height: 40px; background-color: #F9C226; border-radius: 20px;">สมัครเรียน</a>
                    <div class="register-time d-flex flex-column mt-3" >
                        <div class="time-text rounded-top text-light text-center align-items-center p-2" style="border: solid #000 1px; background-color: #69299C;">
                            <h1 class=" p-0 m-0" style="font-size: 1.125em;">ใบประกอบวิชาชีพ</h1>
                        </div>
                        <div class="time-text rounded-bottom d-flex flex-column p-3 " style="border: solid #000 1px;">
                            <div class=" d-flex flex-row  justify-content-center ">
                                {{-- <i class="fab fa-accusoft mr-2"></i> --}}



                                <p>{{$courseAll->course_certificate}}</p>

                            </div>

                        </div>
                    </div>
                    <div class="register-time d-flex flex-column mt-3" >
                        <div class="time-text rounded-top text-light text-center align-items-center p-2" style="border: solid #000 1px; background-color: #69299C;">
                            <h1 class=" p-0 m-0" style="font-size: 1.125em;">ราคา</h1>
                        </div>
                        <div class="time-text rounded-bottom d-flex flex-column p-3 " style="border: solid #000 1px;">
                            <div class=" d-flex flex-row  justify-content-center ">
                                {{-- <i class="fab fa-accusoft mr-2"></i> --}}



                                <p>{{$courseAll->course_cost}}</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- 2 --}}
            <div class="2 col-lg-12 d-flex flex-row p-4 mt-4 justify-content-between">
                <div class="class-all d-flex flex-column col-lg-6">
                    <h1 class="" style="font-size: 1.500em">คอร์สนี้เรียนอะไรบ้าง</h1>
                    <ul>


                        @foreach ($callCourse_learn as $course_learn)
                            <li>{{$course_learn->course_learnning_detail}}</li>
                        @endforeach


                    </ul>
                </div>
                <div class="register-time d-flex flex-column mt-3 p-0 m-0 col-3 w-100" >
                    <div class="time-text rounded-top text-light text-center align-items-center p-2" style="border: solid #000 1px; background-color: #69299C;">
                        <h1 class=" p-0 m-0" style="font-size: 1.125em;">ช่วงรับสมัคร</h1>
                    </div>
                    <div class="time-text rounded-bottom d-flex flex-column p-3  " style="border: solid #000 1px;">
                        <div class=" d-flex flex-column  justify-content-center text-center">
                            {{-- <i class="fab fa-accusoft mr-2"></i> --}}



                            <p>{{$courseAll->course_open}} ถึง  {{$courseAll->course_close}}</p>
                            <p>ปิด  {{$courseAll->course_close}}</p>

                            <p>หรือปิดรับสมัครเมื่อคอร์สเต็ม</p>
                        </div>

                    </div>
                </div>
            </div>
            {{-- 3 --}}
            <div class="3 col-lg-12 d-flex flex-row p-4 mt-4 justify-content-between">
                <div class="class-all d-flex flex-column col-lg-6 ">
                    <h1 class="" style="font-size: 1.500em">คอร์สนี้เรียนจบแล้วได้อะไร</h1>
                    <ul>



                        @foreach ($callCourse_result as $course_result)
                            <li>{{$course_result->course_learn_finish_detail}}</li>
                        @endforeach


                    </ul>
                </div>
                <div class="register-time d-flex flex-column mt-3 p-0 m-0 col-3 w-100" >
                    <div class="time-text rounded-top text-light text-center align-items-center p-2" style="border: solid #000 1px; background-color: #69299C;">
                        <h1 class=" p-0 m-0" style="font-size: 1.125em;">ช่วงเวลาเรียน</h1>
                    </div>
                    <div class="time-text rounded-bottom d-flex flex-column p-3 " style="border: solid #000 1px;">
                        <div class=" d-flex flex-column  justify-content-center text-center">
                            {{-- <i class="fab fa-accusoft mr-2"></i> --}}
                            <p>80 ชั่วโมง </p>
                            <div class=" d-flex flex-row justify-content-center">


                                {{-- <p class=" m-0 p-0 mr-3">เวลา {{\Carbon\Carbon::createFromFormat('H:i:s',$dataHomeEdit->course_learn_start)->format('H:i')}} - {{\Carbon\Carbon::createFromFormat('H:i:s',$dataHomeEdit->course_learn_end)->format('H:i')}} น.</p> --}}

                                <p class=" m-0 p-0 mr-3">{{$courseAll->course_start}} ถึง {{$courseAll->course_end}}</p>
                                <p class=" m-0 p-0 mr-3">เวลา {{\Carbon\Carbon::createFromFormat('H:i:s',$courseAll->course_learn_start)->format('H:i')}} - {{\Carbon\Carbon::createFromFormat('H:i:s',$courseAll->course_learn_end)->format('H:i')}} น.</p>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            {{-- 4 --}}
            <div class="4 col-lg-12 d-flex flex-row p-4 mt-4 justify-content-between">
                <div class="class-all d-flex flex-column col-lg-6 ">
                    <h1 class="" style="font-size: 1.500em">ประกอบอาชีพอะไรได้บ้าง</h1>
                    <ul>



                        @foreach ($callCourse_career as $course_career )
                            <li>{{$course_career->course_career_detail}}</li>
                        @endforeach


                    </ul>
                </div>

            </div>
            {{-- 5 youtube --}}

            <div class="youtube-photo d-flex flex-column col-lg-12 mb-5 p-3">
            <div class=" col-lg-12 d-flex flex-column p-0  ml-2 ">
                    <h1 class="" style="font-size: 1.500em">วิดิโอคอร์สเรียน</h1>

                        @foreach ($callCourse_youtube as $course_youtube )
                            <label>
                                <div class="youtube-link">
                                    <div class=" d-flex flex-row justify-content-xl-between w-100">
                                        <a href="{{$course_youtube->youtube_link}}">
                                            <p class="p-0 m-0">ช่อง Youtube สำหรับคอร์สเรียน {{$courseAll->course_name}}</p>
                                        </a>
                                        <a href="{{$course_youtube->youtube_link}}"><i class="far fa-play-circle fa-2x"></i></a>
                                    </div>
                                    <div class=" mt-3 mb-3 w-100" style="border: solid 1px #c1c1c1"></div>
                                </div>
                            </label>

                        @endforeach
            </div>
            </div>

            {{-- </div>
                <p class="m-0 p-0 ml-2">ภาพประกอบการเรียน</p>
                <div class="image-all d-flex flex-row flex-wrap justify-content-start align-items-center rounded col-lg-12 p-0" style="width: 100%">
                    <div class="col-md-3">
                        <img src=" {{ asset('access/images/learn-1.png') }}" class=" m-1 mt-2  rounded" style="height: 200px; width: 100%">
                    </div>
                    <div class="col-md-3">
                        <img src=" {{ asset('access/images/learn-1.png') }}" class=" m-1 mt-2  rounded" style="height: 200px; width: 100%">
                    </div>
                    <div class="col-md-3">
                        <img src=" {{ asset('access/images/learn-1.png') }}" class=" m-1 mt-2  rounded" style="height: 200px; width: 100%">
                    </div>
                    <div class="col-md-3">
                        <img src=" {{ asset('access/images/learn-1.png') }}" class=" m-1 mt-2  rounded" style="height: 200px; width: 100%">
                    </div>
                </div>
            </div> --}}

                    {{-- @foreach ($profile_ports as $profile_port)
                        @if ($profile_port->status != 0)

                        <a class="" href="{{route('searchportfolio.show',$profile_port->user_id)}}" style="color: inherit; ">
                            <div class=" col-4  p-2   float-left " >
                                <div class=" d-flex flex-column w-100 position-relative" style="border-radius: 15px 15px 0px 0px;">


                                    <div class=" w-100 d-flex justify-content-center " style="height: 130px; background-color: #69299C;border-radius: 15px 15px 0px 0px;border: solid 1px #E5E5E5;">

                                        @foreach ($avatar_images as $image)

                                        @if ($image->user_id == $profile_port->user_id)
                                            <div class="pt-5">
                                                <img class="people-port" src='../avatar/{{ $image->user_id }}/{{ $image->avatar_path }}' alt="Card image cap" >
                                            </div>
                                          @else
                                        @endif
                                    @endforeach

                                    </div>
                                    <div class=" w-100 p-2 pt-5 d-flex flex-column justify-content-center align-items-center" style="height: 200px; background-color: #fff;border-radius: 0px 0px 15px 15px;border: solid 1px #E5E5E5;">

                                        @foreach ($userall as $user)
                                        @if ($user->id == $profile_port->user_id)
                                            <h1 class=" pt-3 m-0  font-weight-bold" style="font-size: 1.375em;">{{$user->name}} {{$user->lastname}}</h1>
                                        @endif
                                        @endforeach
                                        <div class=" p-1 m-0 text-over  " style="">
                                            <p class=" mt-0  font-weight-light " style="font-size: 1em;">{{ $profile_port->profile_aboutme }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endif
                        @endforeach --}}


        </div>
    </div>
    <div style="background-color: #F7EDFF;">
        <div class=" container-fluid" >
            <div class="row">
                <div class=" container">
                    <div class=" col-md-12 p-0 m-0 d-flex flex-column justify-content-start">
                        <p class="m-0 p-3 ml-2">ผู้ที่สนใจคอร์สเรียน เมื่อเร็วๆนี้</p>

                            <div class="col-md-12  pb-4">
                                <div class="card-group col-md-12 p-0">
                                    @foreach ($data_register as $data)
                                    {{-- @if ($data->status != 0) --}}
                                    <div class=" text-center d-flex flex-column justify-content-center  userview mr-2 ml-2  " style="width: 250px">
                                        <div class=" d-flex w-100 justify-content-center align-items-center" style="height: 150px">

                                            {{-- <img class="card-img- mt-4 user-img round" src="{{ asset('access/images/learn-1.png') }}" alt="Card image cap" style="width: 150px;height: 150px"> --}}
                                            @if ($data->avatar_path != null)
                                                <img class="card-img- mt-4 user-img round" src='../avatar/{{ $data->user_id }}/{{ $data->avatar_path }}' alt="Card image cap" style="width: 120px;height: 120px">
                                            @else
                                                <img class="card-img-top rounded" src='../access/imageweb/user2.png' alt="Card image cap" style="width: 150px;height: 150px">
                                            @endif
                                        </div>
                                        <div class="card-" style="height: 130px">

                                                @foreach ($userall as $user)
                                                @if ($user->id == $data->user_id)
                                                    <h1 class="card-title pt-3 m-0  font-weight-bold" style="font-size: 1.375em;">{{$user->name}} {{$user->lastname}}</h1>
                                                @endif
                                                @endforeach
                                            <div class=" p-1 m-0 text-over  " style="height:65px;">
                                                <p class=" mt-0  font-weight-light " style="font-size: 0.9em;">{{ $data->profile_aboutme }} </p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- @endif --}}
                                    @endforeach
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #DCE4FD;">
        <div class=" container-fluid" >
            <div class="row">
                <div class=" container">
                    <div class=" col-md-12 p-0 m-0 d-flex flex-column justify-content-start">
                            <div class=" d-flex flex-row">
                                <p class="mr-auto p-3 ml-2">คอร์สที่เกี่ยวข้อง</p>
                                <a href="/courses" style="color: #9B4BB0"><p class="m-0 p-3 ml-2 ">ทั้งหมด</p></a>
                            </div>

                            <div class="col-md-12  pb-3">
                                @foreach($courseRandom as $course)
                                    <a href="{{route('course-detail.show', $course->course_id)}}" style="color: inherit;">
                                        <div class=" col-4  p-2   float-left " >
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
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

