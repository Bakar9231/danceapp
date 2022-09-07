<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\CertifcateCompetition;
use App\Models\Education;
use App\Models\Favorite;
use App\Models\Offer;
use App\Models\Photo;
use App\Models\ProfessionalExperince;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Profile::latest()->get();
        return view('home',compact('data'));
    }
    public function account_type()
    {
        return view('account-type');
    }
    public function save_account_info(Request $request)
    {
        // dd($request);
        // {
        //     $filename = "";
        //     if( $request->hasFile('image'))
        //             {
        //               $image = $request->file('image');

        //               $path = public_path() . '/upload/Profile/';
        //                 $filename = time() . '.' . $image->getClientOriginalExtension();
        //                 $image->move($path, $filename);
        //                 $request->image = $filename ;
        //                 // dd($filename);
        //             }
        //     $inputs = $request->all();
        //     $inputs["image"] = $filename;
        //     $inputs["user_id"] = Auth::user()->id;
        //     // dd($inputs);
        //     Profile::create($inputs);
        //     return redirect()->route('home')->with('success', 'Record Created Successfully!');
        // }
    {
        // dd($request);
        $filename = "";
        if( $request->hasFile('image'))
                {
                  $image = $request->file('image');

                  $path = public_path() . '/upload/Profile/';
                    $filename = time() . '.' . $image->getClientOriginalExtension();
                    $image->move($path, $filename);
                    $request->image = $filename ;
                }
        $inputs = $request->all();
        $inputs["image"] = $filename;
        $inputs["user_id"] = Auth::user()->id;
        $inputs['slug']=Str::slug($request->aname, '-');
        $profile = Profile::create($inputs);
        if(isset($inputs['document']) && is_array($inputs['document']))
        {
            $documentArray = $inputs['document'];
            foreach($documentArray as $val){
                $photo = new Photo();
                $photo->path = $val;
                $photo->parent_id = $profile->id;
                $photo->parent_type = Profile::class;
                $photo->profile_id = $profile->id;
                $photo->save();
            }
        }
        if(isset($inputs['efrom']) && is_array($inputs['efrom'])){
            $profiles = $inputs['efrom'];
            foreach($profiles as $index => $val){
                // dd($val);
                $from = $inputs['efrom'][$index];
                $to = $inputs['eto'][$index];
                $experince = $inputs['experince'][$index];
                $pro = new ProfessionalExperince();
                $pro->from = $from;
                $pro->to = $to;
                $pro->experince = $experince;
                $pro->profile_id = $profile->id;
                $pro->save();
            }
        }
        if(isset($inputs['certifcate_date']) && is_array($inputs['certifcate_date'])){
            $certifcate = $inputs['certifcate_date'];
            foreach($certifcate as $index => $val){
                // dd($val);
                $certifcate_date = $inputs['certifcate_date'][$index];
                $certifcate_competition = $inputs['certifcate_competition'][$index];
                $certicate_place = $inputs['certicate_place'][$index];
                $certifcate_result = $inputs['certifcate_result'][$index];
                $pro = new CertifcateCompetition();
                $pro->date = $certifcate_date;
                $pro->competition = $certifcate_competition;
                $pro->place = $certicate_place;
                $pro->result = $certifcate_result;
                $pro->profile_id = $profile->id;
                $pro->save();
            }
        }
        if(isset($inputs['workshop_date']) && is_array($inputs['workshop_date'])){
            $workshopdate = $inputs['workshop_date'];
            foreach($workshopdate as $index => $val){
                // dd($val);
                $workshop_date = $inputs['certifcate_date'][$index];
                $workshop_style = $inputs['workshop_style'][$index];
                $workshop_place = $inputs['workshop_place'][$index];
                $pro = new Workshop();
                $pro->date = $workshop_date;
                $pro->style = $workshop_style;
                $pro->place = $workshop_place;
                $pro->profile_id = $profile->id;
                $pro->save();
            }
        }
        if(isset($inputs['offer']) && is_array($inputs['offer'])){
            $offer = $inputs['offer'];
            foreach($offer as $index => $val){
                // dd($val);
                $offera = $inputs['offer'][$index];
                $pro = new Offer();
                $pro->offer = $offera;
                $pro->profile_id = $profile->id;
                $pro->save();
            }
        }
        if(isset($inputs['favourite']) && is_array($inputs['favourite'])){
            $favourite = $inputs['favourite'];
            foreach($favourite as $index => $val){
                // dd($val);
                $favourites = $inputs['favourite'][$index];
                $pro = new Favorite();
                $pro->favorite = $favourites;
                $pro->profile_id = $profile->id;
                $pro->save();
            }
        }
        if(isset($inputs['education']) && is_array($inputs['education'])){
            $education = $inputs['education'];
            foreach($education as $index => $val){
                // dd($val);
                $educations = $inputs['education'][$index];
                $pro = new Education();
                $pro->education = $educations;
                $pro->profile_id = $profile->id;
                $pro->save();
            }
        }
        if(isset($inputs['skill']) && is_array($inputs['skill'])){
            $skill = $inputs['skill'];
            foreach($skill as $index => $val){
                // dd($val);
                $skills = $inputs['skill'][$index];
                $pro = new Skill();
                $pro->skill = $skills;
                $pro->profile_id = $profile->id;
                $pro->save();
            }
        }
        return redirect()->route('home')->with('success', 'Record Added Successfully!');
    }
    }
    public function profiles($slug)
    {
        $profile_id = Profile::where('slug',$slug)->first();
        $value = Profile::with('ProfessionalExperince','CertifcateCompetition','Skill','Workshop','Offer','Favorite','Education','Photo')->where('id',$profile_id->id)->first();
        // dd($data);
        return view('detail',compact('value'));
    }
    public function search(Request $request)
    {
        // dd($request);
        
        // ProfessionalExperince::where('profile_id',21)->delete();
        // Skill::where('profile_id',21)->delete();
        // Education::where('profile_id',21)->delete();
        // Favorite::where('profile_id',21)->delete();
        // Offer::where('profile_id',21)->delete();
        // Workshop::where('profile_id',21)->delete();
        // CertifcateCompetition::where('profile_id',21)->delete();
        // Photo::where('profile_id',21)->delete();
        // $profile = Profile::where('id',21)->delete();

        $val = Profile::where('name','LIKE','%'.$request->search.'%')->orwhere('surname','LIKE','%'.$request->search.'%')->orwhere('aname','LIKE','%'.$request->search.'%')->get();
        // dd($val);
        return view('search',compact('val'));
        
    }
    public function filter_search(Request $request , $slug=Null)
    {
        // dd($slug);
        $val = Profile::where('account_type','LIKE','%'.$slug.'%')->get();
        return view('search',compact('val'));
    } 
    public function thank_you(Request $request)
    {
        return view('thankyou');
    } 
}