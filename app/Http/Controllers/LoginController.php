<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function login(Request $request){

	require_once("tools.php");
	require_once("MemberDao.php");


	$id = $request->input('id');
	$pw = $request->input('pw');

	$mdao = new MemberDao();
	$member = $mdao->getMember($id);

		if($member && $member["pw"] == $pw) {
			
			\Session::put('uid', $id);
			\Session::put('name', $member['name']);
			
			return redirect('/');

		} else {
			// 로그인 실패 	
			return "fail";
		}

    }

    public function logout(Request $request){
    	
    	require_once("tools.php");

		\Session::forget('uid');
		\Session::forget('name');

		return redirect('/');
    }

    // public function destroy()
    // {
    // 	# code...
    // 	auth()->logout();
    // }
}
