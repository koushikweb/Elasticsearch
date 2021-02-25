<?php

namespace App\Http\Controllers;

use App\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Agent;


class AgentController extends Controller
{
    public function  index(){
        return view('addrecord');
    }
    public function create(Request  $request){        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        $agent= Agent::create($request->all());
        $agent->addToIndex();
        return redirect()->back()->with('flash_message_success', 'Record created successfully');
    }
}
