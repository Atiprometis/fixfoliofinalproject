<div class="aboutme">
    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-3 offset-3 align-self-center">
            <h3 class="" style="font-size: 1em">ประวัติส่วนตัว</h3>
        </div>
        <div class="col-12 d-flex flex-row">
            <div class="col-3 offset-3 pl-0">
                <input type="text" class="form-control "  style="width: 100%" name="religion" id="religion" maxlength="20" aria-describedby="religion" placeholder="นับถือศาสนา" required>
            </div>
            <div class="col-3 ">
                <input type="text" class="form-control " style="width: 100%" name="nationality" id="nationality" maxlength="20" aria-describedby="nationality" placeholder="สัญชาติ" required>
            </div>
        </div>
    </div>

    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-12 d-flex flex-row">
            <div class="col-6 offset-3 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="career" maxlength="30" id="career" aria-describedby="career" placeholder="อาชีพปัจจุบัน" required>
            </div>
        </div>
    </div>
    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-12 d-flex flex-row">
            <div class="col-3 offset-3 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="school" maxlength="30" id="school" aria-describedby="school" placeholder="ชื่อสถานศึกษา" required>
            </div>
            <div class="col-3 ">
                <input type="text" class="form-control " style="width: 100%" name="branch" maxlength="30" id="branch" aria-describedby="branch" placeholder="สาขาที่จบ" required>
            </div>
        </div>
    </div>
    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-12 d-flex flex-row">
            <div class="col-3 offset-3 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="qualification" maxlength="30" id="qualification" aria-describedby="qualification" placeholder="วุฒิที่จบ" required>
            </div>
            <div class="col-3 ">
                <input type="text" step="0.01" inputmode="decimal"  class="form-control " style="width: 100%" maxlength="4" name="result" id="result"
                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                onkeypress="CurrencyFormat(this)"
                 aria-describedby="result" placeholder="ผลการเรียน" required>
            </div>
        </div>
    </div>
    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-12 d-flex flex-row">
            <div class="col-6 offset-3 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="dadname" maxlength="30" id="dadname" aria-describedby="dadname" placeholder="ชื่อ-นามสกุล บิดา" required>
            </div>
        </div>
    </div>
    <div class="form-group form-row d-flex align-items-center   ">
        <div class="col-12 d-flex flex-row">
            <div class="col-6 offset-3 pl-0">
                <input type="text" class="form-control " style="width: 100%" name="momname" maxlength="30" id="momname" aria-describedby="momname" placeholder="ชื่อ-นามสกุล มารดา" required>
            </div>
        </div>
    </div>

</div>
