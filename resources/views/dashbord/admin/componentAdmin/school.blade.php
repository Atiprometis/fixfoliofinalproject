<div class="">

    <h1 class="center text-center mt-3 "> จัดการโรงเรียน</h1>

    <a href="/addschool" class="btn btn-primary my-2">สร้างโรงเรียน </a>
    <table class="table">
        <thead class="thead-dark text-center">
          <tr>
            <th scope="col">รหัส</th>
            <th scope="col">รหัสโรงเรียน</th>
            <th scope="col">เจ้าของโรงเรียน</th>
            <th scope="col">ชื่อโรงเรียน</th>
            <th scope="col">แก้ไข</th>
            <th scope="col">ลบ</th>
          </tr>
        </thead>
        <tbody class=" text-center">
            @foreach ($dataschool as $index=>$school)
            <tr>
            <th scope="row">{{$index+1}}</th>
            <td>{{$school->schools_id}}</td>
            <td>{{$school->name}} {{$school->lastname}}</td>
            <td>{{$school->schools_name}}</td>
            {{-- <td>{{$school->schools_name}}</td> --}}
            <td>
                {{-- <form action="/editcourse/{{$course->course_id}}" method="GET">
                    @csrf
                    <button type="submit" data-name="{{$course->course_id}}" class="btn btn-info deleteForm ">แก้ไข</button>
                </form> --}}
            </td>
            <td >
                <form action="/deleteschool/{{$school->schools_id}}" method="GET">
                    @csrf
                    <button type="submit" data-name="{{$school->schools_id}}" class="btn btn-danger deleteForm destroy-btn">ลบ</button>
                </form>
            </td>

            </tr>

      @endforeach

        </tbody>
      </table>

</div>
