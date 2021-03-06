
@extends('layout.master')

@section('title', 'dashbord')


@section('content')

    <div class=".container-fluid h-auto w-auto" style="background-color: #BDC3C7">
        <div class="row p-0 m-0">
            <div class="col-12 p-0 d-flex flex-row">
                @include('dashbord.component.menu')

                <div class="col-10 p-0 m-0" style="background-color: rgb(209, 209, 209);">
                    <div class="ml-2 scrollDiv" style="background-color: #fff;">
                        <div class="allcard d-flex flex-row mt-3 mb-3 justify-content-sm-around">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body text-center">
                                  <h5 class="card-title">คอร์สเรียนทั้งหมด</h5>
                                  <h6 class="card-subtitle mb-2 text-muted"></h6>
                                  <h1 class="card-text pt-5 pb-3">12</h1>

                                </div>
                              </div>
                              <div class="card" style="width: 18rem;">
                                <div class="card-body text-center" style="height: 250px">
                                  <h5 class="card-title">คอร์สคนสมัครเยอะที่สุด</h5>
                                  <h6 class="card-subtitle mb-2 text-muted"></h6>
                                  <h2 class="card-text pt-5 pb-3 ">,kssdfsdfsdfsdfsdfsdfsdfsdfsdf</h2>

                                </div>
                              </div>
                              <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                </div>
                              </div>

                        </div>


                        <div class="ml-3 mr-3 mt-3">
                            <table class="table">
                                <thead class="thead-dark ">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Otto</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>Otto</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">4</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>Otto</td>
                                  </tr>
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

