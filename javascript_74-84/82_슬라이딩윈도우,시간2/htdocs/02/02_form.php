<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title>form</title>
 </head>
 <body>
	<form action="#" method="get">
		<input type="text" id="search" name="search"/>
		<input type="submit" value="전송"/>
	</form>
	<?php
	
		echo "<h2> 검색한 단어: </h2>";
		# 1) form에서 무슨방식으로 넘기는지 중요!
		# 2) input에서 작성된 글이나 정보는 name에 작성된 명칭을 통해서 넘어오게 됨!

		echo $_GET["search"];
	?>
 </body>
</html>
