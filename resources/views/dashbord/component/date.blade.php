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
        <div class=" d-flex flex-row col-md-12 flex-wrap mt-2">

            <div class=" form-group col-md-6">
                <label for="exampleFormControlInput1">เรียนวัน</label>
                <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="email@example.com">
                <div class="col-12 p-0 m-0 ">
                    <input type="hidden" name="course_day[]" value=" ">
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
                <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="email@example.com">
                {{-- <input type="email" class="form-control" id="select1" placeholder="name@example.com"> --}}
                <select class="form-control" id="select1" name="course_category">
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
                <label for="exampleFormControlInput1">เรียนทั้งหมดกี่ชั่วโมง</label>
                <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="email@example.com">
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    ใส่ข้อมูลสำหรับเปลี่ยนราคา
                </small>
            </div>
            <div class=" form-group col-md-6">
                <label for="exampleFormControlInput1">ปิดรับสมัคร</label>
                <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="email@example.com">
                <select class="form-control" id="select1" name="course_category">
                    <option>มี</option>
                    <option>ไม่มี</option>
              </select>
                <small id="passwordHelpBlock" class="form-text text-muted">
                    ใส่ข้อมูลสำหรับเปลี่ยนใบประกาศนียบัตร
                </small>
            </div>

            <div class="line col-md-12 mt-3 mb-3" style="height: 1px; background-color:rgb(157, 157, 157);"></div>

            <div class=" form-group col-md-4">
                <label for="exampleFormControlInput1">เริ่มเรียนกี่โมง</label>
                <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="email@example.com">
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    ใส่ข้อมูลสำหรับเปลี่ยนราคา
                </small>
            </div>
            <div class=" form-group col-md-4">
                <label for="exampleFormControlInput1">เลิกเรียนกี่โมง</label>
                <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="email@example.com">
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    ใส่ข้อมูลสำหรับเปลี่ยนราคา
                </small>
            </div>
            <div class=" form-group col-md-4">
                <label for="exampleFormControlInput1">เรียนออนไลน์หรือไม่ ?</label>
                <input type="text" readonly class="form-control-plaintext" style="outline: none" id="staticEmail" value="email@example.com">
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    ใส่ข้อมูลสำหรับเปลี่ยนราคา
                </small>
            </div>

            <div class=" d-flex justify-content-center col-md-12 mt-2 mb-2">
                <input type="submit"   value="อัพเดทคอร์ส" class="btn btn-primary swa-confirm">
                <a href="/manegercourse"><button class="btn btn-secondary swa-confirm mr-2 ml-2">กลับ</button></a>
            </div>
        </div>
    </div>
</div>
