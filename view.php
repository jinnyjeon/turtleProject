<?include("header.php");?>

<?
	$no = $_GET['no'];
	$sql = "SELECT * from board where no=$no";
	//컬럼 no가 PRIMARY KEY
	//SELECT * form 테이블명 where 속성이름='속성값'; 
	//속성값은 문자일때는 따옴표 안에, 숫자나 변수는 따옴표 없이 사용
	//$no는 변수이기 때문에 no=$no로 작성됨
	
	
	$rs = mysqli_query($con,$sql);
	$info = mysqli_fetch_array($rs);
	
?>

    <section>
        <h2>공지사항 <span>Notice</span></h2>

        <!--table-->
        <div class="viewBox">
            <table>

                <thead>
                    <tr>
                        <th class="title"><?=$info['title']?></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="content"><?=$info['body']?></td>
					</tr>

                </tbody>
            </table>


            <!--Back to list-->
            <div class="btngrp">
                <a href="list.php" class="btn">목록</a>
                <a href="modify.php?no=<?=$no?>" class="btn">수정</a>
				<!--하이퍼링크는 기본적으로 GET방식으로 넘겨줌-->
            </div>
        </div>



        <!--page move-->
        <table class="pageBox">
            <tr>
                <th>이전글</th>
                <td><a href="#">Delivers 서비스 이용 약관 개정 안내</a></td>
            </tr>
            <tr>
                <th>다음글</th>
                <td><a href="#">개인정보 처리방침 개정 안내</a></td>
            </tr>
        </table>

    </section>










</body>

</html>