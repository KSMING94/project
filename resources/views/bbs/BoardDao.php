<?php
class BoardDAO {
	private $db;

	public function __construct() {
		try {
			$this->db = new PDO("mysql:host=localhost;dbname=php", "root", "");

			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		}catch(PDOException $e) {
			exit($e->getMessage());
		}
	}

	public function insertMsg($title, $writer, $content) {
		// sql문 만들고.. insert문
		// prepare 시키고
		// 넘어온 값 binding 시키고
		// 실행요청하고..
		try {
			$sql = "insert into board(title, writer, content) values(:title, :writer, :content)";
			$pstmt = $this->db->prepare($sql);
			$pstmt->bindValue(":title", $title, PDO::PARAM_STR);
			$pstmt->bindValue(":writer", $writer, PDO::PARAM_STR);
			$pstmt->bindValue(":content", $content, PDO::PARAM_STR);

			$pstmt->execute();

		}catch(PDOException $e) {
			exit($e->getMessage());
		}
	}

	public function getManyMsgs() {
		try {
			/*
				1. sql: select * from board;
				2. prepare
				3. binding X, execute O
			*/
			$sql = "select * from board";	
			$pstmt = $this->db->prepare($sql);	
			$pstmt->execute();
			$msgs = $pstmt->fetchAll(PDO::FETCH_ASSOC);

		}catch(PDOException $e) {
			exit($e->getMessage());
		}

		return $msgs;
	}

	public function getMsg($num) {
		try {
			$sql = "select * from board where num=:num";
			$pstmt = $this->db->prepare($sql);
			$pstmt->bindValue(":num", $num, PDO::PARAM_STR);
			$pstmt->execute();

			$msg = $pstmt->fetch(PDO::FETCH_ASSOC);

		}catch(PDOException $e) {
			exit($e->getMessage());
		}
		return $msg;
	}

	public function increaseHits($num) {
		try {
			// update board set hits=hits+1 where num=:num
			$sql = "update board set hits=hits+1 where num=:num";
			$pstmt = $this->db->prepare($sql);
			$pstmt->bindValue(":num", $num, PDO::PARAM_INT);
			$pstmt->execute();
		}catch(PDOException $e) {
			exit($e->getMessage());
		}
	}

	public function deleteMsg($num) {
		try {
			// update board set hits=hits+1 where num=:num
			$sql = "delete from board where num=:num";
			$pstmt = $this->db->prepare($sql);
			$pstmt->bindValue(":num", $num, PDO::PARAM_INT);
			$pstmt->execute();
		}catch(PDOException $e) {
			exit($e->getMessage());
		}
	}	

	public function updateMsg($num, $title, $writer, $content) {
		try {
			$sql = "update board set title=:t, writer=:w, content=:c where num=:n"; 

             $pstmt = $this->db->prepare($sql);      
             $pstmt->bindValue(":t", $title, PDO::PARAM_STR);
             $pstmt->bindValue(":w", $writer, PDO::PARAM_STR);
             $pstmt->bindValue(":c", $content, PDO::PARAM_STR);
             $pstmt->bindValue(":n", $num, PDO::PARAM_INT);

             $pstmt->execute();

		}catch(PDOException $e) {
			exit($e->getMessage());
		}


	}

	function getPageMsgs($startRecord, $count) {
	try {
			/*
				1. sql: select * from board;
				2. prepare
				3. binding X, execute O
			*/
			$sql = "select * from board order by num desc limit :startRecord, :count";	
			$pstmt = $this->db->prepare($sql);	
			$pstmt->bindValue(":startRecord", $startRecord, PDO::PARAM_INT);
			$pstmt->bindValue(":count", $count, PDO::PARAM_INT);
			$pstmt->execute();
			$msgs = $pstmt->fetchAll(PDO::FETCH_ASSOC);

		}catch(PDOException $e) {
			exit($e->getMessage());
		}

		return $msgs;
	}

	public function getTotalCount() {
		try {
			$sql = "select count(*) as totalCount from board";
			$pstmt = $this->db->prepare($sql);
			$pstmt->execute();
			$count = $pstmt->fetchColumn();
		}catch(PDOException $e) {
			exit($e->getMessage());
		}
		return $count;
	}
}	

?>