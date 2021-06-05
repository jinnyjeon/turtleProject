<?
include("header.php");

	
	if(!empty($_POST['userid'])&&!empty($_POST['userpw'])&&!empty($_POST['name'])){
		$sql = "INSERT into member (userid,userpw,name)
		values ('{$_POST['userid']}','{$_POST['userpw']}','{$_POST['name']}')";
	
	

	mysqli_query($con, $sql);

	print "<script>alert('회원가입이 완료되었습니다.');</script>";

	}
?>

    <section>
        <h2>회원가입 <span>Join us</span></h2>
        <p>*표시는 필수입력 항목입니다.</p>

        <!--inputBox-->
        <div class="inputBox">
            <form name="regfrm" method="post">
                <table>
                    <colgroup>
                        <col width="20%">
                        <col width="80%">
                    </colgroup>
                    <tr>
                        <th>아이디*</th>
                        <td>
                            <input type="text" name="userid" autofocus required> <!--button>중복확인</button--> <span>(영문,숫자 혼합한 4~13자리 사이로 입력하세요)</span>
                        </td>
                    </tr>
                    <tr>
                        <th>비밀번호*</th>
                        <td>
                            <input type="password" name="userpw" required> <span>(영문,숫자 혼합한 8~12자리 사이로 입력하세요)</span>
                        </td>
                    </tr>
                    <!--tr>
                        <th>비밀번호 재입력</th>
                        <td>
                            <input type="password" name="user-pw-re"> <span>(입력한 비밀번호를 다시 한번 입력해 주세요)</span>
                        </td>
                    </tr-->
                    <tr>
                        <th>이름*</th>
                        <td>
                            <input type="text" name="name" required>
                        </td>
                    </tr>
                    <!--tr>
                        <th>휴대폰</th>
                        <td class="phone">
                            <input type="text" value="010"> - <input type="text"> - <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <th>이메일</th>
                        <td>
                            <input type="email"><br>
                            <label><input type="checkbox"> 이메일을 통한 이벤트 및 신규 매장 정보 수신에 동의합니다. [선택]</label>
                        </td>
                    </tr-->

                </table>


                <!--Back to list-->
                <div class="btngrp">
                    <div class="btn"><input type="reset" value="다시작성"></div>
                    <div class="btn"><input type="submit" value="등록하기"></div>
                </div>
            </form>
        </div>

    </section>




</body>

</html>