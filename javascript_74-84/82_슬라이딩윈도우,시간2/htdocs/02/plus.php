<?php
	
	# 문자열 깨지지 않도록 header 설정
	header("content-type:text/html; charset=utf-8");
	

	# 무슨 방식? get
	# name값들, one, two

	echo "<p> 입력받은 숫자1  : ".$_GET["one"]."</p>";
	echo "<p> 입력받은 숫자2  : ".$_GET["two"]."</p>";

	# 총 결과값 표현방식

	echo "<p>더하기: ".$_GET["one"]." + ".$_GET["two"]." = ".($_GET["one"]+$_GET["two"])."</p>";
?>