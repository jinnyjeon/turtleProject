<?include("header.php");?>

<?
	if(!empty($_POST['title'])&&!empty($_POST['body'])){
		$sql = "INSERT into board (title,body) values
		('{$_POST['title']}','{$_POST['body']}')";
		
		//$_SESSION을 넣고 나서 글 등록이 안 됨
		//('{$_POST['title']}','{$_POST['body']}','{$_SESSION['userid']}')";
	
	
		mysqli_query($con, $sql);

	
		print "<script>alert('글이 정상적으로 등록되었습니다.');</script>";
		print "<script>location.href='list.php';</script>";
	
	}

?>


    <section>
        <h2>공지사항 <span>Notice</span></h2>

        <!--inputBox/form태그 추가-->
        <form name="inputfrm" method="post">
            <!--action을 지정하지 않으면 다시 자기 자신에게 옴-->
            <div class="inputBox">
                <div class="input">

                    <div class="title">
                        <span>제목</span>
                        <input type="text" name="title">
                    </div>
					

                    <div class="content">
                        <span>내용</span>
                        <textarea name="body" id=""></textarea>
                    </div>
                </div>


                <!--Back to list-->
                <div class="btngrp">
                    <a href="#" class="btn" onclick="location.href='list.php'; return false;">목록</a>
                    <input type="submit" class="btn" value="등록">
                    <!--button 태그를 사용했을 때는 목록으로 이동이 안 되고 폼만 실행됨. 
					button 태그는 기본적으로 submit기능을 가지고 있다. 
                    버튼보다 다른 태그를 사용하는게 좋다-->
					<!--submit은 action에 지정된 페이지로 이동 후 조건에 따라 다른 페이지로 이동
					지금은 action이 없으므로 input으로 돌아옴
					form 내용을 저장후 action에 실행...??-->
                </div>
		

            </div>
        </form>
    </section>




</body>

</html>