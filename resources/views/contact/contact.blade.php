@extends('layout.master')

@section('title', 'Contact')


@section('content')
    <div class="container">
        <div class="row">
            <div class=" col-md-12">
                <div class=" d-flex flex-row justify-content-center text-center pt-4 flex-wrap">
                    <h4>ติดต่อเรา</h4>
                    <div class="col-12 pb-4 d-flex flex-row justify-content-center  flex-wrap" style="line-height: 10px;">
                            <div class="col-12 col-md-6 ml-5 mr-5 ml-md-0 mr-md-0 justify-content-start justify-content-md-center    d-flex flex-row text-cen align-items-center " style="height: 100px" >
                                <i class="fas fa-envelope fa-lg text-light  rounded-circle" style="background-color:  #18A0FB;padding:10px;"></i>
                                <div class=" d-flex flex-column">
                                    <p class="p-0 m-0  mb-2 ml-3 text-left " style="font-size: 2.2vh;" >อีเมลล์</p>
                                    <p class=" p-0 m-0 ml-3" style="font-size: 1em;">Lovelearning@gmail.com</p>
                                </div>
                            </div>
                            <div class=" col-12 col-md-6 ml-5 mr-5 ml-md-0 mr-md-0 d-flex justify-content-start justify-content-md-center    flex-row align-items-center ">
                                <i class="fas fa-phone fa-lg text-light rounded-circle" style="background-color: #FF4444;padding:10px;"></i>
                                <div class=" d-flex flex-column">
                                    <p class="p-0 m-0  mb-2 ml-3 text-left " style="font-size: 2.2vh;" >โทรศัพท์</p>
                                    <p class=" p-0 m-0 ml-3" style="font-size: 1em;">0-2245-1707</p>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class=" " style="background-color: #69299C;">
        <div class="col-md-12 p-0 m-0 d-flex justify-content-center">
            <img src="{{ asset('access/imageweb/contact1.png') }}" class=" img-fluid" alt="">
        </div>

    </div>
    <div class=" " style="background-color: #7395F9;">
        <div class="col-md-12 p-0 m-0 d-flex justify-content-center">
            <img src="{{ asset('access/imageweb/contact2.png') }}" class="img-fluid " alt="">
        </div>
    </div>

@endsection
