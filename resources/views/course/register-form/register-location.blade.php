<div class="register-location">
    <div class="form-group form-row  d-flex  align-items-center   ">
        <div class="col-12 align-self-center">
            <h3 class="" style="font-size: 1em">ภูมิลำเนาตามทะเบียนบ้าน</h3>
        </div>
        <div class="col-12 d-flex flex-row flex-wrap">
            <div class="col-4 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="housenumber" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                id="housenumber" maxlength="20" aria-describedby="housenumber" placeholder="บ้านเลขที่" required>
            </div>
            <div class="col-4 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="swine" id="swine" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                maxlength="20" aria-describedby="swine" placeholder="หมู่" required>
            </div>
            <div class="col-4 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="alley" id="alley" maxlength="20" aria-describedby="alley" placeholder="ซอย" required>
            </div>
        </div>
    </div>
    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-12 d-flex flex-row flex-wrap">
            <div class=" col-4 col-md-3 col-lg-3  pl-0">
                <input type="text" class="form-control " style="width: 100%" name="road" maxlength="20" id="road" aria-describedby="road" placeholder="ถนน" required>
            </div>
            <div class="col-4 col-md-3 col-lg-2 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="district" id="district" maxlength="20"  aria-describedby="district" placeholder="ตำบล" required>
            </div>
            <div class="col-4  col-md-3 col-lg-2 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="county" id="county" maxlength="20" aria-describedby="county" placeholder="อำเภอ" required>
            </div>
            <div class="col-6 col-md-3  col-lg-2 pt-3 pt-md-0  pl-0">
                <input type="text" class="form-control "  style="width: 100%" pattern="[0-9]{5}" name="postalcode" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                id="postalcode" aria-describedby="postalcode" placeholder="รหัสไปรษณีย์" required>
            </div>
            <div class="col-6 col-md-12 col-lg-3 pt-3 pt-lg-0  pl-0">
                <select class="custom-select"  name="province" id="province">
                    <option selected style="display: none" value="กรุงเทพมหานคร">จังหวัด</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->name_th }}">{{ $province->name_th }}</option>
                    @endforeach
                </select>
            </div>

        </div>
    </div>

</div>

<div class="register-location">
    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-12 align-self-center">
            <h3 class="" style="font-size: 1em">ที่อยู่พักอาศัยปัจจุบัน</h3>
            <p class="" style="font-size: 0.75em">ที่อยู่ตามภูมิลำเนาตามทะเบียนบ้าน</p>
        </div>
        <div class="col-12 d-flex flex-row flex-wrap">
            <div class="col-4 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="housenumber-present" id="housenumber-present"oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                 maxlength="20" aria-describedby="housenumber-present" placeholder="บ้านเลขที่" required>
            </div>
            <div class="col-4 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="swine-present" id="swine-present" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                maxlength="20" aria-describedby="swine-present" placeholder="หมู่" required>
            </div>
            <div class="col-4 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="alley-present" id="alley-present" maxlength="20" aria-describedby="alley-present" placeholder="ซอย" required>
            </div>
        </div>
    </div>


    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-12 d-flex flex-row flex-wrap">
            <div class="col-4 col-md-3  pl-0">
                <input type="text" class="form-control " style="width: 100%" name="road-present" id="road-present" maxlength="20" aria-describedby="road-present" placeholder="ถนน" required>
            </div>
            <div class="col-4 col-md-3 col-lg-2 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="district-present"  id="district-present" maxlength="20" aria-describedby="district-present" placeholder="ตำบล" required>
            </div>
            <div class="col-4 col-md-3  col-lg-2 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="county-present" id="county-present" maxlength="20" aria-describedby="county-present" placeholder="อำเภอ" required>
            </div>
            <div class="col-6 col-md-3 col-lg-2  pt-3 pt-md-0 pl-0">
                    <input type="text" class="form-control " style="width: 100%" name="postalcode-present" maxlength="5" pattern="[0-9]{5}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                     id="postalcode-present" aria-describedby="postalcode-present" placeholder="รหัสไปรษณีย์" required>
            </div>
            <div class="col-6 col-md-12 col-lg-3 pt-3 pt-lg-0 pl-0">

                <select class="custom-select"  name="province-present" id="province-present">
                    <option selected style="display: none" value="กรุงเทพมหานคร">จังหวัด</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->name_th }}">{{ $province->name_th }}</option>
                    @endforeach
                </select>
            </div>

        </div>
    </div>

</div>
