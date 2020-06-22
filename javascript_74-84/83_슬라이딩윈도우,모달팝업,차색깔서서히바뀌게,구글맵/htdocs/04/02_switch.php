<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> switch </title>
 </head>
 <body>
	<h2>switch</h2>
	<form action="#" method="get">
		<label for="ans">캐릭터 입력:  </label>
		<input id="ans" type="text" name="ans"/>
		<input type="submit" value="캐릭터확인"/>
	</form>
<?php
	
	# get, ans

	$ans = $_GET['ans'];
	switch( $ans ){
		case "captain" : echo "캡틴이 맞습니다. "; break;
		case "hulk" : echo "헐크가 맞습니다."; break;
		default: echo "해당하는 캐릭터가 없습니다."; break;
	}
?>

<!--
	응용문제 1
		form으로 단계입력 받기
		1 을 입력받으면 step1 출력받기
		2 를 입력받으면 step2 출력받기
		3 을 입력받으면 step3 출력받기
		정보가 없으면 정보가 없습니다. 출력받기 
-->
	<h2>단계 테스트</h2>
	<form action="#" method="get">
		<label for="level">단계입력:  </label>
		<input id="level" type="text" name="level"/>
		<input type="submit" value="단계확인"/>
	</form>
<?php
	
	$level = $_GET['level'];
	
	switch($level){
		case 1: echo "step1"; break;
		case 2: echo "step2"; break;
		case 3: echo "step3"; break;
		default: echo "해당하는 단계가 없습니다."; break;
	}
?>

<!--
	응용문제 2
		form으로 달 입력받기
		1, 3, 5, 7, 8, 10, 12 라면 31일 까지 있습니다. 출력받기
		4,6,9,11은 30일 까지 있습니다. 출력받기
		2라면 28일, 29일 까지 있습니다. 출력받기 
-->

	<h2>달 입력</h2>
	<form action="#" method="get">
		<label for="month">달 입력:  </label>
		<input id="month" type="text" name="month"/>
		<input type="submit" value="단계확인"/>
	</form>
<?php

	$month = $_GET['month'];
	
	switch($month){
		case 1: case 3: case 5: case 7: case 8: case 10: case 12: echo "<p>31일 까지 있습니다.</p>";break;
		case 4: case 6: case 9: case 11: echo "<p>30일 까지 있습니다.</p>"; break;
		case 2: echo "<p>28일, 29일 까지 있습니다.</p>";break;
	}

?>
 </body>
</html>
