<div class="container">
    {!! Form::open(array('url' => '/addNewschool', 'method' => 'get','enctype' => 'multipart/form-data')) !!}

        <div class="form-group">
          <label for="exampleInputEmail1">ชื่อโรงเรียน</label>
          <input type="text" class="form-control" name="schools_name" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">ประวัติ</label>
            <textarea class="form-control" name="schools_detail"  id="exampleFormControlTextarea1" rows="3"></textarea>
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
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/showschool"><button class="btn btn-secondary swa-confirm mr-2 ml-2" >กลับ</button></a>
          </div>

    {!! Form::close() !!}
</div>
