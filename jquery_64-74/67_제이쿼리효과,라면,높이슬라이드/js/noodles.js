
	jQuery(document).ready(function(){ //제이쿼리문서가 준비가 되면 기능구현해주세요.
		
		// 01) btn1을 클릭하면 div태그 숨기기(부드럽게 올라가면서 숨겨지게 만들기) 
		$(".btn1").click(function(){ //(.btn1, 클릭, .imgFrame의 슬라이드업과 알림창뜨게)
		
			/*
				부드럽게 올라가면서 숨겨지는데 알림창띄우기
				(.imgFrame, slideUp, .알림창)
				대상.effect(duration,easing,function(){});
			*/
			$(".imgFrame").slideUp(600,"swing",function(){
				//알림창 띄우기
				alert("라면이 사라졌어요");
				
			});
			
		});

		// 02) btn2를 클릭하면 div태그가 슬라이드다운 되면서 알림창뜨기
		$(".btn2").click(function(){ // (.btn2, 클릭, .imgFrame의 슬라이드다운과 알림창뜨게)
			
			$(".imgFrame").slideDown(1500,"swing",function(){alert("라면이 나타났어요")});
			// (.imgFrame, 슬라이드다운, 알림창)
		});
		

		// 03)btn3을 클릭하면 이미지와 반투명, 글씨에 효과적용
		
		$(".btn3").click(function(){ //(.btn3, 클릭, 사진(img)흐려지게 글씨(p)가운데로)
				
			$(".imgFrame img").delay().fadeTo(500,"0.5"); // (.imgFrame img, fadeTo, .imgFrame img반투명)
			$(".imgFrame p").css({"textAlign":"center"}); //(.imgFrame p, css , .imgFrame p)

			/*
			$(".imgFrame p").fadeTo(5000,"0.5");
			$(".imgFrame p").css("color":"red");
			*/
			// 반투명, 글자빨간색만들기
			$(".imgFrame p").fadeTo(5000,"0.5").css("color":"red");
		});

		/*
			04) btn4를 클릭하면 img가 100%로 나타나기
			글자는 가운데정렬, 글자크기20픽셀 패딩값 적용
			대상:btn4
			이벤트:클릭
			이벤트핸들러: img가 100%나타나게, 글자가운데로,크기20,패딩값
		*/

		$(".btn4").click(function(){	//(.btn4, 클릭, 이미지다시선명하게)
			/*
				1)img가 100%나타나게
					대상:img
					이벤트:fadeTo
					이벤트핸들러:im
			*/
			$(".imgFrame img").delay(1000).fadeTo(1000,1); //(.imgFrame img, fadeTo, .imgFrame img)


			/*
				2)글자가운데로,크기20,패딩값
					대상:p
					이벤트:css
					이벤트핸들러: p에 글자들
			*/
			$(".imgFrame p").fadeTo(500,1).css({"textAlign":"center", "fontSize":"20px","padding":"20px 0"});
		
		});
	});
