@extends('layout.master')

@section('title', 'ค้นหาผลงาน')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column p-0 m-1">
                <div class=" col-12 w-100 p-0 m-0 mt-5 search-institution">
                    <h1 style="font-size: 1.750em;">ค้นหาคนที่ใช่</h1>
                        <form>
                            <div class=" d-flex flex-column mb-5">
                                <div class=" d-flex flex-row">
                                    <input type="search" name="search" class="form-control mr-3 " style="border-radius: 20px;" id="InputInstitution" aria-describedby="InputInstitution" placeholder="ค้นหา">
                                    <button class="btn " type="submit" style="background-color: #F9C226; width:150px; border-radius: 20px;"> ค้นหา</button>
                                </div>
                                <div class="col-8 d-flex flex-row p-0 m-0 mt-3">
                                    <select class="form-control form-control-sm rounded mr-3 pl-1 pr-1" >
                                        <option>ทักษะ</option>
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

                    <div class=" d-flex w-100 flex-column">
                        <h1 class="p-0 m-0 ml-2" style="font-size: 1.750em;">คนที่น่าจะใช่สำหรับธุรกิจของคุณ</h1>
                        <div class="d-flex flex-row mt-3 mb-3 w-100 text-institution align-items-end justify-content-between">
                            <p class="p-0 m-0 ml-2">ว่าจ้าง และหาคนทำงานให้กับธุรกิจของคุณ</p>
                            <div class=" d-flex flex-row">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input  " type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">มีประสบการ์ทำงาน</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input " type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">ไม่มีประสบการ์ทำงาน</label>
                                  </div>

                                <p class="p-0 m-2"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 p-0 m-0">


                        @foreach ($profile_ports as $profile_port)
                        @if ($profile_port->status != 0)

                        <a class="" href="{{route('searchportfolio.show',$profile_port->user_id)}}" style="color: inherit; ">
                            <div class=" col-4  p-2   float-left " >
                                <div class=" d-flex flex-column w-100 position-relative" style="border-radius: 15px 15px 0px 0px;">
                                    {{-- <h1>{{ $profile_port->id}}</h1> --}}

                                    <div class=" w-100 d-flex justify-content-center " style="height: 130px; background-color: #69299C;border-radius: 15px 15px 0px 0px;border: solid 1px #E5E5E5;">

                                        @foreach ($avatar_images as $image)
                                        @isset($image->avatar_path)
                                        @if ($image->user_id == $profile_port->user_id)

                                            <div class="pt-5">
                                                <img class="people-port" src='../avatar/{{ $image->user_id }}/{{ $image->avatar_path }}' alt="Card image cap" >
                                            </div>

                                          @else

                                        @endif
                                        @endisset
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
