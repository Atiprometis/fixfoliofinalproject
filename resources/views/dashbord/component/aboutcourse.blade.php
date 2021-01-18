<div class="">

    @if ($errors->all())
        <ul class="alert-danger">

            @foreach($errors->all() as $error)

                <li>

                    {{$error}}

                </li>

            @endforeach

        </ul>
    @endif

    <h5 class="center my-2"> คอร์สนี้เรียนแล้วได้อะไรบ้าง </h5>

    <div class=" d-flex flex-row">
        <div class="col-md-6">

            <div class="table-responsive ">

                {!! Form::label('Course Learned','เรียนอะไรบ้าง',array('class' => 'm-0 ')) !!}

                <table class="table table-bordered" id="dynamic_field">

                    <tr>

                        <td>

                            <input type="text" name="course_learn[]" placeholder="เรียนอะไรบ้าง" class="form-control">

                        </td>

                        <td>

                            <button type="button" name="add" id="add" class="btn btn-success">เพิ่ม</button>

                        </td>

                    </tr>

                </table>

            </div>

            <div class="table-responsive">

                {!! Form::label('Course Learned','เรียนจบแล้วทำอะไรได้') !!}

                <table class="table table-bordered" id="dynamic_field1">

                    <tr>

                        <td>

                            <input type="text" name="course_result[]" placeholder="เรียนจบแล้วทำอะไรได้" class="form-control" required>

                        </td>

                        <td>

                            <button type="button" name="add1" id="add1" class="btn btn-success">เพิ่ม</button>

                        </td>

                    </tr>

                </table>

            </div>

            <div class="table-responsive">

                {!! Form::label('Course Learned','ประกอบอาชีพอะไรได้') !!}

                <table class="table table-bordered" id="dynamic_field2">

                    <tr>

                        <td>

                            <input type="text" name="course_career[]" placeholder="ประกอบอาชีพอะไรได้" class="form-control" required>

                        </td>

                        <td>

                            <button type="button" name="add2" id="add2" class="btn btn-success">เพิ่ม</button>

                        </td>

                    </tr>

                </table>

            </div>
            <div class="table-responsive">

                {!! Form::label('Course Learned','Youtube Link') !!}

                <table class="table table-bordered" id="dynamic_field4">

                    <tr>

                        <td>

                            <input type="text" name="course_youtube[]" placeholder="ประกอบอาชีพอะไรได้" class="form-control" required>

                        </td>

                        <td>

                            <button type="button" name="add4" id="add4" class="btn btn-success">เพิ่ม</button>

                        </td>

                    </tr>

                </table>

            </div>

        </div>

        <div class="card  mt-4 col-md-4" style=" height: 400px">
            {{-- <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data"> --}}
                <p class="mt-1 m-0 p-0">ภาพหน้าปก</p>
            <label>
                <img class="card-img-top rounded mt-3" src='https://getstamped.co.uk/wp-content/uploads/WebsiteAssets/Placeholder.jpg' id="uploadPreview"  style="width: 100%;height: 300px"/>
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <input class="photo" id="uploadImage" type="file" name="myPhoto" onchange="PreviewImage();" style="display: none"  />
                    {{-- <button type="submit" class="btn btn-light mt-2" style="width: 100%; border-radius: 20px;">+ Upload new photo</button> --}}
            {{-- </label> --}}
                </form>
        </div>

    </div>

    {{-- <div class="col-md-4">


    </div> --}}

    {{-- <div class="col my-2">

        <input type="submit" value="บันทึก" class="btn btn-primary">

        <a href="/backoffice/create" class="btn btn-success">กลับ</a>

    </div> --}}

    {!! Form::close() !!}

</div>
