<?php
 include_once($_SERVER['DOCUMENT_ROOT'].'/fragment/header.php');
?>

        <section id="uiux-app">
            <h2 class="sr-only">맛집 앱 프로젝트</h2>
            <article class="intro">
                <div class="intro_txt wow fadeInLeft">
                    <h2>맛집 앱 프로젝트</h2>
                    <p>
                        1. UI/UX 콘셉트 아이디어 도출 및 분석 <br />
                        2. 페이퍼 프로토타입 제작 <br />
                        3. 정보구조 설계
                    </p>
                    <p>
                        프로젝트 개발 과제의 목표를 달성하기 위해서 사용자 리서치 결과를 토대로 <br />
                        UI/UX 콘셉트 아이디어를 도출 및 분석하였다. <br />
                        이 후 페이퍼 프로토 타입 제작하였고 프로토타이핑을 이용한 분석을 통해 <br />
                        개선된 결과를 가지고 사용자의 니즈에 부합하는 기준을 도출하였다.
                    </p>
                </div>
                <div class="mockup wow flipInY">
                    <img src="./images/uiux/app/img_mockup22.png" alt="앱 시안 목업파일">
                </div>
            </article>
            <article>
                <div class="top">
                    <h3>최종목표</h3>
                </div>
               <div class="txt">
                   <p>사용자들에게 다양한 화곡역 주변 다양한 맛집들을 안내하고 식사 장소선정에 소요되는 시간절약과 선택지 제공</p>
               </div>
            </article>
            <article class="concept">
                <div class="top">
                    <h3>컨셉트 아이디어 정의</h3>
                </div>
                <div class="txt">
                    <h4>WHO</h4>
                    <p>20~30대 / 남녀 / 강서구 / 직업훈련생</p>

                    <h4>WHY</h4>
                    <p>
                        근처 음식점을 모르는 사람들이 어플을 통해서 가성비 맛집을 쉽게 찾고
                        메뉴 선택의 시간을 줄여 만족스러운 식사를 하기 위해서
                    </p>

                    <h4>WHAT</h4>
                    <p>식사 장소를 알아보는데 드는 시간 절약 및 선택지 제공</p>

                    <h4>HOW</h4>
                    <p>
                        네이버나 다음 지도 서비스 등과 연동하여 지도상으로 주변 맛집을 한눈에 볼 수 있도록 한다	빅데이터를 통한 선호
                        식당 추천, 거리 순, 가격대 순 , 평점 순, 음식종류별로 주변 식당을 검색할 수 있도록 정보를 제공
                    </p>
                </div>
            </article>
            <article>
                <div class="top">
                    <h3>경쟁사 분석</h3>
                </div>
                <div class="txt">
                    <img src="./images/uiux/app/img_baemin.jpg" alt="배달의 민족 분석">
                </div>
            </article>
            <article class="persona">
                <div class="top">
                    <h3>Persona &amp; Story</h3>
                </div>
                <div class="content">
                    <div class="profile">
                        <div class="lft">
                            <div class="frame">
                                <img src="./images/uiux/app/img_profile.jpg" alt="프로필사진">
                            </div>
                            <span class="name">윤혜인</span>
                            <span class="sub">26세, 직업훈련생</span>
                            <p>화곡역은 처음인데 <br /> 근처 맛집을 알고 싶습니다.</p>
                        </div>
                        <div class="rgt">
                            <h4>프로필</h4>
                            <p>
                                화곡역 근처 학원에서 직업훈련을 시작하였다.
                                식사 후엔 카페에 가서 커피를 마시곤 한다.
                                맛집 찾아다니는 것을 선호한다.
                            </p>

                            <h4>동기/목적/니즈</h4>
                            <p>
                                떡볶이를 좋아해서 화곡역 근처에 맛있는 분식집을 알고 싶다.
                                테이블 사이 거리가 넉넉한 공간이 넓은 식당을 찾고 싶다.
                                화곡역 주변의 맛집을 탐방할 예정이다.                                
                            </p>

                            <h4>Pain Point</h4>
                            <p>
                                방문 했던 곳이 생각보다 먼 곳에 위치해 있어 점심시간 내에 돌아오지 못한 적이 있었다.
                                맛집이라고 소문난 곳을 찾아갔는데 위생이 좋지 않았다.
                                영업시간에 찾아갔는데 가게 문이 닫혀있었다.
                            </p>
                        </div>
                        <div class="btm">
                            <img src="./images/uiux/app/img_provency.png" alt="성향">
                        </div>
                    </div>
                    <div class="story">
                        <h4>사용자 스토리</h4>
                        <p>
                            혜인씨는 오늘 학원 첫 수업에 참석하였다. 점심시간이 되었는데 뭘 먹어야 할지 모르겠다. 학원 근방에 많이 걷지 
                            않아도 될 가까운 곳에 음식점이 얼마나 있는지 궁금하다. 어제 저녁 예능 프로그램에서 본 음식이 생각났다. 음식
                            이름을 검색하여 해당 음식을 팔고있는 후기가 좋은 음식점들을 훑어본다.
                            식사 후 항상 커피를 마시는게 습관인 하영씨는 화곡역 근처에 테이크아웃 할 수 있는 카페를 알아두고 싶다고 
                            생각했다.
                        </p>
                    </div>
                    <div class="scenario">
                        <h4>시나리오</h4>
                        <div class="timeline">
                            <div class="scene no01 wow fadeInDown">
                                <div class="frame">
                                    <img src="./images/uiux/app/img_scene01.jpg" alt="장면1">
                                </div>
                                <div class="txt">
                                    <h5>시나리오</h5>
                                    <p>학원 첫 수업에 참석하여 점심시간이 되었는데 뭘 먹을지 모르겠다.</p>
                                    <h5>니즈(Needs)</h5>
                                    <p>화곡역 근처 맛집들을 알고 싶다.</p>
                                    <h5>사용자 행동</h5>
                                    <p>앱 작동</p>
                                    <h5>기능(feature)</h5>
                                    <p>GPS 작동</p>
                                </div>
                            </div>
                            <div class="scene no02 wow fadeInDown" data-wow-delay="200ms">
                                <div class="frame">
                                    <img src="./images/uiux/app/img_scene02.jpg" alt="장면2">
                                </div>
                                <div class="txt">
                                    <h5>시나리오</h5>
                                    <p>멀지 않은 학원 근방에서 점심식사를 하고 싶어서 가까운 곳을 찾는다.</p>
                                    <h5>니즈(Needs)</h5>
                                    <p>내가 현재 있는 곳에서 얼마나 떨어진 곳에 음식점이 있는지 알고 싶다.</p>
                                    <h5>사용자 행동</h5>
                                    <p>위치 검색, 거리 파악</p>
                                    <h5>기능(feature)</h5>
                                    <p>네이버 지도 등을 연동하여 주변 맛집이 한눈에 보이도록 함</p>
                                </div>
                            </div>
                            <div class="scene no03 wow fadeInDown" data-wow-delay="400ms">
                                <div class="frame">
                                    <img src="./images/uiux/app/img_scene03.jpg" alt="장면3">
                                </div>
                                <div class="txt">
                                    <h5>시나리오</h5>
                                    <p>떡볶이가 먹고 싶어져서 떡볶이 맛집을 검색했다.</p>
                                    <h5>니즈(Needs)</h5>
                                    <p>평점 순, 거리 순 등으로 원하는 메뉴를 판매하는 식당들을 보고 싶다.</p>
                                    <h5>사용자 행동</h5>
                                    <p>원하는 메뉴 검색</p>
                                    <h5>기능(feature)</h5>
                                    <p>메뉴 별 인기 맛집 추천</p>
                                </div>
                            </div>
                            <div class="scene no04 wow fadeInDown" data-wow-delay="500ms">
                                <div class="frame">
                                    <img src="./images/uiux/app/img_scene04.jpg" alt="장면4">
                                </div>
                                <div class="txt">
                                    <h5>시나리오</h5>
                                    <p>추천 리스트 식당들의 평점 및 후기를 훑어보았다.</p>
                                    <h5>니즈(Needs)</h5>
                                    <p>방문자들이 추천하는 맛집에 가서 실패 없는 식사를 하고싶다.</p>
                                    <h5>사용자 행동</h5>
                                    <p>평점 및 방문자 리뷰 열람</p>
                                    <h5>기능(feature)</h5>
                                    <p>평점, 방문자 리뷰</p>
                                </div>
                            </div>
                            <div class="number">
                                <ul>
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="plan">
                <div class="top">
                    <h3>콘텐츠 수급계획</h3>
                </div>
                <div class="txt">
                    <table>
                        <caption>콘텐츠 수급계획 리스트</caption>
                        <thead>
                            <tr>
                                <th scope="col">메뉴</th>
                                <th scope="col">콘텐츠</th>
                                <th scope="col">설명</th>
                                <th scope="col">필요성</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">식당 검색</th>
                                <td>식당 검색 기능</td>
                                <td>메뉴나 키워드를 검색하면 카테고리에 맞는 식당들이 목록화 되어 보여짐</td>
                                <td>사용자의 편의성을 높임</td>
                            </tr>
                            <tr>
                                <th scope="row">BEST 맛집</th>
                                <td>메뉴 별로 <br /> BEST 맛집 추천</td>
                                <td>원하는 메뉴 카테고리로 들어가면 평점이 높거나 최근 방문 횟수가 높은 식당을 추천</td>
                                <td>맛집 추천을 통해 사용자에게 <br />만족감을 느끼게 해준다.</td>
                            </tr>
                            <tr>
                                <th scope="row">테마 식당 추천</th>
                                <td>혼밥, 회식, 테이크아웃 등 <br /> 테마 별 추천</td>
                                <td>이용하려는 의도별로 맛집을 선택 할 수 있도록 선택지 제공</td>
                                <td>특색 있는 기능으로 사용자들의 <br /> 편의성을 높임</td>
                            </tr>
                            <tr>
                                <th scope="row">맛집 찾기</th>
                                <td>식당 위치 정보 제공</td>
                                <td>네이버지도 등과 연동하여 현재 위치 주변에 있는 식당을 보여줌</td>
                                <td>식당의 정확한 위치 확인</td>
                            </tr>
                            <tr>
                                <th scope="row" rowspan="2">식당 찜 목록</th>
                                <td>내가 선택한 식당 목록을 <br /> 즐겨찾기(보관)</td>
                                <td>방문 예정 또는 방문하였던 인상깊었던 식당 목록을 저장하여 <br /> 이후 이용자가 참고 할 수 있도록 함</td>
                                <td>개인화 서비스</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row"></th> -->
                                <td>나만 볼 수 있는 <br />코멘트 등록</td>
                                <td>나만의 목록에 코멘트 기능을 추가하여 맛있었던 메뉴나 인상깊었던 점 <br /> 등을 개인적으로 메모로 남길 수 있도록 함</td>
                                <td>개인화 서비스</td>
                            </tr>
                            <tr>
                                <th scope="row">갤러리</th>
                                <td>메뉴나 식당 내부 사진 제공</td>
                                <td>업주의 직접 업로드 또는 이용자들의 후기 사진을 인스타 피드처럼 <br /> 이미지만 모아볼수 있도록 제공</td>
                                <td>해당 식당을 방문할 의도가 있는 <br /> 이용자들에게 도움을 줌</td>
                            </tr>
                            <tr>
                                <th scope="row">이용 후기 및 별점</th>
                                <td>별점으로 주는 평점과 <br /> 짧은 이용 후기</td>
                                <td>한눈에 볼 수 있는 별점과 텍스트와 사진 등으로 이용후기를 남길수 있도록 함</td>
                                <td>해당 식당을 방문할 의도가 있는 <br /> 이용자들에게 도움을 줌</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
            <article class="service">
                <div class="top">
                    <h3>Service Concept</h3>
                </div>
                <div class="txt">
                    <ul>
                        <li>
                            <p class="txt1">오늘의 메뉴</p>
                            <p class="txt2">여러가지 테마를 <br /> 기반으로 한 <br /> 메뉴 추천 기능</p>
                        </li>
                        <li>
                            <p class="txt1">내 주변 맛집</p>
                            <p class="txt2">지도화면을 이용하여 <br /> 현재 나의 위치 주변에 있는 <br /> 맛집을 보여줌</p>
                        </li>
                        <li class="pick wow pulse">
                            <p class="txt1">나의 찜 맛집</p>
                            <p class="txt2">
                                맛집 즐겨찾기 기능, <br /> 
                                <b>메모기능</b>을 추가하여 <br />
                                나만 볼수 있는 <b>코멘트</b>를 <br />
                                덧 붙일 수 있음
                            </p>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="prototype">
                <div class="top">
                    <h3>페이퍼 프로토타입</h3>
                </div>
                <div class="txt">
                    <h4>
                        <b>사용자 목표</b>
                        ‘이디야 커피’ 카페를 찾아서 즐겨찾기하고 찜 메뉴 목록에서 ‘이디야 커피’에 ‘토피넛라떼 주문하기’ 라는 내용의 메모를 등록해주세요. 
                    </h4>
                    <div class="mnu">
                        <ol>
                            <li class="on">
                                <a href="#">1. 가게를 ‘찜 메뉴’에 즐겨찾기</a>
                            </li>
                            <li>
                                <a href="#">2. 메모등록 하기</a>
                            </li>
                        </ol>
                        <div class="checkbox">
                            <input type="checkbox" id="exp" name="exp">
                            <label for="exp">설명 전부 보기</label>
                        </div>
                    </div>
                    <div class="content">
                        <div class="case case01">
                            <ul>
                                <li>
                                    <div class="frame">
                                        <span class="num">1</span>
                                        <img src="./images/uiux/app/img_prototype01.jpg" alt="프로토타입">
                                    </div>
                                    <div class="exp">
                                        <ol>
                                            <li>&middot; 시작화면</li>
                                            <li>&middot; 로딩 후 메인화면으로 전환 됨</li>
                                        </ol>
                                    </div>
                                    <div class="pop pop01">
                                        <ol>
                                            <li>&middot; 시작화면</li>
                                            <li>&middot; 로딩 후 메인화면으로 전환 됨</li>
                                        </ol>
                                    </div>
                                    <a href="#" class="clse">닫기</a>
                                </li>
                                <li>
                                    <div class="frame">
                                        <span class="num">2</span>
                                        <img src="./images/uiux/app/img_prototype02.jpg" alt="프로토타입">
                                    </div>
                                    <div class="exp">
                                        <ol>
                                            <li>&middot; 검색창에 검색하기</li>
                                            <li>&middot; 매장명 ‘이디야커피’ 또는 메뉴명 ‘토피넛라떼’ 검색</li>
                                        </ol>
                                    </div>
                                    <div class="pop pop02">
                                        <ol>
                                            <li>&middot; 검색창에 검색하기</li>
                                            <li>&middot; 매장명 ‘이디야커피’ 또는 메뉴명 ‘토피넛라떼’ 검색</li>
                                        </ol>
                                    </div>
                                    <a href="#" class="clse">닫기</a>
                                </li>
                                <li>
                                    <div class="frame">
                                        <span class="num">3</span>
                                        <img src="./images/uiux/app/img_prototype04.jpg" alt="프로토타입">
                                    </div>
                                    <div class="exp">
                                        <ol>
                                            <li>&middot; ‘토피넛라떼’ 검색결과 확인</li>
                                            <li>&middot; 목록의 우측 하트모양 아이콘을 클릭하면 찜메뉴에 등록됨</li>
                                            <li>&middot; 등록 성공한 매장은 ‘분홍색하트’, <br /> &nbsp;&nbsp;미등록 매장은 ‘회색하트’ (아이콘으로 구별 가능)</li>
                                        </ol>
                                    </div>
                                    <div class="pop pop03">
                                        <ol>
                                            <li>&middot; ‘토피넛라떼’ 검색결과 확인</li>
                                            <li>&middot; 목록의 우측 <strong>하트모양 아이콘을 클릭</strong>하면 찜메뉴에 등록됨</li>
                                            <li>&middot; 등록 성공한 매장은 <b>‘분홍색하트’</b>, <br /> 미등록 매장은 <b>‘회색하트’</b> (아이콘으로 구별 가능)</li>
                                        </ol>
                                    </div>
                                    <a href="#" class="clse">닫기</a>
                                </li>
                                <li>
                                    <div class="frame">
                                        <span class="num">4</span>
                                        <img src="./images/uiux/app/img_prototype05.jpg" alt="프로토타입">
                                    </div>
                                    <div class="exp">
                                        <ol>
                                            <li>&middot; 제공하는 3가지 옵션 중 원하는 방식으로 정렬 가능</li>
                                            <li>
                                                &middot; 인기도순 : 찜 등록 많은 순서 <br />
                                                &nbsp; 가까운순 : 현재 나의 위치에서 가까운 순서 <br />
                                                &nbsp; 별점 높은 순 : 최대 5.0 별점 기준으로 별점이 높은 매장순서
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="pop pop04">
                                        <ol>
                                            <li>&middot; 제공하는 3가지 옵션 중 원하는 방식으로 정렬 가능</li>
                                            <li>
                                                &middot; <b>인기도순 :</b>  찜 등록 많은 순서 <br />
                                                &nbsp; <b>가까운순 :</b> 현재 나의 위치에서 <br />가까운 순서 <br />
                                                &nbsp; <b>별점 높은 순 :</b> 최대 5.0 별점 기준으로 별점이 높은 매장순서
                                            </li>
                                        </ol>
                                    </div>
                                    <a href="#" class="clse">닫기</a>
                                </li>
                            </ul>
                        </div>
                        <div class="case case02">
                            <ul>
                                <li>
                                    <div class="frame">
                                        <span class="num">1</span>
                                        <img src="./images/uiux/app/img_prototype01.jpg" alt="프로토타입">
                                    </div>
                                    <div class="exp">
                                        <ol>
                                            <li>&middot; 시작화면</li>
                                            <li>&middot; 로딩 후 메인화면으로 전환 됨</li>
                                        </ol>
                                    </div>
                                    <div class="pop pop01">
                                        <ol>
                                            <li>&middot; 시작화면</li>
                                            <li>&middot; 로딩 후 메인화면으로 전환 됨</li>
                                        </ol>
                                    </div>
                                    <a href="#" class="clse">닫기</a>
                                </li>
                                <li>
                                    <div class="frame">
                                        <span class="num">2</span>
                                        <img src="./images/uiux/app/img_prototype02.jpg" alt="프로토타입">
                                    </div>
                                    <div class="exp">
                                        <ol>
                                            <li>&middot; 메인 화면의 하단 바에서 찜 메뉴를 클릭</li>                                        
                                            <li>&middot; 내가 저장해둔 맛집 목록을 볼 수 있음</li>                                        
                                        </ol>
                                    </div>
                                    <div class="pop pop01">
                                        <ol>
                                            <li>&middot; 메인 화면의 하단 바에서 <br /> <b>찜 메뉴</b>를 클릭</li>                                        
                                            <li>&middot; 내가 저장해둔 맛집 목록을 볼 수 있음</li>
                                        </ol>
                                    </div>
                                    <a href="#" class="clse">닫기</a>
                                </li>
                                <li>
                                    <div class="frame">
                                        <span class="num">3</span>
                                        <img src="./images/uiux/app/img_prototype03.jpg" alt="프로토타입">
                                    </div>
                                    <div class="exp">
                                        <ol>
                                            <li>&middot; 나의 찜 맛집 목록 확인</li>                                     
                                            <li>&middot; 목록에서 ‘이디야커피’를 찾음</li>                                     
                                            <li>&middot; ‘메모 등록’ 버튼 클릭</li>                                     
                                        </ol>
                                    </div>
                                    <div class="pop pop01">
                                        <ol>
                                            <li>&middot; 나의 찜 맛집 목록 확인</li>                                     
                                            <li>&middot; 목록에서 <b>‘이디야커피’</b>를 찾음</li>                                     
                                            <li>&middot; <strong>‘메모 등록’</strong> 버튼 클릭</li>     
                                        </ol>
                                    </div>
                                    <a href="#" class="clse">닫기</a>
                                </li>
                                <li>
                                    <div class="frame">
                                        <span class="num">4</span>
                                        <img src="./images/uiux/app/img_prototype06.jpg" alt="프로토타입">
                                    </div>
                                    <div class="exp">
                                        <ol>
                                            <li>&middot; 텍스트 입력 가능한 창이 아래로 생성됨</li>                                        
                                            <li>&middot; ‘토피넛라떼 주문하기’ 텍스트 입력</li>                                        
                                            <li>&middot; ‘확인’ 버튼을 누르면 저장됨</li>                                        
                                        </ol>
                                    </div>
                                    <div class="pop pop01">
                                        <ol>
                                            <li>&middot; 텍스트 입력 가능한 창이 아래로 생성됨</li>                                        
                                            <li>&middot; ‘토피넛라떼 주문하기’ <br /> <b>텍스트 입력</b></li>                                        
                                            <li>&middot; <b>‘확인’</b><strong>버튼을 누르면 저장</strong>됨</li>    
                                        </ol>
                                    </div>
                                    <a href="#" class="clse">닫기</a>
                                </li>
                                <li>
                                    <div class="frame">
                                        <span class="num">5</span>
                                        <img src="./images/uiux/app/img_prototype07.jpg" alt="프로토타입">
                                    </div>
                                    <div class="exp">
                                        <ol>
                                            <li>&middot; 저장된 메모는 목록 안에서 확인</li>                                        
                                            <li>&middot; 수정 및 추가 입력이 필요하면 ‘메모 등록’ 버튼을 다시 클릭하면 가능</li>                                        
                                        </ol>
                                    </div>
                                    <div class="pop pop01">
                                        <ol>
                                            <li>&middot; 저장된 메모는 목록 안에서 확인</li>                                        
                                            <li>&middot; <b>수정 및 추가 입력</b>이 필요하면 <strong>‘메모 등록’ 버튼을</strong> <br /> <strong>다시 클릭</strong>하면 가능</li>
                                        </ol>
                                    </div>
                                    <a href="#" class="clse">닫기</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            <article class="architecture">
                <div class="top">
                    <h3>Information Architecture</h3>
                </div>
                <div class="txt">
                    <img src="./images/uiux/app/img_architecture.JPG" alt="정보구조설계">
                </div>
            </article>
            <article class="wire">
                <div class="top">
                    <h3>Wire Frame</h3>
                </div>
                <div class="txt">
                    <div class="frame">
                        <img src="./images/uiux/app/img_wireframe.jpg" alt="와이어프레임">
                    </div>
                    <div class="description">
                        <table>
                            <caption>화면설명</caption>
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Description(화면설명)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>App 런처 화면</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>SNS 로그인 (카카오톡, 네이버, 페이스북)</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>이메일로 가입하기</td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>이메일로 로그인하기</td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <caption>화면설명</caption>
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Description(화면설명)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>검색 창, 지도검색으로 이동</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>한식, 일식 등 메뉴 카테고리</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>오늘의 메뉴 <br /> (테마별 메뉴 추천)</td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>추천맛집 < , > 버튼 이용하여 좌우로 이동 가능</td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>하단바(찜메뉴,홈,마이 페이지)</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <caption>화면설명</caption>
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Description(화면설명)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>검색결과 확인</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>‘추천순’ 클릭하면 거리순, 평점순으로 정렬 기준 변경가능</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>지도 아이콘 클릭시 위치 확인</td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>하트 아이콘은 클릭시 분홍색으로 UI 변경됨 (찜 메뉴에 등록), 재클릭시 복구(찜 삭제)</td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <caption>화면설명</caption>
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Description(화면설명)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>하단바의 찜메뉴 클릭시 <br /> 해당 화면 진입</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>내가 찜 해놓은 가게 목록 확인 가능</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>목록에서 삭제 원할 시, <br /> 오른쪽 하트 아이콘 클릭</td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <caption>화면설명</caption>
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Description(화면설명)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>메모등록 아이콘 클릭시 아래목록이 아래로 밀려나며 메모등록창 생성</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>메모 입력 후 ‘확인＇버튼 클릭하면 저장됨</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td></td>
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