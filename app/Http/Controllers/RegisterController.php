<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){

    	return view("register.register");

    }

    public function join(Request $request){

    	require_once("tools.php");
		require_once("MemberDao.php");
		
		$id = requestValue("id");
		$pw = requestValue("pw");
		$name = requestValue("name");
		
		if($id && $pw && $name) {
			$mdao = new MemberDAO();
			if ($mdao->getMember($id)) {
				 errorBack('이미 사용중인 아이디 입니다.');
				
				exit();
			} else {
				$mdao->insertMember($id, $pw, $name);
				okGo("가입이 완료 되었습니다.",'/');
			}
		}

    }
}
