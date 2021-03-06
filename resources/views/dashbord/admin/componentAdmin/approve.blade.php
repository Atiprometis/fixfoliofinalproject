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
            <th scope="col">สถานะ</th>
            <th scope="col">อนุมัติ</th>
            <th scope="col">ดูข้อมูล</th>
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
                <td>{{$course->course_open}}</td>
                <td>{{$course->course_close}}</td>
                <td>{{$course->course_learn_start}}</td>
                <td>{{$course->course_learn_end}}</td>
                <td>{{$course->course_hours}}</td>
                <td>{{$course->course_online}}</td>
                <td>

                    @if ($course->status == 1)
                    <p class="text-success">ตรวจสอบสำเร็จ</p>
                    @else
                    <p class=" text-danger">กำลังตรวจสอบ</p>
                    @endif
                </td>
                <td>
                    @if ($course->status == 1)
                    <form action="/approve/{{$course->course_id}}" method="GET">
                        @csrf
                        <button type="submit" id="updatecourse" data-name="{{$course->course_id}}" class="btn btn-success deleteForm " style="display: none">อนุมัติ</button>
                    </form>
                    @else
                    <form action="/approve/{{$course->course_id}}" method="GET">
                        @csrf
                        <button type="submit" id="updatecourse" data-name="{{$course->course_id}}" class="btn btn-success deleteForm ">อนุมัติ</button>
                    </form>
                    @endif
                </td>
                <td>
                    {{-- <form action="/editcourse/{{$course->course_id}}" method="GET">
                        @csrf --}}
                        {{-- <p class=" text-danger" style="cursor: pointer;" data-toggle="modal" data-target="#showimage{{ $course->course_id }}">แสดงรูปภาพ</p>ห --}}
                        <button type="button" data-toggle="modal" data-target="#showimage{{ $course->course_id }}" class="btn btn-info deleteForm ">แสดงข้อมูล</button>
                    {{-- </form> --}}
                </td>
                <td >
                    <form action="/deletecourse/{{$course->course_id}}" method="GET">
                        @csrf
                        <button type="submit" data-name="{{$course->course_id}}" class="btn btn-danger deleteForm destroy-btn">ลบ</button>
                    </form>
                </td>

                </tr>

                <div class="modal fade" id="showimage{{ $course->course_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">รูปภาพคอร์ส</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body col-md-12">

                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img src='../course/thumbnail/{{ $course->thumbnails_images }}' class=" " alt="" style="width: 300px;height:300px;">
                                    </div>
                                    <h3 class="mt-3">ชื่อคอร์ส : {{$course->course_name}}</h3>
                                    <p>โรงเรียน : {{$course->schools_name}}</p>
                                    <div class="col-md-12 d-flex flex-row flex-wrap">
                                        <div class="col-md-6 p-0">
                                            <p style="font-weight: bold">ข้อมูลคอร์ส</p>
                                            <div class=" d-flex flex-row colmd-12 flex-wrap">
                                                <div class=" col-md-6">
                                                    <p class="pt-1">หมวดหมู่ : {{$course->course_category}}</p>
                                                    <p class="pt-1">ใบประกาศนียบัตร : {{$course->course_certificate}}</p>
                                                </div>
                                                <div class=" col-md-6">
                                                    <p class="pt-1">ราคา : {{$course->course_cost}}</p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="pt-1">เกี่ยวกับคอร์ส : {{$course->course_detail}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p style="font-weight: bold">ข้อมูลวันเวลา</p>
                                            <div class=" d-flex flex-row colmd-12 flex-wrap">
                                                <div class=" col-md-6">
                                                    <p class="pt-1">เรียนวัน :
                                                        @foreach ($courseDay as $day)
                                                            @if ($day->course_final_id == $course->course_id)
                                                                    {{$day->course_day}}
                                                            @endif
                                                        @endforeach

                                                    </p>
                                                </div>
                                                <div class=" col-md-6">
                                                    <p class="pt-1">เรียนทั้งหมดกี่ชั่วโมง : {{$course->course_cost}}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="pt-0 m-0">เปิดรับสมัคร : {{$course->course_open}}</p>
                                                    <p class="pt-0 m-0">ปิดรับสมัคร : {{$course->course_close}}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="pt-0 m-0">เวลาเริ่มเรียน : {{$course->course_learn_start}}</p>
                                                    <p class="pt-0 m-0">เวลาเลิกเรียน : {{$course->course_learn_end}}</p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="pt-0 mt-2">เรียนออนไลน์หรือไม่ : {{$course->course_online}}</p>
                                                    @if ($course->image_herobanner != null)
                                                        <a href="{{$course->image_herobanner}}"><p class="pt-0 m-0">ลิงค์เว็บไซต์</p></a>
                                                    @else
                                                        <p class="pt-0 m-0">ไม่มีเว็บโปรโมท</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <p style="font-weight: bold">เกี่ยวกับคอร์ส</p>
                                            <div class=" d-flex flex-row colmd-12 flex-wrap">
                                                <div class=" col-md-6">
                                                    <p class="pt-1">เรียนอะไรบ้าง:</p>
                                                    @foreach ($Courselearn as $index=>$learn)
                                                        <ul>
                                                            @if ($learn->course_id == $course->course_id )
                                                                <li>{{ $learn->course_learnning_detail }}</li>
                                                            @endif
                                                        </ul>
                                                    @endforeach

                                                </div>
                                                <div class=" col-md-6">
                                                    <p class="pt-1">เรียนจบแล้วทำอะไรได้</p>
                                                        @foreach ($Courseresult as $index=>$result)
                                                            <ul>
                                                                @if ($result->course_id == $course->course_id )
                                                                    <li>{{ $result->course_learn_finish_detail }}</li>
                                                                @endif
                                                            </ul>
                                                        @endforeach

                                                </div>
                                                <div class="col-md-6">
                                                    <p class="pt-0 m-0">ประกอบอาชีพอะไรได้</p>
                                                        @foreach ($Coursecareer as $index=>$career)
                                                                <ul>
                                                                    @if ($career->course_id == $course->course_id )
                                                                        <li>{{ $career->course_career_detail }}</li>
                                                                    @endif
                                                                </ul>
                                                        @endforeach

                                                </div>
                                                <div class="col-md-6">
                                                    <p class="pt-0 m-0">Youtube Link</p>

                                                        @foreach ($Courseyoutube as $index=>$youtube)

                                                            <ul>
                                                                @if ($youtube->course_id == $course->course_id )
                                                                    <a href="{{ $youtube->youtube_link }}"><li>ลิงค์</li></a>
                                                                @endif
                                                            </ul>

                                                        @endforeach

                                                </div>

                                            </div>
                                        </div>
                                    </div>

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
