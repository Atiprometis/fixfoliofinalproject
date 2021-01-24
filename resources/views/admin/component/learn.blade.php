<div class="form-group d-flex flex-column">
    <label><strong>เรียนวัน</strong></label>

        <label ><input type="checkbox" name="category[]" value="monday"> จันทร์</label>
        <label ><input type="checkbox" name="category[]" value="tuesday"> อังคาร</label>
        <label ><input type="checkbox" name="category[]" value="wednesday"> พุธ</label>
        <label ><input type="checkbox" name="category[]" value="thursday"> พฤหัสบดี</label>
        <label ><input type="checkbox" name="category[]" value="friday"> ศุกร์</label>
        <label ><input type="checkbox" name="category[]" value="saturday"> เสาร์</label>
        <label ><input type="checkbox" name="category[]" value="sunday"> อาทิตย์</label>

</div>

<div class="form-group col-md-6 p-0">

    {!! Form::label('course_hours','เรียนทั้งหมดกี่ชั่วโมง') !!}
    {!! Form::number('course_hours',null,["class"=>"form-control"]) !!}

</div>
<div class="form-group col-md-6 p-0">

    {!! Form::label('course_learn_start','เริ่มเรียนกี่โมง') !!}
    {!! Form::time('course_learn_start',null,["class"=>"form-control"]) !!}

</div>
<div class="form-group col-md-6 p-0">

    {!! Form::label('course_learn_end','เลิกเรียนกี่โมง') !!}
    {!! Form::time('course_learn_end',null,["class"=>"form-control"]) !!}

</div>
<div class="form-group col-md-6 p-0">

    {!! Form::label('course_online','เรียนออนไลน์หรือไม่ ?') !!}
    <select class="form-control" id="exampleFormControlSelect1" name="course_online">
        <option>คอร์สออนไลน์</option>
        <option>ไม่มีคอร์สออนไลน์</option>
    </select>

</div>
