
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class=" d-flex flex-column">
                <h4 class="mt-3">เพิ่มคอร์สเรียน</h4>

                {!! Form::open(['action' => 'DashbordController@passDatatoCoursedetail', 'method'=>'post']) !!}
                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('course_name','ชื่อคอร์ส') !!}
                    {!! Form::text('course_name',null,["class"=>"form-control",'required']) !!}

                </div>
                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('course_category','หมวดหมู่','required') !!}
                    <select class="form-control" id="exampleFormControlSelect1" name="course_category">
                        @foreach ($course_type as $type)
                        <option>{{ $type->type_name }}</option>
                        @endforeach

                    </select>

                </div>
                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('course_cost','ราคา') !!}
                    {!! Form::number('course_cost',null,["class"=>"form-control",'required']) !!}

                </div>
                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('course_detail','รายละเอียดคอร์ส') !!}
                    {!! Form::textarea('course_detail',null,["class"=>"form-control",'required']) !!}

                </div>

                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('course_certificate','ใบประกาศนียบัตร') !!}
                    <select class="form-control" id="exampleFormControlSelect1" name="course_certificate">
                        <option >มี</option>
                        <option >ไม่มี</option>

                    </select>

                </div>



                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('course_open','เปิดรับสมัคร') !!}
                    {!! Form::date('course_open',null,["class"=>"form-control",'required']) !!}


                </div>

                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('course_close','ปิดรับสมัคร') !!}
                    {!! Form::date('course_close',null,["class"=>"form-control",'required',]) !!}

                </div>



                <div class=" d-flex flex-row">
                    <div class="col-6 ">
                        @include('dashbord.component.learn')
                    </div>

                </div>

                <div class="col my-2">

                    {{-- <a href="/backoffice" class="btn btn-success">ยกเลิก</a> --}}
                    <input type="submit" value="ต่อไป" class="btn btn-primary">


                </div>

                {!! Form::close() !!}
                {{-- @include('dashbord.component.aboutcourse') --}}
            </div>
        </div>
    </div>
</div>

