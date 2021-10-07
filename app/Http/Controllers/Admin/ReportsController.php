<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Storage;
use App\Http\Controllers\MyHelpersFunctios;

use App\Models\ContactUs;
use App\Models\User;
use App\Models\ProfileReports;
use App\Models\Profiles;
use App\Models\CommentsReports;
use App\Models\ProfileComments;


class ReportsController extends Controller
{


// Profiles Reports
    
    public function showProfileReports(Request $request)
    {

        $profileReports = ProfileReports::all();

        return view('Admin.website reports.profiles_reports', ['profileReports' => $profileReports]);
    }


     public function deleteProfileReport(Request $request, $reportId)
    {

        $profileReports = ProfileReports::where('id', $reportId)->firstOrFail();


        $profileReports->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }


    public function deleteProfile_Reporter(Request $request, $profileId)
    {

        $profileReports = Profiles::where('id', $profileId)->firstOrFail();


        $profileReports->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }

    public function deleteUser_Reporter(Request $request, $userId)
    {

        $profileReports = User::where('id', $userId)->firstOrFail();


        $profileReports->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }


// CommentsReports Reports
    
public function showCommentsReports(Request $request)
{

    $commentsReports = CommentsReports::all();
    return view('Admin.website reports.comments_reports', ['commentsReports' => $commentsReports]);
}


public function deleteCommentReport(Request $request, $Id)
{

    $commentsReports = CommentsReports::where('id', $Id)->firstOrFail();


    $commentsReports->delete();

    return redirect()->back()->with('success', 'تم الحذف بنجاح');
}

public function deleteComment_Reporter(Request $request, $Id)
{

    $profileComments = ProfileComments::where('id', $Id)->firstOrFail();


    $profileComments->delete();

    return redirect()->back()->with('success', 'تم الحذف بنجاح');
}



public function deleteUserOfComment_Reporter(Request $request, $Id)
{

    $user = User::where('id', $Id)->firstOrFail();


    $user->delete();

    return redirect()->back()->with('success', 'تم الحذف بنجاح');
}


}
