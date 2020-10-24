{{-- @include('component.header') --}}

@extends('layout.master')

@section('title', 'institution')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column p-0 m-1">
                <div class=" col-12 w-100 p-0 m-0 mt-5 search-institution">
                    <h1 style="font-size: 1.750em;">ค้นหาสถาบัน</h1>
                        <form>
                            <div class=" d-flex flex-column mb-5">
                                <div class=" d-flex flex-row">
                                    <input type="email" class="form-control mr-3 " style="border-radius: 20px;" id="InputInstitution" aria-describedby="InputInstitution" placeholder="ค้นหา">
                                    <button class="btn " type="submit" style="background-color: #F9C226; width:150px; border-radius: 20px;"> ค้นหา</button>
                                </div>
                                <div class="col-8 d-flex flex-row p-0 m-0 mt-3">
                                    <select class="form-control form-control-sm rounded mr-3 pl-1 pr-1" >
                                        <option>ค่าใช้จ่าย</option>
                                      </select>
                                      <select class="form-control form-control-sm rounded mr-3 pl-1 pr-2">
                                        <option>เขต</option>
                                      </select>
                                      <select class="form-control form-control-sm rounded pl-1 pr-1">
                                        <option>ประเภทหลักสูตร</option>
                                      </select>
                                </div>
                            </div>
                        </form>
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

                    @foreach($courseschooldetails as $courseschooldetail)

                        <a class="" href="/profileinstitution/{{$courseschooldetail->school_id}}/{{ $courseschooldetail->countcourse }}" style="color: inherit; ">
                            <div class=" col-3  p-2   float-left " >
                                <div class="">
                                    <img src="{{ $courseschooldetail->school_image }}" class="insutition-all">
                                    <div class="  d-flex flex-column text-insutition pl-3 pt-2" style="">
                                        <p class="" style="font-size: 1.375em;">{{$courseschooldetail->school_name}}</p>
                                        {{-- <p class="" style="font-size: 1.375em;">asdasd</p> --}}
                                        <div class=" d-flex flex-row ">
                                            <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>


                                                <p class="ml-2 mr-2">
                                                    จำนวน {{$courseschooldetail->countcourse}} คอร์ส
                                                </p>
                                                {{-- <p class="ml-2 mr-2">
                                                    จำนวน 45 คอร์ส
                                                </p> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

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
