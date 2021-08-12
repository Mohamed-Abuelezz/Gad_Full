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
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //



public function showHome(Request $request) {

        if ($request->has('getCharts')) {

            // $configsWebsitViews = new ConfigsWebsitViews;

            // $configsWebsitViews->save();

            $viewsWebsite = ConfigsWebsitViews::where('created_at', '<=', Carbon::now())->get();
           



            if($request->input('getCharts') == 'myAreaChart'){


            return   $this->myAreaChart($viewsWebsite);

            }else{


             return   $this->myBarChart($viewsWebsite);


            }
           

        }


$viewsWebsite = ConfigsWebsitViews::all();
$subscribes = ProfilesOffersSubscribers::where( 'finished_at', '>=', Carbon::today())->get();
$profiles = Profiles::all();
$users = User::all();

return view('admin_dashboard.index', ['viewsNumber' =>count( $viewsWebsite),'subscribeNumber' =>count($subscribes),'profilesNumber' =>count($profiles),'usersNumber' =>count($users)]);
    

}




  



// Helper Functions

public function myAreaChart($viewsWebsite){
    $dataChartDays=[];
    $dataChartDaysViews=[];

  //  return count($viewsWebsite);
 foreach($viewsWebsite as $el) {
    if(!in_array($el->created_at->format('d M'), $dataChartDays))
    {
        
        array_push($dataChartDays,$el->created_at->format('d M'));
        array_push($dataChartDaysViews,count(ConfigsWebsitViews::whereDay('created_at', '=',$el->created_at->format('d'))->orderBy('created_at')->get()));

    }

}

    return response()->json([
        'dataChartDays' =>  $dataChartDays,
        'dataChartDaysViews' => $dataChartDaysViews
    ]);

}

public function myBarChart($viewsWebsite){
    $dataChartMonths=[];
    $dataChartMonthsViews=[];

   // dd('ok');
    foreach($viewsWebsite as $el) {
        if(!in_array($el->created_at->format('M'), $dataChartMonths))
        {
        
        array_push($dataChartMonths,$el->created_at->format('M'));
        array_push($dataChartMonthsViews,count(ConfigsWebsitViews::whereMonth('created_at', '=',$el->created_at->format('m'))->orderBy('created_at')->get()));

        }

    }


return response()->json([
        'dataChartMonths' =>  $dataChartMonths,
        'dataChartMonthsViews' => $dataChartMonthsViews
    ]);
}

}
