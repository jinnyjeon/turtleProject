<!--DB연결-->
<?include("act/db.php");?>
<?
	$pn = str_replace('.php','',end(explode("/",$_SERVER["SCRIPT_FILENAME"])));
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>Board - 게시판</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/board.css">
	<link rel="stylesheet" href="css/register.css">
</head>

<body>

    <header>
        <div class="inner-header">
            <h1 style="cursor:pointer;" onclick="location.href='/bbs2/'">GreenArt</h1>

			<?if($pn != 'register'){?> <!--//if문 시작-->
			
            <div class="signBox">
				<?if(empty($_SESSION['userid'])) {?> <!--//if else문 시작-->
				
                <!--로그인 전에 보여지는 화면-->
                <form name="logfrm" action="act/login.php" method="post" class="signIn">
                    <p><input type="text" name="userid" placeholder="ID"></p>
                    <p><input type="password" name="userpw" placeholder="Password"></p>

                    <button class="login" style="cursor:pointer;">로그인</button>
                    <button class="join" style="cursor:pointer;" onclick="location.href='register.php'; return false;">가입하기</button>
                </form>
				<?} else {?>

                <!--로그인 했을 때 보여지는 화면-->
                <form action="act/logout.php" method="post" class="signOut">
                    <p><span class="user-name"><?=$_SESSION['name']?></span>님 환영합니다!</p>
                    <button style="cursor:pointer;">로그아웃</button>
                </form>
				<?}?> <!--//if else문 끝-->
            </div>
			
			<?}?> <!--//if문 끝-->
        </div>
    </header>
	
	
	