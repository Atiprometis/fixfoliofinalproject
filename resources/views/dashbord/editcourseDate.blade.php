
@extends('layout.master')

@section('title', 'dashbord')


@section('content')

    <div class=".container-fluid h-auto w-auto" style="background-color: #BDC3C7">
        <div class="row p-0 m-0">
            <div class="col-12 p-0 d-flex flex-row">
                @include('dashbord.component.menu')

                <div class="col-10 p-0 m-0" style="background-color: rgb(209, 209, 209);">
                    <div class="ml-2 scrollDiv" style="background-color: #fff;">
                        @include('dashbord.component.date')



                        <div class="line" style="height: 1px; background-color:#000;"></div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('dashbord.script.sctriptfromdashboard')



@endsection

