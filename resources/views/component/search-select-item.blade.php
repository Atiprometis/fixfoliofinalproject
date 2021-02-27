
    <div class="d-flex w-100 flex-row">

        <?php
            $locations = array('คลองถม','พระปาแดง','บ้าน');
            $leaningLists = array('ทำอาหาร','ช่างฟ้า','ก่อสร้าง','ตัดหญ้า');
            $monuts = array('มกราคม','กุมภาพัน','มีนาคม');
            $openRegisters = array('1','2','3');
        ?>



        <div class="select-item ml-1 d-flex justify-content-center align-items-center mr-1 ">
            <div class="form-group select-item-item p-0 m-0 rounded d-flex justify-content-center align-items-center" >
                    <i class="fas fa-map-marker-alt fa-lg select-icon ml-1 mr-1 pl-1 pr-1"></i>
                    <select class="form-control selectpicker  shadow-none p-1 pr-1 w-100 " name="cost" id="exampleFormControlSelect1"  >
                        <option value="0" style="display: none">ค่าใช้จ่าย</option>
                        <option value="0">ไม่เสียค่าใช้จ่าย</option>
                        <option value="500">100-500</option>
                        <option value="1000">501-1000</option>
                        <option value="2000">1001-2000</option>
                        <option value="2001">มากกว่า 2000</option>
                    </select>
            </div>
        </div>



        <div class="select-item ml-1 d-flex justify-content-center align-items-center mr-1 ">
            <div class="form-group select-item-item p-0 m-0 rounded d-flex justify-content-center align-items-center" >
                    <i class="fas fa-list fa-lg select-icon ml-1 mr-1 pl-1 pr-1"></i>
                    <select class="form-control selectpicker btn p-1 pr-1 w-100 " name="typecourse" id="selectBox"  >
                        <option value={{ $course_type['0']['type_name'] }}  style="display: none">ประเภทหลักสูตร</option>
                        @foreach ($course_type as $index=>$type)
                            <option  value="{{ $type->type_name }}">{{ $type->type_name }}</option>
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
                    <select class="form-control selectpicker btn p-2 pr-2 w-75" name="month" id="exampleFormControlSelect1"  >
                        <option value="0" style="display: none">เดือน</option>
                        @foreach ($monuts as $index=>$month)
                         <option value="{{ $index+1 }}">{{ $month }}</option>
                        @endforeach
                    </select>
            </div>
        </div>

        <div class="select-item ml-1 d-flex justify-content-center align-items-center mr-1 ">
            <div class="form-group select-item-item p-0 m-0 rounded d-flex justify-content-center align-items-center" >
                <i class="fas fa-door-open fa-lg select-icon ml-1 mr-1 pl-1 pr-1"></i>
                    <select class="form-control selectpicker btn p-1 pr-1 w-100" name="learn" id="exampleFormControlSelect1"  >
                        <option value="ไม่มีคอร์สออนไลน์" style="display: none">รูปแบบการสอน</option>
                        <option value="ไม่มีคอร์สออนไลน์">ไม่มีคอร์สออนไลน์</option>
                        <option value="มีคอร์สออนไลน์">มีคอร์สออนไลน์</option>
                    </select>
            </div>
        </div>

        <div class="select-item b-c-t ml-1 mr-1">
            <button type="submit" class="btn select-item-wrapper c-p d-flex align-items-lg-center justify-content-lg-center"   style="background-color: #F9C226;">
                <div class=" d-flex flex-row">
                    <div class="select-text ml-1 mr-1">ค้นหา</div>
                </div>
            </button>

        </div>

    </div>


