
    <div class="profile-about col-12 h-100 d-flex flex-column justify-content-between">
        <div class=" d-flex flex-column h-100 mb-4 ">
            <div class=" d-flex flex-row h-100  justify-content-between ">
                <div class=" d-flex flex-column border  p-0" style="width: 100%">
                    <div class="name d-flex flex-column ">
                        <div class=" d-flex flex-column align-content-center  pl-0 pr-0">

                            <div class=" d-flex flex-row col-12 ml-0 pt-2 pb-2 ml-0 mr-0">
                                        <div class="ml-1 mr-1 pl-0 w-100 col-6 d-flex flex-row align-items-center">
                                            <p class="m-0  mr-2 p-0 ">ชื่อ </p>
                                            <input type="text" class="form-control "  name="name" maxlength="30" id="name" aria-describedby="name" placeholder=" {{ Auth::user()->name }}" value="{{ Auth::user()->name }}">
                                        </div>
                                        <div class="ml-1 mr-1 pl-0 w-100 col-6 d-flex flex-row align-items-center">
                                            <p class="m-0  mr-2 p-0 ">นามสกุล </p>
                                            <input type="text" class=" form-control" name="lastname" maxlength="30" id="lastname" aria-describedby="lastname" placeholder="{{ Auth::user()->lastname }}" value="{{ Auth::user()->lastname }}">
                                        </div>
                            </div>

                        </div>
                    </div>
                    {{-- /// ชื่อ สกุล //// --}}
                    <div class="name  pl-5 pr-1 mt-2">
                        <div class="form-group form-row d-flex align-items-center   ">
                            <div class="col-12 d-flex flex-row">
                                <div class="col-12 m-0 pl-0">
                                    <input type="text" class="form-control " style="width: 100%" name="profile_location" maxlength="30" id="profile_location"
                                    aria-describedby="profile_location" placeholder="ระบุที่อยู่ แขวง/ แขต/ จังหวัด/ รหัสไปรษณีย์"
                                    @foreach($users as $user)
                                        value={{ $user->profile_location }}
                                    @endforeach
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- //ที่อยู่ --}}
                </div>

            </div>
        </div>
    </div>

