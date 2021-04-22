<?php
	header("Content-Type: text/html; charset=UTF-8"); 

	// 캐쉬를 사용하지 않는 방법
	header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
	header("Pragma: no-cache"); //HTTP 1.0
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

    session_cache_expire(30);//세션유지시간을 30분으로 설정
    session_start();//세션 데이터 사용의 시작을 알림

    //메인메뉴 활성화 표시
    if($_GET["idx"]==null){
        $idx = "100";
    }else{
        $idx = $_GET["idx"];
    }

    //서브메뉴 활성화 표시
    if($_GET["sdx"]==null){
        $sdx = "100";
    }else{
        $sdx = $_GET["sdx"];
    }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>권민지 포트폴리오</title>
    <link rel="stylesheet" href="./css/reset.css"> 
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/javascript.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/gnb.js"></script>
    <script src="./js/aboutme.js"></script>
    <script src="./js/uiux.js"></script>
    <script src="./js/uiuxall.js"></script>
    <script src="./js/graphics.js"></script>
    <script src="./js/webpofol.js"></script>
</head>
<body>
    <div id="wrap">
        <header>
            <h1><a href="index.php"><img src="./images/name_logo.png" alt="권민지"></a></h1>
            <nav>
                <ul>
                    <li><a href="aboutme.php">About me</a></li>
                    <li>
                        <a href="uiux.php">UI/UX Design</a>
                        <ol>
                            <li><a href="uiux.php">UX is</a></li>
                            <li><a href="uiux-renewal.php">사이트 리뉴얼</a></li>
                            <li><a href="uiux-concept.php">콘셉트 도출</a></li>
                            <li><a href="uiux-app.php">맛집 앱 기획</a></li>
                        </ol>
                    </li>
                    <li><a href="webpofol.php">WebPofol</a></li>
                    <li><a href="graphics.php">Graphics</a></li>
                    <li><a href="https://asterholic.github.io/porori-game/" target="_blank">My Project</a></li>
                </ul>
            </nav>
            <div class="mnu_bg"></div>
        </header>