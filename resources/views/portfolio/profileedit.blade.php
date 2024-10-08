{{-- @include('component.header') --}}
@extends('layout.master')

@section('title', 'Portfolio')


@section('content')
    <div class="container">
        <div class="row">

                @csrf
                <div class=" d-flex flex-row col-md-12 d-flex justify-content-end  text-center ">

                    <form action="/updatestatusprofile" method="GET">
                        @csrf
                    @if ($profiledatas->status != 0)
                    <input type="text" value="{{ $profiledatas->status }}" name="status" style="display: none">
                        <div class=" mt-1 mr-2 p-2" >
                            <button type="button" class="btn text-light" data-toggle="modal" style="background-color: #CCCCCC" data-target="#modelId">ปิดหางาน</button>
                        </div>
                    @else
                    <input type="text" value="0" name="status" style="display: none">
                        <div class="mr-2 mt-1 p-2">
                            <button type="button" class="btn text-light" data-toggle="modal" style="background-color: #69299C" data-target="#modelId">เปิดหางาน</button>
                        </div>
                    @endif

                    <!-- Modal -->

                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header d-flex justify-content-center">
                                        @if ($profiledatas->status != 0)
                                            <h5 class="modal-title w-100">ต้องการปิดหางานหรือไม่</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        @else
                                        <h5 class="modal-title w-100">ต้องการเปิดหางานหรือไม่</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        @endif
                                </div>
                                <div class="modal-body">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">กลับ</button>
                                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- {!! Form::close() !!} --}}
                    </form>
                    {{-- <div class=" d-flex align-items-center ml-2 mr-5">
                        <label for="customSwitch1" class="m-0 mt-1 ml-2" >
                            <div id="checkbox-value"></div>
                        </label>
                    </div> --}}
                </div>
                <div class="profile rounded col-12  d-flex flex-row flex-wrap mt-3 mb-3 align-items-start">
                    {{-- << รูป profile >> --}}
                    <div class="card p-3 col-12 col-md-5 col-lg-3" >
                        <label >
                        @if ($avatar_images[0]['avatar_path'] != null)
                        @foreach($avatar_images as $avatar_image)
                            <img class="card-img-top rounded w-auto" src='../avatar/{{ Auth::user()->id }}/{{ $avatar_image->avatar_path }}' id="uploadPreview"   alt="Card image cap" style="height: 250px; cursor: pointer;">
                        @endforeach
                        @else
                            <img class="card-img-top rounded" src='../access/imageweb/user2.png' id="uploadPreview" style="cursor: pointer" alt="Card image cap" style="height: 250px;">
                        @endif

                        <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                        <input type="file" name="image" onchange="PreviewImage();" id="uploadImage"  style="display: none">
                        </label>
                        <small>คลิ๊กที่รูปเพื่อเลือกรูป</small>
                                <button type="submit" class="btn btn-light mt-2" style="width: 100%; border-radius: 20px;">กดเพื่ออัพโหลดรูป</button>
                        </form>
                    </div>
                    {{-- << รูป profile >> --}}
                    {{-- <<อัพเดท profile >> --}}

                    <form class=" form-group col-12 col-md-7 col-lg-9 pl-md-3 pr-md-3 p-0 m-0 " action="/updateFnameSname" method="get" enctype="multipart/form-data">
                    <div class="d-flex flex-column col-12 col-md-12 p-0 m-0  pt-3 pt-md-0 ">

                        @include('portfolio.component.aboutme')

                        <div class="col-12 p-0 m-0 pr-0" >
                            <h1 class=" font-weight-normal" style="font-size: 1.250em;   ">แนะนำตัว</h1>
                            @foreach($users as $user)
                            <textarea  class="form-control" maxlength="150" style="resize: none;height: 140px;" name="profile_aboutme" id="profile_aboutme"
                             aria-label="aaaad"
                            >{{ $user->profile_aboutme }}</textarea>
                            @endforeach
                        </div>


                    </div>

                </div>

        </div>
                        <div class="mt-0 d-flex  flex-row justify-content-end  align-items-center justify-content-start ">
                            <button type="submit"  class="btn mr-3" style="background-color: #F2C94C;font-size: 1em">
                                บันทึกการแก้ไข
                            </button>
                        </div>
                    </form> {{-- มาอยู่ตรงนี้เพราะว่าจะได้ไม่ชนกับแก้ไข --}}


                    {{-- <<อัพเดท profile >> --}}
        <div class=" col-12 d-flex flex-row flex-wrap m-0 p-0">
                @include('portfolio.component.about')
                @include('portfolio.component.exp')
        </div>


<!-- Modal exp work -->

@include('portfolio.component.expwork')
<!-- Modal exp work  end -->
    </div>

    @endsection

