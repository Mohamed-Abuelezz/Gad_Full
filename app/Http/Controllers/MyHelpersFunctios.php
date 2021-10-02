<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Storage;

class MyHelpersFunctios{



    public  function saveImages(Request $request,$request_Input_Name,$folderName,$image_size) {
      
      //  dd($request->hasFile('image'));

        if ($request->hasFile($request_Input_Name)) {

            $image      = $request->file($request_Input_Name);
            $random =  $this->generateRandomString(10);
            $fileName   =  $random . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath());
            $img->resize($image_size['w'], $image_size['h'], function ($constraint) {
                $constraint->aspectRatio();                 
            });

            $img->stream(); // <-- Key point

            Storage::disk('public')->put('images/'.$folderName.'/'.$fileName, $img, );

            return $fileName;
}
    }





// Not Calling

private  function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



    
    






}