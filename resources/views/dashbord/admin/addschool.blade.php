
@extends('layout.master')

@section('title', 'admin')


@section('content')

    <div class=".container-fluid h-auto w-auto" style="background-color: #BDC3C7">
        <div class="row p-0 m-0">
            <div class="col-12 p-0 d-flex flex-row">
                @include('dashbord.admin.componentAdmin.menuadmin')

                <div class="col-10 p-0 m-0" style="background-color: rgb(209, 209, 209);">
                    <div class="ml-2 scrollDiv" style="background-color: #fff;">
                        @include('dashbord.admin.componentAdmin.addschools')



                        <div class="line" style="height: 1px; background-color:#000;"></div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

