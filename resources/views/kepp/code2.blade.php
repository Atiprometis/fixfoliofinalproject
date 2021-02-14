{{-- @include('component.header') --}}
@extends('layout.master')

@section('title', 'course detail')


@section('content')
    <img class=" img-fluid col-12 p-0" src="https://f.ptcdn.info/127/055/000/p0u2ez28mA0aNpZ5M0q-o.jpg" alt="Responsive image" style="background-color: red; height: 70vh;">
    <div class="container">
        <div class="row">
            <div class="1 col-lg-12 d-flex flex-row p-4 mt-4">
                <div class="class-all d-flex flex-column col-lg-6 offset-lg-1">
                    <h1 class="" style="font-size: 1.500em">{{$dataCourse->course_name}} โรงเรียน Au Pon Pain</h1>
                    <p class="mt-3 ">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the 1500s, when an unknown printer took Lorem Ipsum is
                        simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took Lorem Ipsum is simply dummy text
                        of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown
                    </p>
                </div>
                <div class="box-register-all d-flex flex-column col-lg-3 offset-lg-0 p-0" >
                    <a href="/course" class="btn btn-warning btn-dark register-open-website-b rounded" style="height: 40px">เข็าสู่เว็บไซต์</a>
                    <div class="register-time d-flex flex-column mt-3" >
                        <div class="time-text rounded-top text-center align-items-center p-2" style="border: solid #000 1px;">
                            <h1 style="font-size: 1.125em;">ใบประกอบวิชาชีพ</h1>
                        </div>
                        <div class="time-text rounded-bottom d-flex flex-column p-3 " style="border: solid #000 1px;">
                            <div class=" d-flex flex-row ">
                                <i class="fab fa-accusoft mr-2 "></i>
                                <p class="p-0">เปิด 15 กค - 15 สค 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="2 col-lg-12 d-flex flex-row p-4 mt-4">
                    <div class="class-all d-flex flex-column col-lg-6 offset-lg-1">
                        <h1 class="" style="font-size: 1.500em">คอร์สนี้เรียนอะไรบ้าง</h1>
                        <ul>
                            <li>Coffee</li>
                            <li>Tea</li>
                            <li>Milk</li>
                          </ul>
                    </div>
                    <div class="box-register-all d-flex flex-column col-lg-3 offset-lg-0 p-0" >

                        <div class="register-time d-flex flex-column mt-3" >
                            <div class="time-text rounded-top text-center align-items-center p-2" style="border: solid #000 1px;">
                                <h1 style="font-size: 1.125em;">ช่วงรับสมัคร</h1>
                            </div>
                            <div class="time-text rounded-bottom d-flex flex-column p-3 " style="border: solid #000 1px;">
                                <div class=" d-flex flex-row  ">
                                    <i class="fab fa-accusoft mr-2"></i>
                                    <p>เปิด 15 กค - 15 สค 2020</p>
                                </div>
                                <div class=" d-flex flex-row ">
                                    <i class="fab fa-accusoft mr-2 "></i>
                                    <p class="p-0">เปิด 15 กค - 15 สค 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="3 col-lg-12 d-flex flex-row p-4 mt-4">
                <div class="class-all d-flex flex-column col-lg-6 offset-lg-1">
                    <h1 class="" style="font-size: 1.500em">คอร์สนี้เรียนอะไรบ้าง</h1>
                    <ul>
                        <li>Coffee</li>
                        <li>Tea</li>
                        <li>Milk</li>
                      </ul>
                </div>
                <div class="course-select-row d-flex flex-row p-0 m-0 col-lg-3 ">
                    <div class="course-part d-flex flex-column">
                        <div class="course-part-image img-responsive">
                            <div class="d-flex flex-row justify-content-md-between p-2">
                                <div class="open-course ">เปิดรับสมัคร</div>
                                <div class="open-online">มีสอนออนไลน์</div>
                            </div>
                        </div>
                        <div class="course-part-detail p-3 d-flex flex-column">

                                <h3 class="course-name">ss</h3>
                                <div class=" course-time d-flex flex-row">
                                    <i class="fab fa-accusoft mr-2"></i>
                                    <p class="m-0">จ-ศ 9:00-15:00 </p>
                                </div>
                                <div class="course-hour d-flex flex-row">
                                    <i class="fab fa-accessible-icon mr-2"></i>
                                    <p class="m-0">80 ชั่วโมง</p>
                                </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="4 col-lg-12 d-flex flex-row p-4 mt-4">
            <div class="class-all d-flex flex-column col-lg-6 offset-lg-1">
                <h1 class="" style="font-size: 1.500em">คอร์สนี้เรียนอะไรบ้าง</h1>
                <ul>
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                  </ul>
            </div>
            <div class="course-select-row d-flex flex-row p-0 m-0 col-lg-3 ">
                <div class="course-part d-flex flex-column">
                    <div class="course-part-image img-responsive">
                        <div class="d-flex flex-row justify-content-md-between p-2">
                            <div class="open-course ">เปิดรับสมัคร</div>
                            <div class="open-online">มีสอนออนไลน์</div>
                        </div>
                    </div>
                    <div class="course-part-detail p-3 d-flex flex-column">

                            <h3 class="course-name">ss</h3>
                            <div class=" course-time d-flex flex-row">
                                <i class="fab fa-accusoft mr-2"></i>
                                <p class="m-0">จ-ศ 9:00-15:00 </p>
                            </div>
                            <div class="course-hour d-flex flex-row">
                                <i class="fab fa-accessible-icon mr-2"></i>
                                <p class="m-0">80 ชั่วโมง</p>
                            </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="youtube-photo d-flex flex-column col-lg-12 mb-5 p-3">
        <div class="youtube-all d-flex flex-row col-lg-12 p-0 justify-content-center align-items-center">
            <div class="embed-responsive embed-responsive-16by9 rounded">
                <iframe class="embed-responsive-item m-2 rounded" src="https://www.youtube.com/embed/vRXZj0DzXIA" allowfullscreen></iframe>
            </div>
            <div class="embed-responsive embed-responsive-16by9 rounded">
                <iframe class="embed-responsive-item m-2 rounded" src="https://www.youtube.com/embed/dyRsYk0LyA8" allowfullscreen></iframe>
              </div>

        </div>
        <div class="image-all d-flex flex-row justify-content-center align-items-center rounded col-lg-12 p-0" style="width: 100%">
            <img src="https://cdn.i-scmp.com/sites/default/files/styles/1200x800/public/d8/images/methode/2020/06/08/4b0bdfc6-a639-11ea-8ea0-d7434be00753_image_hires_121748.jpg?itok=44SyZaXz&v=1591589877" class="bg-dark m-1 mt-2  rounded" style="height: 200px; width: 24%">
            <img src="https://cdn.i-scmp.com/sites/default/files/styles/1200x800/public/d8/images/methode/2020/06/08/4b0bdfc6-a639-11ea-8ea0-d7434be00753_image_hires_121748.jpg?itok=44SyZaXz&v=1591589877" class="bg-secondary m-1 mt-2 rounded" style="height: 200px; width: 24%">
            <img src="https://cdn.i-scmp.com/sites/default/files/styles/1200x800/public/d8/images/methode/2020/06/08/4b0bdfc6-a639-11ea-8ea0-d7434be00753_image_hires_121748.jpg?itok=44SyZaXz&v=1591589877" class="bg-info m-1 mt-2 rounded" style="height: 200px; width: 24%">
            <img src="https://cdn.i-scmp.com/sites/default/files/styles/1200x800/public/d8/images/methode/2020/06/08/4b0bdfc6-a639-11ea-8ea0-d7434be00753_image_hires_121748.jpg?itok=44SyZaXz&v=1591589877" class="bg-primary m-1 mt-2 rounded" style="height: 200px; width: 24%">
        </div>
    </div>
        </div>
    </div>
