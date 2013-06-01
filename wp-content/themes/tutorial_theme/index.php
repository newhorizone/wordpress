<?php get_header(); ?>
<!--Header Section, contains Logo, Site Title, Login links and Navbar -->
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <!-- Logo and title-->
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="row-fluid">
                                <div class="span1">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/common/image/logo.png" class="img-rounded" /> 
                                </div>
                                <div class="span7">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/common/image/banner3.png" class="img-rounded"/><h1><small>The Real Royalty is enthroned here!</small></h1> 
                                </div>
                                <div class="span4">                                    
                                    <!-- Button to trigger modal -->
                                    <a href="#registerModal" role="button" class="btn btn-primary btn-large" data-toggle="modal">Register &raquo;<img class="icon-user"/></a>
                                    <a href="#loginModal" role="button" class="btn btn-success btn-large" data-toggle="modal">Member &raquo;<img class="icon-lock"/></a>
                                    <!-- Register Modal-->
                                    <div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true" keyboard="true">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 id="registerModalLabel"><center>Register Form</center></h3>
                                        </div>
                                        <div class="modal-body">
                                            <p align="center" class="pull-left modified">Fill in forms, (*) is required!</p>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="control-group">
                                                <label class="control-label pull-left" for="input01">User name(*)</label>  
                                                <div class="controls">  
                                                    <input type="text" class="input-large" id="input01" placeholder="Valerie Wisdom">
                                                </div>  
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label pull-left" for="input02">Password(*)</label>  
                                                <div class="controls">  
                                                    <input type="password" class="input-large" id="input02" placeholder="**********">
                                                </div>  
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label pull-left" for="input021">Retype Password(*)</label>  
                                                <div class="controls">  
                                                    <input type="password" class="input-large" id="input021" placeholder="**********">
                                                </div>  
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label pull-left" for="input03">Email(*)</label>  
                                                <div class="controls">  
                                                    <input type="text" class="input-large" id="input03" placeholder="someone@somewhere.com">
                                                </div>  
                                            </div>
                                            <div class="control-group">  
                                                <label class="control-label pull-left" for="select01">Location</label>


                                                <div class="controls"> 
                                                    <input type="radio" id="radio01" value="option1">
                                                    <label class="control-label" for="radio01">Vietnam</label>
                                                    <input type="radio" id="radio02" value="option2"> 
                                                    <label class="control-label" for="radio02">International</label>
                                                    <select id="select01">
                                                        <option>-----Choose one-----</option>  
                                                        <option>Ha Noi</option>  
                                                        <option>Ho Chi Minh</option>  
                                                        <option>Da Nang</option>  
                                                        <option>Quy Nhon</option>  
                                                    </select>
                                                </div>                                                
                                            </div>                                           
                                            <div class="control-group">
                                                <label class="control-label pull-left" for="input05">Phone(*)</label>  
                                                <div class="controls">  
                                                    <input type="tel" class="input-large" id="input05" placeholder="+084 083832256">
                                                </div>  
                                            </div>
                                            <button class="btn btn-primary btn-large">Register</button>
                                            <button class="btn btn-danger btn-large" data-dismiss="modal" aria-hidden="true">Cancel</button>                                            
                                        </div>
                                    </div>
                                    <!-- Login Modal-->
                                    <form method="POST" action="users/login">
                                        <div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="loginModalLabel"><center>Login Form</center></h3>
                                            </div>
                                            <div class="modal-body">
                                                <p align="center" class="pull-left modified">Fill in forms, (*) is required!</p>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="control-group">
                                                    <label class="control-label pull-left" for="input01">User name(*)</label>  
                                                    <div class="controls">  
                                                        <input type="text" class="input-large" id="input01" placeholder="Valerie Wisdom" name="username">
                                                    </div>  
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label pull-left" for="input02">Password(*)</label>  
                                                    <div class="controls">  
                                                        <input type="password" class="input-large" id="input02" placeholder="**********" name="password">
                                                    </div>  
                                                </div>                                            
                                                <input class="btn btn-primary btn-large" type="submit" value="Login">
                                                <input class="btn btn-danger btn-large" data-dismiss="modal" aria-hidden="true" value="Cancel">                                            
                                            </div>
                                        </div>
                                    </form>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <!--Nav bar content-->
                    <div class="navbar navbar-inverse">
                        <div class="navbar-inner">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <a class="brand" href="#"></a>
                                <div class="nav-collapse collapse ">                                    
                                    <ul class="nav">
                                        <li class="active"><a href="#">Home</a></li> 
                                        <li class="dropdown"><a href="#portfolio" class="dropdown-toggle" data-toggle="dropdown">Foods & Drinks</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#portfolio"><img class="icon-gift"/>Foods</a></li>
                                                <li><a href="#portfolio"><img class="icon-hand-up"/>Drinks</a></li>
                                            </ul>
                                        </li>                                                                               
                                        <li><a href="#product">Booking Online</a></li>
                                        <li><a href="#team">Payment</a></li>
                                        <li><a href="about.html">Employment</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>

                                    <form class="navbar-form pull-right">
                                        <input class="input-large" type="text" placeholder="Type something to search ...">
                                        <button type="submit" class="btn btn-warning">Search</button>
                                    </form>
                                </div><!--/.nav-collapse -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="slideinfo">
             
                    <div id="myCarousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item"><center><img src="http://tativico.vn/images/hoboi.jpg"></center></div>
                            <div class="item"><center><img src="http://tativico.vn/images/spa.jpg"></center></div>
                            <div class="item"><center><img src="http://tativico.vn/images/phongxonghoi.jpg"></center></div>
                            <div class="item"><center><img src="http://tativico.vn/images/noithat.jpeg"></center></div>
                            <div class="item"><center><img src="http://tativico.vn/images/phongtamkinh.jpg"></center></div>
                            <div class="item"><center><img src="http://tativico.vn/images/phongtapthehinh.jpg"></center></div>
                        </div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                
        </div>
        <div class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">

                <div class="row-fluid">
                    <div class="span7">
                        <h1>Welcome you!</h1>
                        <p>This is the main website of Hoang Gia Restaurant. You can find many information here about foods, drinks, booking, payment, etc...</p>
                        <p><a class="btn btn-navbar btn-large">Learn more &raquo;</a></p>                    
                    </div>
                    <div class="span4">
                        <!-- Embed your code for Presentation or video -->
                        <iframe src="http://www.slideshare.net/slideshow/embed_code/15740077" width="350" height="250" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px" allowfullscreen webkitallowfullscreen mozallowfullscreen> </iframe>
                        <div style="margin-bottom:5px"> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Widget Area , Rows and Columns -->
            <div class="row">
                <div class="span4">
                    <h2>Portfolio</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Product</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Team</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
            </div>
            <hr>
<?php get_footer(); ?>