
    <div class="d-flex w-100 flex-row">

        <?php
            $locations = array('คลองถม','พระปาแดง','บ้าน');
            $leaningLists = array('ทำอาหาร','ช่างฟ้า','ก่อสร้าง','ตัดหญ้า');
            $monuts = array('มกราคม','กุมภาพัน','มีนาคม');
            $openRegisters = array('1','2','3');
        ?>



        <div class="select-item ml-1 mr-1">
            <button class="btn select-item-wrapper dropdown-toggle d-flex align-items-lg-center justify-content-lg-center
                          "id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class=" d-flex flex-row">
                    <i class="fas fa-map-marker-alt fa-lg select-icon ml-1 mr-1"></i>
                    <div class="select-text ml-1 mr-1">สถานที่เรียน</div>

                </div>
            </button>


            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <?php
                $locations = array('คลองถม','พระปาแดง','บ้าน');
                foreach ($locations as  $location) {
                ?>
                    <a class="dropdown-item" href="#"><?php print $location?></a>
                <?php
                }
                ?>
            </div>


        </div>

        <div class="select-item ml-1 mr-1">
            <button class="btn select-item-wrapper dropdown-toggle d-flex align-items-lg-center justify-content-lg-center
                          "id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class=" d-flex flex-row">
                    <i class="fas fa-list fa-lg select-icon ml-1 mr-1"></i>
                    <div class="select-text ml-1 mr-1">วิชาที่เรียน</div>

                </div>
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <?php
                    $leaningLists = array('ทำอาหาร','ช่างฟ้า','ก่อสร้าง','ตัดหญ้า');
                    foreach ($leaningLists as  $leaningList) {
                ?>
                    <a class="dropdown-item" href="#"><?php print $leaningList?></a>
                <?php
                    }
                ?>
            </div>
        </div>

        <div class="select-item ml-1 mr-1">
            <button class="btn select-item-wrapper dropdown-toggle d-flex align-items-lg-center justify-content-lg-center
                          "id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class=" d-flex flex-row">
                    <i class="fas fa-calendar-day fa-lg select-icon ml-1 mr-1"></i>
                    <div class="select-text ml-1 mr-1">เดือน</div>

                </div>
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <?php
                    $monuts = array('มกราคม','กุมภาพัน','มีนาคม');
                    foreach ($monuts as  $monut) {
                ?>
                    <a class="dropdown-item" href="#"><?php print $monut?></a>
                <?php
                    }
                ?>
            </div>
        </div>

        <div class="select-item ml-1 mr-1">
            <button class="btn select-item-wrapper dropdown-toggle d-flex align-items-lg-center justify-content-lg-center
                          "id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class=" d-flex flex-row">
                    <i class="fas fa-door-open fa-lg select-icon ml-1 mr-1"></i>
                    <div class="select-text ml-1 mr-1">เปิดรับสมัคร</div>

                </div>
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <?php
                    $openRegisters = array('1','2','3');
                    foreach ($openRegisters as  $openRegister) {
                ?>
                <a class="dropdown-item" href="#"><?php print $openRegister?></a>


                <?php
                    }
                ?>
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


