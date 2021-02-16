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
                <a href="/editcourse/{{$courseID}}/date" class="nav-link text-white-50" href="#">วันเวลา</a>
                </li>
                <li class="nav-item">
                <a href="/editcourse/{{$courseID}}/detail" class="nav-link text-white-50" href="#">เกี่ยวกับคอร์ส</a>
                </li>
                <li class="nav-item">
                    <a href="/editcourse/{{$courseID}}/image" class="nav-link text-light" href="#">รูปภาพ</a>
                </li>

            </ul>
            </div>

    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex flex-column ">
            <div class=" d-flex flex-row mt-3 justify-content-md-center">

                {!! Form::open(array('url' => 'editimage', 'method' => 'post','enctype' => 'multipart/form-data')) !!}
                <input type="text" name="courseID" value="{{ $courseID }}" style="display: none">
                <label  class=" p-0 m-0 col-md-12 d-flex flex-column justify-content-md-center  align-items-center">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top insutition rounded card-img-top" src='{{ asset('/course/thumbnail/'. $thumbnail->thumbnails_images .'') }}' id="uploadPreview"  style="width: 100%;height: 200px; cursor: pointer"/>
                        <div class="card-body text-center">
                          <p class="card-text">รูปหน้าปกคอร์สปัจจุบัน</p>
                        </div>
                    </div>
                      <div class="custom-filepl-5 mt-3  ">
                        <label class=" m-0 btn bg-secondary text-light shadow" style="cursor: pointer;background-color: rgb(134, 134, 134)" >
                        <input type="file" class="photo custom-file-input" id="uploadImage"  value="Placeholder.jpg" name="image" onchange="PreviewImage();" style="display: none"    />
                        {{-- <input type="file" class="custom-file-input" id="customFile"> --}}
                        กดตรงนี้เพื่อเปลี่ยนรูป</label>
                    </div>
                    <div class=" d-flex pl-1  mt-2 mb-2">
                        {{-- <button class="btn btn-primary">เปลี่ยนรูปหน้าปก</button> --}}
                            <a href="/manegercourse"><button type="button"  class="btn swa-confirm mr-2 ml-2 text-light" style="background-color: rgb(195, 195, 195)" >กลับจัดการคอร์ส</button></a>
                            <button type="submit" class="btn btn-success text-light swa-confirm">เปลี่ยนรูปหน้าปก</button>
                            {{-- <input type="button"  id="updatecourse"   value="เปลี่ยนรูปหน้าปก" class="btn btn-success text-light swa-confirm"> --}}
                    </div>

                </label>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
