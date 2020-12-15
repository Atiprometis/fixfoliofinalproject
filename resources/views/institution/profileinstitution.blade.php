{{-- @include('component.header') --}}

@extends('layout.master')

@section('title', 'institution')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="profile rounded col-12 d-flex flex-row mt-5 mb-4 align-items-end">
                <div class=" p-3 col-3">
                    @foreach ($schoolsdetails as $schoolsdetail_images)
                        
                    
                    <img class="card-img-top  rounded-circle" src='{{ $schoolsdetail_images->school_image  }}' alt="Card image cap" style="height: 250px; border: 1px solid #c1c1c1">
                    @endforeach
                </div>
                <div class="profile-about col-7 mt-2 ">
                    <div class=" d-flex flex-column  ">
                        <div class=" d-flex flex-row justify-content-between">
                            <div class=" d-flex flex-column ">
                                <div class="name d-flex flex-column">
                                    <div class=" d-flex flex-row">

                                    </div>
                                </div>
                                @foreach ($schoolsdetails as $schoolsdetail_nameschool)
                                    <div class="name ml-3">
                                        <h2 style="color: #69299C;">{{ $schoolsdetail_nameschool->schools_name }}</h2>
                                    </div>
                                @endforeach

                                    {{-- <div class="name ml-3">
                                        <h2 style="color: #69299C;">456456</h2>
                                    </div> --}}
                             
                            </div>

                        </div>
                    </div>
                    <div class="aboutme rounded p-3 " >
                        <div class=" d-flex flex-row">
                            <h1 style="font-size: 1.250em;   font-weight: 400;">คอร์สเรียนทั้งหมด</h1>
                            <h1 class="ml-2" style="font-size: 1.250em;   font-weight: 400; color: #69299C;">{{  $countcourse }}</h1>
                        </div>
                        <div class="about-text" style="height: 150px">
                              
                            @foreach ($schoolsdetails as $schoolsdetail_detail)
                             
                            <p>
                                {{ $schoolsdetail_detail->schools_detail }}
                            </p>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

                <div class="d-flex flex-row w-100 text-institution align-items-end justify-content-between">
                        @foreach ($schoolsdetails as $schoolsdetail_nameschool2)
                        <h1 class="p-0 m-0 ml-2" style="font-size: 1.750em;">คอร์สเรียนสอนโดย {{ $schoolsdetail_nameschool2->schools_name }}</h1>
                        @endforeach
                        <div class=" d-flex flex-row">
                            <p class="p-0 m-2"></p>
                        </div>
                </div>
                <div class="col-12 p-0 m-0">
                    
                    @foreach ($coursesdetails as $coursesdetail)
                        <div class=" col-4  p-2   float-left " >
                            <div class="  ">
                                <img src="{{ $coursesdetail->image_herobanner }}" class="insutition-all">
                                <div class="  d-flex flex-column text-insutition pl-3 pt-" style="">
                                    <div class=" d-flex justify-content-between mt-2">
                                        <p class="" style="font-size: 1em;">{{ $coursesdetail->course_name }}</p>
                                        <p class=" mr-3" style="font-size: 1em;">{{ $coursesdetail->course_cost }}</p>
                                    </div>
                                    <div class=" d-flex flex-row ">
                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                        <p class="ml-2 mr-2 mb-1 p-0">{{ $coursesdetail->course_start }} - {{ $coursesdetail->course_end }} 
                                            {{ $coursesdetail->course_learn_start }} - {{ $coursesdetail->course_learn_end }}</p>
                                    </div>
                                    <div class=" d-flex justify-content-between">
                                        <div class=" d-flex flex-row ">
                                            <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                            <p class="ml-2 mr-2">{{ $coursesdetail->course_hours }} ชั่วโมง</p>
                                        </div>
                                        <p class=" mr-3" style="font-size: 1em;">{{ $coursesdetail->school_name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                <div class=" d-flex w-100 flex-row align-items-center justify-content-center ">
                    <a href="#" class=" d-flex flex-row align-items-center justify-content-center">
                        <p class=" text-center mt-3">แสดงเพิ่มเติม</p>
                        <i class="fas fa-chevron-down ml-2"></i>
                    </a>
                </div>

        </div>
        </div>
    </div>
@endsection
