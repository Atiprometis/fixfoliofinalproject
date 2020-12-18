<?php

namespace App\Http\Controllers;


use App\UploadImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use App\Http\Controllers\PortfolioController;
use App\ProfilePortfolio;

class UploadImagesController extends Controller
{
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

        $request->image->move(public_path('avatar'), $avatarName);

        $avatar = new UploadImages;
        ////Save upload image to 'avatar' folder which in 'storage/app/public' folder
        // $path = $request->file('image')->store('avatar', 'public');
        //echo $path;
        //Save $path to database or anything else

        $avatar = UploadImages::where('user_id', $id)
            // ->where('avatar_path', $path)
            ->update(['avatar_path' => $avatarName]);

        // $avatar->avatar_path = $path;



        // $avatar->avatar_path = $path;
        // $avatar->user_id = $id;
        // $avatar->save();
        //...
        // return redirect('/');

        // return redirect('/profileedit/' . $id);
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
