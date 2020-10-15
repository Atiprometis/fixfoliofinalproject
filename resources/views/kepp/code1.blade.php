
{{-- โค้ดจากหน้า corse  --}}

<div class="course-popular  ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="course-pop-name" style="font-size: 1.875em">คอร์สเรียนยอดนิยม</h1>
                    </div>
                    <div class="col-12 ">
                        <div class="row d-flex ">

                            @foreach($dataCourse as $row)

                                <a href="{{route('course.edit', $row->id)}}" class="course-select-row d-flex flex-row  m-2 mb-4" style="text-decoration: none;">
                                    <div class="course-part d-flex flex-column">
                                        <div class="course-part-image img-responsive">
                                            <div class="d-flex flex-row justify-content-md-between p-2">
                                                <div class="open-course ">เปิดรับสมัคร</div>
                                                <div class="open-online">มีสอนออนไลน์</div>
                                            </div>
                                        </div>
                                        <div class="course-part-detail p-3 d-flex flex-column">

                                            <h3 class="course-name">{{$row->course_name}}</h3>
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
                                </a>
                            @endforeach
                        </div>
                    </div>
                    </div>

                </div>
</div>

{{-- โค้ดจากหน้า corse end --}}

<div class="container">
    <div class="row">
        <div class="d-flex flex-row w-100 text-institution align-items-end justify-content-between">
            <h1 class="p-0 m-0 ml-2" style="font-size: 1.750em;">คอร์สเรียนทั้งหมด</h1>
            <div class=" d-flex flex-row">
                <p class="p-0 m-2"></p>
            </div>
    </div>
    <div class="col-12 p-0 m-0">
        <?php
            for ($i = 1; $i <= 12; $i++) {
        ?>
            <div class=" col-4  p-2   float-left " >
                <div class="  ">
                    <img src="{{ asset('/access/images/photo-5.png') }}" class="insutition-all">
                    <div class="  d-flex flex-column text-insutition pl-3 pt-" style="">
                        <div class=" d-flex justify-content-between mt-2">
                            <p class="" style="font-size: 1em;">เบเกอรี่</p>
                            <p class=" mr-3" style="font-size: 1em;">ฟรี</p>
                        </div>
                        <div class=" d-flex flex-row ">
                            <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                            <p class="ml-2 mr-2 mb-1 p-0">จ-ศ 9:00 - 15:00</p>
                        </div>
                        <div class=" d-flex justify-content-between">
                            <div class=" d-flex flex-row ">
                                <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                <p class="ml-2 mr-2">90 ชั่วโมง</p>
                            </div>
                            <p class=" mr-3" style="font-size: 1em;">ศูนย์ฝึกอาชีพเขตมีนบุรี</p>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
    </div>
</div>


{{-- >>>>>> --}}

<div class="container">
    <div class="row">
        <div class="col-12 p-3">
            <h1 style="font-size: 1.875em">คอร์สทั้งหมด</h1>
        </div>
        <div class="col-12">
            <div class="row d-flex flex-row">

                    <?php

                    $coursenames = array('เบเกอรี่','เบเกอรี่', 'เบเกอรี่','เบเกอรี่','เบเกอรี่','เบเกอรี่', 'เบเกอรี่','เบเกอรี่','เบเกอรี่',);
                    $coursetimes = array('80' ,'เบเกอรี่','80' ,'เบเกอรี่',);

                    // foreach ($locations as  $location)

                    foreach ($coursenames as  $coursename) {
                    ?>
                        @include('component.course-all')
                    <?php
                    }
                    ?>

            </div>
        </div>
    </div>
</div>

{{-- course detail  --}}

<div class="youtube-all d-flex flex-row col-lg-12 p-0 justify-content-center align-items-center">
                    <div class="embed-responsive embed-responsive-16by9 rounded">
                        <iframe class="embed-responsive-item m-2 rounded" src="https://www.youtube.com/embed/vRXZj0DzXIA" allowfullscreen></iframe>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9 rounded">
                        <iframe class="embed-responsive-item m-2 rounded" src="https://www.youtube.com/embed/dyRsYk0LyA8" allowfullscreen></iframe>
                    </div>

                </div>
