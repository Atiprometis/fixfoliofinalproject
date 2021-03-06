
    <div class="container">
        <div class="row">

            <div class="profile rounded col-12 d-flex flex-row flex-wrap mt-5 mb-4 align-items-center">
                <div class=" p-3 col-3">
                    {!! Form::open(array('url' => 'uploadimageschool', 'method'=>'post' ,'enctype' => 'multipart/form-data' )) !!}
                        {{-- {{ csrf_field() }}
                        {{ method_field('POST') }} --}}
                    <label style="cursor: pointer">
                    @if ($schoolsdetails->school_image != null)
                    <img class="card-img-top rounded-circle" src='../imagesSchools/{{ $schoolsdetails->schools_owner }}/{{ $schoolsdetails->school_image  }}' alt="Card image cap" style="height: 250px;border: 1px solid #c1c1c1;">
                    @else
                    <img class="card-img-top rounded-circle" src='../access/imageweb/school1.jpg' alt="Card image cap" style="height: 250px;border: 1px solid #c1c1c1;">
                    @endif
                    {{-- <input type="file" class="custom-file-input" name="image" style="display: "> --}}
                    <div class="custom-file mt-2 mb-2">
                        <input type="file" class="custom-file-input" name="image" >
                        <div class="custom-file-label" for="namefile">เลือกรูป</div>
                    </div>
                    </label>
                      <button type="submit" class="btn mt-2 text-light" style="width: 100%; border-radius: 20px; background-color: #9B4BB0;">กดเพื่ออัพโหลดรูป</button>
                    {!! Form::close() !!}
                </div>
                <div class="profile-about col-9 mt-2 ">
                    <div class=" d-flex flex-column  ">
                        <div class=" d-flex flex-row justify-content-between">
                            <div class=" d-flex flex-column ">
                                <div class="name d-flex flex-column">
                                    <div class=" d-flex flex-row">

                                    </div>
                                </div>
                                    <div class="name ml-3">
                                        <h2 style="color: #69299C;">{{ $schoolsdetails->schools_name }}</h2>
                                    </div>
                            </div>

                        </div>
                    </div>
                    {!! Form::open(array('url' => 'editDataschool', 'method'=>'post' ,'enctype' => 'multipart/form-data' )) !!}
                    <div class="aboutme  p-3 border-bottom-0" style="border: solid 1px #69299C;">
                        <div class=" d-flex flex-row">
                            <h1 style="font-size: 1.250em;   font-weight: 400;">คอร์สเรียนทั้งหมด</h1>
                            <h1 class="ml-2" style="font-size: 1.250em;   font-weight: 400; color: #69299C;">{{ $countschool }}</h1>
                        </div>
                        <textarea  class="form-control textarea-grow " oninput="auto_grow(this)" style="resize: none;height: 150px;" name="schools_detail" id="profile_aboutme" style=" height: 80%;"
                             aria-label="aaaad" maxlength='1000'
                            >{{ $schoolsdetails->schools_detail }}</textarea>
                    </div>
                    <div class="col-md-12 d-flex flex-row p-2  border-top-0 justify-content-start flex-wrap" style="border: solid 1px #69299C;">
                        <div class="d-flex col-md-5 p-0 m-0 ml-1 mr-1 flex-column form-group">
                            <small>facebook</small>
                            <input class="form-control" value="{{ $schoolsdetails->facebook }}" name="school_facebook" maxlength="50" type="text"placeholder="ระบุ facebook" >
                        </div>
                        <div class="d-flex col-md-2 p-0 m-0 ml-1 mr-1 flex-column form-group">
                            <small>เบอร์โทรศัพท์</small>
                            <input class="form-control" value="{{ $schoolsdetails->phone }}" name="school_phone" pattern="[0]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" type="text" placeholder="เบอร์โทรศัพท์">
                        </div>
                        <div class="d-flex col-md-4 p-0 m-0 ml-1 mr-1 flex-column form-group">
                            <small>line</small>
                            <input class="form-control" value="{{ $schoolsdetails->line }}" name="school_line" maxlength="30"  type="text" placeholder="ใส่ line">
                        </div>
                        <div class="d-flex col-md-12 p-0 m-0 ml-1 mr-1 flex-column form-group">
                            <small>e-mail</small>
                            <input class="form-control" value="{{ $schoolsdetails->email }}" name="school_email" type="email" maxlength="100" placeholder="ระบุ e-mail">
                        </div>
                        <div class="p-0 mt-3 d-flex align-items-end w-100  justify-content-center col-md-12">
                            <button class="btn text-light w-100" style="background-color: #9B4BB0;">บันทึก</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>

                <div class="d-flex flex-row text-institution align-items-end justify-content-between">
                        <h2 class="p-0 m-0 ml-2" style="font-size: 1.750em;">คอร์สเรียนสอนโดย </h2>
                        <h2 class="p-0 m-0 ml-2" style="font-size: 1.750em;">{{ $schoolsdetails->schools_name }}</h2>
                </div>

                <div class="col-12 p-0 m-0">

                    @foreach ($coursesdetails as $course)
                            @if ($course->status != 0)
                            <a href="{{route('course-detail.show', $course->course_id)}}" style="color: inherit;">
                                <div class=" col-4  p-2   float-left " >
                                    <div class=" w-100 " >
                                            <div class=" position-relative">
                                                <div class="d-flex flex-row w-100 justify-content-md-between p-3 position-absolute">
                                                    {{-- <div class="open-course ">เปิดรับสมัคร</div> --}}
                                                    {{-- <div class="open-online  ">มีสอนออนไลน์</div> --}}
                                                </div>
                                                @foreach ($thumbnail as $image)
                                                    @if ($image->course_id == $course->course_id)
                                                    <img src="{{ asset('/course/thumbnail/'.$image->thumbnails_images.'') }}" class="insutition-all">
                                                    @endif
                                                @endforeach
                                                {{-- <img src="{{ asset('/course/thumbnail/') }}" class="insutition-all"> --}}

                                            </div>
                                        <div class="  d-flex flex-column text-insutition pl-3 pt-1" style="height: 140px">
                                            <div class=" d-flex justify-content-between mt-2">
                                                <p class="d-inline-block text-truncate" style="font-size: 1em;">{{ $course->course_name }}</p>
                                                <p class="pl-2 mr-3" style="font-size: 1em;">{{ $course->course_cost }}</p>
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
                                                         เวลา {{ $course->course_learn_start }} - {{ $course->course_learn_end }} น.
                                                </p>
                                            </div>
                                            <div class=" d-flex justify-content-between">
                                                <div class=" d-flex flex-row ">
                                                    <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                                    <p class="ml-2 mr-2">{{ $course->course_hours }} ชั่วโมง</p>
                                                </div>

                                                <p class=" mr-3" style="font-size: 1em;">
                                                        @if ($schoolsdetails->schools_id == $course->course_school)
                                                                {{$schoolsdetails->schools_name}}
                                                        @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            @endif
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

