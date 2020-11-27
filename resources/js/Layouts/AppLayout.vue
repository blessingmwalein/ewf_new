<template>
    <div class="min-h-screen bg-gray-100">
          
        <div id="shopify-section-header" class="shopify-section shopify-section__header">
            <section data-section-id="header" data-section-type="header">
                <header class="header header--inline header--search-expanded" role="banner">
                    <div class="container">
                        <div class="header__inner">
                          <nav class="header__mobile-nav hidden-lap-and-up">
                            <button class="header__mobile-nav-toggle icon-state touch-area" data-action="toggle-menu"
                              aria-expanded="false" aria-haspopup="true" aria-controls="mobile-menu" aria-label="Open menu">
                              <span class="icon-state__primary"><svg focusable="false" class="icon icon--hamburger-mobile"
                                  viewBox="0 0 20 16" role="presentation">
                                  <path d="M0 14h20v2H0v-2zM0 0h20v2H0V0zm0 7h20v2H0V7z" fill="currentColor" fill-rule="evenodd">
                                  </path>
                                </svg></span>
                              <span class="icon-state__secondary"><svg focusable="false" class="icon icon--close" viewBox="0 0 19 19"
                                  role="presentation">
                                  <path
                                    d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z"
                                    fill="currentColor" fill-rule="evenodd"></path>
                                </svg></span>
                            </button>
                            <div id="mobile-menu" class="mobile-menu" aria-hidden="true"><svg focusable="false"
                                class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9" role="presentation">
                                <path
                                  d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                  fill="#ffffff"></path>
                              </svg>
                              <div class="mobile-menu__inner">
                                <div class="mobile-menu__panel">
                                  <div class="mobile-menu__section">
                                    <ul class="mobile-menu__nav" data-type="menu" role="list">
                                      <li class="mobile-menu__nav-item"><button class="mobile-menu__nav-link" data-type="menuitem"
                                          aria-haspopup="true" aria-expanded="false" aria-controls="mobile-panel-0"
                                          data-action="open-panel">All Products<svg focusable="false" class="icon icon--arrow-right"
                                            viewBox="0 0 8 12" role="presentation">
                                            <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none"
                                              stroke-linecap="square"></path>
                                          </svg></button></li>
                                      <li class="mobile-menu__nav-item"><a href="collections/new-arrivals.html"
                                          class="mobile-menu__nav-link" data-type="menuitem">New Arrivals</a></li>
                                      <li class="mobile-menu__nav-item"><a href="collections/sales.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Sales</a></li>
                                      <li class="mobile-menu__nav-item"><a href="collections.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">All Collections</a></li>
                                      <li class="mobile-menu__nav-item"><a href="pages/brands.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Brands</a></li>
                                      <li class="mobile-menu__nav-item"><button class="mobile-menu__nav-link" data-type="menuitem"
                                          aria-haspopup="true" aria-expanded="false" aria-controls="mobile-panel-5"
                                          data-action="open-panel">Information<svg focusable="false" class="icon icon--arrow-right"
                                            viewBox="0 0 8 12" role="presentation">
                                            <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none"
                                              stroke-linecap="square"></path>
                                          </svg></button></li>
                                      <li class="mobile-menu__nav-item"><a href="blogs/news.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Blog</a></li>
                                      <li class="mobile-menu__nav-item"><a href="pages/contact-us.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Contact</a></li>
                                    </ul>
                                  </div>
                                  <div class="mobile-menu__section mobile-menu__section--loose">
                                    <p class="mobile-menu__section-title heading h5">Need help?</p>
                                    <div class="mobile-menu__help-wrapper"><svg focusable="false" class="icon icon--bi-phone"
                                        viewBox="0 0 24 24" role="presentation">
                                        <g stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                          <path d="M17 15l-3 3-8-8 3-3-5-5-3 3c0 9.941 8.059 18 18 18l3-3-5-5z" stroke="#1e2d7d">
                                          </path>
                                          <path d="M14 1c4.971 0 9 4.029 9 9m-9-5c2.761 0 5 2.239 5 5" stroke="#00badb"></path>
                                        </g>
                                      </svg><span>Call us 1-800-663-4040</span>
                                    </div>
                                    <div class="mobile-menu__help-wrapper"><svg focusable="false" class="icon icon--bi-email"
                                        viewBox="0 0 22 22" role="presentation">
                                        <g fill="none" fill-rule="evenodd">
                                          <path stroke="#00badb"
                                            d="M.916667 10.08333367l3.66666667-2.65833334v4.65849997zm20.1666667 0L17.416667 7.42500033v4.65849997z">
                                          </path>
                                          <path stroke="#1e2d7d" stroke-width="2"
                                            d="M4.58333367 7.42500033L.916667 10.08333367V21.0833337h20.1666667V10.08333367L17.416667 7.42500033">
                                          </path>
                                          <path stroke="#1e2d7d" stroke-width="2"
                                            d="M4.58333367 12.1000003V.916667H17.416667v11.1833333m-16.5-2.01666663L21.0833337 21.0833337m0-11.00000003L11.0000003 15.5833337">
                                          </path>
                                          <path d="M8.25000033 5.50000033h5.49999997M8.25000033 9.166667h5.49999997" stroke="#00badb"
                                            stroke-width="2" stroke-linecap="square"></path>
                                        </g>
                                      </svg><a href="mailto:info@warehouse.com">info@warehouse.com</a>
                                    </div>
                                  </div>
                                  <div class="mobile-menu__section mobile-menu__section--loose">
                                    <p class="mobile-menu__section-title heading h5">Follow Us</p>
                                    <ul class="social-media__item-list social-media__item-list--stack list--unstyled" role="list">
                                      <li class="social-media__item social-media__item--facebook">
                                        <a href="https://www.facebook.com/hideflifestyle" target="_blank" rel="noopener"
                                          aria-label="Follow us on Facebook"><svg focusable="false" class="icon icon--facebook"
                                            viewBox="0 0 30 30">
                                            <path
                                              d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm3.2142857-17.1429611h-2.1428678v-2.1425646c0-.5852979.8203285-1.07160109 1.0714928-1.07160109h1.071375v-2.1428925h-2.1428678c-2.3564786 0-3.2142536 1.98610393-3.2142536 3.21449359v2.1425646h-1.0714822l.0032143 2.1528011 1.0682679-.0099086v7.499969h3.2142536v-7.499969h2.1428678v-2.1428925z"
                                              fill="currentColor" fill-rule="evenodd"></path>
                                          </svg>Facebook</a>
                                      </li>


                                      <li class="social-media__item social-media__item--instagram">
                                        <a href="https://www.instagram.com/hidef_lifestyle/" target="_blank" rel="noopener"
                                          aria-label="Follow us on Instagram"><svg focusable="false" class="icon icon--instagram"
                                            role="presentation" viewBox="0 0 30 30">
                                            <path
                                              d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm.0000159-23.03571429c-2.1823849 0-2.4560363.00925037-3.3131306.0483571-.8553081.03901103-1.4394529.17486384-1.9505835.37352345-.52841925.20532625-.9765517.48009406-1.42331254.926823-.44672894.44676084-.72149675.89489329-.926823 1.42331254-.19865961.5111306-.33451242 1.0952754-.37352345 1.9505835-.03910673.8570943-.0483571 1.1307457-.0483571 3.3131306 0 2.1823531.00925037 2.4560045.0483571 3.3130988.03901103.8553081.17486384 1.4394529.37352345 1.9505835.20532625.5284193.48009406.9765517.926823 1.4233125.44676084.446729.89489329.7214968 1.42331254.9268549.5111306.1986278 1.0952754.3344806 1.9505835.3734916.8570943.0391067 1.1307457.0483571 3.3131306.0483571 2.1823531 0 2.4560045-.0092504 3.3130988-.0483571.8553081-.039011 1.4394529-.1748638 1.9505835-.3734916.5284193-.2053581.9765517-.4801259 1.4233125-.9268549.446729-.4467608.7214968-.8948932.9268549-1.4233125.1986278-.5111306.3344806-1.0952754.3734916-1.9505835.0391067-.8570943.0483571-1.1307457.0483571-3.3130988 0-2.1823849-.0092504-2.4560363-.0483571-3.3131306-.039011-.8553081-.1748638-1.4394529-.3734916-1.9505835-.2053581-.52841925-.4801259-.9765517-.9268549-1.42331254-.4467608-.44672894-.8948932-.72149675-1.4233125-.926823-.5111306-.19865961-1.0952754-.33451242-1.9505835-.37352345-.8570943-.03910673-1.1307457-.0483571-3.3130988-.0483571zm0 1.44787387c2.1456068 0 2.3997686.00819774 3.2471022.04685789.7834742.03572556 1.2089592.1666342 1.4921162.27668167.3750864.14577303.6427729.31990322.9239522.60111439.2812111.28117926.4553413.54886575.6011144.92395217.1100474.283157.2409561.708642.2766816 1.4921162.0386602.8473336.0468579 1.1014954.0468579 3.247134 0 2.1456068-.0081977 2.3997686-.0468579 3.2471022-.0357255.7834742-.1666342 1.2089592-.2766816 1.4921162-.1457731.3750864-.3199033.6427729-.6011144.9239522-.2811793.2812111-.5488658.4553413-.9239522.6011144-.283157.1100474-.708642.2409561-1.4921162.2766816-.847206.0386602-1.1013359.0468579-3.2471022.0468579-2.1457981 0-2.3998961-.0081977-3.247134-.0468579-.7834742-.0357255-1.2089592-.1666342-1.4921162-.2766816-.37508642-.1457731-.64277291-.3199033-.92395217-.6011144-.28117927-.2811793-.45534136-.5488658-.60111439-.9239522-.11004747-.283157-.24095611-.708642-.27668167-1.4921162-.03866015-.8473336-.04685789-1.1014954-.04685789-3.2471022 0-2.1456386.00819774-2.3998004.04685789-3.247134.03572556-.7834742.1666342-1.2089592.27668167-1.4921162.14577303-.37508642.31990322-.64277291.60111439-.92395217.28117926-.28121117.54886575-.45534136.92395217-.60111439.283157-.11004747.708642-.24095611 1.4921162-.27668167.8473336-.03866015 1.1014954-.04685789 3.247134-.04685789zm0 9.26641182c-1.479357 0-2.6785873-1.1992303-2.6785873-2.6785555 0-1.479357 1.1992303-2.6785873 2.6785873-2.6785873 1.4793252 0 2.6785555 1.1992303 2.6785555 2.6785873 0 1.4793252-1.1992303 2.6785555-2.6785555 2.6785555zm0-6.8050167c-2.2790034 0-4.1264612 1.8474578-4.1264612 4.1264612 0 2.2789716 1.8474578 4.1264294 4.1264612 4.1264294 2.2789716 0 4.1264294-1.8474578 4.1264294-4.1264294 0-2.2790034-1.8474578-4.1264612-4.1264294-4.1264612zm5.2537621-.1630297c0-.532566-.431737-.96430298-.964303-.96430298-.532534 0-.964271.43173698-.964271.96430298 0 .5325659.431737.964271.964271.964271.532566 0 .964303-.4317051.964303-.964271z"
                                              fill="currentColor" fill-rule="evenodd"></path>
                                          </svg>Instagram</a>
                                      </li>


                                      <li class="social-media__item social-media__item--pinterest">
                                        <a href="https://www.pinterest.fr/HiDEF_Lifestyle/" target="_blank" rel="noopener"
                                          aria-label="Follow us on Pinterest"><svg focusable="false" class="icon icon--pinterest"
                                            role="presentation" viewBox="0 0 30 30">
                                            <path
                                              d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm-.4492946-22.49876954c-.3287968.04238918-.6577148.08477836-.9865116.12714793-.619603.15784625-1.2950238.30765013-1.7959124.60980792-1.3367356.80672832-2.26284291 1.74754848-2.88355361 3.27881599-.1001431.247352-.10374313.4870343-.17702448.7625149-.47574032 1.7840923.36779138 3.6310327 1.39120339 4.2696951.1968419.1231267.6448551.3405257.8093833.0511377.0909873-.1603963.0706852-.3734014.1265202-.5593764.036883-.1231267.1532436-.3547666.1263818-.508219-.0455542-.260514-.316041-.4256572-.4299438-.635367-.230748-.4253041-.2421365-.8027267-.3541701-1.3723228.0084116-.0763633.0168405-.1527266.0253733-.2290899.0340445-.6372108.1384107-1.0968422.3287968-1.5502554.5593198-1.3317775 1.4578212-2.07273488 2.9088231-2.5163011.324591-.09899963 1.2400541-.25867013 1.7200175-.1523539.2867042.05078464.5734084.10156927.8600087.1523539 1.0390064.33760307 1.7953931.9602003 2.2007079 1.9316992.252902.6061594.3275507 1.7651044.1517724 2.5415071-.0833199.3679287-.0705641.6832289-.1770418 1.0168107-.3936666 1.2334841-.9709174 2.3763639-2.2765854 2.6942337-.8613761.2093567-1.5070793-.3321303-1.7200175-.8896824-.0589159-.1545509-.1598205-.4285603-.1011297-.6865243.2277711-1.0010987.5562045-1.8969797.8093661-2.8969995.24115-.9528838-.2166421-1.7048063-.9358863-1.8809146-.8949186-.2192233-1.585328.6350139-1.8211644 1.1943903-.1872881.4442919-.3005678 1.2641823-.1517724 1.8557085.0471811.1874265.2666617.689447.2276672.8640842-.1728187.7731269-.3685356 1.6039823-.5818373 2.3635745-.2219729.7906632-.3415527 1.5999416-.5564641 2.3639276-.098793.3507651-.0955738.7263439-.1770244 1.092821v.5337977c-.0739045.3379758-.0194367.9375444.0505042 1.2703809.0449484.2137505-.0261175.4786388.0758948.6357396.0020943.1140055.0159752.1388388.0506254.2031582.3168026-.0095136.7526829-.8673992.9106342-1.118027.3008274-.477913.5797431-.990879.8093833-1.5506281.2069844-.5042174.2391769-1.0621226.4046917-1.60104.1195798-.3894861.2889369-.843272.328918-1.2707535h.0252521c.065614.2342095.3033024.403727.4805692.5334446.5563429.4077482 1.5137774.7873678 2.5547742.5337977 1.1769151-.2868184 2.1141687-.8571599 2.7317812-1.702982.4549537-.6225776.7983583-1.3445472 1.0624066-2.1600633.1297394-.4011574.156982-.8454494.2529193-1.2711066.2405269-1.0661438-.0797199-2.3511383-.3794396-3.0497261-.9078995-2.11694836-2.8374975-3.32410832-5.918897-3.27881604z"
                                              fill="currentColor" fill-rule="evenodd"></path>
                                          </svg>Pinterest</a>
                                      </li>


                                      <li class="social-media__item social-media__item--youtube">
                                        <a href="https://www.youtube.com/user/hideflifestyle" target="_blank" rel="noopener"
                                          aria-label="Follow us on YouTube"><svg focusable="false" class="icon icon--youtube"
                                            role="presentation" viewBox="0 0 30 30">
                                            <path
                                              d="M15 30c8.2842712 0 15-6.7157288 15-15 0-8.28427125-6.7157288-15-15-15C6.71572875 0 0 6.71572875 0 15c0 8.2842712 6.71572875 15 15 15zm7.6656364-18.7823145C23 12.443121 23 15 23 15s0 2.5567903-.3343636 3.7824032c-.184.6760565-.7260909 1.208492-1.4145455 1.3892823C20.0033636 20.5 15 20.5 15 20.5s-5.00336364 0-6.25109091-.3283145c-.68836364-.1807903-1.23054545-.7132258-1.41454545-1.3892823C7 17.5567903 7 15 7 15s0-2.556879.33436364-3.7823145c.184-.6761452.72618181-1.2085807 1.41454545-1.38928227C9.99663636 9.5 15 9.5 15 9.5s5.0033636 0 6.2510909.32840323c.6884546.18070157 1.2305455.71313707 1.4145455 1.38928227zm-9.302 6.103758l4.1818181-2.3213548-4.1818181-2.3215322v4.642887z"
                                              fill="currentColor" fill-rule="evenodd"></path>
                                          </svg>YouTube</a>
                                      </li>


                                      <li class="social-media__item social-media__item--linkedin">
                                        <a href="https://www.linkedin.com/company/hidef-lifestyle/" target="_blank" rel="noopener"
                                          aria-label="Follow us on LinkedIn"><svg focusable="false" class="icon icon--linkedin"
                                            role="presentation" viewBox="0 0 30 30">
                                            <path
                                              d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zM10.2456033 7.5c-.92709386 0-1.67417473.75112475-1.67417473 1.67662742 0 .92604418.74708087 1.67716898 1.67417473 1.67716898.9233098 0 1.6730935-.7511248 1.6730935-1.67716898C11.9186968 8.25112475 11.1689131 7.5 10.2456033 7.5zM8.80063428 21.4285714h2.88885682v-9.3037658H8.80063428v9.3037658zm4.69979822-9.3037658v9.3037658h2.8829104v-4.6015191c0-1.2141468.2292058-2.3898439 1.7309356-2.3898439 1.4811878 0 1.5001081 1.3879832 1.5001081 2.4667435v4.5246195H22.5V16.326122c0-2.5057349-.5400389-4.4320151-3.4618711-4.4320151-1.4044256 0-2.3466556.7711619-2.7315482 1.502791h-.0394623v-1.2720923h-2.7666859z"
                                              fill="currentColor" fill-rule="evenodd"></path>
                                          </svg>LinkedIn</a>
                                      </li>



                                    </ul>
                                  </div>
                                </div>
                                <div id="mobile-panel-0" class="mobile-menu__panel is-nested">
                                  <div class="mobile-menu__section is-sticky">
                                    <button class="mobile-menu__back-button" data-action="close-panel"><svg focusable="false"
                                        class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                                        <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none"
                                          stroke-linecap="square"></path>
                                      </svg> Back</button>
                                  </div>

                                  <div class="mobile-menu__section">
                                    <div class="mobile-menu__nav-list">
                                      <div class="mobile-menu__nav-list-item"><button
                                          class="mobile-menu__nav-list-toggle text--strong" aria-controls="mobile-list-0"
                                          aria-expanded="false" data-action="toggle-collapsible" data-close-siblings="false">Audio<svg
                                            focusable="false" class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                            <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none"
                                              stroke-linecap="square"></path>
                                          </svg>
                                        </button>

                                        <div id="mobile-list-0" class="mobile-menu__nav-collapsible">
                                          <div class="mobile-menu__nav-collapsible-content">
                                            <ul class="mobile-menu__nav" data-type="menu" role="list">
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/headphones.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Headphones</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/earbuds.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Earbuds</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/portable-speakers.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Portable Speakers</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/turntables.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Turntables</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/walkmans.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Walkmans</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/audio-accessories.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Audio Accessories</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/audio.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Shop All</a>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mobile-menu__nav-list-item"><button
                                          class="mobile-menu__nav-list-toggle text--strong" aria-controls="mobile-list-1"
                                          aria-expanded="false" data-action="toggle-collapsible" data-close-siblings="false">Hi-Fi<svg
                                            focusable="false" class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                            <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none"
                                              stroke-linecap="square"></path>
                                          </svg>
                                        </button>

                                        <div id="mobile-list-1" class="mobile-menu__nav-collapsible">
                                          <div class="mobile-menu__nav-collapsible-content">
                                            <ul class="mobile-menu__nav" data-type="menu" role="list">
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/speakers.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Speakers</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/subwoofers.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Subwoofers</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/sound-bars.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Sound Bars</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/amplifiers.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Amplifiers</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/home-cinema.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Home Cinema</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/a-v-receivers.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">A/V Receivers</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/hi-fi.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Shop All</a>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mobile-menu__nav-list-item"><button
                                          class="mobile-menu__nav-list-toggle text--strong" aria-controls="mobile-list-2"
                                          aria-expanded="false" data-action="toggle-collapsible" data-close-siblings="false">TV &
                                          Entertainment<svg focusable="false" class="icon icon--arrow-bottom" viewBox="0 0 12 8"
                                            role="presentation">
                                            <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none"
                                              stroke-linecap="square"></path>
                                          </svg>
                                        </button>

                                        <div id="mobile-list-2" class="mobile-menu__nav-collapsible">
                                          <div class="mobile-menu__nav-collapsible-content">
                                            <ul class="mobile-menu__nav" data-type="menu" role="list">
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/led-tvs.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">LED TVs</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/oled-tvs.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">OLED TVs</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/projectors.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Projectors</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/blu-ray-dvd-players.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Blu-Ray & DVD Players</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/tv-accessories.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">TV Accessories</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/tv-entertainment.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Shop All</a>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mobile-menu__nav-list-item"><button
                                          class="mobile-menu__nav-list-toggle text--strong" aria-controls="mobile-list-3"
                                          aria-expanded="false" data-action="toggle-collapsible" data-close-siblings="false">Our
                                          Selection<svg focusable="false" class="icon icon--arrow-bottom" viewBox="0 0 12 8"
                                            role="presentation">
                                            <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none"
                                              stroke-linecap="square"></path>
                                          </svg>
                                        </button>

                                        <div id="mobile-list-3" class="mobile-menu__nav-collapsible">
                                          <div class="mobile-menu__nav-collapsible-content">
                                            <ul class="mobile-menu__nav" data-type="menu" role="list">
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/waterproof.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Waterproof</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/portable.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Portable</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/bluetooth.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Bluetooth</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/accessories.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Accessories</a>
                                              </li>
                                              <li class="mobile-menu__nav-item">
                                                <a href="collections/professional-audio.html" class="mobile-menu__nav-link"
                                                  data-type="menuitem">Professional Audio</a>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="mobile-menu__promo-item">
                                      <a href="collections/portable-speakers/brand_jbl.html" class="mobile-menu__promo">
                                        <div class="mobile-menu__image-wrapper">
                                          <div class="aspect-ratio" style="padding-bottom: 66.66666666666667%">
                                            <img class="lazyload image--fade-in"
                                              data-src="//cdn.shopify.com/s/files/1/0065/3095/7363/files/Header---2_550x.jpg?v=1559433650"
                                              alt="">
                                          </div>
                                        </div>

                                        <span class="mobile-menu__image-heading heading">New JBL Portable Speakers</span>
                                        <p class="mobile-menu__image-text">From $39.95 only!</p>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div id="mobile-panel-5" class="mobile-menu__panel is-nested">
                                  <div class="mobile-menu__section is-sticky">
                                    <button class="mobile-menu__back-button" data-action="close-panel"><svg focusable="false"
                                        class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                                        <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none"
                                          stroke-linecap="square"></path>
                                      </svg> Back</button>
                                  </div>

                                  <div class="mobile-menu__section">
                                    <ul class="mobile-menu__nav" data-type="menu" role="list">
                                      <li class="mobile-menu__nav-item">
                                        <a href="#" class="mobile-menu__nav-link text--strong">Information</a>
                                      </li>
                                      <li class="mobile-menu__nav-item"><a href="pages/meet-the-team.html"
                                          class="mobile-menu__nav-link" data-type="menuitem">Meet the team</a></li>
                                      <li class="mobile-menu__nav-item"><a href="pages/about.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">About</a></li>
                                      <li class="mobile-menu__nav-item"><a href="pages/faq.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">FAQ</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div id="mobile-panel-0-0" class="mobile-menu__panel is-nested">
                                  <div class="mobile-menu__section is-sticky">
                                    <button class="mobile-menu__back-button" data-action="close-panel"><svg focusable="false"
                                        class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                                        <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none"
                                          stroke-linecap="square"></path>
                                      </svg> Back</button>
                                  </div>

                                  <div class="mobile-menu__section">
                                    <ul class="mobile-menu__nav" data-type="menu" role="list">
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections.html" class="mobile-menu__nav-link text--strong">Audio</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/headphones.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Headphones</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/earbuds.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Earbuds</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/portable-speakers.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Portable Speakers</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/turntables.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Turntables</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/walkmans.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Walkmans</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/audio-accessories.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Audio Accessories</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/audio.html" class="mobile-menu__nav-link" data-type="menuitem">Shop
                                          All</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div id="mobile-panel-0-1" class="mobile-menu__panel is-nested">
                                  <div class="mobile-menu__section is-sticky">
                                    <button class="mobile-menu__back-button" data-action="close-panel"><svg focusable="false"
                                        class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                                        <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none"
                                          stroke-linecap="square"></path>
                                      </svg> Back</button>
                                  </div>

                                  <div class="mobile-menu__section">
                                    <ul class="mobile-menu__nav" data-type="menu" role="list">
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections.html" class="mobile-menu__nav-link text--strong">Hi-Fi</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/speakers.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Speakers</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/subwoofers.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Subwoofers</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/sound-bars.html" class="mobile-menu__nav-link" data-type="menuitem">Sound
                                          Bars</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/amplifiers.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Amplifiers</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/home-cinema.html" class="mobile-menu__nav-link" data-type="menuitem">Home
                                          Cinema</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/a-v-receivers.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">A/V Receivers</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/hi-fi.html" class="mobile-menu__nav-link" data-type="menuitem">Shop
                                          All</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div id="mobile-panel-0-2" class="mobile-menu__panel is-nested">
                                  <div class="mobile-menu__section is-sticky">
                                    <button class="mobile-menu__back-button" data-action="close-panel"><svg focusable="false"
                                        class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                                        <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none"
                                          stroke-linecap="square"></path>
                                      </svg> Back</button>
                                  </div>

                                  <div class="mobile-menu__section">
                                    <ul class="mobile-menu__nav" data-type="menu" role="list">
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections.html" class="mobile-menu__nav-link text--strong">TV & Entertainment</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/led-tvs.html" class="mobile-menu__nav-link" data-type="menuitem">LED
                                          TVs</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/oled-tvs.html" class="mobile-menu__nav-link" data-type="menuitem">OLED
                                          TVs</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/projectors.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Projectors</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/blu-ray-dvd-players.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Blu-Ray & DVD Players</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/tv-accessories.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">TV Accessories</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/tv-entertainment.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Shop All</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div id="mobile-panel-0-3" class="mobile-menu__panel is-nested">
                                  <div class="mobile-menu__section is-sticky">
                                    <button class="mobile-menu__back-button" data-action="close-panel"><svg focusable="false"
                                        class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                                        <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none"
                                          stroke-linecap="square"></path>
                                      </svg> Back</button>
                                  </div>

                                  <div class="mobile-menu__section">
                                    <ul class="mobile-menu__nav" data-type="menu" role="list">
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections.html" class="mobile-menu__nav-link text--strong">Our Selection</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/waterproof.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Waterproof</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/portable.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Portable</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/bluetooth.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Bluetooth</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/accessories.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Accessories</a>
                                      </li>
                                      <li class="mobile-menu__nav-item">
                                        <a href="collections/professional-audio.html" class="mobile-menu__nav-link"
                                          data-type="menuitem">Professional Audio</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </nav>

                          <h1 class="header__logo"><a href="index.html" class="header__logo-link"><img class="header__logo-image"
                            style="max-width: 175px" width="348" height="64"
                            src="/assets/img/logo.png"
                            alt="Warehouse - Metal"></a></h1>
                          <div class="header__search-bar-wrapper is-visible">
                            <form action="https://warehouse-theme-metal.myshopify.com/search" method="get" role="search"
                              class="search-bar">
                              <div class="search-bar__top-wrapper">
                                <div class="search-bar__top">
                                  <input type="hidden" name="type" value="product">
                                  <input type="hidden" name="options[prefix]" value="last">

                                  <div class="search-bar__input-wrapper">
                                    <input class="search-bar__input" type="text" name="q" autocomplete="off" autocorrect="off"
                                      aria-label="Search..." placeholder="Search...">
                                    <button type="button" class="search-bar__input-clear hidden-lap-and-up" data-action="clear-input">
                                      <span class="visually-hidden">Clear</span>
                                      <svg focusable="false" class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                                        <path
                                          d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z"
                                          fill="currentColor" fill-rule="evenodd"></path>
                                      </svg>
                                    </button>
                                  </div>
                                  <div class="search-bar__filter">
                                    <label for="search-product-type" class="search-bar__filter-label">
                                      <span class="search-bar__filter-active">All categories</span><svg focusable="false"
                                        class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                        <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none"
                                          stroke-linecap="square"></path>
                                      </svg></label>

                                    <select id="search-product-type">
                                      <option value="" selected="selected">All categories</option>
                                      <option value="A/V Receivers">A/V Receivers</option>
                                      <option value="Amplifiers">Amplifiers</option>
                                      <option value="Audio Accessories">Audio Accessories</option>
                                      <option value="Earbuds">Earbuds</option>
                                      <option value="Headphones">Headphones</option>
                                      <option value="Home Cinema">Home Cinema</option>
                                      <option value="Portable Speakers">Portable Speakers</option>
                                      <option value="Projectors">Projectors</option>
                                      <option value="Sound Bars">Sound Bars</option>
                                      <option value="Speakers">Speakers</option>
                                      <option value="Subwoofers">Subwoofers</option>
                                      <option value="Turntables">Turntables</option>
                                      <option value="TV Accessories">TV Accessories</option>
                                      <option value="TVs">TVs</option>
                                      <option value="Walkmans">Walkmans</option>
                                    </select>
                                  </div><button type="submit" class="search-bar__submit" aria-label="Search"><svg focusable="false"
                                      class="icon icon--search" viewBox="0 0 21 21" role="presentation">
                                      <g stroke-width="2" stroke="currentColor" fill="none" fill-rule="evenodd">
                                        <path d="M19 19l-5-5" stroke-linecap="square"></path>
                                        <circle cx="8.5" cy="8.5" r="7.5"></circle>
                                      </g>
                                    </svg><svg focusable="false" class="icon icon--search-loader" viewBox="0 0 64 64"
                                      role="presentation">
                                      <path opacity=".4"
                                        d="M23.8589104 1.05290547C40.92335108-3.43614731 58.45816642 6.79494359 62.94709453 23.8589104c4.48905278 17.06444068-5.74156424 34.59913135-22.80600493 39.08818413S5.54195825 57.2055303 1.05290547 40.1410896C-3.43602265 23.0771228 6.7944697 5.54195825 23.8589104 1.05290547zM38.6146353 57.1445143c13.8647142-3.64731754 22.17719655-17.89443541 18.529879-31.75914961-3.64743965-13.86517841-17.8944354-22.17719655-31.7591496-18.529879S3.20804604 24.7494569 6.8554857 38.6146353c3.64731753 13.8647142 17.8944354 22.17719655 31.7591496 18.529879z">
                                      </path>
                                      <path
                                        d="M1.05290547 40.1410896l5.80258022-1.5264543c3.64731754 13.8647142 17.89443541 22.17719655 31.75914961 18.529879l1.5264543 5.80258023C23.07664892 67.43614731 5.54195825 57.2055303 1.05290547 40.1410896z">
                                      </path>
                                    </svg></button>
                                </div>

                                <button type="button" class="search-bar__close-button hidden-tablet-and-up"
                                  data-action="unfix-search">
                                  <span class="search-bar__close-text">Close</span>
                                </button>
                              </div>

                              <div class="search-bar__inner">
                                <div class="search-bar__inner-animation">
                                  <div class="search-bar__results" aria-hidden="true">
                                    <div class="skeleton-container">
                                      <div class="search-bar__result-item search-bar__result-item--skeleton">
                                        <div class="search-bar__image-container">
                                          <div class="aspect-ratio aspect-ratio--square">
                                            <div class="skeleton-image"></div>
                                          </div>
                                        </div>

                                        <div class="search-bar__item-info">
                                          <div class="skeleton-paragraph">
                                            <div class="skeleton-text"></div>
                                            <div class="skeleton-text"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="search-bar__result-item search-bar__result-item--skeleton">
                                        <div class="search-bar__image-container">
                                          <div class="aspect-ratio aspect-ratio--square">
                                            <div class="skeleton-image"></div>
                                          </div>
                                        </div>

                                        <div class="search-bar__item-info">
                                          <div class="skeleton-paragraph">
                                            <div class="skeleton-text"></div>
                                            <div class="skeleton-text"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="search-bar__result-item search-bar__result-item--skeleton">
                                        <div class="search-bar__image-container">
                                          <div class="aspect-ratio aspect-ratio--square">
                                            <div class="skeleton-image"></div>
                                          </div>
                                        </div>

                                        <div class="search-bar__item-info">
                                          <div class="skeleton-paragraph">
                                            <div class="skeleton-text"></div>
                                            <div class="skeleton-text"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="search-bar__results-inner"></div>
                                  </div>
                                  <div class="search-bar__menu-wrapper" aria-hidden="true">
                                    <p class="search-bar__menu-title heading">Need some inspiration?</p>
                                    <ul class="search-bar__menu-linklist list--unstyled" role="list">
                                      <li>
                                        <a href="products/jbl-charge-3-portable-bluetooth-speaker.html"
                                          class="search-bar__menu-link">New In! JBL Charge 3</a>
                                      </li>
                                      <li>
                                        <a href="products/sony-xbr77a1e-77-inch-4k-ultra-hd-smart-bravia-oled-tv-works-with-alexa.html"
                                          class="search-bar__menu-link">Sony 77-Inch 4K OLED TV</a>
                                      </li>
                                      <li>
                                        <a href="collections/bluetooth.html" class="search-bar__menu-link">Our Bluetooth Selection</a>
                                      </li>
                                      <li>
                                        <a href="products/klipsch-rp-600m-reference-premiere-bookshelf-speakers-pair.html"
                                          class="search-bar__menu-link">Klipsch Bookshelf Speakers</a>
                                      </li>
                                      <li>
                                        <a href="products/akg-n20u-reference-class-in-ear-headphones-with-truly-universal-3-button-control"
                                          class="search-bar__menu-link">AKG In-Ear Headphones</a>
                                      </li>
                                      <li>
                                        <a href="collections/sales.html" class="search-bar__menu-link">Our Sales</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>

                           <div class="header__action-list">
                            <div class="header__action-item header__action-item--currency hidden-pocket">
                              <form method="post" action="https://warehouse-theme-metal.myshopify.com/localization"
                                id="localization_form_header_currency" accept-charset="UTF-8" class="shopify-localization-form"
                                enctype="multipart/form-data"><input type="hidden" name="form_type" value="localization" /><input
                                  type="hidden" name="utf8" value="✓" /><input type="hidden" name="_method" value="put" /><input
                                  type="hidden" name="return_to" value="/" /><span class="header__action-item-title">Currency</span>
                                <input type="hidden" name="currency_code" value="USD">

                                <div class="header__action-item-content">
                                  <button class="header__action-item-link" data-action="toggle-popover"
                                    aria-controls="desktop-currency-selector" aria-expanded="false">
                                    <span class="currency-selector__value">USD $</span> <svg focusable="false"
                                      class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                      <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none"
                                        stroke-linecap="square"></path>
                                    </svg>
                                  </button>

                                    <div id="desktop-currency-selector" class="popover popover--currency" aria-hidden="true">
                                        <svg
                                          focusable="false" class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9"
                                          role="presentation">
                                          <path
                                            d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                            fill="#ffffff"></path>
                                        </svg>
                                         <div class="popover__inner popover__inner--no-padding">
                                          <ul class="popover__linklist" role="list">
                                            <li class="popover__linklist-item">
                                              <button type="submit" name="currency_code" class="popover__link-item" value="CAD">
                                                CAD $
                                              </button>
                                            </li>
                                            <li class="popover__linklist-item">
                                              <button type="submit" name="currency_code" class="popover__link-item" value="EUR">
                                                EUR €
                                              </button>
                                            </li>
                                            <li class="popover__linklist-item">
                                              <button type="submit" name="currency_code" class="popover__link-item" value="JPY">
                                                JPY ¥
                                              </button>
                                            </li>
                                            <li class="popover__linklist-item">
                                              <button type="submit" name="currency_code" class="popover__link-item" value="USD"
                                                aria-current="true">
                                                USD $
                                              </button>
                                            </li>
                                          </ul>
                                        </div>
                                   </div>
                                </div>


                              </form>
                            </div>
                           </div>
                          

                          <div class="header__action-item header__action-item--account"><span
                              class="header__action-item-title hidden-pocket hidden-lap">Login / Signup</span>
                            <div class="header__action-item-content">
                              <a href="account/login.html"
                                class="header__action-item-link header__account-icon icon-state hidden-desk" aria-label="My account"
                                aria-controls="account-popover" aria-expanded="false" data-action="toggle-popover">
                                <span class="icon-state__primary"><svg focusable="false" class="icon icon--account"
                                    viewBox="0 0 20 22" role="presentation">
                                    <path
                                      d="M10 13c2.82 0 5.33.64 6.98 1.2A3 3 0 0 1 19 17.02V21H1v-3.97a3 3 0 0 1 2.03-2.84A22.35 22.35 0 0 1 10 13zm0 0c-2.76 0-5-3.24-5-6V6a5 5 0 0 1 10 0v1c0 2.76-2.24 6-5 6z"
                                      stroke="currentColor" stroke-width="2" fill="none"></path>
                                  </svg></span>
                                <span class="icon-state__secondary"><svg focusable="false" class="icon icon--close"
                                    viewBox="0 0 19 19" role="presentation">
                                    <path
                                      d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z"
                                      fill="currentColor" fill-rule="evenodd"></path>
                                  </svg></span>
                              </a>

                              <a href="account/login.html" class="header__action-item-link hidden-pocket hidden-lap"
                                aria-controls="account-popover" aria-expanded="false" data-action="toggle-popover">My account <svg
                                  focusable="false" class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                  <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square">
                                  </path>
                                </svg></a>

                              <div id="account-popover" class="popover popover--large popover--unlogged" aria-hidden="true"><svg
                                  focusable="false" class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9" role="presentation">
                                  <path
                                    d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                    fill="#ffffff"></path>
                                </svg>
                                <div class="popover__panel-list">
                                  <div id="header-login-panel" class="popover__panel popover__panel--default is-selected">
                                    <div class="popover__inner">
                                      <form method="post" action="https://warehouse-theme-metal.myshopify.com/account/login"
                                        id="header_customer_login" accept-charset="UTF-8" name="login" class="form"><input
                                          type="hidden" name="form_type" value="customer_login" /><input type="hidden" name="utf8"
                                          value="✓" />
                                        <header class="popover__header">
                                          <h2 class="popover__title heading">Login to my account</h2>
                                          <p class="popover__legend">Enter your e-mail and password:</p>
                                        </header>

                                        <div class="form__input-wrapper form__input-wrapper--labelled">
                                          <input type="email" id="login-customer[email]" class="form__field form__field--text"
                                            name="customer[email]" required="required">
                                          <label for="login-customer[email]" class="form__floating-label">Email</label>
                                        </div>

                                        <div class="form__input-wrapper form__input-wrapper--labelled">
                                          <input type="password" id="login-customer[password]" class="form__field form__field--text"
                                            name="customer[password]" required="required" autocomplete="current-password">
                                          <label for="login-customer[password]" class="form__floating-label">Password</label>
                                        </div>

                                        <button type="submit" class="form__submit button button--primary button--full">Login</button>
                                      </form>
                                      <div class="popover__secondary-action">
                                        <p>New customer? <button data-action="show-popover-panel"
                                            aria-controls="header-register-panel" class="link link--accented">Create your
                                            account</button></p>
                                        <p>Lost password? <a href="account/login4236.html#recover-password"
                                            aria-controls="header-recover-panel" class="link link--accented">Recover password</a></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="header-recover-panel" class="popover__panel popover__panel--sliding">
                                    <div class="popover__inner">
                                      <form method="post" action="https://warehouse-theme-metal.myshopify.com/account/recover"
                                        accept-charset="UTF-8" name="recover" class="form"><input type="hidden" name="form_type"
                                          value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" />
                                        <header class="popover__header">
                                          <h2 class="popover__title heading">Recover password</h2>
                                          <p class="popover__legend">Enter your email:</p>
                                        </header>

                                        <div class="form__input-wrapper form__input-wrapper--labelled">
                                          <input type="email" id="recover-customer[recover_email]"
                                            class="form__field form__field--text" name="email" required="required">
                                          <label for="recover-customer[recover_email]" class="form__floating-label">Email</label>
                                        </div>

                                        <button type="submit"
                                          class="form__submit button button--primary button--full">Recover</button>
                                      </form>
                                      <div class="popover__secondary-action">
                                        <p>Remembered your password? <button data-action="show-popover-panel"
                                            aria-controls="header-login-panel" class="link link--accented">Back to login</button></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="header-register-panel" class="popover__panel popover__panel--sliding">
                                    <div class="popover__inner">
                                      <form method="post" action="https://warehouse-theme-metal.myshopify.com/account"
                                        id="create_customer" accept-charset="UTF-8" name="create" class="form"><input type="hidden"
                                          name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" />
                                        <header class="popover__header">
                                          <h2 class="popover__title heading">Create my account</h2>
                                          <p class="popover__legend">Please fill in the information below:</p>
                                        </header>
                                        <div class="form__input-wrapper form__input-wrapper--labelled">
                                          <input type="text" id="customer[first_name]" class="form__field form__field--text"
                                            name="customer[first_name]" autocomplete="given-name" required="required">
                                          <label for="customer[first_name]" class="form__floating-label">First name</label>
                                        </div>

                                        <div class="form__input-wrapper form__input-wrapper--labelled">
                                          <input type="text" id="customer[last_name]" class="form__field form__field--text"
                                            name="customer[last_name]" autocomplete="family-name" required="required">
                                          <label for="customer[last_name]" class="form__floating-label">Last name</label>
                                        </div>
                                        <div class="form__input-wrapper form__input-wrapper--labelled">
                                          <input type="email" id="register-customer[email]" class="form__field form__field--text"
                                            name="customer[email]" required="required">
                                          <label for="register-customer[email]" class="form__floating-label">Email</label>
                                        </div>

                                        <div class="form__input-wrapper form__input-wrapper--labelled">
                                          <input type="password" id="register-customer[password]"
                                            class="form__field form__field--text" name="customer[password]" required="required"
                                            autocomplete="new-password">
                                          <label for="register-customer[password]" class="form__floating-label">Password</label>
                                        </div>

                                        <button type="submit" class="form__submit button button--primary button--full">Create my
                                          account</button>
                                      </form>
                                      <div class="popover__secondary-action">
                                        <p>Already have an account? <button data-action="show-popover-panel"
                                            aria-controls="header-login-panel" class="link link--accented">Login here</button></p>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                       

                          <div class="header__action-item header__action-item--cart">
                            <a class="header__action-item-link header__cart-toggle" href="cart.html" aria-controls="mini-cart"
                              aria-expanded="false" data-action="toggle-mini-cart" data-no-instant>
                              <div class="header__action-item-content">
                                <div class="header__cart-icon icon-state" aria-expanded="false">
                                  <span class="icon-state__primary"><svg focusable="false" class="icon icon--cart" viewBox="0 0 27 24"
                                      role="presentation">
                                      <g transform="translate(0 1)" stroke-width="2" stroke="currentColor" fill="none"
                                        fill-rule="evenodd">
                                        <circle stroke-linecap="square" cx="11" cy="20" r="2"></circle>
                                        <circle stroke-linecap="square" cx="22" cy="20" r="2"></circle>
                                        <path d="M7.31 5h18.27l-1.44 10H9.78L6.22 0H0"></path>
                                      </g>
                                    </svg><span class="header__cart-count">0</span>
                                  </span>

                                  <span class="icon-state__secondary"><svg focusable="false" class="icon icon--close"
                                      viewBox="0 0 19 19" role="presentation">
                                      <path
                                        d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z"
                                        fill="currentColor" fill-rule="evenodd"></path>
                                    </svg></span>
                                </div>

                                <span class="hidden-pocket hidden-lap">Cart</span>
                              </div>
                            </a>
                            <form method="post" action="https://warehouse-theme-metal.myshopify.com/cart" id="mini-cart"
                              class="mini-cart" aria-hidden="true" novalidate="novalidate" data-item-count="0">
                              <input type="hidden" name="attributes[collection_products_per_page]" value="">
                              <input type="hidden" name="attributes[collection_layout]" value=""><svg focusable="false"
                                class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9" role="presentation">
                                <path
                                  d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                  fill="#ffffff"></path>
                              </svg>
                              <div class="mini-cart__content mini-cart__content--empty">
                                <p class="alert alert--tight alert--center text--strong">Spend <span>$80.00</span> more and get free
                                  shipping!</p>
                                <div class="mini-cart__empty-state"><svg focusable="false" width="81" height="70" viewBox="0 0 81 70">
                                    <g transform="translate(0 2)" stroke-width="4" stroke="#1e2d7d" fill="none" fill-rule="evenodd">
                                      <circle stroke-linecap="square" cx="34" cy="60" r="6"></circle>
                                      <circle stroke-linecap="square" cx="67" cy="60" r="6"></circle>
                                      <path d="M22.9360352 15h54.8070373l-4.3391876 30H30.3387146L19.6676025 0H.99560547"></path>
                                    </g>
                                  </svg>
                                  <p class="heading h4">Your cart is empty</p>
                                </div>

                                <a href="collections/all.html" class="button button--primary button--full">Shop our products</a>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
                </header>

                <nav class="nav-bar">
                  <div class="nav-bar__inner">
                    <div class="container">
                      <ul class="nav-bar__linklist list--unstyled" data-type="menu" role="list">
                        <li class="nav-bar__item"><a href="collections.html" class="nav-bar__link link" data-type="menuitem"
                            aria-expanded="false" aria-controls="desktop-menu-0-1" aria-haspopup="true">All Products<svg
                              focusable="false" class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                              <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square">
                              </path>
                            </svg><svg focusable="false" class="icon icon--nav-triangle" viewBox="0 0 20 9" role="presentation">
                              <g fill="none" fill-rule="evenodd">
                                <path
                                  d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                  fill="#ffffff"></path>
                                <path
                                  d="M-.00922471 9C1.38887087 7.61849126 4.26661926 4.80337304 8.62402045.5546454c.75993175-.7409708 1.98812015-.7393145 2.74596565.0037073L19.9800494 9h-1.3748787l-7.9226239-7.7676545c-.3789219-.3715101-.9930172-.3723389-1.3729808-.0018557-3.20734177 3.1273507-5.6127118 5.4776841-7.21584193 7.05073579C1.82769633 8.54226204 1.58379521 8.7818599 1.36203986 9H-.00922471z"
                                  fill="#e1e3e4"></path>
                              </g>
                            </svg></a>
                          <div id="desktop-menu-0-1" class="mega-menu " data-type="menu" aria-hidden="true" role="list">
                            <div class="container">
                              <div class="mega-menu__inner mega-menu__inner--center mega-menu__inner--large">
                                <div class="mega-menu__column">
                                  <a href="collections.html" class="mega-menu__title heading">Audio</a>
                                  <ul class="mega-menu__linklist" role="list">
                                    <li class="mega-menu__item">
                                      <a href="collections/headphones.html" class="mega-menu__link link">Headphones</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/earbuds.html" class="mega-menu__link link">Earbuds</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/portable-speakers.html" class="mega-menu__link link">Portable Speakers</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/turntables.html" class="mega-menu__link link">Turntables</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/walkmans.html" class="mega-menu__link link">Walkmans</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/audio-accessories.html" class="mega-menu__link link">Audio Accessories</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/audio.html" class="mega-menu__link link">Shop All</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="mega-menu__column">
                                  <a href="collections.html" class="mega-menu__title heading">Hi-Fi</a>
                                  <ul class="mega-menu__linklist" role="list">
                                    <li class="mega-menu__item">
                                      <a href="collections/speakers.html" class="mega-menu__link link">Speakers</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/subwoofers.html" class="mega-menu__link link">Subwoofers</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/sound-bars.html" class="mega-menu__link link">Sound Bars</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/amplifiers.html" class="mega-menu__link link">Amplifiers</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/home-cinema.html" class="mega-menu__link link">Home Cinema</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/a-v-receivers.html" class="mega-menu__link link">A/V Receivers</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/hi-fi.html" class="mega-menu__link link">Shop All</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="mega-menu__column">
                                  <a href="collections.html" class="mega-menu__title heading">TV & Entertainment</a>
                                  <ul class="mega-menu__linklist" role="list">
                                    <li class="mega-menu__item">
                                      <a href="collections/led-tvs.html" class="mega-menu__link link">LED TVs</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/oled-tvs.html" class="mega-menu__link link">OLED TVs</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/projectors.html" class="mega-menu__link link">Projectors</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/blu-ray-dvd-players.html" class="mega-menu__link link">Blu-Ray & DVD
                                        Players</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/tv-accessories.html" class="mega-menu__link link">TV Accessories</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/tv-entertainment.html" class="mega-menu__link link">Shop All</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="mega-menu__column">
                                  <a href="collections.html" class="mega-menu__title heading">Our Selection</a>
                                  <ul class="mega-menu__linklist" role="list">
                                    <li class="mega-menu__item">
                                      <a href="collections/waterproof.html" class="mega-menu__link link">Waterproof</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/portable.html" class="mega-menu__link link">Portable</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/bluetooth.html" class="mega-menu__link link">Bluetooth</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/accessories.html" class="mega-menu__link link">Accessories</a>
                                    </li>
                                    <li class="mega-menu__item">
                                      <a href="collections/professional-audio.html" class="mega-menu__link link">Professional
                                        Audio</a>
                                    </li>
                                  </ul>
                                </div><a href="collections/portable-speakers/brand_jbl.html" class="mega-menu__promo">
                                  <div class="mega-menu__image-wrapper">
                                    <div class="aspect-ratio" style="padding-bottom: 66.66666666666667%">
                                      <img class="lazyload image--fade-in"
                                        data-src="//cdn.shopify.com/s/files/1/0065/3095/7363/files/Header---2_550x.jpg?v=1559433650"
                                        alt="">
                                    </div>
                                  </div>

                                  <span class="mega-menu__image-heading heading h4">New JBL Portable Speakers</span>
                                  <p class="mega-menu__image-text">From $39.95 only!</p>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="nav-bar__item"><a href="collections/new-arrivals.html" class="nav-bar__link link"
                            data-type="menuitem">New Arrivals</a></li>
                        <li class="nav-bar__item"><a href="collections/sales.html" class="nav-bar__link link"
                            data-type="menuitem">Sales</a></li>
                        <li class="nav-bar__item"><a href="collections.html" class="nav-bar__link link" data-type="menuitem">All
                            Collections</a></li>
                        <li class="nav-bar__item"><a href="pages/brands.html" class="nav-bar__link link"
                            data-type="menuitem">Brands</a></li>
                        <li class="nav-bar__item"><a href="#" class="nav-bar__link link" data-type="menuitem" aria-expanded="false"
                            aria-controls="desktop-menu-0-6" aria-haspopup="true">Information<svg focusable="false"
                              class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                              <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square">
                              </path>
                            </svg><svg focusable="false" class="icon icon--nav-triangle" viewBox="0 0 20 9" role="presentation">
                              <g fill="none" fill-rule="evenodd">
                                <path
                                  d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                  fill="#ffffff"></path>
                                <path
                                  d="M-.00922471 9C1.38887087 7.61849126 4.26661926 4.80337304 8.62402045.5546454c.75993175-.7409708 1.98812015-.7393145 2.74596565.0037073L19.9800494 9h-1.3748787l-7.9226239-7.7676545c-.3789219-.3715101-.9930172-.3723389-1.3729808-.0018557-3.20734177 3.1273507-5.6127118 5.4776841-7.21584193 7.05073579C1.82769633 8.54226204 1.58379521 8.7818599 1.36203986 9H-.00922471z"
                                  fill="#e1e3e4"></path>
                              </g>
                            </svg></a>
                          <ul id="desktop-menu-0-6" class="nav-dropdown nav-dropdown--restrict" data-type="menu" aria-hidden="true"
                            role="list">
                            <li class="nav-dropdown__item "><a href="pages/meet-the-team.html" class="nav-dropdown__link link"
                                data-type="menuitem">Meet the team</a></li>
                            <li class="nav-dropdown__item "><a href="pages/about.html" class="nav-dropdown__link link"
                                data-type="menuitem">About</a></li>
                            <li class="nav-dropdown__item "><a href="pages/faq.html" class="nav-dropdown__link link"
                                data-type="menuitem">FAQ</a></li>
                          </ul>
                        </li>
                        <li class="nav-bar__item"><a href="blogs/news.html" class="nav-bar__link link" data-type="menuitem">Blog</a>
                        </li>
                        <li class="nav-bar__item"><a href="pages/contact-us.html" class="nav-bar__link link"
                            data-type="menuitem">Contact</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>
            </section>
        </div>  
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <slot name="header"></slot>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            <slot></slot>
        </main>

        <!-- Modal Portal -->
        <portal-target name="modal" multiple>
        </portal-target>
    </div>
</template>

<script>
    import JetApplicationMark from '@/Jetstream/ApplicationMark'
    import JetDropdown from '@/Jetstream/Dropdown'
    import JetDropdownLink from '@/Jetstream/DropdownLink'
    import JetNavLink from '@/Jetstream/NavLink'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'

    export default {
        components: {
            JetApplicationMark,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            logout() {
                axios.post(route('logout').url()).then(response => {
                    window.location = '/';
                })
            },
        }
    }
</script>
