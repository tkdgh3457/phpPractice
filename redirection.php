<?php
    /*
     
     header("Location: http://www.example.com");
     exit;
     
     exit-> 리디렉션 후 추가적인 코드 실행을 방지하기 위해 사용됩니다.
      이는 중복 실행을 방지하고, 불필요한 코드 실행을 피하기 위한 좋은 습관
      
      ex)
      header("Location: view.php?writer=" . urlencode($writer));와 같은 방식으로
        ★urlencode($writer) 여기는 writer 에서 사용한 변수명 
        ★writer는 (넘길 파라미터 이름)을 view.php에 전달합니다.
      
     */
?>