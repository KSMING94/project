@extends('layouts.app')

@section('title')
	게시글 리스트
@endsection

@section('content')
<div class="container">	
	<table class="table table-hover">
		<tr>
			<th>번호</th>	
			<th>제목</th>
			<th>작성자</th>
			<th>작성일시</th>
			<th>조회수</th>
		</tr>
	
	<?php foreach($msgs as $msg) : ?>
		<tr>
			<td><?= $msg["num"] ?> </td>			    
			<td><a href="view?num=<?= $msg["num"] ?>&page=<?= $page?>"> <?= $msg["title"] ?> </a> </td>
			<td><?= $msg["writer"] ?> </td>
			<td><?= $msg["regtime"] ?> </td>
			<td><?= $msg["hits"] ?> </td>
		</tr>
	<?php endforeach ?>	
	</table>	
</div>
<div class="float-right" style="margin-right:50px">	
	<button class="btn btn-primary" 
		onclick="location.href='write'">글쓰기</button>
</div>

<?php if($startPage > 1) : ?>
<a href="bbs?page=<?= $startPage - $numPageLinks ?>"> 
	&lt; 
</a>
<?php endif ?>

<?php for($i=$startPage; $i <= $endPage; $i++) : ?>
	 <a href="bbs?page=<?= $i ?>"> 
	 	<?php if($i==$page) :?>
	 		<b>
	 			<?= $i ?> 
	 		</b>
	 	<?php else :?>
	 		<?= $i ?>	
	 	<?php endif ?>
	</a> 

<?php endfor ?>    

<?php if ($endPage < $totalPages) : ?>
	<a href="bbs?page=<?=$endPage+1?>">
		&gt
	</a>	
<?php endif ?>	

@endsection
