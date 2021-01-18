
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class=" d-flex flex-column">
                <h4 class="mt-3">เพิ่มคอร์สเรียน</h4>
                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('course_name','ชื่อคอร์ส') !!}
                    {!! Form::text('course_name',null,["class"=>"form-control"]) !!}

                </div>
                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('Course Learned','รายละเอียดคอร์ส') !!}
                    {!! Form::textarea('course_detail',null,["class"=>"form-control"]) !!}

                </div>
                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('course_certificate','ใบประกาศนียบัตร') !!}
                    <select class="form-control" id="exampleFormControlSelect1" name="course_certificate">
                        <option >มี</option>
                        <option >ไม่มี</option>

                    </select>

                </div>

                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('course_category','หมวดหมู่') !!}
                    <select class="form-control" id="exampleFormControlSelect1" name="course_category">
                        <option>อาหาร</option>
                        <option>ตัดเย็บ</option>
                        <option>เสริมสวย</option>
                        <option>ช่าง</option>
                        <option>ภาษา</option>
                        <option>นวด</option>
                        <option>งานฝีมือ</option>
                    </select>

                </div>

                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('course_open','เปิดรับสมัคร') !!}
                    {!! Form::date('course_open',null,["class"=>"form-control"]) !!}


                </div>

                <div class="form-group col-md-6 col-sm-12 p-0">

                    {!! Form::label('Course Learned','ปิดรับสมัคร') !!}
                    {!! Form::date('course_close',null,["class"=>"form-control"]) !!}


                </div>



                <div class=" d-flex flex-row">
                    <div class="col-6 ">
                        @include('dashbord.component.learn')
                    </div>
                    <div class="col-6">
                        {{-- @include('dashbord.component.learn') --}}
                    </div>
                </div>
                @include('dashbord.component.aboutcourse')
            </div>
        </div>
    </div>
</div>

