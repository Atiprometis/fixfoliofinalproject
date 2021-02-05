<nav class="navbar navbar-expand-lg bg-dark navbar-light col-md-12">
    <div class="container" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active ">
                <a href="/editcourse/{{$courseID}}" class="nav-link text-white-50" href="#">ข้อมูลคอร์ส <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a href="/editcourse/{{$courseID}}/date" class="nav-link text-white-50" href="#">วันเวลา</a>
                </li>
                <li class="nav-item">
                <a href="/editcourse/{{$courseID}}/detail" class="nav-link text-light " href="#">เกี่ยวกับคอร์ส</a>
                </li>
                <li class="nav-item">
                    <a href="/editcourse/{{$courseID}}/image" class="nav-link text-white-50 " href="#">รูปภาพ</a>
                </li>
            </ul>
            </div>

    </div>
</nav>
<div class="container">
    <div class="row">
        <div class=" d-flex flex-row col-md-12 flex-wrap mt-2">
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
                {!! Form::open( array('route' => 'aboutcourse', 'method'=>'post' ,'enctype' => 'multipart/form-data' )) !!}
                @csrf

                <div class=" d-flex flex-row">

                    <div class="col-md-12">
                    <input type="text" name="course_id" value="ห" class="form-control" style="display: none">

                        <div class=" d-flex flex-row flex-wrap col-md-12">

                            <div class="table-responsive col-md-6">

                                {!! Form::label('Course Learned','เรียนอะไรบ้าง',array('class' => ' ')) !!}

                                <table class="table table-bordered" id="dynamic_field1">

                                        <div id="countlearn" data-countlearn="{{$countlearn}}"></div>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><input type="text" readonly  placeholder="เรียนอะไรบ้าง"  class="form-control" ></th>
                                            <td><button type="button" name="addcouse1" id="addcouse1" class="btn btn-success">เพิ่ม</button></td>

                                        </tr>
                                        @foreach ($Course_learn as $learn)
                                        <tr>
                                            <th scope="row"><input type="text"  name="course_learn[]" value="{{$learn->course_learnning_detail}}"  class="form-control" ></th>
                                            <td>ข้อมูล</td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                            </div>

                            <div class="table-responsive col-md-6">

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

                            <div class="table-responsive col-md-6">

                                {!! Form::label('Course Learned','ประกอบอาชีพอะไรได้') !!}

                                <table class="table table-bordered" id="dynamic_field3">

                                    <div id="countcareer" data-countcareer="{{$countcareer}}"></div>
                                <tbody>
                                    <tr>
                                        <th scope="row"><input type="text" readonly placeholder="ประกอบอาชีพอะไรได้"  class="form-control" ></th>
                                        <td><button type="button" name="addcouse3" id="addcouse3" class="btn btn-success">เพิ่ม</button></td>

                                    </tr>
                                    @foreach ($Course_career as $career)
                                    <tr>
                                        <th scope="row"><input type="text"  name="course_learn[]" value="{{$career->course_career_detail}}"  class="form-control" ></th>
                                        <td>ข้อมูล</td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>

                            </div>

                            <div class="table-responsive col-md-6">

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

                        <div class="col my-2">
                            {{-- <a href="/backoffice" class="btn btn-success">ยกเลิก</a> --}}
                            {{-- <input type="submit"    value="ma" class="btn btn-primary swa-confirm"> --}}
                            <input type="submit"   value="อัพเดทคอร์ส" class="btn btn-primary swa-confirm">
                            <a href="/manegercourse"><button class="btn btn-secondary swa-confirm mr-2 ml-2">กลับ</button></a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>

        </div>
    </div>
</div>
