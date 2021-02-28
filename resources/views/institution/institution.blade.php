@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column p-0 m-1">
                <div class=" col-12 w-100 p-0 m-0 mt-5 search-institution">
                    <h1 style="font-size: 1.750em;">ค้นหาสถาบัน</h1>

                    {!! Form::open(['url' => 'searchinstitution', 'method'=>'POST']) !!}
                            <div class=" d-flex flex-row mb-5 align-items-center position-relative">
                                    <label class=" bg-search  mr-2">
                                        {{-- <div class="bg-search position-absolute "></div> --}}
                                    <select class=" w-100 selectpicker p-1  " data-live-search="true" name="search" style="border-radius: 20px;" >
                                        <option data-tokens="ketchup mustard" value="ทั้งหมด" style="display: none">ค้นหาสถาบันทั้งหมด</option>
                                        @foreach ($allshchool as $name)
                                        <option data-tokens="{{ $name->schools_name }}">{{ $name->schools_name }}</option>
                                        @endforeach
                                    </select>
                                    </label>

                                <button class="btn pl-1 pr-1 mb-2" type="submit" style="background-color: #F9C226; width:150px; border-radius: 20px;"> ค้นหา</button>
                            </div>
                    {!! Form::close() !!}
                </div>
            </div>

                    <div class="d-flex flex-row w-100 text-institution align-items-end justify-content-between">
                        <h1 class="p-0 m-0 ml-2" style="font-size: 1.750em;">สถาบันทั้งหมด</h1>
                        <div class=" d-flex flex-row">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input  " type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">เรียนออนไลน์</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input " type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">เรียนที่ศูนย์ฝึกอบรม</label>
                              </div>

                            <p class="p-0 m-2"></p>
                        </div>
                    </div>
                <div class="col-12 p-0 m-0">

                    @foreach($schoolsdetails as $index=>$school)

                        <a class="" href="/profileinstitution/{{ $school->schools_id }}" style="color: inherit; ">
                            <div class=" col-3  p-2   float-left " >
                                <div class="">
                                    @if ($school->school_image != null)
                                    <img class="insutition-all" src='../imagesSchools/{{ $school->schools_owner }}/{{ $school->school_image  }}' alt="Card image cap" style="height: 250px;border: 1px solid #c1c1c1;">
                                    @else
                                    <img class="insutition-all" src='../access/imageweb/school1.jpg' alt="Card image cap" style="height: 250px;border: 1px solid #c1c1c1;">
                                    @endif
                                    {{-- <img src="sdasd" class="insutition-all"> --}}
                                    <div class="  d-flex flex-column text-insutition pl-3 pt-2" style="">

                                        <p class="" style="font-size: 1.375em;">{{ $school->schools_name }}</p>

                                        <div class=" d-flex flex-row ">
                                            <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                            <p class="ml-2 mr-2">จำนวน

                                                @foreach ($countCourse as $count)
                                                     @if ($count->course_school !=  $school->schools_id)

                                                     @else
                                                     {{ $count->countcourse }}
                                                     @endif
                                                @endforeach

                                                คอร์ส
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    @endforeach

                </div>
                {{-- <div class=" d-flex w-100 flex-row align-items-center justify-content-center ">
                    <a href="#" class=" d-flex flex-row align-items-center justify-content-center">
                        <p class=" text-center mt-3">แสดงเพิ่มเติม</p>
                        <i class="fas fa-chevron-down ml-2"></i>
                    </a>
                </div> --}}


            </div>

        </div>
    </div>
@endsection
