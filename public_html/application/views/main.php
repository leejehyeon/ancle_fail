<!--<img src="/static/img/main_page.jpg" style="width: 1100px; height: 300px; margin-bottom: 20px;margin-top: 20px;"/>
<!--
	<img src="/static/img/login.png" style=" margin-right: 45px;"/>
-->
<!--<div style=" width: 350px; float: left; ">
	<div>공지사항</div>
	<?foreach($notice_list5 as $lt){?>
		<?echo $lt -> board_id;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://tutor.thecakehouse.co.kr/index.php/notice/whole_notice?req_id=<?echo $lt -> board_id;?>"><?echo $lt -> subject;?></a>
	</br>
	<?}?>
</div>
<div style=" width: 400px; float: left; ">
<input type="image" src="/static/img/tutee.png" <?if($this->session->userdata('login_data')==null){?> onclick="tutee();" <?}else{?> onclick="tutee_login('<?echo $login_data['user_application']?>','<?echo $login_data['user_application_subject']?>');"<?}?> style=" margin-top: -100px;margin-right: 30px; "/>
<input type="image" src="/static/img/tutor.png" <?if($this->session->userdata('login_data')==null){?> onclick="tutor();" <?}else{?> onclick="tutor_login('<?echo $login_data['user_application']?>','<?echo $login_data['user_application_subject']?>');"<?}?> style="margin-left: -20px; margin-top: -100px; margin-right: 30px;"/>
<img src="/static/img/will_be.png" style=" margin-top: 110px; margin-left: -398px; height: 90px; width: 363px;"/>
</div>

<!-- 로그인 Div -->
<!--<?if($this->session->userdata('login_data')==NULL){?>
		<div style="display:inline; height:200px; width:320px; float:right; margin-right:45px;">
			<!-- Login Table -->
			<!--<table width="80%" height="100%" cellpadding="0" cellspacing="0" align="center">
				<form action="/index.php/login_process/login_id_pw_check" method="post">
					<tr>
						<td colspan=2 style="font-size:20px; vertical-align: bottom;">회원 로그인</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="form_id">
							<br>
							<input type="password" name="form_pw"/>		
						</td>
						<td>
							<input type="submit" value="로그인" style="height:75%">
						</td>
					</tr> 
					<tr>
						<td colspan=2 style="vertical-align:top;">
							<a href="/index.php/login_process/sign_up">회원가입</a>
							<a href="/index.php/login_process/search_id_pwd">아이디/비밀번호 찾기</a>
						</td>
					</tr>
				</form>
			</table>
		</div>
<?}else{?>
	<div style="display:inline; height:200px; width:320px; float:right; margin-right:45px;">
		<!-- after_login data-->	
		<!--<table width="80%" height="100%" cellpadding="0" cellspacing="0" align="center">
			<tr>
				<td style="font-size:20px; vertical-align: bottom;">환영합니다!!</td>
			</tr>
			<tr>
				<td>
					<?echo $login_data['user_id']?>님 방문을 환영합니다.
				</td> 
			</tr>
			<tr>
				<td style="vertical-align:top;">
					<a href="/index.php/mypage/modify">마이페이지</a>
					<a href="/index.php/login_process/logout">로그아웃</a>
				</td>
			</tr>
		</table>
	</div>
<?}?>-->

<!--<div class="Main_image">
	<img src="/static/img/Main_picture.png" usemap="#map" style="position:relative;">
<map name="map">	
    <area shape="poly" coords="0,0,0,360,580,360,380,0" href="http://www.naver.com">
    <area shape="poly" coords="960,360,960,0,380,0,580,360" href="http://www.daum.net">
</map>-->
	<!--<div class="row">
		
	</div>-->
	<!--<div class="main_text">
		<div class="tutor_text">
			<p class="tutor_title_text">튜터(Tutor)란?</p>
			<p class="tutor_descript_text">'개인지도를 해주는 사람'으로써
			<br>튜티들을 가르치며 동시에 후배
			<br>튜티들과 협동학습을 이끌어
			<br>나가는 학생을 의미<br></p>
		</div>
		<div class="tutee_text">
			<p class="tutee_title_text">튜티(Tutee)란?</p>
			<p class="tutee_descript_text">'개인지도를 받는 학생'으로써
			<br>튜터로부터 가르침을 받고 동시에
			<br>동료 튜티들과 서로 도와가며
			<br>함께 공부하는 학생을 의미</p>			
		</div>
	</div>
