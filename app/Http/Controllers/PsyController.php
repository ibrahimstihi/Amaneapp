<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use DB;

class PsyController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

  

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function matchingStepOne(Request $request)
    {
        $user = $request->session()->get('user');
        return view('psy.matching.step-one',compact('user'));
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function postMatchingStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|numeric'
        ]);
        $data = $request->all();
        if(empty($request->session()->get('user'))){
            $user = new User();

            $user->fill($validatedData);
            $user->password = Hash::make($data['password']);
            $request->session()->put('user', $user);
        }else{
            $user = $request->session()->get('user');
            $user->fill($validatedData);
            $user->password = Hash::make($data['password']);
            $request->session()->put('user', $user);
        }  
        return redirect()->route('psychologe.matching.step.two');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function matchingStepTwo(Request $request)
    {
        $user = $request->session()->get('user');
        return view('psy.matching.step-two',compact('user'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function postMatchingStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'q1p' => 'required',
            'q2p' => 'required',
            'q3p' => 'required',
            'q4p' => 'required',
        ]);

        $user = $request->session()->get('user');
        $user->fill($validatedData);
        $request->session()->put('user', $user);
        return redirect()->route('psychologe.matching.step.three');
    }

    

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function postMatchingStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'q5p' => 'required',
            'q6p' => 'required',
            'q7p' => 'required',
            'q8p' => 'required',
        ]);

        $user = $request->session()->get('user');
        $user->fill($validatedData);
        $request->session()->put('user', $user);
        return redirect()->route('psychologe.matching.step.fore');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function matchingStepThree(Request $request)
    {
        $user = $request->session()->get('user');
        return view('psy.matching.step-three',compact('user'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function matchingStepFore(Request $request)
    {
        $user = $request->session()->get('user');
        return view('psy.matching.step-fore',compact('user'));
    }

    public function postMatchingStepFore(Request $request)
    {
        $user = $request->session()->get('user');
        $user->type='1';
        $user->save();
        // $check = $this->create_psy($user);
        $user->password = Hash::make($user->password);
        $request->session()->forget('user');  
        auth()->login($user);
        return redirect('/')->with('success', "Account successfully registered.");
        // return redirect()->route('users.index');
    }
    public function MyPartiens(){
        $id = Auth::User()->id ;
        $sessions = DB::select('select * from sissions where psy_id = '.$id);
        return view('psy.dashboard.MyPartiens',['sessions'=>$sessions]);
    }
    public function MyNewSessions(){
        $id = Auth::User()->id ;
        $sessions = DB::select('select * from sissions where psy_id = '.$id);
        return view('psy.dashboard.MyNewSessions',['sessions'=>$sessions]);
    }

    //     public function create_psy(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password']),
    //     'type' => '1'
    //   ]);
    // }
    
}

    


