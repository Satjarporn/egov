 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Goverment Working Area</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/flexslider.css" rel="stylesheet" >
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link href="../assets/css/queries.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">

    <!-- Push & slide css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/default.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/component.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/authorLogin.css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>


      <body id="top" class="cbp-spmenu-push">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <h3>Menu</h3>
        <?php echo anchor('', 'Home') ?>
        <a href="#">Wiki</a>
        <a href="#">Forum</a>
        <a href="#">Links</a>
        <a href="#">About</a>
        <?php echo anchor('#', 'New annoucement') ?>
        <?php echo anchor('faq', 'FAQ') ?>
        </nav>
        

        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3>Your Menu</h3>  
        <center>
        <a href="#"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
        </center>
          <?php echo anchor('homepage', 'Homepage') ?>
        <a href="#" data-toggle="modal" data-target="#myModal">View Profile</a>
        <?php echo anchor('edit_profile', 'Edit Profile') ?>
  
        <?php echo anchor('auth/logout', '<div class="btn btn-danger noborder maxwidth">Sign out</div>') ?>
        </nav>

        <!-- Modal Responsive-->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                          <h4 class="modal-title" id="myModalLabel">More About User</h4>
                          </div>
                      <div class="modal-body">
                          <center>
                          <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                          <h3 class="media-heading">Danny <small>USA</small></h3>
                          <span><strong>Skills: </strong></span>
                              <span class="label label-warning">HTML5/CSS</span>
                              <span class="label label-info">Adobe CS 5.5</span>
                              <span class="label label-info">Microsoft Office</span>
                              <span class="label label-success">Windows XP, Vista, 7</span>
                          </center>
                          <hr>
                          <center>
                          <p class="text-left"><strong>Bio: </strong><br>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                          <br>
                          </center>
                      </div>
                      <div class="modal-footer">
                          <center>
                          <button type="button" class="btn btn-default" data-dismiss="modal"> Ok </button>
                          </center>
                      </div>
                  </div>
              </div>
          </div>



        <header id="home">
          
          <section class="hero" id="hero">
            <div class="container">
              <div class="row">
                <div class="col-md-1 text-right navicon">
                  <a id="nav-toggle"  class="nav_slide_button" href="#"><span></span></a>
                </div>
                <div class="col-md-12 text-right navicon">
                  <div class="gear">
                  <a id="showRightPush"  class="fa fa-cog" href="#"><span></span></a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
                  <h1 class="animated fadeInDown">Hello, again<span>Super Manager</span></h1>
                  <p class="animated fadeInUp delay-05s">Time for <em>working</em> and <em>having fun</em></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#features" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
                </div>
              </div>
            </div>
          </section>
        </header>
        

         <!-- <section class="swag text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1>Working is easy<span>Let's do it together</span></h1>
                <a href="#features" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section> -->

        <section class="features text-center section-padding" id="features">
          <div class="container">
            <div class="row">
                                <h1 class="arrow">Choose your work</h1>

              <div class="col-md-12">
                <div class="features-wrapper">
                  <div class="col-md-6 wp2">
                    <?php echo anchor('task','<div class="icon">
                      <i class="fa fa-th-list shadow"></i>
                    </div>
                    <h2>task</h2>')?>
                    <p>Create, Update and Delete your task here</p>
                  </div>
                  <div class="col-md-6 wp2 delay-05s">
                    <?php echo anchor('send','<div class="icon">
                      <i class=" fa fa-cloud-upload shadow"></i>
                    </div>
                    <h2>new update task</h2>')?>
                    <p>Check out new updated task from developer</p>
                  </div>
                  <div class="col-md-6 wp2 delay-1s">
                    <?php echo anchor('progress','<div class="icon">
                      <i class="fa fa-check-square shadow"></i>
                    </div>
                    <h2>Progress</h2>')?>
                    <p>See all task progress and status</p>
                  </div>
                  <div class="col-md-6 wp2 delay-1s">
                    <?php echo anchor('announcement','<div class="icon">
                      <i class="fa fa-calendar shadow"></i>
                    </div>
                    <h2>New Annoucement</h2>')?>
                    <p>create new announcement</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="annouce text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1>Announcement<span>News&Information</span></h1>
                <a href="#responsive" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>
        <section class="text-center" id="responsive">
          <div class="container-fluid nopadding responsive-services">
            <div class="wrapper">
              <div class="news">
                <div class="wp3"></div>
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    <ul class="slides">
                      <li>
                        <h1 class="arrow">Responsive Design Specialists</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero. </p>
                        <p>
                        Mauris ultrices odio vitae nulla ultrices iaculis. Nulla rhoncus odio eu lectus faucibus facilisis. Maecenas ornare augue vitae sollicitudin accumsan. </p>
                        <p>Etiam eget libero et erat eleifend consectetur a nec lectus. Sed id tellus lorem. Suspendisse sed venenatis odio, quis lobortis eros. <a href="#">See more click!</a></p>
                      </li>
                      <li>
                        <h1 class="arrow">Bootstrap Professionals</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero. </p>
                        <p>
                        Mauris ultrices odio vitae nulla ultrices iaculis. Nulla rhoncus odio eu lectus faucibus facilisis. Maecenas ornare augue vitae sollicitudin accumsan. </p>
                        <p>Etiam eget libero et erat eleifend consectetur a nec lectus. Sed id tellus lorem. Suspendisse sed venenatis odio, quis lobortis eros. <a href="#">See more click!</a></p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--
        <section class="about text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1>About Us<span>E - Government</span></h1>
                <a href="#portfolio" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>
        <section class="portfolio text-center section-padding" id="portfolio">
          <div class="container">
            <div class="row">
              <div id="portfolioSlider">
                <ul class="slides">
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-01.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Minds</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-02.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Hearts</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-03.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Ideas</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-01.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Minds</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-02.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Hearts</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-03.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Ideas</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
       
        
        <section class="subscribe text-center">
          <div class="container">
            <h1><i class="fa fa-paper-plane"></i><span>Subscribe to stay in the loop</span></h1>
            <form action="#">
              <input type="text" name="" value="" placeholder="" required>
              <input type="submit" name="" value="Send">
            </form>
          </div>
        </section>
        -->

        <section class="dark-bg text-center section-padding contact-wrap" id="contact">
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Drop us a line</h1>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                  <p>Kookmin University, Seoul, Korea</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <p>+82 10-3043-xxxx</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                  <p><a href="#">emailme@gmail.com</a></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="social-btn"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <ul class="legals">
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Legals</a></li>
                </ul>
              </div>
              <div class="col-md-6 credit">
                <p>Designed &amp; by <a href="#">Peter Finlan</a></p> 
                <p>Developed &amp; by <a href="#"><em>Kasetsart Student</em></a></p>
              </div>
            </div>
          </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../assets/js/waypoints.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/scripts.js"></script>
        <script src="../assets/js/jquery.flexslider.js"></script>
        <script src="../assets/js/modernizr.js"></script>


        <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
    <script src="../assets/js/classie.js"></script>
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
          menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        showLeftPush = document.getElementById( 'nav-toggle' ),
        showRightPush = document.getElementById( 'showRightPush' ),
        body = document.body;
      
      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
      showRightPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toleft' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRightPush' );
      };
      

      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
        if( button !== 'showRightPush' ) {
          classie.toggle( showRightPush, 'disabled' );
        }
      }
    </script>


      </body>
    </html>