</div>-->
<div class="Main_image" style="position:relative;">
	<!--<canvas style="width: 960px; height: 360px; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px; opacity: 1;" height="360" width="960"></canvas>
	<img class="map maphilighted" src="/static/img/Main_picture.png" width="960" height="360" usemap="#mapA" style="opacity: 0; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px;">-->
	<img src="/static/img/main_tutor_image.png" usemap="#mapA" id="mapA">
		<map name="mapA">
		    <area shape="poly" coords="0,0,   0,360,    580,360,     360,0" >
		</map>
	<img src="/static/img/main_tutee_image.png" usemap="#mapB" id="mapB">
		<map name="mapB">
		    <area shape="poly" coords="0,0  ,220,360  ,580,360  ,580,0">
		</map>
		<map name="mapB">
		    <area shape="poly" coords="0,0  ,0,360  ,220,360 ">
		</map>
		<!--<div class="main_text" style="margin-top:-195px; margin-left:0px; position:absolute; width:960px;">
		<div class="tutor_text" style="width:365px; height:189px;">
			<span class="tutor_title_text">튜터(Tutor)란?</span>
			<p class="tutor_descript_text">'개인지도를 해주는 사람'으로써
			<br>튜티들을 가르치며 동시에 후배
			<br>튜티들과 협동학습을 이끌어
			<br>나가는 학생을 의미<br></p>
		</div>
		<div class="tutee_text" style="width:365px; height:189px;">
			<span class="tutee_title_text">튜티(Tutee)란?</span>
			<p class="tutee_descript_text">'개인지도를 받는 학생'으로써
			<br>튜터로부터 가르침을 받고 동시에
			<br>동료 튜티들과 서로 도와가며
			<br>함께 공부하는 학생을 의미</p>			
		</div>
	</div>-->
	
	
	
	
	
	<!--쓰는거임-->
	<!--	이미지 배경
	<img class="main_image_display" src="/static/img/main_tutor_image.png" onmouseover="this.src='/static/img/main_tutor_image_hover.png'" onmouseout="this.src='/static/img/main_tutor_image.png'"usemap="#mapA" name="tutor_image">
	<img class="main_image_display" src="/static/img/main_tutee_image.png" onmouseover="this.src='/static/img/main_tutee_image_hover.png'" onmouseout="this.src='/static/img/main_tutee_image.png'" usemap="#mapB">
	-->

<!--<map name="mapA">
	<area shape="poly" coords="360,0,580,0,580,360" href="http://www.naver.com" onmouseover="image_hover('/static/img/main_tutee_image_hover.png')">
    <!--<area shape="poly" coords="360,0,360,360,580,360" href="http://www.naver.com"> 맵B-->
<!--</map>-->





</div>

<div class="Main_row">
	<!--<div>
			<div>공지사항</div>
			<?foreach($notice_list5 as $lt){?>
				<?echo $lt -> board_id;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://tutor.thecakehouse.co.kr/index.php/notice/whole_notice?req_id=<?echo $lt -> board_id;?>"><?echo $lt -> subject;?></a>
			</br>
			<?}?>
	</div>-->
	<div>
		<div class="title_border">
			<p class="main_title">공지사항</p>
			<a href="http://tutor.thecakehouse.co.kr/index.php/notice/whole_notice"><img class="board_more_button"src="/static/img/main_board_more.png"/></a></div>
			<?foreach($notice_list5 as $lt){?>
				<a href="http://tutor.thecakehouse.co.kr/index.php/notice/whole_notice?req_id=<?echo $lt -> board_id; ?>"><li class="latest_board_list"><?echo $lt -> subject; ?></li></a>
			<?} ?>
	</div>
	<div>
		<a class="tutor_applicant_image" href="http://syjeon.ancle.kr/index.php/administration/tutor"><img src="/static/img/tutee_applicant.png" onmouseover="this.src='/static/img/tutee_applicant_hover.png'" onmouseout="this.src='/static/img/tutor_applicant.png'"></a>
		<a class="tutee_applicant_image" href="http://syjeon.ancle.kr/index.php/administration/tuti"><img src="/static/img/tutee_applicant.png" onmouseover="this.src='/static/img/tutee_applicant_hover.png'" onmouseout="this.src='/static/img/tutee_applicant.png'"></a>
		<div>
			<img class="main_home_icon" src="/static/img/main_home_icon.png">
			<p class="msc_center">MSC Center</p>
			<p class="MSC_home_link">http://msc.koreatech.ac.kr</p>
			<p style="clear:both; margin:0px;"></p>
			<a href="http://msc.koreatech.ac.kr"><p class="home_button">바로가기</p></a>
			<img class="graduationcap" src="/static/img/graduationcap.png">
		</div>
	</div>
	<div>
		<div class="title_border">
		<p class="customer_main_title">CUSTOMER</p><p class="main_sub_title">CENTER</p>
		</div>
		<div class="">
			<p class="customer_title">E-메일</p>
			<p class="customer_descript">skyb4@koreatech.ac.kr</p>
			<p class="customer_title" style="padding-bottom:2px;">문의전화</p>
			<p class="customer_number">041-640-8550-1</p>
			<p class="customer_etc">메일로 문의사항을 남겨주세요.</p>
		</div>
	</div>
</div>
<!--
	<img src="/static/img/login.png" style=" margin-right: 45px;"/>
-->
