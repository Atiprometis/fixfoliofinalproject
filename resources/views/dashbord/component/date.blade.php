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
                <a href="/editcourse/{{$courseID}}/date" class="nav-link text-light" href="#">วันเวลา</a>
                </li>
                <li class="nav-item">
                <a href="/editcourse/{{$courseID}}/detail" class="nav-link text-white-50" href="#">เกี่ยวกับคอร์ส</a>
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
        {!! Form::open(array('url' => '/changeDate', 'method' => 'get')) !!}
            @csrf
            <input type="text" name="courseID" value="{{$courseID}}" style="display: none">
            @foreach ($courseAll as $course)
        <div class=" d-flex flex-row col-md-12 flex-wrap mt-2">

            <div class=" form-group col-md-6">
                <label for="exampleFormControlInput1">เรียนวันไหน</label>
                <div class=" d-flex flex-row">
                    วันที่เรียน :
                    @foreach ($course_day as $day)
                            <p>{{$day->course_day}}_</p>
                    @endforeach
                    <input type="text" name="user_id" value="{{$user_id}}" style="display: none">
                    <input type="text" name="course_final_id" value="{{$course_final_id}}" style="display: none">
                </div>
                <div class="col-12 p-0 m-0 ">

                    <label class="col-3 p-0" ><input type="checkbox" name="course_day[]" value="จ" > จันทร์</label>
                    <label class="col-3 p-0"><input type="checkbox" name="course_day[]" value="อ"> อังคาร</label>
                    <label class="col-3 p-0"><input type="checkbox" name="course_day[]" value="พ"> พุธ</label>
                    <label class="col-3 p-0"><input type="checkbox" name="course_day[]" value="พฤ"> พฤหัสบดี</label>
                    <label class="col-3 p-0"><input type="checkbox" name="course_day[]" value="ศ"> ศุกร์</label>
                    <label class="col-3 p-0"><input type="checkbox" name="course_day[]" value="ส"> เสาร์</label>
                    <label class="col-3 p-0"><input type="checkbox" name="course_day[]" value="อา"> อาทิตย์</label>

                </div>
                <small id="passwordHelpBlock" class="form-text text-muted">
                    ใส่ข้อมูลสำหรับเปลี่ยนชื่อคอร์สของคุณ
                </small>
            </div>
            <div class=" form-group col-md-6">
                <label for="select1">เปิดรับสมัคร</label>

                <input type="date" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="{{$course->course_open}}">
                <input type="date" class="form-control" name="course_open" value="{{$course->course_open}}">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    ใส่ข้อมูลสำหรับหมวดหมู่
                </small>
            </div>

            <div class="line col-md-12 mt-3 mb-3" style="height: 1px; background-color:rgb(157, 157, 157);"></div>

            <div class=" form-group col-md-6">
                <label for="exampleFormControlInput1">เรียนทั้งหมดกี่ชั่วโมง</label>
                <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="ชั่งโมงเรียน : {{$course->course_hours}}">
                <input type="number" class="form-control" id="exampleFormControlInput1" name="course_hours" value="{{$course->course_hours}}"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength="3"
                >
                <small id="passwordHelpBlock" class="form-text text-muted">
                    ใส่ข้อมูลสำหรับเปลี่ยนราคา
                </small>
            </div>
            <div class=" form-group col-md-6">
                <label for="exampleFormControlInput1">ปิดรับสมัคร</label>
                {{-- <p >วันปิดรับสมัคร : {{$course->course_close}}</p> --}}
                <input type="date" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="{{$course->course_close}}">
                <input type="date" class="form-control" name="course_close" value="{{$course->course_close}}">

                <small id="passwordHelpBlock" class="form-text text-muted">
                    ใส่ข้อมูลสำหรับเปลี่ยนใบประกาศนียบัตร
                </small>
            </div>

            <div class="line col-md-12 mt-3 mb-3" style="height: 1px; background-color:rgb(157, 157, 157);"></div>

            <div class=" form-group col-md-4">
                <label for="exampleFormControlInput1">เริ่มเรียนกี่โมง</label>
                <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="เวลาเริ่มเรียน : {{\Carbon\Carbon::createFromFormat('H:i:s',$course->course_learn_start)->format('H:i')}}">
                <input type="time" class="form-control" id="exampleFormControlInput1" name="course_learn_start" value="{{$course->course_learn_start}}" >
                <small id="passwordHelpBlock" class="form-text text-muted">
                    ใส่ข้อมูลสำหรับเปลี่ยนราคา
                </small>
            </div>
            <div class=" form-group col-md-4">
                <label for="exampleFormControlInput1">เลิกเรียนกี่โมง</label>

                <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="เวลาเลิกเรียน : {{\Carbon\Carbon::createFromFormat('H:i:s',$course->course_learn_end)->format('H:i')}}">
                <input type="time" class="form-control" id="exampleFormControlInput1" name="course_learn_end" value="{{$course->course_learn_end}}">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    ใส่ข้อมูลสำหรับเปลี่ยนราคา
                </small>
            </div>
            <div class=" form-group col-md-4">
                <label for="exampleFormControlInput1">เรียนออนไลน์หรือไม่ ?</label>
                <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="คอร์สเรียน : {{$course->course_online}}">
                <select class="form-control" name="course_online" onchange="yesnoCheck(this);" >
                    <option selected value="{{$course->course_online}}"  style="display: none">{{$course->course_online}}</option>
                    <option value="ไม่มีคอร์สออนไลน์">ไม่มีคอร์สออนไลน์</option>
                    <option value="มีคอร์สออนไลน์">มีคอร์สออนไลน์</option>
                </select>


                <small id="passwordHelpBlock" class="form-text text-muted">
                    ใส่ข้อมูลสำหรับเปลี่ยนราคา
                </small>
            </div>

            @if ($course->image_herobanner != null)

                <div class="form-group col-md-12 p-0 mr-2 ml-2">
                    <div  >
                        <label for="car">ข้อมูลเว็บไซต์ล่าสุดสำหรับโปรโมท</label>
                        <input type="text" readonly class="w-100 form-control" id="ifNo" style="display: none;"  placeholder="ท่านไม่ได้โปรโมทเว็บไซต์" name="course_promote" /><br />
                        <input type="text"   class="w-100 form-control" id="ifYes" style="display: block;"  placeholder="{{$course->image_herobanner}}" name="course_promote" /><br />
                    </div>
                </div>

            @else

            <div class="form-group col-md-12 p-0 mr-2 ml-2">
                <div  >
                    <label for="car">โปรดใส่ข้อมูลสำหรับโปรโมทเว็บไซต์</label>
                    <input type="text" readonly class="w-100 form-control" id="ifNo" style="display: block;"  placeholder="ท่านไม่ได้โปรโมทเว็บไซต์" name="course_promote" /><br />
                    <input type="text"   class="w-100 form-control" id="ifYes" style="display: none;"  placeholder="{{$course->image_herobanner}}" name="course_promote" /><br />
                </div>
            </div>

            @endif

                    <div class=" d-flex justify-content-center col-md-12 mt-2 mb-2">
                        <input type="button" id="updatecourse"   value="อัพเดทคอร์ส" class="btn btn-primary swa-confirm">
                        <button type="submit" formaction="/manegercourse" class="btn btn-secondary swa-confirm mr-2 ml-2" >กลับ</button>

                    </div>
            </div>
        </div>
            @endforeach
        {!! Form::close() !!}
    </div>
</div>
