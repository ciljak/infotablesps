<?php
	require_once('appvars.php'); // including variables for database
	require_once('functions.php'); // include external functions - generating links 
    require_once('header.php');
 ?>   

<section>
    
        <div class="row blue_background"> <!-- I. row  -->
                <!-- first row contains area holding logo, name for organisation and weather or day forecast area -->
                <div class="col-3">
                    <img src="pictures/logo_main.png" alt="Main organisation logo is here.">
                </div>

                <div class="col-6">
                    <h1 class="main_h1 white_text padding_main_slogan">  Organization  - basic slogan and welcome message goes here ...</h1>
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
                    <h1 class="main_h1">  Place for looping presentation video in SDTV resolution </h1> 
                    <video width="720" height="576" autoplay muted loop>
                        <source src="videos/example_of_SDTV_video_content.mp4" type="video/mp4">
                    
                        Your browser does not support the video tag.
                    </video>
               </div>
            </div>

            <div class="col-6">
                 <div class="margin_for_block">
                      <h1 class="main_h1">  News and other information - scrolling part </h1>
                        <!-- example of content scrolling block -->
                        <div class="block scrolldown" id="container">
                            <!-- beggining of looping part --> 
                            <ul data-current="0">
                                <li> <!-- li element part holds content to scroll --> 

                                    <h1 class="main_h1">1 - Main level of article</h1>
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
                                <h1 class="main_h1">2 - Main level of article</h1>
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
                                    
                                    <img class="dimensions_of_scrolling_image" src="pictures/picture2.jpg"  />
                                
                                    <hr></br>
                                </li>

                                <li>
                                <h1 class="main_h1">3 - Main level of article</h1>
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
                                    
                                    <img class="dimensions_of_scrolling_image" src="pictures/picture3.jpg" />

                                    <hr></br>
                                </li>

                                <li>
                                <h1 class="main_h1">4 - Main level of article</h1>
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
                    <div id="text">Place for scroolling simple info - info text goes here. <?php echo "Today is " . date("l")." " . date("d.m.Y") .  "<br>" ?>;

                    </div>
                </div>
            </div>
           

          
        </div> 
        </section>        
  
	  
    

<?php
	require_once('footer.php'); // including footer part of page
?> 