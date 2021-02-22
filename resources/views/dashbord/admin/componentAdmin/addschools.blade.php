<div class="container">
    {!! Form::open(array('url' => '/addNewschool', 'method' => 'get','enctype' => 'multipart/form-data')) !!}

        <div class="form-group">
          <label for="exampleInputEmail1">ชื่อโรงเรียน</label>
          <input type="text" class="form-control" name="schools_name" aria-describedby="emailHelp" placeholder="ใส่ชื่อโรงเรียน">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">ประวัติ</label>
            <textarea class="form-control" name="schools_detail"  id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">facebook</label>
            <input type="text" class="form-control" name="facebook" maxlength="20" aria-describedby="emailHelp" placeholder="ใส่ชื่อfacebook" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" pattern="[0]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" placeholder="ใส่เบอร์โทรศัพท์" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">line</label>
            <input type="text" class="form-control" name="line" aria-describedby="emailHelp" maxlength="18" placeholder="ใส่ไอดีline" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input type="email" maxlength="20" class="form-control" name="email" aria-describedby="emailHelp" placeholder="ใส่ email" required>
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">เจ้าของโรงเรียน</label>
            <select class="custom-select" name="schools_owner" multiple>
                @foreach ($userall as $user)
                <option value="{{$user->id}}">{{$user->id}} {{$user->name}} {{$user->lastname}}</option>
                @endforeach
              </select>
          </div>

          <div class=" d-flex justify-content-center col-md-12 mt-2 mb-4">
            <button type="submit" class="btn btn-primary">ยืนยัน</button>
            <a href="/showschool"><button class="btn btn-secondary swa-confirm mr-2 ml-2" >กลับ</button></a>
          </div>

    {!! Form::close() !!}
</div>
