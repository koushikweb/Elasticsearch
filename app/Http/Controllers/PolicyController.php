<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Policy;
use App\Agent;

class PolicyController extends Controller
{
    public function  index(){
       return view('addrecord');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $policyres = '';
        if($request->has('search')){
            //$policyres = Policy::search($request->get('search'))->get();

            $policyres = Policy::query()
                ->where('policy', 'LIKE', "%{$request->input('search')}%")
                ->orWhere('clients', 'LIKE', "%{$request->input('search')}%")
                ->orWhere('advisor_name', 'LIKE', "%{$request->input('search')}%")
                ->orWhere('career_name', 'LIKE', "%{$request->input('search')}%")
                ->get();


        $agentres = Agent::query()
                ->where('firstname', 'LIKE', "%{$request->input('search')}%")
                ->orWhere('lastname', 'LIKE', "%{$request->input('search')}%")
                ->orWhere('address', 'LIKE', "%{$request->input('search')}%")
                ->orWhere('phone', 'LIKE', "%{$request->input('search')}%")
                ->get();
       }

       $merged = $policyres->merge($agentres);

        return view('index',compact('merged'));
    }
    public function create(Request  $request){
           $this->validate($request, [
               'policy' => 'required',
               'clients' => 'required',
               'advisor_name' => 'required',
               'career_name' => 'required',
           ]);
        $policy= Policy::create($request->all());
        $policy->addToIndex();
        return redirect()->back()->with('flash_message_success', 'Record created successfully');
    }
  public function  listing(){
      $policies =  DB::table('policies')->get();
      $agents =  DB::table('agents')->get();
      return view('index', ['policies'=>$policies,'agents'=>$agents]);
  }
}
