@extends('layout.master')

@section('title', 'Contact')


@section('content')
    <div class="container">
        <div class="row">
            <div class=" col-md-12">
                <div class=" d-flex flex-column justify-content-center text-center pt-4 flex-wrap">
                    <h4>ติดต่อเรา</h4>
                    <div class="col-md-12 d-flex flex-row justify-content-center " style="line-height: 10px;">

                            <div class="ml-5 mr-5  d-flex flex-row text-cen align-items-center " style="height: 100px" >
                                <i class="fas fa-envelope fa-lg text-light  rounded-circle" style="background-color:  #18A0FB;padding:10px;"></i>
                                <p class=" mt-3 ml-3" style="font-size: 1em;" >อีเมลล์</p>
                            </div>
                            <div class="ml-5 mr-5 d-flex flex-row align-items-center ">
                                <i class="fas fa-phone fa-lg text-light rounded-circle" style="background-color: #FF4444;padding:10px;"></i>
                                <p class="mt-3 ml-3" style="font-size: 1em;">โทรศัพท์</p>
                            </div>

                    </div>
                    <div class=" col-md-12 d-flex flex-row text-center justify-content-center">
                        <div class=" ml-5 mr-5 ">
                            <p class="" style="font-size: 1em;">Lovelearning@gmail.co</p>
                        </div>
                        <div class="ml-5 mr-5 ">
                            <p class="" style="font-size: 1em;">0-2245-1707</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class=" " style="background-color: #69299C;">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ asset('access/imageweb/contact1.png') }}" class="img-fluid" alt="">
        </div>

    </div>
    <div class=" " style="background-color: #7395F9;">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ asset('access/imageweb/contact2.png') }}" class="img-fluid" alt="">
        </div>
    </div>

@endsection
