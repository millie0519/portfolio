<?php
 include_once($_SERVER['DOCUMENT_ROOT'].'/fragment/header.php');
?>

<section id="main">
            <h2 class="sr-only">안녕하세요, 권민지입니다.</h2>
            <article class="visual">
                <h3 class="sr-only">저는 이렇게 작업합니다.</h3>
                <ol class="visual-container">
                    <li class="webpofol">
                        <a href="webpofol.php">
                            <div class="board">
                                <span class="bar"></span>
                                <p class="tit tit1">Responsive</p>
                                <p class="tit tit2">WEB</p>
                                <p class="txt txt1"><b>반응형 웹 구현</b></p>
                                <p class="txt txt2">어떤 화면에서도 편안히 볼 수 있도록 최적화 된 레이아웃 구성</p>
                            </div>
                        </a>
                    </li>
                    <li class="aboutme">
                        <a href="aboutme.php">
                            <div class="board">
                                <span class="bar"></span>
                                <p class="tit tit1">About</p>
                                <p class="tit tit2">Kwon minji</p>
                                <p class="txt txt1">사용자의 마음과 트렌드를 읽는</p>
                                <p class="txt txt2">웹 퍼블리셔</p>
                            </div>                            
                        </a>
                    </li>
                    <li>
                        <a href="graphics.php">
                            <div class="board">
                                <span class="bar"></span>
                                <p class="tit tit1">The Gallery</p>
                                <!-- <p class="tit tit2">Javascript</p> -->
                                <p class="txt txt1">CSS를 활용한 화면구성</p>
                                <p class="txt txt2">인스타그램을 테마로 한 디자인</p>
                            </div>                              
                        </a>
                    </li>
                    <li>
                        <a href="uiux-renewal.php">
                            <div class="board">
                                <span class="bar"></span>
                                <p class="tit tit1">UI/UX Design</p>
                                <!-- <p class="tit tit2">웹페이지 리뉴얼</p> -->
                                <p class="txt txt1"><b>웹페이지 리뉴얼</b></p>
                                <p class="txt txt2">브랜드의 정체성을 유지하며 <br/> 사용자의 편리성과 기업의 니즈를 모두 충족시킬 디자인</p>
                            </div>                              
                        </a>
                    </li>
                    <li class="game">
                        <a href="https://asterholic.github.io/porori-game/" target="_blank">
                            <div class="board">
                                <span class="bar"></span>
                                <p class="tit tit1">A Mini Game</p>
                                <p class="tit tit2">with a PORORI character</p>
                                <p class="txt txt1">UI/UX를 반영한 Javascript를 통한</p>
                                <p class="txt txt2">2D 게임 구현</p>
                            </div>                              
                        </a>
                    </li>
                </ol>
                <ul class="visual-pagination">
                    <li class="on"><a href="#"><span>1</span></a></li>
                    <li><a href="#"><span>2</span></a></li>
                    <li><a href="#"><span>3</span></a></li>
                    <li><a href="#"><span>4</span></a></li>
                    <li><a href="#"><span>5</span></a></li>
                </ul>
                <a href="#" class="visual-navigation visual-prev">이전</a>
                <a href="#" class="visual-navigation visual-next">다음</a>
                <a href="#" class="visual-auto pause">재생정지</a>
            </article>
        </section>

<?php
 include_once($_SERVER['DOCUMENT_ROOT'].'/fragment/footer.php');
?>