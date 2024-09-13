<!DOCTYPE html>
<?php
    include("shared.php");
?>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Bungee+Outline&family=Cabin+Sketch:wght@700&family=Comfortaa:wght@700&family=Monoton&family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://ctec4309.drp9303.uta.cloud/Found%20It%20Website/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="https://ctec4309.drp9303.uta.cloud/Found%20It%20Website/gridsystem.css" media="screen" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/demonized" rel="stylesheet">
    <script src="caro.js"></script>
</head>
<html>
    <div class="headerb">
        <header>
            <a href="#home" class="logo"><img src='img/logo.png' width="65%" height="65%"></a>
            <input type="checkbox"  id="menu-bar">
            <label for="menu-bar">Menu</label>
            <nav class="navbar">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#reviews">Review</a></li>
                    <li><a href="#address">Address & Hours</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
              </nav>
        </header>
        <section id = "home">
        <div class = 'title-home'>
                <img src='img/foundit.jpg'>
                <div class="centered">Welcome to Found It Electronics</div>
        </div>
        </section>
    </div>
    <section id = "about">
    <div class = 'About Me'>
        <div class = 'ampt1'>
            <br>
            <h1>About Us</h1>
            <hr>
            <p>Found It Electronics is a retro video game store, holding a selection of many video games old and new. From PS4 to N64 as well as other electronics and collectables, we have it all! We also provide services such as repairs and selling. The company was established in 2011 in an initial 400 square foot shop. Since then, the business has exploded, and has continued to deliver great services to those interested in gaming.</p>
        </div>
        <div class = 'rotban'>
            <div class="carousel slide" id="carouselExample1">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slideshow">
    			        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Ffounditelectronics%2Fvideos%2F514125346216704%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true">
                        </iframe>
    			    </div>
                </div>
                <div class="carousel-item">
                    <div class="slideshow">
    			        <img src="img/fig1.png"/>
    			    </div>
                </div>
                <div class="carousel-item">
                    <div class="slideshow">
    			        <img src="img/fig3.png"/>
    			    </div>
                </div>
                <div class="carousel-item">
                    <div class="slideshow">
    			        <img src="img/fig5.png"/>
    			    </div>
                </div>
                <div class="carousel-item">
                    <div class="slideshow">
    			        <div id="ytplayer"></div>
                        <script>
                          var tag = document.createElement('script');
                          tag.src = "https://www.youtube.com/player_api";
                          var firstScriptTag = document.getElementsByTagName('script')[0];
                          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                          
                          var player;
                          function onYouTubePlayerAPIReady() {
                            player = new YT.Player('ytplayer', {
                              height: '720',
                              width: '1280',
                              videoId: 'ZWU09wWZPNc'
                            });
                          }
                        </script>
    			    </div>
                </div>
            </div>
            <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExample1" type="button">
                <span aria-hidden="true" class="carousel-control-prev-icon"><i class="fa-solid fa-angle-left"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExample1" type="button">
                <span class="visually-hidden">Next</span>
                <span aria-hidden="true" class="carousel-control-next-icon"><i class="fa-solid fa-angle-right"></i></span>
            </button>
            </div>
        </div>
        <div class = 'ampt2'>
        </div>
    </div>
    </section>
    <section id = "products">
    <div class = 'product'>
        <div class = 'title'>
            <img src='img/product.png'>
            <div class="centered">Products</div>
        </div>
        <div class = 'New-Arrivals'>
            <h2>New Arrivals <hr></h2>
            <div class ="nabody">
                <div class="nacontainer">
                    <div class="nacard">
                        <div class="naproduct-image">
                            <img src="img/p1.jpeg" alt="">
                        </div>
                        <div class="naproduct-info">
                            <h4>SUPER NINTENDO</h4>
                        </div>
                        <div class="butn">
                            <button type="button" onclick="window.location.href='https://www.instagram.com/foundit_electronics/related_profiles/?hl=en'">See More</button>
                        <div class="inquire">
                            <button type="button" onclick="window.location.href='https://ctec4309.drp9303.uta.cloud/Found%20It%20Website/Site.php#contact'">Inquire</button>
                        </div>
                        </div>
                    </div> 
                    <div class="nacard">
                        <div class="naproduct-image">
                            <img src="img/p2.jpeg" alt="">
                        </div>
                        <div class="naproduct-info">
                            <h4>NES</h4>
                        </div>
                        <div class="butn">
                            <button type="button" onclick="window.location.href='https://www.instagram.com/foundit_electronics/related_profiles/?hl=en'">See More</button>
                        <div class="inquire">
                            <button type="button" onclick="window.location.href='https://ctec4309.drp9303.uta.cloud/Found%20It%20Website/Site.php#contact'">Inquire</button>
                        </div>
                        </div>
                    </div> 
                    <div class="nacard">
                        <div class="naproduct-image">
                                <img src="img/p3.jpeg" alt="">
                        </div>
                        <div class="naproduct-info">
                            <h4>NINTENDO WII</h4>
                        </div>
                        <div class="butn">
                            <button type="button" onclick="window.location.href='https://www.instagram.com/foundit_electronics/related_profiles/?hl=en'">See More</button>
                        <div class="inquire">
                                <button type="button" onclick="window.location.href='https://ctec4309.drp9303.uta.cloud/Found%20It%20Website/Site.php#contact'">Inquire</button>
                        </div>
                        </div>
                    </div> 
                    <div class="nacard">
                        <div class="naproduct-image">
                                <img src="img/p4.jpeg" alt="">
                        </div>
                        <div class="naproduct-info">
                            <h4>PLAYSTATION</h4>
                        </div>
                        <div class="butn">
                            <button type="button" onclick="window.location.href='https://www.instagram.com/foundit_electronics/related_profiles/?hl=en'">See More</button>
                        <div class="inquire">
                            <button type="button" onclick="window.location.href='https://ctec4309.drp9303.uta.cloud/Found%20It%20Website/Site.php#contact'">Inquire</button>
                        </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class = "prod list">
            <div class="sectionone">
                <br>   
                <hr class = "pline">
                <div class ="pbody">
                    <div class="pcontainer">
                        <div class="bgone">
                            <div class="pcard">
                                <div class="pproduct-image">
                                        <img src="img/system.png" alt="">
                                </div>
                                <div class="pproduct-info">
                                    <h4> Video Game Consoles</h4>
                                    <p>From Atari to Gamecube to PS4, we offer a wide variety of video game consoles from nearly every era and company</p>
                                </div>
                            </div> 
                        </div>
                        <div class="bgtwo">
                            <div class="pcard">
                                <div class="pproduct-image">
                                        <img src="img/games.png" alt="">
                                </div>
                                <div class="pproduct-info">
                                    <h4> Video Games </h4>
                                    <p>We host a wide collection of games thoughout many consoles. From historic titles to niche gems, we have something for everyone</p>
                                </div>
                            </div> 
                        </div>
                        <div class="bgthree">
                            <div class="pcard">
                                <div class="pproduct-image">
                                    <img src="img/controller.png" alt="">
                                </div>
                            <div class="pproduct-info">
                                <h4> Controllers </h4>
                                <p>Need a Controller? Like our consoles and games, we sell a wide variety of them</p>
                            </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="sectiontwo">
                <div class ="pbody">
                    <div class="pcontainer">
                        <div class="bgfour">
                            <div class="pcard">
                                <div class="pproduct-image">
                                    <img src="img/accessories.png" alt="">
                                </div>
                                <div class="pproduct-info">
                                    <h4> Accessories </h4>
                                    <p>Memory cards, cables, expansion packs, we have extra accessories you might be interested in</p>
                                </div>
                            </div>
                        </div>
                        <div class="bgfive">
                            <div class="pcard">
                                <div class="pproduct-image">
                                    <img src="img/pc.png" alt="">
                                </div>
                                <div class="pproduct-info">
                                    <h4> PC's and Monitors </h4>
                                    <p>We offer PC's and monitors for those that play on PC. We also offer services as well for them</p>
                                </div>
                            </div> 
                        </div>
                        <div class="bgsix">
                            <div class="pcard">
                                <div class="pproduct-image">
                                    <img src="img/merchandise.png" alt="">
                                </div>
                                <div class="pproduct-info">
                                    <h4> Merchandise </h4>
                                    <p>Are you a collector? We have a host of extra merchandise from Amiibos to Pokemon cards, and more!</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <br>
                <hr class = "pline">
                <br>
            </div>
        </div>
    </div>
    </section>
    <section id = "services">
    <div class = 'Service'>
        <div class = 'stitle'>
            <img src='img/serviceimg.png'>
            <div class="scentered"><h1>Services</h1></div>
        </div>
        <div class="sectionwanted">
            <p>We offer additional services such as buying, selective repairs, and diagnostics for broken consoles</p>
                <hr>
        </div>
        <div class="sectionwantedone">
            <div class='container'>
                <div class='row fix'>
                    <div class='col-lg-6 col-md-12 col-sm-12 rpimage'>
                        <img src ="img/repair.png">
                    </div>
                    <div class='col-lg-6 col-md-12 col-sm-12'>
                        <h1><img src="img/fix.png" width="45px" height="auto" alt="">Repairs</h1>
                        <p>Console, PC, or controller not working? We offer repairs and replacements for certain consoles. We can take a look to find the problem free of charge. See table below for price details</p>
                    </div>
                </div>
            </div>
        </div>
        <div class = 'repairtable'>
            <div class = 'rl'>
                <h1>Repair List</h1>
                <hr>
            </div>
            <div class='container'>
            <div class='row frt'>
                <h2><span style="color: #ffcb2f">Free&nbsp</span>Diagnostics  |  Disc Refurbish - $3  |  Labor Fee - $49/hr</h2>
            </div>
            <br>
            <div class='row tablesect'>
                <div class='col-lg-4 col-md-12 col-sm-12 pricehold'>
                    <div class = 'scard'>
                        <img src="img/pctab.png">
                        <h4>PC Check</h4>
                        <table>
                            <tr>
                                <td class = "tbline">Virus Removal</td>
                                <td>$89</td>
                            </tr>
                            <tr>
                                <td class = "tbline">PC Reinstall</td>
                                <td>$89 + Price of HDD/SDD</td>
                            </tr>
                            <tr>
                                <td class = "tbline">DATA BACKUP/RECOVERY (MUST PROVIDE STORAGE)</td>
                                <td>$39</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class='col-lg-4 col-md-12 col-sm-12 pricehold'>
                    <div class = 'scard'>
                        <img src="img/repairtab.png">
                        <h4>Repairs</h4>
                        <table>
                            <tr>
                                <td class = "tbline">XBOX ONE/PS4 HDD REPAIR (1TB HDD)</td>
                                <td>$129</td>
                            </tr>
                            <tr>
                                <td class = "tbline">XBOX ONE/PS4 LASER REPAIR (EXCLUDING SLIM PS4)</td>
                                <td>$129</td>
                            </tr>
                            <tr>
                                <td class = "tbline">OVERHEATING REPAIR (XBOX ONE, PS4, PS3, PC)</td>
                                <td>$49</td>
                            </tr>
                            <tr>
                                <td class = "tbline">XBOX 360 LASER REPAIR</td>
                                <td>$59</td>
                            </tr>
                            <tr>
                                <td class = "tbline">PS3 LASER REPAIR</td>
                                <td>$89</td>
                            </tr>
                            <tr>
                                <td class = "tbline">WII LASER REPAIR</td>
                                <td>$59</td>
                            </tr>
                            <tr>
                                <td class = "tbline">GAMECUBE LASER REPAIR</td>
                                <td>$129</td>
                            </tr>
                            <tr>
                                <td class = "tbline">PS2 LASER REPAIR</td>
                                <td>$69</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class='col-lg-4 col-md-12 col-sm-12 pricehold'>
                    <div class = 'scard'>
                        <img src="img/replacetab.png">
                        <h4>Replacements</h4>
                        <table>
                            <tr>
                                <td class = "tbline">NES 72-Pin Replacement</td>
                                <td>$59</td>
                            </tr>
                            <tr>
                                <td class = "tbline">SNES DC Jack Replacement</td>
                                <td>$59</td>
                            </tr>
                            <tr>
                                <td class = "tbline">N64 Joystick Replacement</td>
                                <td>$15</td>
                            </tr>
                            <tr>
                                <td class = "tbline">Battery Replacement (GB, GBA, SNES)</td>
                                <td>$8</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <div class = 'note'>
                <p>If you see something not listed <a href="#contact">contact us</a> and ask</p>
            </div>
        </div>
        <div class="sectionwantedone">
            <br>   
            <hr>
            <br> 
            <div class='container'>
                <div class='row buy'>
                    <div class='col-lg-5 col-md-12 col-sm-12 wposter'>
                        <img src="img/wantedclean.png" width="575px" height="auto" alt="">
                    </div>
                    <div class='col-lg-7 col-md-12 col-sm-12'>
                        <h1><img src="img/moneybags.png" width="45px" height="auto" alt="">Buying</h1>
                        <p>Need to get rid of some items you don’t need anymore? We got you covered. Found It is willing to buy most Video Game related products ranging from games, consoles, controllers, etc. to PC’s and Laptops and occasionally certain cameras and smartphones. (If the price we give isn’t to your liking, no pressure! Only accept if you are happy/satisfied with the price we give!) If there is an item you're not sure we’d buy, feel free to contact us to see if we’d purchase it or not!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="webuy">
            <h1>What We Buy</h1>
            <hr>
            <br>
            <img src="img/buy.jpg" class = 'buyimg'>
            <br>   
            <hr>
            <br>
            <br
        </div>
    </div>
    </section>
    <section id = "reviews">
    <div class = 'Review'>
        <div class='container'>
            <div class='row re'>
                <div class='col-lg-12 col-md-12 col-sm-12 rh'>
                    <h1>Review</h1>
                    <img src='img/stars.png'>
                    <p>Submit a Review!!! All feedback is appreciated</p>
                </div>
            </div>
            <div class='row rf'>
                <div class='col-lg-12 col-md-12 col-sm-12 rfrm'>
                    <?php
                        if (array_key_exists("RevSubmit", $_POST)) {
                            
                            ?>
                            <script type="text/javascript">
                                window.location = "https://ctec4309.drp9303.uta.cloud/Found%20It%20Website/Site.php#reviews";
                            </script>      
                            <?php

                        	$required = array('name', 'email','rate', 'like', 'comment');
                        	$expected = array('name', 'email','rate', 'like', 'comment');
                        	$missing = array();
                        
                        	foreach($expected as $thisField) {
                                if (is_array($_POST[$thisField])) {
                                    $thisUserInput = $_POST[$thisField];
                                } else {
                                    $thisUserInput = trim($_POST[$thisField]);
                                }
                        		if (in_array($thisField, $required)) {
                        			if (empty($thisUserInput)) {
                        				array_push($missing, $thisField);
                        			} else {
                        				${$thisField} = $thisUserInput;
                        			}
                        		} else {
                        			${$thisField} = $thisUserInput;
                        		}
                        	}
                        	
                        	if (empty($missing)){
                        		mail('derek429perk@gmail.com', $rate, $comment);
                        		$output ="<div class = 'rsmtx'>Review Submitted!</div>
                        		        <br>
                        		        <br>
                        		        <table>
                        				<tr>
                        				    <td>Name:</td>
                        				    <td>$name</td>
                        				</tr>
                        				<tr>
                        				    <td>Email:</td>
                        				    <td>$email</td>
                        				</tr>
                        				<tr>
                        				    <td>Rating:</td>
                        				    <td>$rate</td>
                        				</tr>
                        				<tr>
                        				    <td>Comment:</td>
                        				    <td>$comment</td>
                        				</tr>
                        				</table>
                        				<hr width = 40%>
                        				";
                            } else {
                            	$missingFieldList = implode(", ",$missing);
                            	$output = "<div class = 'rsmtx'>The following fields are missing, please go back and fill them in.<br><br><b>Missing fields: $missingFieldList </b><br></div>";
                            }
                            
                        } elseif (array_key_exists("revsubagain", $_POST)) {
                            ?>
                            <script type="text/javascript">
                                window.location = "https://ctec4309.drp9303.uta.cloud/Found%20It%20Website/Site.php#reviews";
                            </script> 
                            <?php
                        } else {
                            $output = NULL;
                        }
                    ?>
                    
                    <?php
                        if (isset($output)){
                            ?>
                            <form action= 'Site.php' method='post' class = 'ric'>
                            <?php
                            echo $output;
                            echo "<br>";
                            ?>
                            <form action= 'Site.php' method='post' class = 'ric'>
                        		<input type='Submit' name='revsubagain' value='Submit Another' class = 'rsbbox'>
                            </form>
                            <?php
                        }else{
                    ?>
                        <form action= "Site.php" method="post" class = 'ric'>
                            <div class = 'rfr1'>
                            	<p class= 'rn'>Name:</p><br>
                            	<input type="text" name="name" class = 'rtybox'><br/>
                            	<p class= 'rn'>Email:</p><br>
                            	<input type="text" name="email" class = 'rtybox'><br/>
                        	</div>
                        	<p class= 'rn'>What did you like best about our store?</p><br>
                        	<input type="text" name="like" class = 'tybox2'><br/>
                        	<p class= 'rn'>Rate us (5 - most satisfied, 1 - least satisfied):</p><br>
                        	<select name="rate" class = 'rsubox'>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                            <br/>
                        	<p class= 'rn'>Additional Comments:</p> <br/><textarea name="comment" rows="5" cols="40" class = 'rcbox'></textarea><br>
                        	<input type="Submit" name="RevSubmit" value="Submit" class = 'rsbbox'>
                         </form>
                     <?php
                        }
                     ?>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section id = "address">
    <div class = 'Hours'>
        <div class = 'title'>
            <img src='img/store.png'>
            <div class="centered">Address & Hours</div>
        </div>
        <div class='container'>
            <div class='row h'>
                <div class='col-lg-6 col-md-12 col-sm-12 haa'>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.4072283846003!2d-97.25280444921844!3d32.860943286914996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e7875e9173d61%3A0x2371368ffd0ceda2!2sFound%20It%20Electronics%20%26%20Video%20Games!5e0!3m2!1sen!2sus!4v1670285433031!5m2!1sen!2sus" width="800" height="400" style="border:50;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <br>
                    <h1>6101 Watauga Road, Ste. G Watauga TX 76148</h1>
                </div>
                <div class='col-lg-6 col-md-12 col-sm-12 haa'>
                    <img src='img/hours.png'>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <section id = "contact">
    <div class = 'Contact'>
        <div class='container'>
            <div class='row ce'>
                <div class='col-lg-12 col-md-12 col-sm-12 tm'>
                    <p>Got a question? Want to know if we sell something? Interested in selling us something and want to ask about the price? Contact us below!</p>
                </div>
            </div>
            <div class='row cf'>
                <div class='col-lg-6 col-md-12 col-sm-12'>
                    <img src='img/contactusim.png'>
                </div>
                <div class='col-lg-6 col-md-12 col-sm-12 frm'>
                    <?php
                        if (array_key_exists("SubmitThis", $_POST)) {
                            
                            ?>
                            <script type="text/javascript">
                                window.location = "https://ctec4309.drp9303.uta.cloud/Found%20It%20Website/Site.php#contact";
                            </script>      
                            <?php
                            
                        	$required = array('name', 'email','subject', 'comment');
                        	$expected = array('name', 'email','subject', 'comment');
                        	$missing = array();
                        
                        	foreach($expected as $thisField) {
                                if (is_array($_POST[$thisField])) {
                                    $thisUserInput = $_POST[$thisField];
                                } else {
                                    $thisUserInput = trim($_POST[$thisField]);
                                }
                        		if (in_array($thisField, $required)) {
                        			if (empty($thisUserInput)) {
                        				array_push($missing, $thisField);
                        			} else {
                        				${$thisField} = $thisUserInput;
                        			}
                        		} else {
                        			${$thisField} = $thisUserInput;
                        		}
                        	}
                        	
                        	if (empty($missing)){
                        		mail('derek429perk@gmail.com', $subject, $comment);
                        		$output ="<div class = 'smtx'>Form Succesfully Submitted</div>
                        		        <br>
                        		        <br>
                        		        <table>
                        				<tr>
                        				    <td>Name:</td>
                        				    <td>$name</td>
                        				</tr>
                        				<tr>
                        				    <td>Email:</td>
                        				    <td>$email</td>
                        				</tr>
                        				<tr>
                        				    <td>Subject:</td>
                        				    <td>$subject</td>
                        				</tr>
                        				<tr>
                        				    <td>Comment:</td>
                        				    <td>$comment</td>
                        				</tr>
                        				</table>
                        				<hr width = 40%>
                        				";
                            } else {
                            	$missingFieldList = implode(", ",$missing);
                            	$output = "<div class = 'smtx'>The following fields are missing from your post, please go back and fill them in.  Thank you.<br><br><b>Missing fields: $missingFieldList </b><br> <hr width = 40%></div>";
                            }
                            
                        } elseif (array_key_exists("subagain", $_POST)) {
                            ?>
                            <script type="text/javascript">
                                window.location = "https://ctec4309.drp9303.uta.cloud/Found%20It%20Website/Site.php#contact";
                            </script> 
                            <?php
                        } else {
                            $output = NULL;
                        }
                    ?>
                    
                    
                    <?php
                        if (isset($output)){
                            ?>
                            <form action= 'Site.php' method='post' class = 'fic'>
                            <?php
                            echo $output;
                            echo "<br>";
                            ?>
                            <form action= 'Site.php' method='post' class = 'fic'>
                        		<input type='Submit' name='subagain' value='Submit Another' class = 'sbbox'>
                            </form>
                            <?php
                        }else{
                    ?>
                        <form action= "Site.php" method="post" class = 'fic'>
                        	<p class= 'fn'>Name:</p><br>
                        	<input type="text" name="name" class = 'tybox'><br/>
                        	<p class= 'fn'>Email:</p><br>
                        	<input type="text" name="email" class = 'tybox'><br/>
                        	<p class= 'fn'>Subject:</p><br>
                        	<select name="subject" class = 'subox'>
                                <option value="product">Product</option>
                                <option value="service">Service</option>
                                <option value="other">Other</option>
                            </select>
                            <br/>
                        	<p class= 'fn'>Comment:</p> <br/><textarea name="comment" rows="5" cols="40" class = 'cbox'></textarea><br>
                        	<input type="Submit" name="SubmitThis" value="Submit" class = 'sbbox'>
                         </form>
                     <?php
                        }
                     ?>
                     
                     
                </div>
            </div>
        </div>
    </div>
    </section>
    <?php print $PageFooter; ?>
</html>