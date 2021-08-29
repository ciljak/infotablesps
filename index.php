<?php
	require_once('appvars.php'); // including variables for database
	require_once('functions.php'); // include external functions - generating links 
    require_once('header.php');
 ?>   

<section>
    
        <div class="row blue_background"> <!-- I. row  -->
                <!-- first row contains area holding logo, name for organisation and weather or day forecast area -->
                <div class="col-3">
                    <img class="main_logo" src="pictures/logo_main.png" alt="Main organisation logo is here.">
                </div>

                <div class="col-6">
                    <h1 class="main_h1 white_text padding_main_slogan"> <b> Stredná priemyselná škola technická <br> Novomeského 5/24 <br>Martin </b> <hr> 70 rokov odborného technického vzdelávania v regióne Turiec</h1>
                </div>	

                <div class="col-3">
                
                    <h1 class="main_h1">  Day and weather</h1>
                    <div id='widgetweather' style='width:400px; height:225px;position:relative;'><span class="wheatherHide">
                        <a href="https://pocasie.aktuality.sk/martin/">Martin</a></span></div>
                        <script type='text/javascript'>document.getElementById('widgetweather').innerHTML = '<a href=\'https://pocasie.aktuality.sk/martin/\' title=\'Počasie\' id=\'widgetweatherweather\' class=\'widgetweatherweather\' style=\'display:block !important;\'>Počasie Martin</a>';</script>
                        <script type='text/javascript' src='https://pocasie.aktuality.sk/pocasie-na-web/weather/martin/?w=400&h=225&l=400x225&c=white&s=0&o=1'></script>
                        <link id='widgetcss' rel='stylesheet' type='text/css' media='all' href='https://s.aimg.sk/weather/css/widget/widget400x225.css?v=5' />
                </div>
        </div>  
        
        
        <div class="row"> <!-- II. row  -->
        <!-- second row hold two elements spreading in 6 colspan cells - video and news part -->
            <div class="col-6">
                
                <div class="margin_for_block">
                    <h1 class="main_h1">  Z našej histórie </h1> 
                    <video width="720" height="576" autoplay muted loop>
                        <source src="videos/example_of_SDTV_video_content.mp4" type="video/mp4">
                    
                        Your browser does not support the video tag.
                    </video>
               </div>
            </div>

            <div class="col-6">
                 <div class="margin_for_block">
                      <h1 class="main_h1">  Aktuálne študijné možnosti <img class="dimensions_of_zsklogo" src="pictures/logozsk.jpg"  /> 
                      <img class="dimensions_of_martinlogo" src="pictures/logomartin.jpg"  />
                      </h1>
                        <!-- example of content scrolling block -->
                        <div class="block scrolldown" id="container">
                            <!-- beggining of looping part --> 
                            <ul data-current="0">
                                <li> <!-- li element part holds content to scroll --> 

                                    <h1 class="main_h1">2561 M informačné a sieťové technológie IST</h1>
                                    <p class="large_scroll_down_text" >Absolvent študijného odboru informačné a sieťové technológie získa kompetencie na prácu so všetkým, 
                                        čo súvisí so získavaním, spracovaním, uchovávaním, triedením a sprístupňovaním informácií akéhokoľvek druhu prostredníctvom moderných 
                                        komunikačných technológií. Okrem všeobecného vzdelania s dostatočnou adaptabilitou je absolvent schopný samostatne alebo v tíme 
                                        identifikovať, navrhovať a vytvárať riešenia, plánovať a umožňovať používanie informačno-komunikačných technológií v rôznych 
                                        odvetviach národného hospodárstva a priemyslu. Široký odborný profil absolventa IST mu umožňuje vykonávať prácu konzultanta, 
                                        technika, predajcu, správcu alebo administrátora pre  činnosti konštrukčného, montážneho i prevádzkového charakteru, 
                                        kde sa používajú moderné IKT zariadenia.</p>
                                        <img class="dimensions_of_scrolling_image" src="pictures/IST.jpg"  />
                                        <br>

                                    <h1 class="main_h1">2387 M mechatronika MEC</h1>
                                    <p class="large_scroll_down_text" >Mechatronika ako študijný odbor bola zavedená na škole v školskom roku 1995. 
                                        Je to interdisciplinárny odbor, v ktorom sa syntetizujú poznatky z mechaniky, elektroniky a informatiky. 
                                        To dá jeho absolventom možnosť uplatnenia najmä v dynamicky sa rozvíjajúcich malých a stredných podnikoch, 
                                        pri konštrukcii a servisných prácach na mechatronických zariadeniach (Pozn.: mechatronickým výrobkom sú stroje a 
                                        zariadenia obsahujúce mechanické a elektronické prvky, vykazujúce istý stupeň inteligencie. Podľa celosvetovej štatistiky 
                                        produkcia týchto výrobkov rastie ročne o 30 – 40 %, pričom výroba klasických stagnuje.), tiež dobrú a univerzálnu možnosť 
                                        uplatnenia sa v odboroch strojárstva, elektrotechniky a informačných technológiách podnikov a firiem. Ďalej budú 
                                        absolventi pripravení na prácu v trhovom podnikateľskom prostredí. Získavajú základné poznatky z ekonomiky firiem. 
                                        Naučia sa komunikovať v anglickom jazyku, čo im umožní vysokú pracovnú mobilitu v európskom i svetovom trhovom priestore.</p>
                                        <img class="dimensions_of_scrolling_image" src="pictures/MEC.jpg"  />
                                        <br>
                                        
                                    <h1 class="main_h1">2675 M elektrotechnika ELE</h1>
                                    <p class="large_scroll_down_text" >(so zameraním na priemyselnú informatiku)

                                        Absolventi študijného odboru elektrotechnika (ELE) majú pomerne široké odborné teoretické vedomosti a dobré praktické zručnosti. 
                                        V rámci štúdia voliteľných predmetov od tretieho ročníka sa môžu profilovať v našej škole v oblasti priemyselnej informatiky. 
                                        Absolvent študijného odboru elektrotechnika, pripravujúci sa na výkon povolania v oblasti priemyselnej informatiky, môže pracovať 
                                        vo výrobe, montáži, pri prevádzke a údržbe automatizačných zariadení na báze analógových a číslicových regulačných obvodov. 
                                        Okrem iného ovláda i spôsoby uplatnenia výpočtovej techniky pri modelovaní a simulácii regulačných pochodov a uplatnenia 
                                        jednočipových mikropočítačov v riadiacich obvodoch. Po ukončení štúdia maturitnou skúškou je pripravený navrhovať a 
                                        implementovať získané vedomosti ako člen vývojového tímu alebo pokračovať v štúdiu na vysokej škole v odboroch automatizácia, 
                                        robotika, aplikovaná informatika. Žiaci sa naučia komunikovať v jednom cudzom jazyku a po maturitných skúškach majú možnosť 
                                        absolvovať skúšky z  elektrotechnickej spôsobilosti.</p>
                                        <img class="dimensions_of_scrolling_image" src="pictures/ELE.jpg"  />
                                        <br>

                                    <h1 class="main_h1">3918 M technické lýceum TLY</h1>
                                    <p class="large_scroll_down_text" >3918 M technické lýceum s voliteľným zameraním na strojárstvo

                                        Prví absolventi v študijnom odbore technické lýceum ukončili štúdium v školskom roku 2004/2005. Odbor je určený pre žiakov so 
                                        záujmom o prírodné vedy, informatiku, technické a ekonomické vedy, ktorí po jeho absolvovaní chcú pokračovať v ďalšom štúdiu na 
                                        vysokej škole. Vzdelávací program je založený na pomerne širokom všeobecnovzdelávacom základe s dôrazom na vyučovanie profilových 
                                        predmetov, ku ktorým patria dva cudzie jazyky, matematika a fyzika – obsahovo rovnaké ako v gymnaziálnom type štúdia. Absolvent 
                                        študijného odboru technické lýceum po vykonaní maturitnej skúšky získa úplné stredné odborné vzdelanie, ktoré mu umožňuje 
                                        pokračovať vo vysokoškolskom štúdiu, ako i vykonávať niektoré povolania, na ktoré sú postačujúce základné odborné vedomosti v 
                                        oblasti informatiky, strojárstva alebo elektrotechniky.</p>
                                        <img class="dimensions_of_scrolling_image" src="pictures/TLY.jpg"  />
                                        <br>

                                    <h1 class="main_h1">3968 M logistika LOG</h1>
                                    <p class="large_scroll_down_text" >Tento odbor vznikol na našej škole na podnet zamestnávateľov, komory logistických auditorov a s 
                                        podporou Technickej univerzity v Košiciach, ktorí konštatujú nedostatok kvalifikovaných pracovníkov so stredoškolským vzdelaním v 
                                        tejto oblasti. Logistika je plánovanie a riadenie pohybu rôznych tovarov, služieb, a s tým súvisiacich činností tak, aby bol 
                                        zákazník spokojný, a aby podniky mali čo najnižšie náklady. Absolvent tohto odboru získa okrem iného aj nevyhnutné všeobecné 
                                        vzdelanie v oblasti informatiky, cudzích jazykov a odborný profil pre pozíciu logistik. Získa znalosti v základných technických 
                                        a ekonomických predmetoch, dokáže riešiť technicko-ekonomické problémy, je schopný komunikovať v cudzom jazyku, logicky myslieť,
                                         analyzovať problémy, hľadať spôsoby ich riešenia a pohotovo sa rozhodovať. Ďalším štúdiom alebo v praxi sa potom môže 
                                         špecializovať napr. na logistiku zásobovania, logistiku výroby, logistiku dopravy, logistiku skladovania či logistiku predaja. 
                                         Absolvent odboru má široké možnosti uplatniť sa v rôznych firmách, ako aj organizáciách štátnej správy, v bankách, nemocniciach, 
                                         v školstve, armáde, alebo pokračovať vo vysokoškolskom štúdiu.</p>
                                    
                                    </p>
                                    
                                    <img class="dimensions_of_scrolling_image" src="pictures/LOG.jpg"  />
                                    <br>

                                    <hr></br>
                                </li>

                                <li>
                                <h1 class="main_h1">Erasmus+</h1>
                                    
                                    <p class="large_scroll_down_text"> Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. 
                                        Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh.

                                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Donec sollicitudin molestie malesuada. 
                                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. 
                                        Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.

                                        Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. 
                                        Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus.

                                    </p>
                                    
                                   
                                
                                    <hr></br>
                                </li>

                                <li>
                                <h1 class="main_h1">Vyučovanie cudzích jazykov</h1>
                                    
                                    
                                    

                                    <hr></br>
                                </li>

                                <li>
                                <h1 class="main_h1">Učebné priestory školy</h1>
                                    <h3 class="main_h1">A2 – LOG – odborná učebňa logistiky</h3>
                                    <p class="large_scroll_down_text" >Priestor využívajú žiaci odboru 3968 M logistika pri vyučovaní predmetov základy logistiky, 
                                        prax, cvičná firma, administratíva a korešpondencia a úvod do podnikania. Učebňa je vybavená sadou PC a projekčnou technikou. 
                                        Interierové vybavenie je možné preskupiť s dôrazom na charakter naplánovanej činnosti na vyučovacej hodine.</p>
                                    <img class="dimensions_of_scrolling_image" src="pictures/A2.jpg"  />

                                    <hr></br>

                                    <h3 class="main_h1">52 – MEC/ TLY – odborná učebňa CAD/ CAM systémov</h3>
                                    <p class="large_scroll_down_text" >Odborná učebňa využívaná žiakmi odborov 2387 M mechatronika a 3918M technické lýceum so zameraním na 
                                        strojárstvo. Výbava pozostáva zo sady all in one PC, CNC frézky a sústruhu s rozhraním pre nácvik práce spojenej s programovým 
                                        riadením CNC obrábacích strojov.</p>
                                    <img class="dimensions_of_scrolling_image" src="pictures/52_1.jpg"  />
                                    <img class="dimensions_of_scrolling_image" src="pictures/52_2.jpg"  />
                                </li>

                                <li>
                                <h1 class="main_h1">5 - Main level of article</h1>
                                    <h3 class="main_h1">H2 level of article</h3>
                                    <p class="large_scroll_down_text" >This is text description for appropriate element. There can be larger text as this example will depict.</p>
                                    <h3 class="main_h1">H2 level of article</h3>
                                    <p class="large_scroll_down_text">This begins new paragraph of the text.</p>
                                    <p class="large_scroll_down_text"> Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. 
                                        Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh.

                                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Donec sollicitudin molestie malesuada. 
                                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. 
                                        Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.

                                        Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. 
                                        Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus.

                                    </p>
                                    
                                    <img class="dimensions_of_scrolling_image" src="pictures/picture5.jpg"  />

                                    <hr></br>
                                </li>

                                <li>
                                <h1 class="main_h1">6 - Main level of article</h1>
                                    <h3 class="main_h1">H2 level of article</h3>
                                    <p class="large_scroll_down_text" >This is text description for appropriate element. There can be larger text as this example will depict.</p>
                                    <h3 class="main_h1">H2 level of article</h3>
                                    <p class="large_scroll_down_text">This begins new paragraph of the text.</p>
                                    <p class="large_scroll_down_text"> Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. 
                                        Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh.

                                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Donec sollicitudin molestie malesuada. 
                                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. 
                                        Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.

                                        Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. 
                                        Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus.

                                    </p>
                                    
                                    <img class="dimensions_of_scrolling_image" src="pictures/picture6.jpg" />

                                    <hr></br>
                                </li>

                                <li>
                                <h1 class="main_h1">7 - Main level of article</h1>
                                    <h3 class="main_h1">H2 level of article</h3>
                                    <p class="large_scroll_down_text" >This is text description for appropriate element. There can be larger text as this example will depict.</p>
                                    <h3 class="main_h1">H2 level of article</h3>
                                    <p class="large_scroll_down_text">This begins new paragraph of the text.</p>
                                    <p class="large_scroll_down_text"> Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. 
                                        Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh.

                                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Donec sollicitudin molestie malesuada. 
                                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. 
                                        Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.

                                        Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. 
                                        Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus.

                                    </p>
                                    
                                    <img class="dimensions_of_scrolling_image" src="pictures/picture1.jpg"  />

                                    <hr></br>
                                </li>

                                <li>
                                <h1 class="main_h1">8 - Main level of article</h1>
                                    <h3 class="main_h1">H2 level of article</h3>
                                    <p class="large_scroll_down_text" >This is text description for appropriate element. There can be larger text as this example will depict.</p>
                                    <h3 class="main_h1">H2 level of article</h3>
                                    <p class="large_scroll_down_text">This begins new paragraph of the text.</p>
                                    <p class="large_scroll_down_text"> Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. 
                                        Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh.

                                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Donec sollicitudin molestie malesuada. 
                                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. 
                                        Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.

                                        Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. 
                                        Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus.

                                    </p>
                                    
                                    <img class="dimensions_of_scrolling_image" src="pictures/picture4.jpg"  />

                                    <hr></br>
                                </li>
                            </ul>
                            <!-- end of looping part --> 
                            
                        </div>
                        
                </div>     
            </div>	




        </div> 

        <div class="row"> <!-- III. row - scoorling part -->
        <!-- third row span across whole container and will scrool info -->
            <div class="col-12">
            
                <div id="marquee">
                    <div id="text">Informačná tabuľa realizovaná s finančnou podporou mesta Martin. <?php echo " Dnes je " . date("l").", " . date("d.m.Y") .  "<br>" ?> ;
                    

                    </div>
                </div>
            </div>
           

          
        </div> 
        </section>        
  
	  
    

<?php
	require_once('footer.php'); // including footer part of page
?> 