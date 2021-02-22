<?php

namespace App\Http\Controllers;


use App\UploadImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use App\Http\Controllers\PortfolioController;
use App\ProfilePortfolio;
use App\Models\Schools;
class UploadImagesController extends Controller
{
    public function __construct()
    {
          $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $id = Auth::id();

         $flight = UploadImages::firstOrCreate(['user_id' => $id]);
         $user = ProfilePortfolio::firstOrCreate(['user_id' => $id]);
        //  $flight = UploadImages::create([
        //     'user_id' => $id,
        // ]);
        return redirect()->action([PortfolioController::class, 'portfolio']);
        // return view('upload/upload');
    }

    public function uploadImageschool(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        echo $id = Auth::id();

        echo '<br>';
        echo $ImageName =   $id . time() . '.' . $request->image->getClientOriginalName();

        $request->image->move(public_path('imagesSchools/'.$id.''), $ImageName);

        // $avatar = new UploadImages;

        $avatar = Schools::where('schools_owner','=', $id)
            // ->where('avatar_path', $path)
            ->update(['school_image' => $ImageName]);

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        echo $id = Auth::id();

        echo '<br>';
        echo $avatarName = time() . '.' . $request->image->getClientOriginalName();

        $request->image->move(public_path('avatar/'.$id.''), $avatarName);

        $avatar = new UploadImages;


        $avatar = UploadImages::where('user_id', $id)
            // ->where('avatar_path', $path)
            ->update(['avatar_path' => $avatarName]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UploadImages  $uploadImages
     * @return \Illuminate\Http\Response
     */
    public function show(UploadImages $uploadImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UploadImages  $uploadImages
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadImages $uploadImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UploadImages  $uploadImages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UploadImages $uploadImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UploadImages  $uploadImages
     * @return \Illuminate\Http\Response
     */
    public function destroy(UploadImages $uploadImages)
    {
        //
    }
}
