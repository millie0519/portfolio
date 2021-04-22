<?php
 include_once($_SERVER['DOCUMENT_ROOT'].'/fragment/header.php');
?>

        <section id="uiux-concept">
            <h2 class="sr-only">스타벅스 APP 콘셉트 도출</h2>
            <article class="intro">
                <h3 class="wow fadeInLeft">
                    <span class="txt1">페르소나,</span>
                    <span class="txt2">사용자스토리,</span>
                    <span class="txt3">시나리오,</span>
                    <span class="txt4">콘텐츠 기획</span>
                </h3>
                <div class="txt wow fadeInRight" data-wow-delay="500ms">
                    <p>
                        좋아하는 앱을 선정하여 목표 고객의 <b>페르소나</b>를 추출하였다. <br />
                        사용자 스토리와 <b>사용자 시나리오</b>를 작성하고, 시나리오에 따른 필요 기능을 도출할 수 있었다. <br />
                        도출된 기능에 대하여 우선순위를 수립하여 <b>주요기능을 선별</b>하였고, <br />
                        선별된 주요 기능의 상세한 내용을 작성해 보았다.
                    </p>
                    <p>
                        주문하기 위하여 긴 줄을 서거나 카운터까지 갈 필요가 없다.<br />
                        고객 만족도를 높이고 대기 시간을 줄여 고객 회전율을 높이는데 일조한<br />
                        스마트 오더의 대표격인 <b>'사이렌 오더'</b>가 있는 <b class="green">'스타벅스'</b>앱을 선정하였다.
                    </p>
                </div>
            </article>
            <article class="content">
                <div class="mnu">
                    <div class="frame">
                        <img src="./images/uiux/concept/logo_green.png" alt="스타벅스 로고">
                    </div>
                    <ul>
                        <li><a href="#">페르소나</a></li>
                        <li><a href="#">사용자<br />시나리오</a></li>
                        <li><a href="#">콘텐츠<br />수급계획</a></li>
                    </ul>
                </div>
                <div class="container">
                    <div class="persona">
                        <div class="lft-container">
                            <div class="profile">
                                <div class="frame">
                                    <img src="./images/uiux/concept/img01_profile.png" alt="프로필사진">
                                </div>
                                <dl>
                                    <dt>유송희</dt>
                                    <dd>30세, 미혼</dd>
                                    <dd>판교 거주</dd>
                                    <dd>게임관련회사 재직중</dd>
                                    <dd>아이스 바닐라 라떼 선호</dd>
                                </dl>
                            </div>
                            <div class="propenc">
                                <img src="./images/uiux/concept/img02_propenc.png" alt="성향 그래프">
                            </div>
                        </div>
                        <div class="rgt-container">
                            <div class="box">
                                <h4>프로필</h4>
                                <p>
                                    점심식사 후에는 항상 커피를 즐겨 마신다. <br />
                                    카페인이 강하거나 너무 진한 커피는 잘 마시지 못한다. <br />
                                    스타벅스 브랜드를 좋아하여 프리퀀시 등 브랜드 행사에도 항상 참여 하곤 한다.
                                </p>
                            </div>
                            <div class="box">
                                <h4>동기</h4>
                                <p>
                                    하나의 브랜드의 카페만 중점적으로 방문하여 리워드를 모아 무료 음료 쿠폰 등을 받는 것이 좋다.
                                </p>
                            </div>
                            <div class="box">
                                <h4>목적/니즈</h4>
                                <p>
                                    디카페인으로의 선택 유무나 시럽 양과 우유 종류 등 취향대로 음료를 커스텀하여 주문하고 싶다.
                                </p>
                            </div>
                            <div class="box">
                                <h4>Pain Point</h4>
                                <p>
                                    식사 후 카페에 가면 대기 줄이 너무 길어서 한시간 밖에 안되는 점심시간이 항상 너무 빠듯하다. <br />
                                    대기 인원이 많고 복잡할 때에는 시럽의 양 등 이것저것 내가 원하는 대로 변경하여 주문하기 불편하다.
                                </p>
                            </div>
                            <div class="box">
                                <h4>시나리오</h4>
                                <p>
                                    송희씨는 오늘도 점심식사를 마치고 커피를 한잔 하려고 한다.  길 건너편에 보이는 스타벅스에는 
                                    사람이 항상 많아 대기시간이 길다. 그래서 스타벅스로 가는 도중에 어플에 들어가서 사이렌오더를 
                                    켰다. 지금 현재 나의 위치에서 가장 가까운 매장을 선택했다.
                                </p>
                                <p>                                      
                                    오늘은 두유가 들어간 라떼가 먹고 싶어서 나만의 메뉴에 들어가서 카페 라떼를 선택하여  우유 
                                    옵션을 두유로 변경하였다. 미리 선불 충전해 놓은 카드로 어플 안에서 모바일 결제까지 완료하여 
                                    대기 번호를 받고 스타벅스로 출발한다.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="scenario">
                        <ul>
                            <li>
                                <dl>
                                    <dt>
                                        <img src="./images/uiux/concept/scenario_img01.jpg" alt="#">
                                    </dt>
                                    <dd>
                                        <span>시나리오</span>
                                        <p>점심시간엔 회사 근처 카페들이 모두 항상 사람이 많아 대기 시간이 길다.</p>                                        
                                    </dd>
                                    <dd>
                                        <span>니즈(needs)</span>
                                        <p>시간 절약을 위해 미리 음료를 주문해놓고 까페로 가려고 한다.</p>                                        
                                    </dd>
                                    <dd>
                                        <span>사용자행동</span>
                                        <p>사이렌오더 작동</p>                                        
                                    </dd>
                                    <dd>
                                        <span>기능(feature)</span>
                                        <p>사전 주문</p>                                        
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <img src="./images/uiux/concept/scenario_img02.jpg" alt="#">
                                    </dt>
                                    <dd>
                                        <span>시나리오</span>
                                        <p>현재 나의 위치에서 가장 가까운 스타벅스 매장을 찾는다.</p>                                        
                                    </dd>
                                    <dd>
                                        <span>니즈(needs)</span>
                                        <p>주문 요청할 가장 가까운 매장을 알고 싶다.</p>                                        
                                    </dd>
                                    <dd>
                                        <span>사용자행동</span>
                                        <p>매장 검색</p>                                        
                                    </dd>
                                    <dd>
                                        <span>기능(feature)</span>
                                        <p>위치 – GPS 작동</p>                                        
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <img src="./images/uiux/concept/scenario_img03.jpg" alt="#">
                                    </dt>
                                    <dd>
                                        <span>시나리오</span>
                                        <p>두유가 들어간 라떼가 먹고 싶어서 카페 라떼를 선택하여 우유 옵션을 <br /> 두유로 변경하였다.</p>                                        
                                    </dd>
                                    <dd>
                                        <span>니즈(needs)</span>
                                        <p>나의 취향대로 커스텀하여 주문하길 원한다.</p>                                        
                                    </dd>
                                    <dd>
                                        <span>사용자행동</span>
                                        <p>퍼스널 옵션 선택</p>                                        
                                    </dd>
                                    <dd>
                                        <span>기능(feature)</span>
                                        <p>음료 옵션 변경</p>                                        
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <img src="./images/uiux/concept/scenario_img04.jpg" alt="#">
                                    </dt>
                                    <dd>
                                        <span>시나리오</span>
                                        <p>미리 선불 충전해 놓은 카드로 어플 안에서 모바일 결제까지 완료하여 <br /> 대기 번호를 받았다.</p>                                        
                                    </dd>
                                    <dd>
                                        <span>니즈(needs)</span>
                                        <p>모바일로 선 결제하여 매장에 도착 후 음료를 바로 수령하고 싶다.</p>                                        
                                    </dd>
                                    <dd>
                                        <span>사용자행동</span>
                                        <p>선불 충전 카드로 결제완료</p>                                        
                                    </dd>
                                    <dd>
                                        <span>기능(feature)</span>
                                        <p>모바일 결제 시스템</p>                                        
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="contentplan">
                        <table>
                            <caption>콘텐츠 수급계획</caption>
                            <thead>
                                <tr>
                                    <th scope="col" class="top1">카테고리 <br /> (메뉴)</th>
                                    <th scope="col" class="top2">콘텐츠</th>
                                    <th scope="col" class="top3">설명</th>
                                    <th scope="col" class="top4">필요성</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="sub">사이렌오더</th>
                                    <td>음료 커스텀 및 사전 주문 기능</td>
                                    <td>매장에 도착하기 전에 내가 원하는 종류의 커피를 미리 주문 및 결제 가능한 시스템.</td>
                                    <td>가장 많은 이용자를 유입시킨 스타벅스 어플의 핵심 기능으로 주문 시간을 단축시킨다.</td>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="2" class="sub">CARD</th>
                                    <td>스타벅스 선불카드 등록 및 사용</td>
                                    <td>
                                        선불카드를 등록하여 충전 후 사용하면 Reward 적립이 가능하며,
                                        잔액이 일정금액보다 낮아지면 등록한 신용카드에서 자동으로 충전해주는 기능이 있다.                                
                                    </td>
                                    <td>사용자의 편의성 향상과 매출증대 효과</td>
                                </tr>
                                <tr>
                                    <!-- <th scope="row">CARD</th> -->
                                    <td>결제하기</td>
                                    <td>핸드폰을 흔드는 동작만으로도 결제 가능한 바코드 창이 팝업됨</td>
                                    <td>빠른 결제로 이어져 사용자의 시간 절약 및 효율 향상</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sub">나만의 메뉴</th>
                                    <td>커스텀 음료 등록</td>
                                    <td>나만의 맞춤 메뉴를 제조할 수 있으며 복잡하게 세팅해도 바로 주문이 가능하며 메뉴 공유도 가능하다.</td>
                                    <td>사용자 맞춤 서비스제공, 커스텀 메뉴를 이용자 사이에 공유가 가능하게 함으로써 브랜드 홍보 및 가치를 높임</td>
                                </tr>   
                                <tr>
                                    <th scope="row" class="sub">Reward</th>
                                    <td>음료 1잔 당 별 적립</td>
                                    <td>선불카드를 통해 결제를 하면 음료 1잔 당 별이 적립되며 Green, Gold 등 회원 등급을 부여하여 혜택을 제공한다.</td>
                                    <td>사용자에게 등급별 혜택을 제공함으로써 충성고객을 만들 수 있다.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
        </section>

<?php
 include_once($_SERVER['DOCUMENT_ROOT'].'/fragment/footer.php');
?>