
    <div class="contact col-3 pr-0 p-0  d-flex flex-column ">
        <div class="contact-me pt-3">
            <h2 style="font-weight: 400; font-size: 0.875em;">ข้อมูลส่วนตัว</h2>
            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#1787E2; border-radius: 5px;">
                    <i class="fas fa-pen fa-sm p-2  rounded" style="color: #fff"></i>
                </div>
                <div class=" d-flex flex-row">
                    <p class="m-0 p-2">อายุ </p>
                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_age"
                id="profile_age" aria-describedby="profile_age" placeholder="อายุ"
                @foreach($users as $user)
                value={{ $user->profile_age }}
                @endforeach
                >

                </div>

            </div>
            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#FF6660; border-radius: 5px;">

                    <i class="fas fa-venus-mars fa-sm p-2  rounded" style="color: #fff"></i>
                </div>
                <div class=" d-flex flex-row">
                    <p class="m-0 p-2">เพศ </p>
                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_sex"
                id="profile_sex" aria-describedby="profile_sex" placeholder=""
                @foreach($users as $user)
                value={{ $user->profile_sex }}
                @endforeach
                >

                </div>

            </div>
            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#9B51E0; border-radius: 5px;">
                    <i class="fas fa-pen fa-sm p-2  rounded" style="color: #fff"></i>
                </div>
                <div class=" d-flex flex-row">
                    <p class="m-0 p-2">สัญชาติ</p>
                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_instinct"
                id="profile_instinct" aria-describedby="profile_instinct" placeholder=""
                @foreach($users as $user)
                value={{ $user->profile_instinct }}
                @endforeach
                >

                </div>

            </div>
            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#1787E2; border-radius: 5px;">
                    <i class="fas fa-map-marker-alt fa-sm p-2  rounded" style="width: 30px;color: #fff"></i>
                </div>
                <div class=" d-flex flex-row">
                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_province"
                id="profile_province" aria-describedby="profile_province" placeholder="จังหวัดที่อยู่"
                @foreach($users as $user)
                value={{ $user->profile_province }}
                @endforeach
                >
                </div>


            </div>
            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#5181B8; border-radius: 5px;">

                    <i class="fas fa-graduation-cap fa-sm p-2  rounded" style="color: #fff"></i>
                </div>
                <div class=" d-flex flex-row">
                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_education"
                id="profile_education" aria-describedby="profile_education" placeholder="การศึกษา"
                @foreach($users as $user)
                value={{ $user->profile_education }}
                @endforeach
                >
                </div>

            </div>
            <h2 class="mt-4" style="font-weight: 400; font-size: 0.875em;">ช่องทางการติดต่อ</h2>
            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#4267B2; border-radius: 5px;">
                    <i class="fab fa-facebook-f fa-sm p-2  rounded" style="color: #fff"></i>

                </div>
                <div class=" d-flex flex-row">
                    <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_facebook"
                id="profile_facebook" aria-describedby="profile_facebook" placeholder="ระบุ facebook"
                @foreach($users as $user)
                value={{ $user->profile_facebook }}
                @endforeach
                >
                </div>

            </div>
            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#1DA1F2; border-radius: 5px;">
                    <i class="fas fa-phone-alt fa-sm p-2  rounded" style="color: #fff"></i>
                </div>
                <div class=" d-flex flex-row">
                    <input type="text" class="form-control outline-none aboutme rounded " pattern="[0]{1}[0-9]{9}" maxlength="10" style="width: 100%;height: 100%;" name="profile_phone"
                id="profile_phone" aria-describedby="profile_phone" placeholder="ระบุเบอร์โทร"
                @foreach($users as $user)
                value="0{{ $user->profile_phone }}"
                @endforeach
                >
                </div>

            </div>
            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#5181B8; border-radius: 5px;">
                    <i class="fas fa-envelope fa-sm p-2  rounded" style="color: #fff"></i>
                </div>
                <div class=" d-flex flex-row">
                    <input type="email" maxlength="40" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_email"
                id="profile_email" aria-describedby="profile_email" placeholder="ระบุ E-mail"
                @foreach($users as $user)
                value={{ $user->profile_email }}
                @endforeach
                >
                </div>
            </div>
            <div class=" w-100 rounded p-1 pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#3ACE01; border-radius: 5px;">
                    <i class="fab fa-line fa-sm p-2  rounded" style="color: #fff"></i>

                </div>
                <div class=" d-flex flex-row">
                    <input type="text" maxlength="40" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_line"
                id="profile_line" aria-describedby="profile_line" placeholder="ระบุ Line ID"
                @foreach($users as $user)
                value={{ $user->profile_line }}
                @endforeach
                >
                </div>
            </div>
        </div>
    </div>

