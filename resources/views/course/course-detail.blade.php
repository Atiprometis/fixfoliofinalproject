{{-- @include('component.header') --}}
@extends('layout.master')

@section('content')
    <div class=" d-none d-md-block">
        @include('course.component.img')
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                {{-- 1 --}}
                <div class=" col-lg-12 d-flex flex-row flex-wrap p-4 mt-4 justify-content-between">
                    <div class="class-all d-flex flex-column col-12 col-lg-7 ">
                        <h2 class="" style="font-size: 2.8vh;">{{$courseAll->course_name}}</h2>
                        <p class="mt-3 "style="font-size: 2vh;">{{$courseAll->course_detail}}
                        </p>
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
            </div>
            {{-- 5 youtube --}}
            <div class="col-12 col-md-4 "  >
                <div class="col-12 mt-3">
                    @if ($courseAll->image_herobanner != null)
                    <a href="{{ $courseAll->image_herobanner }}" class="btn text-dark w-100  register-open-website-b "
                    style="height: 40px; background-color: #F9C226; border-radius: 20px;">เข้าสู่เว็บไซต์</a>
                    @else
                    <a href="/registercourse/{{ $courseID }}" class="btn  text-dark w-100 register-open-website-b "
                    style="height: 40px; background-color: #F9C226; border-radius: 20px;">สมัครเรียน</a>
                    @endif
                </div>


                <div class="col-12 register-time d-flex flex-column mt-3" >
                    <div class="time-text rounded-top text-light text-center align-items-center p-2" style="border: solid #000 1px; background-color: #69299C;">
                        <h1 class=" p-0 m-0" style="font-size: 1.125em;">ใบประกอบวิชาชีพ</h1>
                    </div>
                    <div class="time-text rounded-bottom d-flex flex-column p-3 " style="border: solid #000 1px;">
                        <div class=" d-flex flex-row  justify-content-center ">

                            <p>{{$courseAll->course_certificate}}</p>
                        </div>

                    </div>
                </div>
                <div class="col-12 register-time d-flex flex-column mt-3" >
                    <div class="time-text rounded-top text-light text-center align-items-center p-2" style="border: solid #000 1px; background-color: #69299C;">
                        <h1 class=" p-0 m-0" style="font-size: 1.125em;">ราคา</h1>
                    </div>
                    <div class="time-text rounded-bottom d-flex flex-column p-3 " style="border: solid #000 1px;">
                        <div class=" d-flex flex-row  justify-content-center ">

                            <p>{{$courseAll->course_cost}}</p>
                        </div>

                    </div>
                </div>
                <div class="col-12 register-time d-flex flex-column mt-3  " >
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
                <div class="col-12 register-time d-flex flex-column mt-3 " >
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
            <div class="youtube-photo d-flex flex-column col-lg-12 mb-5 p-3">
            <div class=" col-lg-12 d-flex flex-column p-0  ml-2 ">
                    <h1 class="" style="font-size: 1.500em">วิดิโอคอร์สเรียน</h1>
                    {{-- <p>{{ $callCourse_youtube }}</p> --}}

                        @foreach ($callCourse_youtube as $course_youtube )
                            @if ($course_youtube->youtube_link != null)
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
                            @else

                            @endif
                        @endforeach
            </div>
            </div>


        </div>
    </div>
    <div style="background-color: #F7EDFF;">
        <div class=" container-fluid" >
            <div class="row">
                <div class=" container">
                    <div class=" col-md-12 p-0 m-0 d-flex flex-column justify-content-start">
                        <p class="m-0 p-3 ml-2">ผู้ที่สนใจคอร์สเรียน เมื่อเร็วๆนี้</p>

                            <div class="col-12  pb-4 d-flex justify-content-center align-items-centers">
                                <div class="   card-group col-md-12 p-0">
                                    @foreach ($data_register as $data)
                                    {{-- @if ($data->status != 0) --}}
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class=" mt-2 mb-2   text-center d-flex mt-4 mt-md-0 flex-column justify-content-center  userview   " style="width: 100%;">
                                            <div class=" d-flex w-100 justify-content-center align-items-center" style="height: 150px">

                                                {{-- <img class="card-img- mt-4 user-img round" src="{{ asset('access/images/learn-1.png') }}" alt="Card image cap" style="width: 150px;height: 150px"> --}}
                                                @if ($data->avatar_path != null)
                                                    <img class="card-img- mt-4 user-img round img-fluid" src='../avatar/{{ $data->user_id }}/{{ $data->avatar_path }}' alt="Card image cap" style="width: 120px;height: 120px">
                                                @else
                                                    <img class="card-img-top rounded img-fluid" src='../access/imageweb/user2.png' alt="Card image cap" style="width: 150px;height: 150px">
                                                @endif
                                            </div>
                                            <div class="card-" style="height: 130px">

                                                    @foreach ($userall as $user)
                                                    @if ($user->id == $data->user_id)
                                                        <h1 class="card-title pt-3 m-0  font-weight-bold" style="font-size: 1.8vh;">{{$user->name}} {{$user->lastname}}</h1>
                                                    @endif
                                                    @endforeach
                                                <div class=" p-1 m-0 text-over  " style="height:65px;">
                                                    <p class=" mt-0  font-weight-light " style="font-size: 1.5vh;">{{ $data->profile_aboutme }} </p>
                                                </div>
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

                            <div class=" col-12  pb-3">
                                @foreach($courseRandom as $course)
                                    <a href="{{route('course-detail.show', $course->course_id)}}" style="color: inherit;">
                                        <div class="col-12 col-md-4 col-lg-4   p-2   float-left " >
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
                                                <div class="  d-flex flex-column text-insutition pl-3 pt-1" style="height: 160px">
                                                    <div class=" d-flex justify-content-between mt-2">
                                                        <p class="d-inline-block text-truncate" style="font-size: 1.5vh;">{{$course->course_name}}</p>
                                                        <p class="pl-2 mr-3" style="font-size: 1.5vh;">{{$course->course_cost}}</p>
                                                    </div>
                                                    <div class=" d-flex flex-row p-0 m-0">
                                                        <i class="far fa-calendar-alt fa-1x p-0 m-0" class="ml-2 mr-2"></i>
                                                        <p class="ml-2 mr-2 p-0" style="font-size: 1.5vh;">
                                                                @foreach ($courseDay as $day)
                                                                    @if ($day->course_final_id == $course->course_id)
                                                                        <p class="p-0 m-0">{{$day->course_day}}</p> <p class="p-0 m-0"> </p>
                                                                    @endif
                                                                @endforeach
                                                        </p>
                                                    </div>
                                                    <div class=" d-flex flex-row ">
                                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                                        <p class="ml-2 mr-2 mb-1 p-0" style="font-size: 1.5vh;">
                                                                เวลา {{\Carbon\Carbon::createFromFormat('H:i:s',$course->course_learn_start)->format('H:i')}} - {{\Carbon\Carbon::createFromFormat('H:i:s',$course->course_learn_end)->format('H:i')}} น.
                                                        </p>
                                                    </div>
                                                    <div class=" d-flex flex-column ">
                                                        <div class=" d-flex flex-row ">
                                                            <i class="p-0 m-0 far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                                            <p class=" p-0 m-0 ml-2 mr-2" style="font-size: 1.5vh;">{{$course->course_hours}} ชั่วโมง</p>
                                                        </div>

                                                        <p class=" mr-3" style="font-size: 1.5vh;">
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

