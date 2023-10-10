<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUser(){
        $user= DB::table('example-crud') ->simplePaginate(4);
            return view('alluser',['data'=> $user]);
            
        // -> simplepaginate(4);
        // return $user;
        
        // show your data in web page

        // dd('$user'); this work for like a vardump
    }
    public function SingleUser(string $id){
        $user= DB::table('example-crud')-> where('id',$id)->get();
        return $user;
       
    }

    public function AddUser(Request $req){
        $user= DB::table('example-crud')
        ->insert([
            'name' => $req->name,
            'email' =>$req->email,
            'phone' => $req->phone

        ]);
        if($user){
            return redirect()->route('home');
        } 
    }

// update main ham ney phele function banaya request method banaya is main ek parametter pas kiya $req k nam s
// ab hamen is main bhe ek parametter chaheye key ham konsa data update kar rahy hain es leye ham n , laga kr $id  get ki  hai id  ham n route ma define
// ki hai is key bad ham ney $user ka variable bana deya is main db for data base per table ka name liya aus k bad
// where condition lagai  h phele id h dusri id get ki hai woh nam aega ausky bad update funchtion chalaya hai
// ausky bad ham ney esko redirect kardeya home page per


public function updatePage(string $id){
    $user= DB::table('example-crud')->find($id);
    return view('updateUser' , ['data'=> $user]);


}

public function updateUser(Request $update , $id)
{
    $user = DB::table('example-crud')
                ->where('id',$id)
                ->update
                ([
                    'name' => $update->name,
                    'email' => $update->email,
                    'phone' => $update->phone

                ]);
                if($user){
                    return redirect()->route('home');
                }
}
    public function deleteUser(string $id){
        $user= DB::table('example-crud')
        ->where('id',$id)
        ->delete();
        if($user){
            return redirect()->route('home');
        } 
     
    }
   
}