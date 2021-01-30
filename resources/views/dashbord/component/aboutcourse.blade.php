<div class="container">

    {{-- @if ($errors->all())
        <ul class="alert-danger">

            @foreach($errors->all() as $error)

                <li>

                    {{$error}}

                </li>

            @endforeach

        </ul>
    @endif --}}

    <h5 class="center my-2 mt-3"> คอร์สนี้เรียนแล้วได้อะไรบ้าง </h5>
    {!! Form::open( array('route' => 'aboutcourse', 'method'=>'post' ,'enctype' => 'multipart/form-data' )) !!}
    @csrf

    <div class=" d-flex flex-row">

        <div class="col-md-6">

            <p>{{$return}}</p>

        <input type="text" name="course_id" value="{{$return}}" class="form-control" style="display: none">

            <div class="table-responsive ">

                {!! Form::label('Course Learned','เรียนอะไรบ้าง',array('class' => 'm-0 ')) !!}

                <table class="table table-bordered" id="dynamic_field1">
                    <tr>
                        <td>
                            <input type="text" name="course_learn[]" placeholder="เรียนอะไรบ้าง" class="form-control">

                        </td>

                        <td>

                            <button type="button" name="add1" id="add1" class="btn btn-success">เพิ่ม</button>

                        </td>

                    </tr>

                </table>

            </div>

            <div class="table-responsive">

                {!! Form::label('Course Learned','เรียนจบแล้วทำอะไรได้') !!}

                <table class="table table-bordered" id="dynamic_field2">

                    <tr>

                        <td>

                            <input type="text" name="course_result[]" placeholder="เรียนจบแล้วทำอะไรได้" class="form-control" required>

                        </td>

                        <td>

                            <button type="button" name="add2" id="add2" class="btn btn-success">เพิ่ม</button>

                        </td>

                    </tr>

                </table>

            </div>

            <div class="table-responsive">

                {!! Form::label('Course Learned','ประกอบอาชีพอะไรได้') !!}

                <table class="table table-bordered" id="dynamic_field3">

                    <tr>

                        <td>

                            <input type="text" name="course_career[]" placeholder="ประกอบอาชีพอะไรได้" class="form-control" required>

                        </td>

                        <td>

                            <button type="button" name="add3" id="add3" class="btn btn-success">เพิ่ม</button>

                        </td>

                    </tr>

                </table>

            </div>

            <div class="table-responsive">

                {!! Form::label('Course Learned','Youtube Link') !!}

                <table class="table table-bordered" id="dynamic_field4">
                    <tr>
                        <td>
                            <input type="text" name="course_youtube[]" placeholder="ประกอบอาชีพอะไรได้" class="form-control" required>
                        </td>
                        <td>
                            <button type="button" name="add4" id="add4" class="btn btn-success">เพิ่ม</button>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col my-2">
                {{-- <a href="/backoffice" class="btn btn-success">ยกเลิก</a> --}}
                {{-- <input type="submit"    value="ma" class="btn btn-primary swa-confirm"> --}}
                <input type="button" id="btn-submit"    value="สร้างคอร์ส" class="btn btn-primary swa-confirm">
            </div>





        </div>

        <div class="  mt-4 col-md-4" style=" height: 400px">

                <p class=" m-0 p-0">ภาพคอร์ส</p>
                        <div class="  col-12 p-0 m-0  " >
                                        <label  class=" p-0 m-0 position-relative">
                                        <img class="card-img-top insutition rounded " src='{{ asset('access/imageweb/Placeholder.jpg') }}' id="uploadPreview"  style="width: 100%;height: 200px; cursor: pointer"/>

                                        {{-- <img src="{{ asset('/access/images/photo-5.png') }}" class="insutition-all"> --}}
                                        <input class="photo" id="uploadImage" type="file" name="image" onchange="PreviewImage();" style="display: none"  />
                                        </label>

                                <div class="  d-flex flex-column text-insutition pl-3 pt-1" style="height: 160px">
                                    <div class=" d-flex justify-content-between mt-2">
                                        <p class="d-inline-block text-truncate" style="font-size: 1em;">
                                            @php
                                            print_r($data[0]['course_name']);
                                            @endphp
                                        </p>
                                    </div>
                                    <div class=" d-flex flex-row ">
                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                        <p class="ml-2 mr-2 mb-1 p-0">
                                            @php
                                            print_r($data[0]['course_cost']);
                                            @endphp
                                        </p>
                                    </div>
                                    <div class=" d-flex flex-row ">
                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                        <p class="ml-2  mb-1 p-0" style="width: 120%;">

                                            @foreach ($dayData as $day)
                                                @foreach ($day as $dayrow1)
                                                    @foreach ($dayrow1 as $dayrow2)
                                                        {{$dayrow2}},
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        </p>
                                        <p class="text-right mr-2 mb-1 p-0" style="width: 80%;">
                                            @php
                                            print_r($data[0]['course_learn_start']);
                                            @endphp
                                            -
                                            @php
                                            print_r($data[0]['course_learn_end']);
                                            @endphp
                                        </p>
                                    </div>
                                    <div class=" d-flex justify-content-between">
                                        <div class=" d-flex flex-row ">
                                            <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                            <p class="p-0 m-0 ml-2 mr-2">
                                                @php
                                                print_r($data[0]['course_hours']);
                                                @endphp
                                                ชั่วโมง</p>
                                        </div>

                                    </div>
                                    <div class=" d-flex flex-row ">
                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                        <p class="ml-2 mr-2 mb-1 p-0 d-inline-block text-truncate">
                                            @foreach ($schools as $schoolname)
                                                {{$schoolname->schools_name}}
                                            @endforeach
                                        </p>
                                    </div>

                                </div>


                        </div>


        </div>

    </div>
    {!! Form::close() !!}

    {{-- <div class="col-md-4">


    </div> --}}

    {{-- <div class="col my-2">

        <input type="submit" value="บันทึก" class="btn btn-primary">

        <a href="/backoffice/create" class="btn btn-success">กลับ</a>

    </div> --}}



</div>
