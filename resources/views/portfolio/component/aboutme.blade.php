
    <div class="profile-about  p-0 m-0 col-12  d-flex pr-0 flex-column justify-content-between" >
        <div class=" d-flex flex-column  mb-4 ">
            <div class="  d-flex flex-row    ">
                <div class=" d-flex flex-column border rounded  p-0" style="width: 100%">
                    <div class="name d-flex flex-column ">
                        <div class=" d-flex flex-column align-content-center  pl-0 pr-0">

                            <div class=" d-flex flex-row flex-wrap col-12 ml-0  pt-2 pb-2 ml-0 mr-0 align-items-center">
                                        <div class=" col-12 col-lg-6 d-flex flex-row p-0 m-0 pr-lg-3 align-items-center">
                                            <p class="p-0 m-0 pr-4 pr-lg-2">ชื่อ </p>
                                            <input type="text" class="form-control ml-4 "  name="name" maxlength="30" id="name" aria-describedby="name" placeholder=" {{ Auth::user()->name }}" value="{{ Auth::user()->name }}">
                                        </div>
                                        <div class="col-12 col-lg-6 d-flex flex-row p-0 m-0 pt-2 pt-lg-0 align-items-center">
                                            <p class="p-0 m-0 pr-3">นามสกุล </p>
                                            <input type="text" class=" form-control " name="lastname" maxlength="30" id="lastname" aria-describedby="lastname" placeholder="{{ Auth::user()->lastname }}" value="{{ Auth::user()->lastname }}">
                                        </div>
                            </div>

                        </div>
                    </div>
                    {{-- /// ชื่อ สกุล //// --}}
                    <div class="w-100 name    pl-3 pr-3 mt-2">
                        <div class="form-group form-row d-flex align-items-center   ">
                            <div class="col-12 d-flex flex-row">
                                <div class="col-12 m-0 p-0">
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

