<div class="">

    <h1 class="center"> จัดการคอร์สเรียน</h1>

    {{-- <a href="/dashcreatecourse" class="btn btn-primary my-2">สร้างคอร์สเรียน </a> --}}
    <table class="table">
        <thead class="thead-dark text-center">
          <tr>
            <th scope="col">รหัส</th>
            <th scope="col">ชื่อคอร์ส</th>
            <th scope="col">สถาบัน</th>
            <th scope="col">หมวดหมู่</th>
            <th scope="col">ราคา</th>
            {{-- <th scope="col">ใบประกาศนียบัตร</th> --}}
            <th scope="col">เปิดรับสมัคร</th>
            <th scope="col">ปิดรับสมัคร</th>

            <th scope="col">เริ่มเรียน</th>
            <th scope="col">เลิกเรียน</th>
            <th scope="col">ชั่วโมง</th>
            <th scope="col">สอนออนไลน์</th>
            <th scope="col">รูปภาพ</th>
            <th scope="col">สถานะ</th>
            <th scope="col">แก้ไข</th>
            <th scope="col">ลบ</th>
          </tr>
        </thead>
        <tbody class=" text-center">

            @foreach ($courseallForSchool as $index=>$course)
                <tr>
                <th scope="row">{{$index+1}}</th>
                <td>{{$course->course_name}}</td>
                <td>{{$course->schools_name}}</td>
                <td>{{$course->course_category}}</td>
                <td>{{$course->course_cost}}</td>
                {{-- <td>{{$course->course_certificate}}</td> --}}
                <td>{{$course->course_open}}</td>
                <td>{{$course->course_close}}</td>


                <td>{{$course->course_learn_start}}</td>
                <td>{{$course->course_learn_end}}</td>
                <td>{{$course->course_hours}}</td>
                <td>{{$course->course_online}}</td>
                <td>
                        <p class=" text-danger" style="cursor: pointer;" data-toggle="modal" data-target="#showimage{{ $course->course_id }}">แสดงรูปภาพ</p>
                </td>
                <td>

                    @if ($course->status == 1)
                    <p class="text-success">ตรวจสอบสำเร็จ</p>
                    @else
                    <p class=" text-danger">กำลังตรวจสอบ</p>
                    @endif
                </td>
                <td>
                    <form action="/editcourse/{{$course->course_id}}" method="GET">
                        @csrf
                        <button type="submit" data-name="{{$course->course_id}}" class="btn btn-info deleteForm ">แก้ไข</button>
                    </form>
                </td>
                <td >
                    <form action="/deletecourse/{{$course->course_id}}" method="GET">
                        @csrf
                        <button type="submit" data-name="{{$course->course_id}}" class="btn btn-danger deleteForm destroy-btn">ลบ</button>
                    </form>
                </td>

                </tr>

                <div class="modal fade" id="showimage{{ $course->course_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">รูปภาพคอร์ส</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body col-md-12">

                                    <div class="col-md-12">
                                        <img src='../course/thumbnail/{{ $course->thumbnails_images }}' class=" w-100 h-50" alt="">
                                    </div>
                          <img src="" alt="">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                      </div>
                    </div>
                  </div>

          @endforeach
        </tbody>
      </table>

</div>
