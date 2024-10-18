<?php
    /*
     24/10/18
     전체흐름
    사용자 입력: 사용자가 **write_skin.php**에서 작성자 이름을 입력합니다.
    데이터 처리: 입력된 이름이 **write.php**에서 처리되고, **view.php**로 전달됩니다.
    데이터 수신: **view.php**에서 URL에서 작성자 이름을 수신하여 저장합니다.
    데이터 출력: **view_skin.php**에서 수신한 작성자 이름을 사용자에게 보여줍니다.
    이 과정은 게시글 작성 및 보기 기능을 구현하는 데 필수적인 흐름
    
    ex)
    1.write.php에서
    header("Location: view.php?writer=" . urlencode($writer));
    view.php로 보내주고
    
    2.view.php에서
    $writer = isset($_GET['writer']) ? htmlspecialchars($_GET['writer']) : '';
    작성자 이름 받기
    
    view_skin에서 출력할수있게 
    include_once($board_skin_path.'/view.skin.php'); 사용하고
    
    view_skin 에서 사용하면 됨
    
     
     */
?>