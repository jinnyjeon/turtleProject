<?include("header.php");?>

<?
	$sql = "SELECT * from board
			where
			title like '%".$_GET['search']."%'
			or
			body like '%".$_GET['search']."%'
			order by `time` desc;
			";


	//mysqli_query(연결할 DB객체명, 쿼리를 넣은 변수)
	$rs = mysqli_query($con,$sql);
	//$con은 header.php 안에 include 처리한 act/db.php안에 정의되어 있음
	
?>



    <section>
	
		<p style="margin-bottom:20px;">$sql출력<br>
		<?=$sql?></p>
	
        <h2>공지사항 <span>Notice</span></h2>

        <!--검색/form태그 추가--->
        <form name="searchfrm">
            <div class="searchBox">
                <div class="keyword"><input type="text" name="search" value="<?=$_GET['search']?>" placeholder="검색어를 입력해 주세요."></div>
                <button>검색</button>
            </div>
        </form>

        <!--table-->
        <div class="noticeBox">
            <table>
                <colgroup>
                    <col width="5%">
                    <col width="60%">
                    <col width="10%">
                    <col width="10%">
                </colgroup>

                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>작성일자</th>
                    </tr>
                </thead>

                <tbody>
				
					<!--DB를 가져오면서 반복적으로 table 태그가 생성되어야 하므로 반복문 사용-->
					<?
						//시작
						while($info = mysqli_fetch_array($rs)){
					?>
				
                    <tr>
                        <td><?=$info['no']?></td>
                        <td class="title">
							<a href="view.php?no=<?=$info['no']?>"><?=$info['title']?></a>
						</td>
                        <td><?=$info['writer']?></td>
                        <td><?=$info['time']?></td>
                    </tr>
					
					<?
						//끝
						}
					?>
					
                    <!--<tr>
                        <td>2</td>
                        <td class="title"><a href="#">두번째 글</a></td>
                        <td>guest</td>
                        <td>2021-05-20</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="title"><a href="#">세번째 글</a></td>
                        <td>guest</td>
                        <td>2021-05-19</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="title"><a href="#">네번째 글</a></td>
                        <td>guest</td>
                        <td>2021-05-18</td>
                    </tr>-->

                </tbody>
            </table>


            <!--write Btn-->
            <div class="writeBtn"><button onclick="location.href='input.php'">글쓰기</button></div>

        </div>



        <!--pagination-->
        <div class="page">

            <a href="#" class="left">&lt;</a>

            <ol>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
            </ol>

            <a href="#" class="right">&gt;</a>

        </div>

    </section>


<!--

*작업해 볼 내용
1. DB(board테이블)에 있는 내용을 게시판에 출력해 보기
2. 검색

-->








</body>

</html>