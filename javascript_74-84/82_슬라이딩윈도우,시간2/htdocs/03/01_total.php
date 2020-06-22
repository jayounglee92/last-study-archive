<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> total </title>
 </head>
 <body>
	<form action="total.php" method="get">
		<fieldset>
			<legend>PHP total</legend>
			<p>
				<label for="kor">국어점수: </label>
				<input id="kor" type="text" name="kor"/>
			</p>
			<p>
				<label for="eng">영어점수: </label>
				<input id="eng" type="text" name="eng"/>
			</p>
			<p>
				<label for="math">수학점수: </label>
				<input id="math" type="text" name="math"/>
			</p>
			<input type="submit" value="총합계"/>
		</fieldset>
	</form>
 </body>
</html>
