<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> if </title>
  <style>
		h2{border-left:10px solid #05c; text-indent:10px;}
		.answer{ font-size:20px; color:#00f; text-decoration:underline; }
  </style>
 </head>
 <body>
	<h2> 입력값 출력: </h2>
	<form action="#" method="get">
		<label for="ans">입력받기: </label>
		<input id="ans" type="text" name="ans"/>
		<input type="submit" value="결과확인"/>
	</form>
	<?php
		
		# 1) 방식 method
		# 2) 넘겨받는 name

		$ans = $_GET['ans'];
		echo "입력받은 값은 ".$ans." 입니다.";
	?>


	<h2> if를 사용한 입력값 출력: </h2>
	<form action="#" method="get">
		<label for="ans1">입력받기: </label>
		<input id="ans1" type="text" name="ans1"/>
		<input type="submit" value="결과확인"/>
	</form>
	<?php
	
		# 1) 무슨 방식?
		# 2) 넘겨줄 name 값

		/*
			ans1 공간이 비어 있지 않다면 입력값 출력 :000
			ans1 공간이 비어 있다면 값이 비어 있습니다. 출력

			ans1 ==""
			ans1 !=""
		*/

		$ans1 = $_GET['ans1'];
		
		if( $ans1 !="" ){ echo "<p class=\"answer\"> 입력값 출력 : ".$ans1."</p>";}
		else{ echo "<p>값이 비어있습니다.</p>";}
	
	?>
	<!--
		응용문제1
			01) form 영역 만들기
			02) input 공간 만들기 
				숫자입력1:
				숫자입력2:
				숫자입력3:

			03) 아래에 php 영역 만들고, 전송버튼으로 넘겨주기
			04) 숫자입력관련 변수만들기 
			total, avg 변수 만들기

			05) 만약에 평균이 70점 이상이라면
			평균이 000 입니다. 출력받기 ( p태그에 클래스명 작성하여 표현하기 answer )
			
			아니라면 평균값이 000으로 평균에서 모자랍니다. 출력받기 
			: 평균 자릿수는 2자리 까지만 표현하기 

	-->
	<h2>총합 + 평균구하기</h2>
	<form action="#" method="get">
		<p>
			<label for="num1">숫자입력1: </label>
			<input id="num1" type="text"  name="num1"/>
		</p>
		<p>
			<label for="num2">숫자입력2: </label>
			<input id="num2" type="text"  name="num2"/>
		</p>
		<p>
			<label for="num3">숫자입력3: </label>
			<input id="num3" type="text"  name="num3"/>
		</p>
		<input type="submit" value="결과확인"/>
	</form>
<?php
	
	# 1) 무슨방식: get
	# 2) name 값 확인 : num1, num2, num3

	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$num3 = $_GET['num3'];

	$total = $num1+$num2+$num3;
	$avg = round(($total/3),2);

	echo "<p>총합: ".$total."</p>";
	if( $avg >= 70){ echo "<p class=\"answer\"> 평균이 ".$avg." 입니다. </p>";}
	else{ echo "<p> 평균이 ".$avg." 이므로 평균에서 모자랍니다. </p>";}

?>

	<!--
		응용문제2
			1) 과일입력받기 form 만들기 
			2) 넘겨 받은 과일이 melon과 같다면 melon이 맞습니다. 표현하기 answer 클래스명연결학디
			아니라면 입력한 정보값과 다릅니다. 출력받기 
	-->
	
	<h2>과일 입력받기: </h2>
	<form action="#" method="get">
		<p>
			<label for="fruit">과일입력: </label>
			<input id="fruit" type="text"  name="fruit"/>
		</p>
		<input type="submit" value="결과확인"/>
	</form>
<?php

	# get, fruit

	$fruit = $_GET['fruit'];
	
	if( $fruit =="melon"){ echo "<p class='answer'>melon이 맞습니다. </p>";}
	else{ echo "<p> 입력한 정보의 값이 아닙니다. </p>"; }

?>
	<!--
		응용문제3
			1) 캐릭터 입력받기 form 만들기 
			2) captainA나 ironman, hulk, thor 중에 있다면 선택한 캐릭터는 000입니다. 출력받기
			없으면 해당캐릭터가 없습니다. 출력받기 
	-->
	<h2>캐릭터 입력받기: </h2>
	<form action="#" method="get">
		<p>
			<label for="chara">캐릭터 입력: captainA, ironman, hulk, thor 중 입력</label>
			<input id="chara" type="text"  name="chara"/>
		</p>
		<input type="submit" value="결과확인"/>
	</form>
<?php

	# get, chara
		
		$chara = $_GET['chara'];
		if( $chara =='captainA' || $chara =='ironman' || $chara =='hulk' || $chara =='thor'){
			echo "선택한 캐릭터는 ".$chara." 입니다.";
		}
		else{ echo "선택한 캐릭터가 없습니다.";}

?>


	<!--
		응용문제4
			1) 아이나이 입력받기 form 만들기 
			2) 입력받은 아이의 나이가 0세 부터 5세 사이의 아이라면
			000세로 입장이 가능한 아이입니다. 출력받기
			아니라면 000세로 입장이 불가합니다. 출력받기 
	-->

	<h2>아이의 나이 입력받기: </h2>
	<form action="#" method="get">
		<p>
			<label for="age">아이 나이 입력: </label>
			<input id="age" type="text"  name="age"/>
		</p>
		<input type="submit" value="결과확인"/>
	</form>
<?php
	
	# get, age

	$age = $_GET['age'];
	if( $age >= 0 && $age <6){ echo "아이의 나이는 ".$age."살 로 입장이 가능합니다.";}
	else{ echo "아이의 나이는 ".$age."살로 입장이 불가합니다."; }
?>



	<h2>체크버튼 활용하기</h2>
	<!--
		javascript 체크항목을 확인
			대상.checked	== true
	-->

	<form action="#" method="get">
		<label for="ans1">이 사이트에 방문한적이 있습니까?</label>
		<input id="ans1" type="checkbox" name="ans1"/>
		<input type="submit" value="확인"/>
	</form>
<?php

	// javascript : 대상.checked == true와 비교

	$ans1 = $_GET['ans1'];

	// echo "체크확인: ".var_dump($ans1); 
	/*
		javascript에서는 console.log( type(대상) ) 을 활용하여
		type이 무엇인지 확인 : string, number 인지 확인

		php에서는 check를 확인하면 on으로 넘겨받음
			
			+ gettype(ans1)  경우 string 구조인 것을 확인 할 수 있음
				: 대상의 구조가 무엇인지 확인할때 사용

			+ var_dump(ans1) 대상의 글자 수 뿐 아니라, 무슨구조이며 무엇을 
			담고 있는지 까지 전부 확인 가능
	*/

	if($ans1 == "on"){ echo "<a href='http://www.google.com' title='구글'>구글</a> ";}
	else{ echo "체크해주세요!";}

?>
 </body>
</html>
