{!! Form::open(array('url' => '/updateprofile','method' => 'POST','class'=>'needs-validation col-12 col-lg-3 mt-2 p-0',' ')) !!}
    @csrf
    <div class="contact col-12  pr-0 p-0  d-flex d-lg-block flex-row  flex-wrap">
        <div class="col-12 col-md-6 col-lg-12  p-0 m-0 pr-0 pl-0 pl-md-1 pr-md-1">
            <h2 class="" style="font-weight: 400; font-size: 1.250em;">ข้อมูลส่วนตัว</h2>
            <div class=" w-100 rounded  pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#1787E2; border-radius: 5px;">
                    <i class="fas fa-pen fa-sm p-2  rounded" style="color: #fff"></i>
                </div>
                <div class=" d-flex flex-row ">
                    <p class="m-0 p-2">อายุ </p>
                    <input type="text" class="remove-border form-control aboutme rounded " maxlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" style="width: 100%;height: 100%;" name="profile_age"
                id="profile_age" aria-describedby="profile_age" placeholder="อายุ"
                {{-- @foreach($profiledatas as $user) --}}
                value={{ $profiledatas['profile_age'] }}
                {{-- @endforeach --}}
                >

                </div>

            </div>
            <div class=" w-100 rounded  pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#FF6660; border-radius: 5px;">

                    <i class="fas fa-venus-mars fa-sm p-2  rounded" style="color: #fff"></i>
                </div>
                <div class=" d-flex flex-row col-md-10 p-0 pr-2 w-100">
                    <p class="m-0 p-2">เพศ </p>
                    {{-- <input type="text" class="form-control outline-none aboutme rounded " style="width: 100%;height: 100%;" name="profile_sex"
                id="profile_sex" aria-describedby="profile_sex" placeholder=""
                @foreach($users as $user)
                value={{ $user->profile_sex }}
                @endforeach
                > --}}
                <select class="form-control border-0 w-100 " id="exampleFormControlSelect1" name="profile_sex">
                    <option style="display: none">{{ $profiledatas['profile_sex'] }}</option>
                    <option>ชาย</option>
                    <option>หญิง</option>
                </select>

                </div>

            </div>
            <div class=" w-100 rounded  pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#9B51E0; border-radius: 5px;">
                    <i class="fas fa-pen fa-sm p-2  rounded" style="color: #fff"></i>
                </div>
                <div class=" d-flex flex-row">
                    <p class="m-0 p-2">สัญชาติ</p>
                    <input type="text" class=" remove-border form-control  aboutme rounded " maxlength="20"  style="width: 100%;height: 100%;" name="profile_instinct"
                id="profile_instinct" aria-describedby="profile_instinct" placeholder=""

                value={{ $profiledatas['profile_instinct'] }}

                >

                </div>

            </div>
            <div class=" w-100 rounded  pl-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#1787E2; border-radius: 5px;">
                    <i class="fas fa-map-marker-alt fa-sm p-2  rounded" style="width: 30px;color: #fff"></i>
                </div>
                <div class=" d-flex flex-row w-100 ml-2">
                    {{-- <input type="text" class="form-control outline-none aboutme rounded " maxlength="30"  style="width: 100%;height: 100%;" name="profile_province"
                id="profile_province" aria-describedby="profile_province" placeholder="จังหวัดที่อยู่"

                value={{ $profiledatas['profile_province'] }}

                > --}}
                <select class="custom-select border-0 w-100 "   name="profile_province" id="province-present">
                    <option selected style="display: none " value="กรุงเทพมหานคร">จังหวัด</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->name_th }}">{{ $province->name_th }}</option>
                    @endforeach
                </select>
                </div>


            </div>
            <div class=" w-100 rounded  pl-2 pr-2 d-flex mt-2 mb-2 flex-row   align-items-center d-inline-block text-truncate" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#5181B8; border-radius: 5px;">

                    <i class="fas fa-graduation-cap fa-sm p-2  rounded" style="color: #fff"></i>
                </div>
                <div class="w-100 d-flex flex-row ml-2">
                    {{-- <input type="text" class="form-control outline-none aboutme rounded " maxlength="30"  style="width: 100%;height: 100%;" name="profile_education"
                id="profile_education" aria-describedby="profile_education" placeholder="การศึกษา"
                @foreach($users as $user)
                value={{ $profiledatas['profile_education'] }}
                @endforeach
                > --}}
                @php
                $dataall = array('ไม่มี',
                'ประถมศึกษาตอนต้น','ประถมศึกษาตอนปลาย',
                'มัธยมศึกษาตอนต้น','มัธยมศึกษาตอนปลายหรือเทียบเท่า','อาชีวศึกษาหรือวิชาชีพ',
                'ปริญญาตรีหรือเทียบเท่า','สูงกว่าปริญญาตรี',
                );
                @endphp

                <select class="form-control border-0" id="exampleFormControlSelect1" name="profile_education">
                    <option value="ไม่ระบุ" style="display: none">การศึกษา</option>
                    @foreach ($dataall as $data)
                    <option value="{{ $data }}">{{ $data }}</option>
                    @endforeach
                </select>



                </div>



            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-12 p-0 m-0 pr-0 pl-0 pl-md-1 pr-md-1 ">
            <h2 class="" style="font-weight: 400; font-size: 1.250em">ช่องทางการติดต่อ</h2>
            <div class=" w-100 rounded  pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#4267B2; border-radius: 5px;">
                    <i class="fab fa-facebook-f fa-sm p-2  rounded" style="color: #fff"></i>

                </div>
                <div class=" d-flex flex-row ml-2">
                    <input type="text" maxlength="30"  class="form-control remove-border aboutme rounded " style="width: 100%;height: 100%;" name="profile_facebook"
                id="profile_facebook" aria-describedby="profile_facebook" placeholder="ระบุ facebook"
                @foreach($users as $user)
                value={{ $profiledatas['profile_facebook'] }}
                @endforeach
                >
                </div>

            </div>
            <div class=" w-100 rounded  pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#1DA1F2; border-radius: 5px;">
                    <i class="fas fa-phone-alt fa-sm p-2  rounded" style="color: #fff"></i>
                </div>
                <div class=" d-flex flex-column ml-2">

                    <input type="text" class="form-control remove-border aboutme rounded" pattern="[0]{1}[0-9]{9}"
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" style="width: 100%;height: 100%;" name="profile_phone"
                    id="profile_phone" aria-describedby="profile_phone" placeholder="ระบุเบอร์โทร"
                @foreach($users as $user)
                value={{ $profiledatas['profile_phone'] }}
                @endforeach

                >
                <small style="color: #c3c3c3">เบอร์โทรควรขึ้นต้นด้วย เลข 0</small>
                </div>

            </div>
            <div class=" w-100 rounded pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#5181B8; border-radius: 5px;">
                    <i class="fas fa-envelope fa-sm p-2  rounded" style="color: #fff"></i>
                </div>
                <div class=" d-flex flex-row ml-2">
                    <input type="email" maxlength="40" class="form-control remove-border aboutme rounded " style="width: 100%;height: 100%;" name="profile_email"
                id="profile_email" aria-describedby="profile_email" placeholder="ระบุ E-mail"
                @foreach($users as $user)
                value={{ $profiledatas['profile_email'] }}
                @endforeach
                >
                </div>
            </div>
            <div class=" w-100 rounded  pl-2 d-flex mt-2 mb-2flex-row   align-items-center" style="border: solid 1px #c1c1c1">
                <div class="" style="width: 30px ;background:#3ACE01; border-radius: 5px;">
                    <i class="fab fa-line fa-sm p-2  rounded" style="color: #fff"></i>

                </div>
                <div class=" d-flex flex-row ml-2">
                    <input type="text"  class="form-control remove-border aboutme rounded " maxlength="20"  style="width: 100%;height: 100%;" name="profile_line"
                id="profile_line" aria-describedby="profile_line" placeholder="ระบุ Line ID"
                @foreach($users as $user)
                value={{ $profiledatas['profile_line'] }}
                @endforeach
                >
                </div>
            </div>
        </div>
        <div class="mt-3 d-flex  flex-row justify-content-end align-items-center  w-100">
            <button type="submit"  class="btn mr-3" style="background-color: #F2C94C;font-size: 1em">
                บันทึกการแก้ไข
            </button>
        </div>
    </div>
{!! Form::close() !!}
