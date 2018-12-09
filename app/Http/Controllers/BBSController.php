<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BBSController extends Controller
{
    public function index() {
		require_once("BoardDao.php");
		require_once("tools.php");
		
		$page = requestValue("page"); // 현재 페이지 
		if ($page < 1)
			$page = 1;

		$dao = new BoardDao();
		//$msgs = $dao->getManyMsgs();
		$startRecord = ($page-1)*10;
		$msgs = $dao->getPageMsgs($startRecord, 10);
		
		
		$numPageLinks = 10; // 한 페이지에 출력할 페이지 링크의 수 
		$numMsgs = 10; // 한 페이지에 출력할 게시글 수 
		$startPage = floor(($page-1)/$numPageLinks)*$numPageLinks+1;
	    $endPage = $startPage + ($numPageLinks-1);
	    $count = $dao->getTotalCount(); // 전체 게시글 수 
	    $totalPages = ceil($count/$numMsgs);
	    if($endPage > $totalPages) {
	    	$endPage = $totalPages;
	    }


	    return view('bbs.board')->with('page', $page)
	    		->with('startRecord', $startRecord)
	    		->with('msgs', $msgs)
	    		->with('numPageLinks', $numPageLinks)
	    		->with('numMsgs', $numMsgs)
	    		->with('startPage',$startPage)
	    		->with('endPage', $endPage)
	    		->with('totalPages', $totalPages);
	}    

	  public function create(){
      return view('bbs.write_form');
    }

    public function Store(){
      require_once("tools.php");
      require_once("BoardDao.php");
      $title = requestValue("title");
      $writer = requestValue("writer");
      $content = requestValue("content");

      if($title && $writer && $content){
        //DB에 MongoInsert
        $dao = new BoardDAO();
        $dao->insertMsg($title,$writer,$content);
        //okGo("정상적으로 입력되었습니다.","project?page=1");
        return redirect('bbs');
      }else{
        errorBack("모든 항목이 빈칸 없이 입력되어야 합니다.");
      }
    }		
}
