
@extends('layout.master')

@section('title', 'dashbord')


@section('content')

    <div class=".container-fluid h-auto w-auto" style="background-color: #BDC3C7">
        <div class="row p-0 m-0">
            <div class="col-12 p-0 d-flex flex-row">
                @include('dashbord.component.menu')

                <div class="col-10 p-0 m-0" style="background-color: rgb(209, 209, 209);">
                    <div class="ml-2 scrollDiv" style="background-color: #fff;">
                        <div class="allcard d-flex flex-row mt-3 mb-3 justify-content-sm-center align-items-center">
                            <div class="card mr-4 ml-4 text-light p-4" style="width: 18rem; background-color: #69299C;height: 230px;" >
                                <div class="card-body text-center ">
                                  <h5 class="card-title">คอร์สเรียนทั้งหมด</h5>
                                  <h6 class="card-subtitle mb-2 text-muted"></h6>
                                  <h1 class="card-text pt-5 pb-3">{{ $count }}</h1>

                                </div>
                            </div>
                            <div class="card mr-4 ml-4 text-light p-3" style="width: 18rem;background-color: #7395F9;height: 230px;" >
                                <div class="card-body text-center " style="height: 250px">
                                  <h5 class="card-title">คอร์สคนสมัครเยอะที่สุด</h5>
                                  <h6 class="card-subtitle mb-2 text-muted"></h6>
                                  <h2 class="card-text pt-5 pb-3 ">{{ $countRegister }}</h2>

                                </div>
                            </div>
                        </div>


                        <div class="ml-3 mr-3 mt-3">
                            <table class="table">
                                <thead class="thead-dark text-center ">
                                  <tr >
                                    <th scope="col">จำนวน</th>
                                    <th scope="col">ชื่อ</th>
                                    <th scope="col">คอร์สที่สมัคร</th>
                                    <th scope="col">วัน / เวลา</th>
                                    {{-- <th scope="col">Status</th> --}}
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataAll as $index=>$data)
                                    <tr class=" text-center">
                                        <th scope="row">{{ $index+1 }}</th>
                                        <td>{{ $data->name }} {{ $data->lastname }}</td>
                                        <td>ทำการสมัครคอร์ส
                                            <p class=" text-success">{{ $data->course_name }}</p>
                                        </td>
                                        <td>{{ $data->created_at }}</td>
                                        {{-- <td>@mdo</td> --}}
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
@endsection

