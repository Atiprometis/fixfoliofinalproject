<div class="registerbasic">
    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-3 offset-3 align-self-center">
            <h3 class="" style="font-size: 1em">ข้อมูลเบื้องต้น</h3>
        </div>
        <div class="col-12 d-flex  flex-sm-row flex-column">
            <div class="col-lg-3 col-12 offset-0 offset-sm-3 pl-0 ">
                <input type="text" class="form-control " style="width: 100%" name="name" id="name" maxlength="25" aria-describedby="name" placeholder="ชื่อ" required>

            </div>
            <div class="col-lg-3 col-12 offset-0 offset-sm-0  pl-0 pt-3  pt-sm-0 ">
                <input type="text" class="form-control " style="width: 100%" name="lastname" id="lastname" maxlength="25"  aria-describedby="emailHelp" placeholder="นามสกุล" required>
            </div>
        </div>
    </div>
    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-12 d-flex flex-row">
            <div class="col-lg-3 col-12 offset-0 offset-sm-3 pl-0 ">
                <input type="tel" class="form-control " style="width: 100%" name="telphone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                id="telphone" pattern="[0]{1}[0-9]{9}" maxlength="10" aria-describedby="telphone" placeholder="เบอร์โทรศัพท์" required>
                <div class="invalid-feedback">โปรดใส่เบอร์ที่ขึ้นต้นด้วย 0 เช่น 0812345678</div>
            </div>
            <div class="col-lg-3 col-12 offset-0 offset-sm-0  pl-0 pt-3  pt-sm-0 ">
                <input type="email" class="form-control " style="width: 100%" name="email" id="email" maxlength="40" aria-describedby="emailHelp" placeholder="อีเมลล์ เช่น exam@gmail.com" required>
            </div>
        </div>
    </div>
    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-12 d-flex flex-row">
            <div class="col-6 offset-3 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="idcard" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                 maxlength="13" id="idcard" pattern="[0-9]{13}" aria-describedby="idcard " placeholder="เลขบัตรประชาชน" required>
            </div>
        </div>
    </div>
    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-12 d-flex flex-row">
            <div class="col-6 offset-3 pl-0">
                <input type="date" class="form-control " style="width: 100%" name="birthday" id="birthday" aria-describedby="birthday"  placeholder="วัน/เดือน/ปีเกิด" required>
            </div>
        </div>
    </div>

</div>
