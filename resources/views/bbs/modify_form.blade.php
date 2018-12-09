@extends('layouts.app')

@section('title')
	글 수정 폼
@endsection

@section('content')
	<?php
		require_once("BoardDao.php");
		require_once("tools.php")	;
		
		$num = requestValue("num");	
		$page = requestValue("page");	
	
		$dao = new BoardDao();
		$msg = $dao->getMsg($num);
        $writer = $msg['writer'];


		if(\Session::get('name') != $writer ){
			errorBack("수정 권한이 없습니다");
		}

	?>

	<div class="jumbotron">
		<h1> 글 수정 폼</h1>
	</div>
	<form action="modify" method="post">
		<?= csrf_field(); ?>
		<input type="text" name="num" 
		value="<?= $msg["num"] ?>" readonly
		hidden>
		<div class="form-group">
			<label for="title">제목: </label>
			<input type="text" id="title" name="title" class="form-control" 
			value="<?= $msg["title"] ?>"
			required>
		</div>
		
		<div class="form-group">
			<label for="writer">작성자: </label>
			<input type="text" id="writer" name="writer" class="form-control"
			value="<?= $msg["writer"] ?>"
			 required>
		</div>
		
		<div class="form-group">
			<label for="content">내용: </label>
			<textarea rows="5" id="content"
			name="content" class="form-control" required><?= $msg["content"] ?></textarea>
			<button type="submit" 
				class="btn btn-primary">수정</button>	
			<button type="button" onclick="location.href='bbs?page=<?=$page?>'" class="btn btn-danger">목록보기</button>
		</div>		
	</form>		
@endsection
