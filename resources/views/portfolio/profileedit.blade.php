{{-- @include('component.header') --}}
@extends('layout.master')

@section('title', 'Portfolio')


@section('content')
    <div class="container">
        <div class="row">
                {{-- {{ csrf_field() }}
                {{ method_field('POST') }} --}}

                @csrf
                <div class=" d-flex flex-row col-md-12 d-flex justify-content-end  text-center ">
                    <label class="switch m-0 mt-1">
                        <input type="checkbox" class="success" id="customSwitch1">
                        <span class="slider round"></span>
                    </label>
                    <div class=" d-flex align-items-center mr-5">
                        <label for="customSwitch1" class="m-0 mt-1 ml-2" >หางาน</label>
                    </div>
                </div>
                <div class="profile rounded col-12 d-flex flex-row  mt-3 mb-3 align-items-start">
                    {{-- << รูป profile >> --}}
                    <div class="card p-3 col-3" style=" height: 360px">
                        <label>
                        @if ($avatar_images[0]['avatar_path'] != null)
                        @foreach($avatar_images as $avatar_image)
                        <img class="card-img-top rounded" src='../avatar/{{ Auth::user()->id }}/{{ $avatar_image->avatar_path }}'   alt="Card image cap" style="height: 250px;">
                        @endforeach
                        @else
                        <img class="card-img-top rounded" src='../access/imageweb/user2.png' style="cursor: pointer" alt="Card image cap" style="height: 250px;">
                        @endif

                        <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                        <input type="file" name="image" style="display: none">
                        </label>
                        <small>คลิ๊กที่รูปเพื่อเลือกรูป</small>
                                <button type="submit" class="btn btn-light mt-2" style="width: 100%; border-radius: 20px;">กดเพื่ออัพโหลดรูป</button>
                        </form>
                    </div>
                    {{-- << รูป profile >> --}}
                    {{-- <<อัพเดท profile >> --}}
                    {{-- {!! Form::open(array('url' => '/updateprofile', 'method' => 'get')) !!} --}}
                    <form class=" form-group col-md-9 h-50" action="/updateFnameSname" method="get" enctype="multipart/form-data">
                    <div class="d-flex flex-column col-12 p-0 h-100 ">

                        @include('portfolio.component.aboutme')

                        <div class="col-12 pr-0">
                            <h1 class=" font-weight-normal" style="font-size: 1.250em;   ">แนะนำตัว</h1>
                            @foreach($users as $user)
                            <textarea  class="form-control" style="resize: none;height: 150px;" name="profile_aboutme" id="profile_aboutme" style=" height: 80%;"
                             aria-label="aaaad"
                            >{{ $user->profile_aboutme }}</textarea>
                            @endforeach
                        </div>


                    </div>

                </div>

        </div>
                        <div class="mt-0 d-flex  flex-row justify-content-end align-items-center justify-content-start ">
                            <button type="submit"  class="btn mr-3" style="background-color: #F2C94C;font-size: 1em">
                                บันทึกการแก้ไข
                            </button>
                        </div>
                    </form> {{-- มาอยู่ตรงนี้เพราะว่าจะได้ไม่ชนกับแก้ไข --}}


                    {{-- <<อัพเดท profile >> --}}
        <div class=" col-12 d-flex flex-ro m-0 p-0">
                @include('portfolio.component.about')
                @include('portfolio.component.exp')
        </div>


<!-- Modal exp work -->

@include('portfolio.component.expwork')
<!-- Modal exp work  end -->
    </div>

    @endsection

