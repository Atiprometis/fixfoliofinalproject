

    <div class="modal fade" id="addExpfinal" tabindex="-1" role="dialog" aria-labelledby="Expwork" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มหลักสูตรที่เรียนจบ</h5>
            </div>
            <div class="modal-body">
            <form method="post" action="{{url('addExpp')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <ul class="m-0 p-0 text-left">
                    <li class="m-0 p-0">
                        <p class=" p-0 m-0 mt-2 mb-2">รุ่นที่</p>
                        <input id="position" name="generation" class="swal2-input m-0" placeholder="ระบุตำแหน่ง" required>
                    </li>
                    <li>
                        <p class=" p-0 m-0 mt-2 mb-2">ชื่อหลักสูตร</p>
                        <input id="company" name="corse_name" class="swal2-input m-0" placeholder="ระบุชื่อบริษัท" required>
                    </li>
                    <li>
                        <p class=" p-0 m-0 mt-2 mb-2">สถานที่ศึกษาจบ</p>
                        <input id="county" name="location" class="swal2-input m-0" placeholder="ระบุเขต" required>

                    </li>
                    <li>
                        <p class=" p-0 m-0 mt-2 mb-2">รูปภาพผลงานของท่าน (สูงสุด 8 รูปภาพ)</p>
                        <div class=" d-flex flex-row col-md-12 flex-wrap">

                            @for ($i = 1; $i <= 8; $i++)
                            <label  class="position-relative col-md-3  p-2 m-0">
                                <img class="card-img-top insutition rounded" src='{{ asset('access/imageweb/Placeholder.jpg') }}' id="uploadPreview{{ $i }}"  style="width: 150p;height: 150px; cursor: pointer"/>
                                    <input type="file" class="photo custom-file-input" id="uploadImage{{ $i }}"  value="Placeholder.jpg" name="images[]" onchange="PreviewImage{{ $i }}();" style="display: none"    />
                            </label>
                            @endfor


                        </div>
                    </li>
                </ul>
                    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
            </form>
            </div>
        </div>
        </div>
    </div>


<div class="modal fade" id="Expwork" tabindex="-1" role="dialog" aria-labelledby="Expwork" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มประสบการณ์ทำงาน</h5>
        </div>
        <div class="modal-body">
          <form method="post" action="{{url('expwork')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <ul class="m-0 p-0 text-left">
                <li class="m-0 p-0">
                    <p class=" p-0 m-0 mt-2 mb-2">ตำแหน่ง</p>
                    <input id="position" name="position" class="swal2-input m-0" placeholder="ระบุตำแหน่ง" required>
                </li>
                <li>
                    <p class=" p-0 m-0 mt-2 mb-2">ชื่อบริษัท</p>
                    <input id="company" name="company" class="swal2-input m-0" placeholder="ระบุชื่อบริษัท" required>
                </li>
                <li>
                    <p class=" p-0 m-0 mt-2 mb-2">สถานที่ตั้งบริษัท</p>
                    <input id="county" name="county" class="swal2-input m-0" placeholder="ระบุเขต" required>
                    <input id="province" name="province" class="swal2-input m-0" placeholder="ระบุจังหวัด" required>
                </li>
                <li>
                    <p class=" p-0 m-0 mt-2 mb-2">ระยะเวลาทำงาน</p>
                    <input id="year" name="year" class="swal2-input m-0" placeholder="ระบุจำนวนปี" required>
                    <input id="month" name="month" class="swal2-input m-0" placeholder="ระบุจำนวนเดือน" required>
                </li>
            </ul>
                <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
