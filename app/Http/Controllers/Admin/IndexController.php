<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profiles;
use App\Models\User;
use App\Models\WebsiteViews;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //showIndex

    public function showIndex(Request $request)
    {
        $user_count = User::all()->count();
        $profiles_count = Profiles::all()->count();
        $websiteViews_count = WebsiteViews::all()->count();

        $websiteViewsChart_days=[];
        $websiteViewsChart_views=[];

$websiteViewsChart = WebsiteViews::where('created_at', '>=', Carbon::now()->subDays(7)->startOfDay())
->get();

foreach ($websiteViewsChart as $key => $value) {
    # code...
if(! in_array( $value['created_at'] ,$websiteViewsChart_days )){

    array_push($websiteViewsChart_days, $value['created_at']);

}

}
dd($websiteViewsChart_days);

        return view('Admin.index',['user_count'=>$user_count , 'profiles_count'=>$profiles_count, 'websiteViews_count' => $websiteViews_count , 'websiteViewsChart' => $websiteViewsChart]);
        //
    }







    
}
