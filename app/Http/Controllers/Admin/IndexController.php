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

$websiteViewsChart = WebsiteViews::where('created_at', '>=', Carbon::now()->subDays(7)->startOfDay())->orderBy('created_at', 'ASC')
->get();

foreach ($websiteViewsChart as  $value) {

    if(! in_array(Carbon::parse($value->created_at)->format('l') ,$websiteViewsChart_days )){

    array_push($websiteViewsChart_days, Carbon::parse($value->created_at)->format('l'));

    $count = WebsiteViews::whereDate('created_at', '=', $value->created_at)->count();

    array_push($websiteViewsChart_views, $count);

}

}
//dd($websiteViewsChart_days);

        return view('Admin.index',[
        
        'user_count'=>$user_count , 
        'profiles_count'=>$profiles_count,

         'websiteViews_count' => $websiteViews_count , 


         'websiteViews_days' => $websiteViewsChart_days,
         'websiteViewsChart_views' => $websiteViewsChart_views,
        
        
        ]);
      
    }







    
}
