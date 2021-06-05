<?include("header.php");?>

	
<?
	//1. 화면에 출력될 데이터 가져오기, PRIMARY KEY로 구분(no)
	//2. 데이터를 수정하니까 UPDATE 사용
	

	//no값을 받았을 때 if문 실행
	if($no = $_GET['no']){
		$sql = "SELECT * from board where no=$no";
		$rs = mysqli_query($con,$sql);
		$info = mysqli_fetch_array($rs);
	}
	
	if(!empty($_POST['title'])&&!empty($_POST['body'])){
		
		$sql = "UPDATE board 
			set
			title='{$_POST['title']}',
			body='{$_POST['body']}'
			where 
			no = '{$_POST['no']}'";
			
	mysqli_query($con,$sql);
	print "<script>location.href='list.php'</script>";
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
                        <input type="text" name="title" value="<?=$info['title']?>">
                    </div>

                    <div class="content">
                        <span>내용</span>
                        <textarea name="body" id=""><?=trim($info['body'])?></textarea>
						<input type="hidden" name="no" value="<?=$no?>">
                    </div>
                </div>


                <!--Back to list-->
                <div class="btngrp">
                    <a href="list.php" class="btn">목록</a>
					<input type="submit" class="btn" value="수정">
                </div>
				
				
				<!--
				추가해 볼 것!
				
				1) confirm에서 확인을 눌렀을 때는 취소, 취소를 눌렀을 때는 현재 페이지에 머무르도록 설정
				
				
				-->

            </div>
        </form>
    </section>




</body>

</html>