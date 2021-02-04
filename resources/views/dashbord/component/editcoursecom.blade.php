<nav class="navbar navbar-expand-lg bg-dark navbar-light col-md-12">
    <div class="container" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active ">
                <a href="/editcourse/{{$courseID}}" class="nav-link text-light" href="#">ข้อมูลคอร์ส <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a href="/editcourse/{{$courseID}}/date" class="nav-link text-white-50" href="#">วันเวลา</a>
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

            {!! Form::open(array('url' => '/changeAboutCourse', 'method' => 'get')) !!}
            @csrf
            @foreach ($courseAll as $course)
        <div class=" d-flex flex-row col-md-12 flex-wrap mt-2">
            {{-- {{$courseID}} --}}
                <input type="text" name="courseID" value="{{$courseID}}" style="display: none">
                <div class=" form-group col-md-6">
                    <label for="exampleFormControlInput1">ชื่อคอร์ส</label>
                    <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="ชื่อคอร์สล่าสุด : {{$course->course_name}}">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="course_name" value="{{$course->course_name}}"  placeholder="เปลี่ยนชื่อคอร์ส">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        ใส่ข้อมูลสำหรับเปลี่ยนชื่อคอร์สของคุณ
                    </small>
                </div>

                <div class=" form-group col-md-6">
                    <label for="select1">หมวดหมู่</label>
                    <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="หมวดหมู่ล่าสุด : {{$course->course_category}}">

                    <select class="form-control" id="select1" name="course_category">
                            <option style="display: none">{{$course->course_category}}</option>
                            <option>อาหาร</option>
                            <option>ตัดเย็บ</option>
                            <option>เสริมสวย</option>
                            <option>ช่าง</option>
                            <option>ภาษา</option>
                            <option>นวด</option>
                            <option>งานฝีมือ</option>
                      </select>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        ใส่ข้อมูลสำหรับหมวดหมู่
                    </small>
                </div>

                <div class="line col-md-12 mt-3 mb-3" style="height: 1px; background-color:rgb(157, 157, 157);"></div>

                <div class=" form-group col-md-6">
                    <label for="exampleFormControlInput1">ราคา</label>
                    <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="ราคาล่าสุด : {{$course->course_cost}}">
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="course_cost" value="{{$course->course_cost}}" placeholder="เปลี่ยนราคา">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        ใส่ข้อมูลสำหรับเปลี่ยนราคา
                    </small>
                </div>
                <div class=" form-group col-md-6">
                    <label for="exampleFormControlInput1">ใบประกาศนียบัตร</label>
                    <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="ใบประกาศนียบัตร : {{$course->course_certificate}}">
                    <select class="form-control" id="select1" name="course_certificate">
                        <option style="display: none">{{$course->course_certificate}}</option>
                        <option>มี</option>
                        <option>ไม่มี</option>
                  </select>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        ใส่ข้อมูลสำหรับเปลี่ยนใบประกาศนียบัตร
                    </small>
                </div>

                <div class="line col-md-12 mt-3 mb-3" style="height: 1px; background-color:rgb(157, 157, 157);"></div>
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea1">รายละเอียดคอร์ส</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="course_detail" rows="8" value="sa">{{$course->course_detail}}</textarea>
                </div>

                <div class=" d-flex justify-content-center col-md-12 mt-2 mb-2">
                    <input type="button" id="updatecourse"   value="อัพเดทคอร์ส" class="btn btn-primary swa-confirm">

                        <button type="submit" formaction="/manegercourse" class="btn btn-secondary swa-confirm mr-2 ml-2" >กลับ</button>

                </div>
        </div>
            @endforeach
            {!! Form::close() !!}

    </div>
</div>
