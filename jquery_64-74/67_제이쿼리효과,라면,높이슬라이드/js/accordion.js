
	$(document).ready(function(){
		// 클릭전숨겨주기
		$("dd").hide();
			//dt를 클릭하면 dd가 보이게



		$("dt").click(function(){
			$("dd").slideUp(500);
			$(this).next().slideDown(500);
		});

		/*
			문제점:dt를 클릭하면 모든 dd가 열림
			해결: 1) class 또는 id를 사용하여 해결

				2) this(지금 선택한 대상)선택자를 사용하는 방법
					+ 순서가 중요!
						이벤트가 발생하고, 위에서부터 순서대로 읽어줌
						 1) dd들 숨겨주기
						 2) 지금 선택한 대상의다음 요소 보여주기
		*/

		// dt를 클릭하면 dd가 슬라이드 되면서 나타나고 사라지게 하기
		// dt, 클릭, dd가 슬라이드
	
	});
