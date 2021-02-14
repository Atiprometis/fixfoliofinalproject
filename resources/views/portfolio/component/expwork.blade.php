

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
                        <input type="text" maxlength="3"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" id="position" name="generation" class="swal2-input m-0" placeholder="ระบุรุ่นที่" required>
                    </li>
                    <li>
                        <p class=" p-0 m-0 mt-2 mb-2">ชื่อหลักสูตร</p>
                        <input type="text" maxlength="60" id="company" name="corse_name" class="swal2-input m-0" placeholder="ระบุชื่อบริษัท" required>
                    </li>
                    <li>
                        <p class=" p-0 m-0 mt-2 mb-2">สถานที่ศึกษาจบ</p>
                        <input type="text" maxlength="80" id="county" name="location" class="swal2-input m-0" placeholder="ระบุเขต" required>

                    </li>
                    <li>
                        <p class=" p-0 m-0 mt-2 mb-2">รูปภาพผลงานของท่าน (สูงสุด 8 รูปภาพ)</p>
                        <div class=" d-flex flex-row col-md-12 flex-wrap">

                            @for ($i = 0; $i < 8; $i++)
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
        <div class="modal-header d-flex justify-content-md-center">
          <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มประสบการณ์ทำงาน</h5>
        </div>
        <div class="modal-body">
          <form method="post" action="{{url('expwork')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <ul class="m-0 p-0 text-left">
                <li class="m-0 p-0">
                    <p class=" p-0 m-0 mt-2 mb-2">ตำแหน่ง</p>
                    <input type="text" id="position" name="position" class="form-control m-0" placeholder="ระบุตำแหน่ง" required>
                </li>
                <li>
                    <p class=" p-0 m-0 mt-2 mb-2">ชื่อบริษัท</p>
                    <input type="text"  id="company" name="company" class="form-control m-0" placeholder="ระบุชื่อบริษัท" required>
                </li>
                <li>
                    <p class=" p-0 m-0 mt-2 mb-2">สถานที่ตั้งบริษัท</p>
                    <div class=" d-flex flex-row">
                        <input type="text"  id="county" name="county" class="form-control mr-2" placeholder="ระบุเขต" required>
                        <input type="text"  id="province" name="province" class="form-control ml-2" placeholder="ระบุจังหวัด" required>
                    </div>
                </li>
                <li>
                    <p class=" p-0 m-0 mt-2 mb-2">ระยะเวลาทำงาน</p>
                    <div class=" flex-row d-flex col-md-12 p-0">
                        <div class="mr-2 col-md-6 p-0  pr-2 mr-2">
                            <small>จำนวนปี</small>
                            <input type="text"  id="year" name="year" maxlength="2" class="form-control " placeholder="ระบุจำนวนปี" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                        </div>
                        <div class="form-group col-md-6 mr-2 pr-2 p-0 ">
                            <small>จำนวนเดือน</small>
                            <select class="form-control " id="month" name="month">
                                @for ($i = 1; $i <= 12; $i++)
                                <option>{{ $i }}</option>
                                @endfor
                            </select>

                          </div>
                    </div>
                </li>
            </ul>
                <div class=" d-flex justify-content-md-center">
                    <button type="submit" class="btn rounded" style="margin-top:10px; background-color:#F2C94C;">ยืนยัน</button>
                    <button  formaction="/profileedit" class="btn btn-secondary swa-confirm mr-2 ml-2" style="margin-top:10px">กลับ</button>
                </div>
          </form>
        </div>
      </div>
    </div>
</div>
