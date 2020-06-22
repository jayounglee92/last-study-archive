<?php
	
	header("content-type:text/html; charset=utf-8");
	
	# 무슨방식? get
	# name? kor, eng, math

	echo "<h2>성적표</h2>";
	echo "국어점수: ".$_GET['kor']."<br/>";
	echo "영어점수: ".$_GET['eng']."<br/>";
	echo "수학점수: ".$_GET['math']."<br/>";

	/*
		주의!
			get방식을 사용하면 주소줄을 통해서 데이터들이 넘어오기 때문에 
			노출에 우려가 있고, 주소줄에서 데이터 값들이 넘치면 넘어오지 못하는
			문제도 발생함
	*/
	
	echo "<p> 총점: ".($_GET['kor']+$_GET['eng']+$_GET['math'])."</p>";
	echo "<p> 평균: ".round( ($_GET['kor']+$_GET['eng']+$_GET['math'])/3,2)."</p>";

	// 대상.toFixed(2)는 php 사용할 수 없음 , javascript에서만 사용
	echo "<h2>반올림 함수</h2>";
	echo "<p> 기본함수1: 반올림 함수: ".round(33.55555)."</p>";
	echo "<p> 기본함수2: 반올림 함수: ".round(33.55555,3)."</p>";

?>