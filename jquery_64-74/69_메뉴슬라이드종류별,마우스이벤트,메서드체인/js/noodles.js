// 첫번째 문법 사용하기
		// 제이쿼리의 문서가 준비가 되면 기능구현해주세요.
		jQuery(document).ready(function(){
			
			/*
				01) btn1을 클릭하면 div태그 숨기기 (부드럽게 올라가면서 숨겨지게 만들기)
					
					대상: btn1
					이벤트: 클릭
					이벤트 핸들러 : 
							1) div태그 부드럽게 올라가면서 숨겨지게 만들기
							2) 알림창띄우기
			*/
			$("#btn1").click(function(){
				// div태그 부드럽게 올라가면서 숨겨지는데 알림창 띄우기
				/*
					대상: div
					이벤트: slideUp
					이벤트 핸들러: 알림창
				
					effect기능의 기본사용방법
						대상.effect( duration, easing, function(){ } );
				
				*/
				$("div").slideUp(500,"linear",function(){
					// 알림창 띄우기
					alert("라면 숨기기");
				});
			});

			/*
				02) btn2를 클릭하면 div태그가 slideDown이 되면서 나타나고 알림창띄우기
						+ 대상: btn2
						+ 이벤트: 클릭
						+ 이벤트 핸들러 : div태그가 slideDown이 되면서 나타나고 알림창띄우기
			*/

			$("#btn2").click(function(){
				// div태그가 slideDown이 되면서 나타나고 알림창띄우기
				// 대상: div
				// 이벤트: slideDown
				// 이벤트 핸들러 : 알림창 띄우기
				$("div").slideDown(300, "swing", function(){  alert("라면 나타나게 만들기"); });
			});
			
			/*
				03) btn3을 클릭하면
						이미지와 글씨가 반투명하게 만들기 
							: 글씨는 빨간색으로 변경되면서 반투명하게 만들기 
							효과: 
								1)이미지는 반투명 and  2) 글씨는 빨강색변경 반투명
					
					대상: btn3
					이벤트: 클릭
					이벤트 핸들러: 이미지와 글씨에 효과적용
			*/
			$("#btn3").click(function(){
				// 대상: img태그
				// 이벤트: ( o )시간이 적용되는 반투명?, 시간적용이 없는 반투명?
				// 이벤트 핸들러 : img 반투명

				$("img").delay(1000).fadeTo(500,'0.5');

				// 대상: .textArea
				// 이벤트: 반투명 and 글자 색상 빨간색 만들기
				// 이벤트 핸들러: textArea의 글자색상  and 반투명
				// 추가 작업:
				// 이미지가 조금 늦게 반투명해짐!

				
				/* 대상은 같고 , 기능이 다를때 : 메서드 체인 연결
					$(".textArea").fadeTo(500,"0.5");
					$(".textArea").css({"color":"red"});
				*/

				$(".textArea").fadeTo(500,"0.5").css({"color":"red"});
			});


			/*
				04) btn4를 클릭하면 img가 100% 나타나도록 만들기
					글자는 가운데 정렬, 글자크기 20픽셀, 패딩값 적용하기
					
					+ 대상 :btn4
					+ 이벤트: 클릭
					+ 이벤트 핸들러 : 
					1) img가 100% 나타나도록 만들기
					2) 글자는 가운데 정렬, 글자크기 20픽셀, 패딩값 적용하기
			*/

			$("#btn4").click(function(){
				/*
					1) img가 100% 나타나도록 만들기
						
						대상: img
						이벤트 : fadeTo
						이벤트 핸들러 : img
				*/

				$("img").delay(1000).fadeTo(500,1);
					
				/*
					2) 시간이 들어간 투명도 적용( 100% 나타나도록 설정) 
						글자는 가운데 정렬, 글자크기 20픽셀, 패딩값 적용하기
						
						대상: textArea
						이벤트: fadeTo, css
						이벤트 핸들러: textArea의 글자들
				*/
				$(".textArea").fadeTo(500,1).css({"textAlign":"center","fontSize":"20px","padding":"20px 0"});	
			});
		
		});