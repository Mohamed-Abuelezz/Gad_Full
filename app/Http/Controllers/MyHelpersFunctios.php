<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\WebsiteConfigs;

class MyHelpersFunctios
{



    public  function saveImages(Request $request, $request_Input_Name, $folderName, $image_size = null)
    {

        //  dd($request->hasFile('image'));
        if ($request->hasFile($request_Input_Name)) {

            $image      = $request->file($request_Input_Name);
            $random =  $this->generateRandomString(10);
            $fileName   =  $random . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath());
            if ($image_size != null) {
                $img->resize($image_size['w'], $image_size['h'], function ($constraint) {
                    $constraint->aspectRatio();
                });
            }

            $img->stream(); // <-- Key point


            Storage::disk('public')->put('images/' . $folderName . '/' . $fileName, $img,);

            return $fileName;
        }else{
            $fileName = 'default.png';
            return $fileName;
        }
        
    
    }


    public  function getMetaData()
    {

        $websiteConfigs = WebsiteConfigs::first();

      //  dd($websiteConfigs);

            return $websiteConfigs;

    }


    public  function myJsonResponse(Request $request,$data)
    {
    return    response()->json([
            'data' => $data,
            'message' => 'success',
        ],200);
    }
    // Not Calling

    private  function generateRandomString($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