@endsection


{{-- @for ($i = 0; $i < 8; $i++)
                                                 @if (isset($imagecoursefinals[$i]))

                                                    @if ($imagecourse->course_final_id == $imagecoursefinals[$i]['course_final_id'])
                                                        <label  class="position-relative col-md-3  p-2 m-0">
                                                            <img class="card-img-top insutition rounded" src='../courseimages/{{ $imagecoursefinals[$i]['images_path'] }}' id="uploadPreview{{ $i }}"  style="width: 150p;height: 150px; cursor: pointer"/>
                                                                <input type="file" class="photo custom-file-input" id="uploadImage{{ $i }}"  value="{{ $imagecoursefinals[$i]['images_path'] }}" name="images[]" onchange="PreviewImage{{ $i }}();" style="display: "    />
                                                        </label>
                                                    @else
                                                        <label  class="position-relative col-md-3  p-2 m-0">
                                                            <img class="card-img-top insutition rounded" src='{{ asset('access/imageweb/Placeholder.jpg') }}' id="uploadPreview{{ $i }}"  style="width: 150p;height: 150px; cursor: pointer"/>
                                                                <input type="file" class="photo custom-file-input" id="uploadImage{{ $i }}"  value="Placeholder.jpg" name="images[]" onchange="PreviewImage{{ $i }}();" style="display: "    />
                                                        </label>
                                                     @endif
                                                @else
                                                            <label  class="position-relative col-md-3  p-2 m-0">
                                                                <img class="card-img-top insutition rounded" src='{{ asset('access/imageweb/Placeholder.jpg') }}' id="uploadPreview{{ $i }}"  style="width: 150p;height: 150px; cursor: pointer"/>
                                                                    <input type="file" class="photo custom-file-input" id="uploadImage{{ $i }}"  value="Placeholder.jpg" name="images[]" onchange="PreviewImage{{ $i }}();" style="display: "    />
                                                            </label>
                                                @endif
                                                @endfor --}}
