<?php

	# 1) 브라우저에서 글씨들이 깨지지 않도록 설정하기
	header("content-type:text/html; charset=utf-8");
	
	echo "<h2> 반복문의 기본 </h2>";
	/*
		javascript 버전
			for( var i=0; i<종료지점; 증감문){
				문서에 출력받기 
			}

		php에서는 document.write  대신에 echo로 출력
			1,2,3,4,5
				+ php에서는 대상.length 가 적용되지 않음
	*/

	for($index=1; $index<6; $index++){
		echo $index." , ";
	}

	echo "<h2>테이블 반복</h2>";

	/*
		테이블의 구조
		<table>
			<tr><td></td></tr>
		</table>
	*/

	echo "<table>";
		for($index=0; $index<6; $index++){
			echo "<tr><td>테이블에 적용될 내용</td></tr>";
		}
	echo "</table>";

	// 응용문제:  ul li태그 5번 출력받기 ( li태그에 들어갈 내용은 : li태그 출력 입력하기 )

	echo "<ul>";
		for($index=0; $index<5; $index++){
			echo "<li> li태그 출력 </li>";
		}
	echo "</ul>";


	echo "<h2>while문으로 1~10까지 출력받기 </h2>";
	
	$index = 1;
	while( $index < 11 ){
		
		echo $index."<br/>";
		$index++;
	}
?>