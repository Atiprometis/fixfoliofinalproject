<div class="col-2 m-0 p-0  d-flex flex-column text-start  scrollDiv" style="background-color: #fff;">
    <h3 class="p-3 pl-4 m-0" style="font-size: 1.1em; color:#000;">{{ Auth::user()->name }}</h3>
    <div class="line" style="height: 1px; background-color:#000;"></div>
    <ul class="list-unstyled">

        <a href="/admin"><li class=" d-flex flex-row justify-content-been align-items-center">

                <i class="fas fa-chart-line ml-3"></i>
                <p class="m-1 ml-3">dashboard ADMIN</p>
        </li></a>
        <a href="/showschool">
            <li class=" d-flex flex-row justify-content-been align-items-center">

                <i class="fas fa-chalkboard-teacher ml-3"></i>
                <p class="m-1 ml-3">สร้างโรงเรียน</p>
            </li>
        </a>
        {{-- <a href="#">
            <li class=" d-flex flex-row justify-content-been align-items-center">
                <i class="fab fa-leanpub ml-3"></i>
                <p class="m-1 ml-3">เปลี่ยนสถานะ user</p>
            </li>
        </a> --}}
        <a href="/approvecourse">
            <li class=" d-flex flex-row justify-content-been align-items-center">
                <i class="fas fa-university ml-3"></i>
                <p class="m-1 ml-3">อนุมัติคอร์ส</p>
            </li>
        </a>



        {{-- <a href="#">
            <li class=" d-flex flex-row justify-content-been align-items-center">
                <i class="fas fa-arrow-alt-circle-right ml-3"></i>
                <p class="m-1 ml-3">โปรไฟล์</p>
            </li>
        </a> --}}
    </ul>
</div>
