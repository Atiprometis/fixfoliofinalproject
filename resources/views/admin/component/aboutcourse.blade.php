<div class="container">

    @if ($errors->all())
        <ul class="alert-danger">

            @foreach($errors->all() as $error)

                <li>

                    {{$error}}

                </li>

            @endforeach

        </ul>
    @endif

    <h5 class="center my-2 mt-3"> คอร์สนี้เรียนแล้วได้อะไรบ้าง </h5>

    <div class=" d-flex flex-row">
        <div class="col-md-6">

            <div class="table-responsive ">

                {!! Form::label('Course Learned','เรียนอะไรบ้าง',array('class' => 'm-0 ')) !!}

                <table class="table table-bordered" id="dynamic_field">

                    <tr>

                        <td>

                            <input type="text" name="course_learn[]" placeholder="เรียนอะไรบ้าง" class="form-control">

                        </td>

                        <td>

                            <button type="button" name="add" id="add" class="btn btn-success">เพิ่ม</button>

                        </td>

                    </tr>

                </table>

            </div>

            <div class="table-responsive">

                {!! Form::label('Course Learned','เรียนจบแล้วทำอะไรได้') !!}

                <table class="table table-bordered" id="dynamic_field1">

                    <tr>

                        <td>

                            <input type="text" name="course_result[]" placeholder="เรียนจบแล้วทำอะไรได้" class="form-control" required>

                        </td>

                        <td>

                            <button type="button" name="add1" id="add1" class="btn btn-success">เพิ่ม</button>

                        </td>

                    </tr>

                </table>

            </div>

            <div class="table-responsive">

                {!! Form::label('Course Learned','ประกอบอาชีพอะไรได้') !!}

                <table class="table table-bordered" id="dynamic_field2">

                    <tr>

                        <td>

                            <input type="text" name="course_career[]" placeholder="ประกอบอาชีพอะไรได้" class="form-control" required>

                        </td>

                        <td>

                            <button type="button" name="add2" id="add2" class="btn btn-success">เพิ่ม</button>

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

        </div>

        <div class="  mt-4 col-md-4" style=" height: 400px">

                <p class=" m-0 p-0">ภาพคอร์ส</p>


                        <div class="  col-12 p-0 m-0  " >
                                        <label  class=" p-0 m-0 position-relative">
                                        <img class="card-img-top insutition rounded " src='{{ asset('access/imageweb/Placeholder.jpg') }}' id="uploadPreview"  style="width: 100%;height: 200px;"/>
                                        {{-- <img src="{{ asset('/access/images/photo-5.png') }}" class="insutition-all"> --}}
                                        <input class="photo" id="uploadImage" type="file" name="myPhoto" onchange="PreviewImage();" style="display: none"  />
                                        </label>





                                    {{-- <p>{{$course_name->course_name}}dddddd</p> --}}


                                <div class="  d-flex flex-column text-insutition pl-3 pt-1" style="height: 180px">
                                    <div class=" d-flex justify-content-between mt-2">
                                    <p class="d-inline-block text-truncate p-0 mb-1" style="font-size: 1em;">ssd </p>
                                        {{-- <p class="pl-2 mr-3" style="font-size: 1em;">ราคา</p> --}}
                                    </div>
                                    <div class=" d-flex flex-row ">
                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                        <p class="ml-2 mr-2 mb-1 p-0">2080</p>
                                    </div>
                                    <div class=" d-flex flex-row ">
                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                        <p class="ml-2 mr-2 mb-1 p-0">จ,อ,พ,พฤ,ศ,ส,อ</p>
                                    </div>
                                    <div class=" d-flex flex-row ">
                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                        <p class="ml-2 mr-2 mb-1 p-0">10:00 - 11:00</p>
                                    </div>
                                    <div class=" d-flex flex-row ">
                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                        <p class="ml-2 mr-2 mb-1 p-0">18 ช.ม</p>
                                    </div>
                                    <div class=" d-flex flex-row ">
                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                        <p class="ml-2 mr-2 mb-1 p-0">สถาบัน</p>
                                    </div>
                                </div>


                        </div>

        </div>

    </div>

    {{-- <div class="col-md-4">


    </div> --}}

    {{-- <div class="col my-2">

        <input type="submit" value="บันทึก" class="btn btn-primary">

        <a href="/backoffice/create" class="btn btn-success">กลับ</a>

    </div> --}}

    {!! Form::close() !!}

</div>
