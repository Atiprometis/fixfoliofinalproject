<div class="form-group d-flex flex-column">
    <label><strong>เรียนวัน</strong></label>

        <div class="col-12 p-0 m-0 ">
            <input type="hidden" name="course_day[]" value=" ">
            <label class="col-3 p-0" ><input type="checkbox" name="course_day[]" value="จ" > จันทร์</label>
            <label class="col-3 p-0"><input type="checkbox" name="course_day[]" value="อ"> อังคาร</label>
            <label class="col-3 p-0"><input type="checkbox" name="course_day[]" value="พ"> พุธ</label>
            <label class="col-3 p-0"><input type="checkbox" name="course_day[]" value="พฤ"> พฤหัสบดี</label>
            <label class="col-3 p-0"><input type="checkbox" name="course_day[]" value="ศ"> ศุกร์</label>
            <label class="col-3 p-0"><input type="checkbox" name="course_day[]" value="ส"> เสาร์</label>
            <label class="col-3 p-0"><input type="checkbox" name="course_day[]" value="อา"> อาทิตย์</label>
        </div>

</div>



    <div class=" d-flex flex-row flex-wrap">
        <div class="form-group col-md-5 p-0 mr-2 ml-2" >
                {!! Form::label('course_learn_start','เริ่มเรียนกี่โมง') !!}
                {!! Form::time('course_learn_start',null,["class"=>"form-control" ,'required']) !!}
        </div>

        <div class="form-group col-md-5 p-0 mr-2 ml-2">

            {!! Form::label('course_hours','เรียนทั้งหมดกี่ชั่วโมง') !!}
            {!! Form::number('course_hours',null,["class"=>"form-control",
            "oninput"=>"javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);",
             "maxlength"=>"3"  ,'required']) !!}

        </div>
        <div class="form-group col-md-5 p-0 mr-2 ml-2">

            {!! Form::label('course_learn_end','เลิกเรียนกี่โมง') !!}
            {!! Form::time('course_learn_end',null,["class"=>"form-control" ,'required']) !!}

        </div>
        <div class="form-group col-md-5 p-0 mr-2 ml-2">

            {!! Form::label('course_online','เรียนออนไลน์หรือไม่ ?') !!}
            <select class="form-control" id="exampleFormControlSelect1" name="course_online" required>
                <option value="ไม่มี">ไม่มีคอร์สออนไลน์</option>
                <option value="มีคอร์สออนไลน์">คอร์สออนไลน์</option>
            </select>
        </div>
    </div>

