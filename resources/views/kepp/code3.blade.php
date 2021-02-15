<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มรูป</h5>
        </div>
        <div class="modal-body">

          <form method="post" action="{{url('filecourse/83')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              {{-- @foreach($imagecourses as $imagecourse) --}}
                  <div class="input-group hdtuto control-group lst increment d-flex flex-row " >
                      <div class=" col-12">
                          <ul class=" d-flex flex-row p-0 m-0 col-12 flex-wrap justify-content-start " id="listlimited">
                              {{-- @foreach ($imagecoursefinals as $image) --}}
                              {{-- @if($imagecourse->course_final_id == $imagecoursefinal->course_final_id) --}}
                                  <li class=" col-3 p-0 m-0 mt-2 " id="myList" style="height:150px; border-radius:10px;" >
                                  {{-- <a class="con-img"  onclick="deleteimages({{$imagecoursefinal->course_final_images_id}})"> --}}
                                      <a class="con-img"  onclick="deleteimages()">
                                      <img class="hover-image" src="../courseimages/{{ Auth::user()->id }}"  alt="" style="width: 90%; height:150px;border-radius: 10px;">
                                      {{-- <img class="hover-image" src="../courseimages/{{$imagecoursefinal->images_path}}"  alt="" style="width: 90%; height:150px;border-radius: 10px;"> --}}
                                      <div class="overlay">
                                          <div class="overred d-flex justify-content-center align-items-center ">
                                              <div class="icon">
                                                  <i class="fas fa-trash-alt fa-sm "></i>
                                              </div>
                                          </div>
                                      </div>
                                  </a>
                                  </li>
                              {{-- @endif --}}
                              {{-- @endforeach --}}
                              {{-- <li class=" col-3 p-0 m-0 mt-2 " id="myList" style="height:150px; border-radius:10px;" >
                                      <a class="con-img"  onclick="deleteimages()">
                                      <img class="hover-image" src="../courseimages/{{ Auth::user()->id }}"  alt="" style="width: 90%; height:150px;border-radius: 10px;">
                                      <div class="overlay">
                                          <div class="overred d-flex justify-content-center align-items-center ">
                                              <div class="icon">
                                                  <i class="fas fa-trash-alt fa-sm "></i>
                                              </div>
                                          </div>
                                      </div>
                                  </a>
                              </li> --}}
                          </ul>
                      </div>

                      <div class="input-group-btn mt-2 mb-2">
                        <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                      </div>
                  </div>
                  {{-- @endforeach --}}
                <div class="clone hide">
                  {{-- <div class="hdtuto control-group lst input-group"  style="margin-top:10px">
                    <input type="file" name="updateimages[]" class="myfrm form-control">
                    <div class="input-group-btn">
                      <button class="btn btn-danger" id="removeall" type="button">
                          <i class="fldemo glyphicon glyphicon-remove"></i> Remove
                      </button>
                    </div>
                  </div> --}}
                </div>
                <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
          </form>
        </div>

      </div>
    </div>
  </div>


  <div id="insertimage" title="show" style="display: none">
    <form method="get" action="addExpp/'sadasd'/'asda'" enctype="multipart/form-data">
        <ul class="m-0 p-0 text-left">
            <li class="m-0 p-0">
                <p class=" p-0 m-0 mt-2 mb-2">รุ่นที่</p>
                <input id="swal-input1" name="generation" class="swal2-input m-0">
            </li>
            <li>
                <p class=" p-0 m-0 mt-2 mb-2">ชื่อหลักสูตร</p>
                <input id="swal-input2" name="corse_name" class="swal2-input m-0">
            </li>
            <li>
                <p class=" p-0 m-0 mt-2 mb-2">สถานที่ศึกษาจบ</p>
                <input id="swal-input3" name="location" class="swal2-input m-0">
            </li>
        </ul>
        <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
    </form>

    <form method="post" action="{{url('filecourse')}}" enctype="multipart/form-data">
        {{csrf_field()}}
          <div class="input-group hdtuto control-group lst increment" >
            <input type="file" name="images[]" class="myfrm form-control">
            <div class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
            </div>
          </div>
          <div class="clone hide">
            {{-- <div class="hdtuto control-group lst input-group" style="margin-top:10px">
              <input type="file" name="images[]" class="myfrm form-control">
              <div class="input-group-btn">
                <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
              </div>
            </div> --}}
          </div>


          <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
    </form>
</div>
