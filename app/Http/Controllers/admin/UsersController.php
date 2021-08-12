<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Str;



use App\Models\ConfigsWebsitViews;
use App\Models\ProfilesOffersSubscribers;
use App\Models\Profiles;
use App\Models\User;
use App\Models\Countries;

use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{


// Show All Users Screen
    public function showUsers(Request $request) {

        $users = User::all();

      return view('admin_dashboard.screens.users', ['users' => $users]);
   
    }

     
 
 
 // Show Add Or Update Users Screen
     public function showAddUser(Request $request) {
 
        $countries = Countries::all();


                // Edit User
                if ($request->has('user_id')) {  

                    $user = User::findOrFail($request->input('user_id'));  
                    
                    
                  return view('admin_dashboard.screens.addUser', ['user'=>$user,'countries'=> $countries ,"isEdit" => true]);
                }        
 


                return view('admin_dashboard.screens.addUser', ['countries'=> $countries,"isEdit" => false]);


     }



 
       // Insert New User
        public function insertUser(Request $request) {

            $path;
            $name;
            
            $validated = $request->validate([
                'email' => 'required|unique:users,email,$id',
                'name' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                "password" =>'required',
            ]);

         if ($request->hasFile('image')) {

            $name =Str::random(50).$request->file('image')->getClientOriginalName();
            $guessExtension = $request->file('image')->guessExtension();

            $path = $request->file('image')->storeAs('public/users_images',$name);

        
            }

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->image =   $name  ;
            $user->email_verified_at =  Carbon::now();
            $user->password = Hash::make($request->password);
            $user->country_id = $request->countries[0];

            $user->save();


    
         return     redirect()->route('Dashboard_users');



        }


            
       // Update  User
        public function updateUser(Request $request) {

            //     dd('ok');

            $validated = $request->validate([
                'email' => 'required',
                'name' => 'required',
                'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $name_image;
            if ($request->hasFile('image')) {
        
                $name_image = $request->file('image')->getClientOriginalName();
                $guessExtension = $request->file('image')->guessExtension();
                $path = $request->file('image')->storeAs('public/users_images',$name_image);
             
            }

        
            $user = User::findOrFail($request->input('user_id'))->first();  
            $user->name = $request->name;
            $user->email = $request->email;
            isset($name_image)  ?        $user->image =   $name_image  : null  ;
            $user->country_id = $request->countries[0];
        
            $user->save();

            return     redirect()->route('Dashboard_users');

        }



       // Delete  User
        public function deleteUser(Request $request) {

            $user = User::findOrFail($request->input('user_id'));  
            $user->delete();

                return     redirect()->route('Dashboard_users');
        }
        
        





    }



// Helper Functions



