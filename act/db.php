<?

	$con = mysqli_connect('localhost','root','0000','hms') or die("error");
	mysqli_set_charset($con, "utf8"); //utf8 하이픈없음 주의!!!!
	session_start();

?>