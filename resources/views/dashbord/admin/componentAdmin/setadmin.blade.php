<div class=".container-fluid h-auto w-auto" style="background-color: #BDC3C7">
    <div class="row p-0 m-0">
        <div class="col-12 p-0 d-flex flex-row">

            <div class="col-12 p-0 m-0" style="background-color: rgb(209, 209, 209);">
                <div class="ml-2 scrollDiv" style="background-color: #fff;">

                    <div class="container">
                        <div class="row">
                            <div class=" flex-row d-flex col-md-12">
                                <div class=" col-md-6">
                                    {!! Form::open(array('url' => 'setsuperadmin', 'method' => 'post','enctype' => 'multipart/form-data')) !!}
                                    <label for="exampleInputEmail1">เลือก SuperAdmin</label>
                                    <div class="form-group d-flex justify-content-center col-md-12 mt-1">
                                        <select class="custom-select" name="schools_owner" multiple>
                                            @foreach ($userall as $user)
                                            <option value="{{$user->id}}">{{$user->id}} {{$user->name}} {{$user->lastname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class=" d-flex justify-content-center col-md-12 mt-2 mb-4">
                                        <button type="submit" class="btn btn-primary">ยืนยัน</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                                <div class=" col-md-6">
                                    {!! Form::open(array('url' => 'setadmin', 'method' => 'post','enctype' => 'multipart/form-data')) !!}
                                    <label for="exampleInputEmail1">เลือก Admin</label>
                                    <div class="form-group d-flex justify-content-center col-md-12 mt-1">
                                        <select class="custom-select" name="schools_owner" multiple>
                                            @foreach ($userall as $user)
                                            <option value="{{$user->id}}">{{$user->id}} {{$user->name}} {{$user->lastname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class=" d-flex justify-content-center col-md-12 mt-2 mb-4">
                                        <button type="submit" class="btn btn-primary">ยืนยัน</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="ml-3 mr-3 mt-3">
                        <table class="table">
                            <thead class="thead-dark ">
                              <tr class=" text-center">
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">LASTNAME</th>
                                <th scope="col">USERNAME</th>
                                <th scope="col">ROLE</th>
                                <th scope="col">DELETE ADMIN</th>
                              </tr>
                            </thead>
                            <tbody>

                                @foreach ($adminall as $index=>$admin)
                                <tr class=" text-center">
                                    {!! Form::open(array('url' => 'deleteadmin/'. $admin->id .'', 'method' => 'post','enctype' => 'multipart/form-data')) !!}
                                    <th scope="row">{{ $index }}</th>
                                    <td>{{ $admin->id }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->lastname }}</td>
                                    <td>{{ $admin->username }}</td>
                                    <td>{{ $admin->role }}</td>
                                    <td><button type="submit" class="btn btn-danger">ลบ</button></td>
                                    {!! Form::close() !!}
                                </tr>
                                @endforeach

                            </tbody>
                          </table>
                    </div>
                    <div class="line" style="height: 1px; background-color:#000;"></div>

                </div>

            </div>
        </div>
    </div>
</div>
