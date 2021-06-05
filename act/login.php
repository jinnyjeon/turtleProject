<?

//db.php는 db를 사용하는 곳마다 사용할 수 있도록 따로 파일을 만들어 두는 게 좋다!
include("db.php");

//php는 session을 사용하려면 처음에 정의해 줘야함
//현재는 dp.php에 session_start();를 넣었기 때문에 주석처리
//session_start();


	$sql = "select * from member where userid='{$_POST['userid']}' and userpw='{$_POST['userpw']}'";
	$rs = mysqli_query($con,$sql);
	//$info = mysqli_fetch_array($rs);
	$cnt = mysqli_num_rows($rs);


	if($cnt){
	
		$info = mysqli_fetch_array($rs);
		//성공했을 때 세션을 만들어 준다!
	
		$_SESSION['userid'] = $info['userid'];
		$_SESSION['name'] = $info['name'];
		
	
		echo "<script>alert('로그인 성공~~~~~~');</script>";
		echo "<script>location.href='/bbs2/'</script>";
	}else{
		echo "<script>alert('로그인 안되지~~~~~~');</script>";
		echo "<script>history.go(-1);</script>";
	}



?>