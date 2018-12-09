@extends('layouts.app')

@section('title')
	상세보기
@endsection

@section('content')

<?php
	
	require_once("tools.php");
	require_once("BoardDao.php");

	$num = requestValue("num");
	$page = requestValue("page");
	$writer = requestValue("writer");

	$dao = new BoardDao();

	$dao->increaseHits($num);
	$msg = $dao->getMsg($num);

    $writer = $msg['writer'];
		
?>

	<script>

		function processDelete() {

			result = confirm("삭제하시겠습니까?");
			//alert(result);
			if(result == false) 
				return false;
			// form submit(); jQuery 문법 활용
			$("#delete").submit();
		}

	</script>

	<div class="jumbotron">
		<h1> 게시글 상세 내용 </h1>
	</div>

	<div class="form-group">
		<label for="title">제목: </label>
		<input type="text" id="title" class="form-control" value="<?=$msg["title"] ?>" >
	</div>
	
	<div class="form-group">
		<label for="writer">작성자: </label>
		<input type="text" id="writer" class="form-control" value="<?=$msg["writer"] ?>" >
	</div>

	<div class="form-group">
		<label for="regtime">작성일자: </label>
		<input type="text" id="regtime" class="form-control" value="<?=$msg["regtime"] ?>" readonly>
	</div>


	<div class="form-group">
		<label for="hits">조회수: </label>
		<input type="text" id="hits" class="form-control" value="<?=$msg["hits"] ?>" readonly>
	</div>

	
	<div class="form-group">
		<label for="content">내용: </label>
		<textarea rows="5" id="content"
			class="form-control" ><?=$msg["content"] ?></textarea>
		
		<div class="row">
			<div class="col-md-2">		
				<button onclick="location.href='bbs?page=<?=$page ?>'" type="submit" class="btn btn-primary">목록보기</button>	
			</div>

			<div class="col-md-2">
				<button class="btn btn-warning"
				onclick="location.href='modify?num=<?= $msg["num"] ?>&page=<?=$page?>'">수정</button>
			</div>
			
			<div class="col-md-2">
				<form id="delete" action="delete" method="POST">
					<?=csrf_field(); ?>
					<input type="hidden" name="num" 
							value="<?= $msg["num"]?>">
					<input type="hidden" name="page" value="<?=$page ?>">
					@if(\Session::get('name')==$writer)
					<button 
						class="btn btn-danger"
					onclick="return processDelete()">삭제하기</button>
					@endif
				</form>
			</div>	
		</div>	
	</div>		
@endsection