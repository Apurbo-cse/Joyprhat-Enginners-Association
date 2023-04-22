<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\ThanaCommittee;
use App\Models\ThanaCommitteeType;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class FrontendController extends Controller
{
    public function index()
    {
        $sliders = DB::table('sliders')->where('status', 'active')->limit(4)->get();
        // $users = DB::table('users')->where('status', '1')->limit(1)->get();
        $eternals = DB::table('eternals')->where('status', '1')->get();
        $services = DB::table('services')->where('status', '1')->get();
        $advisors = DB::table('advisors')->where('status', '1')->limit(4)->get();
        return view('frontend.home.index',compact('sliders','eternals','services','advisors',
        // 'users'
    ));
    }

  //About Vie
  public function about()
  {

    $advisors = DB::table('advisors')->where('status', '1')->get();
      return view('frontend.pages.about',compact('advisors'));
  }
   public function ip()
  {
      return view('ip');
  }

  public function contact()
  {

    // $advisors = DB::table('advisors')->where('status', '1')->get();
      return view('frontend.pages.contact');
  }


  public function developer()
  {

    $devjeas = DB::table('devjeas')->where('status', '1')->limit(1)->get();
      return view('frontend.pages.developer',compact('devjeas'));
  }


  // Thana Committee

  public function joypurhat()
  {

    $thana_committees = ThanaCommittee::where('thana_type', 'Joypuraht Sadar',)->where('status', '1')->orderBy('created_at', 'ASC')->get();
    $thana_committee_types = ThanaCommitteeType::where('thana_type', 'Joypuraht Sadar',)->where('status', '1')->orderBy('created_at', 'DESC')->limit(1)->get();
    return view('frontend.pages.committee.joypurhat',compact('thana_committees','thana_committee_types'));
  }

  public function panchbibi()
  {
    $thana_committees = ThanaCommittee::where('thana_type', 'Panchbibi',)->where('status', '1')->orderBy('created_at', 'ASC')->get();
    $thana_committee_types = ThanaCommitteeType::where('thana_type', 'Panchbibi',)->where('status', '1')->orderBy('created_at', 'DESC')->limit(1)->get();
      return view('frontend.pages.committee.panchbibi',compact('thana_committees','thana_committee_types'));
  }

  public function kalai()
  {
    $thana_committees = ThanaCommittee::where('thana_type', 'Kalai',)->where('status', '1')->orderBy('created_at', 'ASC')->get();
    $thana_committee_types = ThanaCommitteeType::where('thana_type', 'Kalai',)->where('status', '1')->orderBy('created_at', 'DESC')->limit(1)->get();
    return view('frontend.pages.committee.kalai',compact('thana_committees','thana_committee_types'));
  }

  public function akkelpur()
  {
    $thana_committees = ThanaCommittee::where('thana_type', 'Akkelpur',)->where('status', '1')->orderBy('created_at', 'ASC')->get();
    $thana_committee_types = ThanaCommitteeType::where('thana_type', 'Akkelpur',)->where('status', '1')->orderBy('created_at', 'DESC')->limit(1)->get();
    return view('frontend.pages.committee.akkelpur',compact('thana_committees','thana_committee_types'));
  }
  public function khetlal()
  {
    $thana_committees = ThanaCommittee::where('thana_type', 'Khetlal',)->where('status', '1')->orderBy('created_at', 'ASC')->get();
    $thana_committee_types = ThanaCommitteeType::where('thana_type', 'Khetlal',)->where('status', '1')->orderBy('created_at', 'DESC')->limit(1)->get();
    return view('frontend.pages.committee.khetlal',compact('thana_committees','thana_committee_types'));
  }

    // MSc Engineer View
    public function msc()
    {
        // return view('frontend.pages.engineers.msc');
        $users = DB::table('users')->whereIn('course_name', ['MSc in Engineering / MBA'])->get();
        return view('frontend.pages.engineers.msc',compact('users'));
    }

    // BSC Engineer View
    public function bsc()
    {
        $users = DB::table('users')->whereIn('course_name', ['BSc in Engineering'])->get();
        return view('frontend.pages.engineers.bsc',compact('users'));
    }

    // BSC Diploma Engineer View
    public function bsc_diploma()
    {
        $users = DB::table('users')->whereIn('course_name', ['BSc in Engineering (Diploma)'])->get();
        return view('frontend.pages.engineers.bsc_diploma',compact('users'));
    }

    // Diploma Engineer View
    public function diploma()
    {
        $users = DB::table('users')->whereIn('course_name', ['Diploma in Engineering'])->get();
        return view('frontend.pages.engineers.diploma',compact('users'));
    }

    // Gallery Vie
    public function gallery()
    {
        $data['galleries'] = DB::table('galleries')->where('status', 'active')->get();
        return view('frontend.pages.gallery',$data);
    }


    public function convening_member()
    {
        $presidents = DB::table('users')->whereIn('member_type', ['President'])->orderBy('created_at', 'ASC')->limit(1)->get();
        $vice_presidents = DB::table('users')->whereIn('member_type', ['Vice President'])->orderBy('created_at', 'ASC')->limit(2)->get();
        $secretary = DB::table('users')->whereIn('member_type', ['General Secretary'])->orderBy('created_at', 'ASC')->limit(1)->get();
        return view('frontend.pages.member.index',compact('presidents','vice_presidents','secretary'));
    }


    // User Profile
    // public function profile()
    // {
    //     return view('frontend.pages.user.profile');
    // }

}
