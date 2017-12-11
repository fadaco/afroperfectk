
<!DOCTYPE HTML>
<html>
<head>
<title>Admin::Afroperfect'k</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="{{URL::asset('admin/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{URL::asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{URL::asset('admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="{{URL::asset('admin/css/icon-font.min.css')}}" type='text/css' />
<script src="{{URL::asset('admin/js/amcharts.js')}}"></script>  
<script src="{{URL::asset('admin/js/serial.js')}}"></script>    
<script src="{{URL::asset('admin/js/light.js')}}"></script> 
<!-- //lined-icons -->
<script src="{{URL::asset('admin/js/jquery-1.10.2.min.js')}}"></script>
   <!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
    <div class="left-content">
       <div class="inner-content">
        <!-- header-starts -->
            <div class="header-section">
            <!-- top_bg -->
                        <div class="top_bg">
                            
                                <div class="header_top">
                                    <div class="top_right">
                                        <ul>
                                            <li><a href="contact.html">help</a></li>|
                                            <li><a href="contact.html">Contact</a></li>|
                                        </ul>
                                    </div>
                                    <div class="top_left">
                                        <h2><span></span> Call us : 032 2352 782</h2>
                                    </div>
                                        <div class="clearfix"> </div>
                                </div>
                            
                        </div>
                    <div class="clearfix"></div>
                <!-- /top_bg -->
                </div>
                <div class="header_bg">
                        
                            <div class="header">
                                <div class="head-t">
                                    <div class="logo">
                                        <a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""> </a>
                                    </div>
                                        <!-- start header_right -->
                                    <div class="header_right">
                                        <div class="rgt-bottom">
                                            <div class="log">
                                                <div class="login">
                                                    <div id="loginContainer"><a id="loginButton" class=""><span>Login</span></a>
                                                        <div id="loginBox" style="display: none;">                
                                                            <form id="loginForm">
                                                                    <fieldset id="body">
                                                                        <fieldset>
                                                                              <label for="email">Email Address</label>
                                                                              <input type="text" name="email" id="email">
                                                                        </fieldset>
                                                                        <fieldset>
                                                                                <label for="password">Password</label>
                                                                                <input type="password" name="password" id="password">
                                                                         </fieldset>
                                                                        <input type="submit" id="login" value="Sign in">
                                                                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                                                    </fieldset>
                                                                <span><a href="#">Forgot your password?</a></span>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="reg">
                                                <a href="register.html">REGISTER</a>
                                            </div>
                                        <div class="cart box_1">
                                                
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="create_btn">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="search">
                                        <form>
                                            <input type="text" value="" placeholder="search...">
                                            <input type="submit" value="">
                                        </form>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    
                </div>
                    <!-- //header-ends -->
                
                <!--content-->
            <div class="content">
                    <div class="monthly-grid">
                        <div class="panel panel-widget">
                            <div class="panel-title">
                            <div class="col-md-6">Home Container Content</div>
                             <div class="col-md-6"><a href="#" class="btn btn-primary" id="toggle-home-create">Create a Content</a></div>
                             <div id="form-home">
                                 <form>
                                     <div class="form-group">
                                     <label for="home-title">Title</label>
                                     <input type="text" id="home-title" class="form-control">
                                     </div>

                                     <div class="form-group">
                                     <label for="home-image">Background Image</label>
                                     <input type="file" id="home-image" class="form-control">
                                     </div>

                                     <div class="form-group">
                                     <label for="home-body">Body</label>
                                     <textarea class="form-control1" cols="50" rows="30" id="home-body"></textarea>
                                     </div>
                                 </form>
                             </div>


                             <div>
                                 <table class="table">
                                     <thead>
                                         <th>#</th>
                                         <th>Title</th>
                                         <th>Image</th>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td>1</td>
                                             <td>post cont</td>
                                             <td>image</td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                              
                              
                            </div>
                            <div class="panel-body">
                                <!-- status -->
                                <div class="contain">   
                                    <div class="gantt"></div>
                                </div>
                                <!-- status -->
                            </div>
                        </div>
                    </div>
            
                       
                        
        <div class="fo-top-di">
            <div class="foot-top">
                
                    <div class="col-md-6 s-c">
                        <li>
                            <div class="fooll">
                                <h1>follow us on</h1>
                            </div>
                        </li>
                        <li>
                            <div class="social-ic">
                                <ul>
                                    <li><a href="#"><i class="facebok"> </i></a></li>
                                    <li><a href="#"><i class="twiter"> </i></a></li>
                                    <li><a href="#"><i class="goog"> </i></a></li>
                                    <li><a href="#"><i class="be"> </i></a></li>
                                        <div class="clearfix"></div>    
                                </ul>
                            </div>
                        </li>
                            <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 s-c">
                        <div class="stay">
                                    <div class="stay-left">
                                        <form>
                                            <input type="text" placeholder="Enter your email" required="">
                                        </form>
                                    </div>
                                    <div class="btn-1">
                                        <form>
                                            <input type="submit" value="join">
                                        </form>
                                    </div>
                                        <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                
            </div>
            <div class="footer">
                    
                    <div class="clearfix"> </div>
                        <p>© 2017 Afroperfect'k. All Rights Reserved | Design by <a href="http://w3layouts.com/">Utiva Solutions</a></p>
            </div>
        </div>
            </div>
            <!--content-->
        </div>
</div>
                <!--//content-inner-->
            <!--/sidebar-menu-->
                <div class="sidebar-menu">
                    <header class="logo1">
                        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
                    </header>
                        <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
                                    <ul id="menu" >
                                        <li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>  
                                        <li><a href="#"><i class="fa fa-tachometer"></i> <span>About Us</span></a></li>  
                                        <li><a href="#"><i class="fa fa-tachometer"></i> <span>What we believe</span></a></li> 
                                        <li><a href="#"><i class="fa fa-tachometer"></i> <span>Gallery</span></a></li>   
                                        <li><a href="#"><i class="fa fa-tachometer"></i> <span>Latest Items</span></a></li>    
                                   
                                  </ul>
                                </div>
                              </div>
                              <div class="clearfix"></div>      
                            </div>
                            <script>
                            var toggle = true;
                                        
                            $(".sidebar-icon").click(function() {                
                              if (toggle)
                              {
                                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                                $("#menu span").css({"position":"absolute"});
                              }
                              else
                              {
                                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                                setTimeout(function() {
                                  $("#menu span").css({"position":"relative"});
                                }, 400);
                              }
                                            
                                            toggle = !toggle;
                                        });
                            </script>
<!--js -->
<script src="{{URL::asset('admin/js/jquery.nicescroll.js')}}"></script>
<script src="{{URL::asset('admin/js/scripts.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="{{URL::asset('admin/js/bootstrap.min.js')}}"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->

<!-- /real-time -->

</body>
</html>