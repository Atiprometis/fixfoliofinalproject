<div class="container">
    {!! Form::open(array('url' => '/addNewschool', 'method' => 'get','enctype' => 'multipart/form-data')) !!}

        <div class="form-group">
          <label for="exampleInputEmail1">ชื่อโรงเรียน</label>
          <input type="text" class="form-control" name="schools_name" aria-describedby="emailHelp" placeholder="ใส่ชื่อโรงเรียน">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">ประวัติ</label>
            <textarea class="form-control textarea-grow" oninput="auto_grow(this)" name="schools_detail"  id="exampleFormControlTextarea1"  maxlength='4000'></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">facebook</label>
            <input type="text" class="form-control" name="facebook" maxlength="50" aria-describedby="emailHelp" placeholder="ใส่ชื่อfacebook" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" pattern="[0]{1}[0-9]{7-9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" placeholder="ใส่เบอร์โทรศัพท์" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">line</label>
            <input type="text" class="form-control" name="line" aria-describedby="emailHelp" maxlength="30" placeholder="ใส่ไอดีline" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input type="email" maxlength="100" class="form-control" name="email" aria-describedby="emailHelp" placeholder="ใส่ email" required>
          </div>
        <div class="form-group d-flex flex-column w-100">
            <label for="exampleInputEmail1">เจ้าของโรงเรียน</label>
            <select class="selectpicker border border-success  w-100" name="schools_owner" data-live-search="true">
                <option data-tokens="ketchup mustard" style="display: none">เลือกเจ้าของโรงเรียน</option>
                {{-- <option data-tokens="mustard">Burger, Shake and a Smile</option>
                <option data-tokens="frosting">Sugar, Spice and all things nice</option> --}}
                @foreach ($userall as $user)
                <option value="{{$user->id}}" data-tokens="{{$user->id}}">{{$user->id}} {{$user->name}} {{$user->lastname}}</option>
                @endforeach
              </select>

            {{-- <select class="custom-select" name="schools_owner" multiple>
                @foreach ($userall as $user)
                <option value="{{$user->id}}">{{$user->id}} {{$user->name}} {{$user->lastname}}</option>
                @endforeach
              </select> --}}
        </div>

          <div class=" d-flex justify-content-center col-md-12 mt-2 mb-4">
            <button type="submit" class="btn btn-primary">ยืนยัน</button>
            <a href="/showschool"><button class="btn btn-secondary swa-confirm mr-2 ml-2" >กลับ</button></a>
          </div>

    {!! Form::close() !!}
</div>
