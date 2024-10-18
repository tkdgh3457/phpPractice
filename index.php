<?php
    /*
       php 공부 메모
        
       24/10/18
       
       Java와 PHP의 구조적 차이
       view.php와 view.skin.php의 역할을 Java MVC 패턴에대응하면
       
       Java MVC 패턴 (Spring 기반):
       Controller: 요청을 처리하고, 비즈니스 로직을 호출한 후, 뷰를 반환합니다.
       Service: 비즈니스 로직을 처리하는 계층입니다.
       DAO (Data Access Object): 데이터베이스와 직접 상호작용하여 데이터를 가져오거나 저장하는 역할을 합니다.
       Mapper: SQL 쿼리와 자바 객체 간의 매핑을 담당합니다.
       View (JSP, Thymeleaf 등): 최종적으로 데이터를 사용자에게 출력하는 HTML 기반의 파일입니다.
       
       PHP (그누보드 기준):
       view.php: 게시글 보기와 같은 페이지 요청을 처리하는 컨트롤러 역할을 합니다. 여기서 필요한 데이터를 가져오고, 이를 view.skin.php로 넘깁니다.
       view.skin.php: 데이터가 넘어오면 그 데이터를 HTML로 출력하는 뷰 파일입니다. HTML과 PHP가 섞여서 실제로 화면에 표시될 내용을 구성합니다.
       
       자바로치면
       view는 controller
       view_skin은 html(jsp, tymeleaf) 파일
       
       Java: Controller가 데이터를 처리하고, 그 데이터를 html파일 (JSP/Thymeleaf)로 넘겨서 화면에 출력합니다.
       자바 구조는(Controller -> Service -> DAO -> Mapper) 
       PHP (그누보드): view.php가 데이터를 처리하고, 그 데이터를 view.skin.php로 넘겨서 HTML로 출력합니다.
       PHP 구조는 View->View_skin 이런느낌
       
       php는
       include_once(&변수(맞게 설정),'/경로');
       view에서 view_skin을 불러오고 view에서 생성된 모든 변수가
       view_skin으로 넘어가는것 
       파일 마지막에 사용해야 모든 변수가 넘어갈수있음.
       중간 사용시 후반부는 넘어가지않음    
         
        
        
     */
?>