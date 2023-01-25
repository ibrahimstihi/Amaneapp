<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\User;
use App\Models\Sission;
use Illuminate\Support\Facades\Auth;
use Hash;
use DB;

class AdminController extends Controller
{
    public function valide($id)
    {
        $user = User::find($id);
        $user->is_valid = 1 ;
        $user->update();
        // $user->update(['is_valid','1']);
        //  update multiple
        //  Model::where('somecolumn', $somevalue)>update(['name', $newName]);
        return redirect()->back()->with('status','User Updated Successfully');
    }
    public function destroy($id)
    {
        if(Auth::check() && Auth::user()->type=='2'){   
            $user = User::find($id);
            $user->delete();
            return redirect()->back()->with('status','User Destroy Successfully');
        }
        return redirect("login")
        ->withSuccess('Opps! You do not have access');
    }
    public function psy_account(){

        if(Auth::check() && Auth::user()->type=='2'){   
            $users = DB::select('select * from users where type=1 and is_valid=0');
            return view('admin.dashboard.psy_account',['users'=>$users]);
        }
        return redirect("login")
        ->withSuccess('Opps! You do not have access');
    }
    public function partien_account(){
            if(Auth::check() && Auth::user()->type=='2'){   
                $users = DB::select('select * from users where type=0 and is_valid=0');
                return view('admin.dashboard.partien_account',['users'=>$users]);
            }
            return redirect("login")
            ->withSuccess('Opps! You do not have access');
    }
    public function matching(){
      if(Auth::check() && Auth::user()->type=='2'){ 
        $partiens = DB::select('select * from users where type=0 and is_valid=1');
        return view('admin.dashboard.matching',['partiens'=>$partiens]);
      }
        return redirect('login');
    }
    public function session(){
        if(Auth::check() && Auth::user()->type=='2'){   
        $sessions = DB::select('select * from sissions');
        return view('admin.dashboard.session',['sessions'=>$sessions]);
        }
        return redirect("login")
        ->withSuccess('Opps! You do not have access'); 
    }
    public function chose_psy($id){
        if(Auth::check() && Auth::user()->type=='2'){   
            $psys = DB::select('select * from users where type = 1 and is_valid = 1');
            $partien = User::find($id);
            return view('admin.dashboard.psy_chose',['psys'=>$psys,'partien'=>$partien ]);
        }
        return redirect("login")
            ->withSuccess('Opps! You do not have access');
    }
    public function psy_show($id){
        if(Auth::check() && Auth::user()->type=='2'){   
            $user = User::find($id);
            return view('admin.dashboard.show_psy',['user'=>$user]);
        }
        return redirect("login")
            ->withSuccess('Opps! You do not have access');
    }
    public function partien_show($id){
        if(Auth::check() && Auth::user()->type=='2'){   
            $partien = User::find($id);
            return view('admin.dashboard.show_partien',['partien'=>$partien]);
        }
        return redirect("login")
            ->withSuccess('Opps! You do not have access');
    }
    public static function  by_id($id){
        $user = User::find($id);
        return $user;
    }
    public function creat_session($partien_id,$psy_id){
         $sesion = new Sission;
         $partien = User::find($partien_id);
         $partien->is_matched = true;
         $partien->update();
         $sesion->psy_id = $psy_id ;
         $sesion->partien_id = $partien_id;
         $sesion->save();
         return redirect()->back();
    }
}
