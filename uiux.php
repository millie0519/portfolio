<?php
 include_once($_SERVER['DOCUMENT_ROOT'].'/fragment/header.php');
?>

        <section class="uiux-banr">
            <ul>
                <li class="on">slide01</li>
                <li>slide02</li>
                <li>slide03</li>
                <li>slide04</li>
            </ul>
            <ol class="pagination">
                <li class="on"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
            </ol>
            <a href="#" class="navi prev">이전</a>
            <a href="#" class="navi next">다음</a>
        </section>
        <section id="uiux-content">
            <article class="uxis">
                <h2>내가 생각하는 사용자 경험</h2>
                <span class="en">User Experience</span>
                <div class="txt">
                    <p>
                        정해진 틀에 갇혀 있지 않고 주변과 사물을  다양한 시각으로 보는 것, <br />
                        그것이 바로 UX디자인의 시작이라고 생각한다.
                    </p>
                    <p>
                        UX 디자인은 이용자에게 더 편리한 경험을 갖게 해주는 것이라고만 생각해왔었는데 <br />
                        그로 인하여 더불어 즐거운 경험과 그 기억을 갖게 해줄 수 있는 점도  있는 것 같다. <br />
                    </p>
                    <p>
                        결국 이용자에게 깊은 인상을 주어 다시 찾게 만드는 것이다.                        
                    </p>
                </div>
                <img src="./images/uiux/ux-img01.jpg" alt="UX예시">
                <p class="sub">
                    작은 화살표 스티커 하나로 인해 <br />
                    그동안 버스정류장에서 방향을 헷갈려 헤매었던 모든 이용객들에게 편리함을 주었다.
                </p>
            </article>
            <article class="show">
                <div class="top">
                    <h2>UI/UX Design portfolio</h2>
                </div>
                <ul>
                    <li>
                        <a href="uiux-renewal.php"><img src="./images/uiux/thmb01.jpg" alt="카카오 리뉴얼"></a>
                        <p>카카오프렌즈샵 페이지 리뉴얼</p>
                    </li>
                    <li>
                        <a href="uiux-concept.php"><img src="./images/uiux/thmb02.jpg" alt="스타벅스 앱 컨셉트 도출"></a>
                        <p>스타벅스 어플리케이션 컨셉트 도출</p>
                    </li>
                    <li>
                        <a href="uiux-app.php"><img src="./images/uiux/thmb03.jpg" alt="맛집 앱 기획"></a>                        
                        <p>맛집 어플리케이션 기획</p>
                    </li>
                </ul>
            </article>            
        </section>

<?php
 include_once($_SERVER['DOCUMENT_ROOT'].'/fragment/footer.php');
?>