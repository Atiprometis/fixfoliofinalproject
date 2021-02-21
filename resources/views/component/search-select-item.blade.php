
    <div class="d-flex w-100 flex-row">

        <?php
            $locations = array('คลองถม','พระปาแดง','บ้าน');
            $leaningLists = array('ทำอาหาร','ช่างฟ้า','ก่อสร้าง','ตัดหญ้า');
            $monuts = array('มกราคม','กุมภาพัน','มีนาคม');
            $openRegisters = array('1','2','3');
        ?>



        <div class="select-item ml-1 d-flex justify-content-center align-items-center mr-1 ">
            <div class="form-group select-item-item p-0 m-0 rounded d-flex justify-content-center align-items-center" >
                    <i class="fas fa-map-marker-alt fa-lg select-icon ml-1 mr-1"></i>
                    <select class="form-control btn shadow-none p-2 pr-2 w-75 " id="exampleFormControlSelect1"  >
                        <option style="display: none">สถานที่เรียน</option>
                        <option>คลองถม</option>
                        <option>พระปาแดง</option>
                        <option>บ้าน</option>

                    </select>
            </div>
        </div>

        <div class="select-item ml-1 d-flex justify-content-center align-items-center mr-1 ">
            <div class="form-group select-item-item p-0 m-0 rounded d-flex justify-content-center align-items-center" >
                    <i class="fas fa-list fa-lg select-icon ml-1 mr-1"></i>
                    <select class="form-control btn p-2 pr-2 w-75" id="exampleFormControlSelect1"  >
                        <option style="display: none">วิชาที่เรียน</option>
                        @foreach ($course_type as $type)
                            <option value="{{ $type->type_name }}">{{ $type->type_name }}</option>
                        @endforeach
                    </select>
            </div>
        </div>

        <?php
            $monuts = array('มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
        ?>

        <div class="select-item ml-1 d-flex justify-content-center align-items-center mr-1 ">
            <div class="form-group select-item-item p-0 m-0 rounded d-flex justify-content-center align-items-center" >
                <i class="fas fa-calendar-day fa-lg select-icon ml-1 mr-1"></i>
                    <select class="form-control btn p-2 pr-2 w-75" id="exampleFormControlSelect1"  >
                        <option style="display: none">เดือน</option>
                        @foreach ($monuts as $monut)
                         <option>{{ $monut }}</option>
                        @endforeach
                    </select>
            </div>
        </div>

        <div class="select-item ml-1 d-flex justify-content-center align-items-center mr-1 ">
            <div class="form-group select-item-item p-0 m-0 rounded d-flex justify-content-center align-items-center" >
                <i class="fas fa-door-open fa-lg select-icon ml-1 mr-1"></i>
                    <select class="form-control btn p-2 pr-2 w-75" id="exampleFormControlSelect1"  >
                        <option style="display: none">เปิดรับสมัคร</option>
                        <option>ทำอาหาร</option>
                        <option>ช่างฟ้า</option>
                        <option>ก่อสร้าง</option>

                    </select>
            </div>
        </div>

        <div class="select-item b-c-t ml-1 mr-1">
            <button class="btn select-item-wrapper c-p d-flex align-items-lg-center justify-content-lg-center
                          "id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #F9C226;">
                <div class=" d-flex flex-row">
                        {{-- <i class="fas fa-search fa-lg select-icon ml-1 mr-1"></i> --}}
                    <div class="select-text ml-1 mr-1">ค้นหา</div>

                </div>
            </button>
        </div>

    </div>


