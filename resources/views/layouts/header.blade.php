  <!-- Start Header -->

  <div class="header">

      <!-- Start Top bar -->

      {{-- <div class="top-bar">
          <div class="container">
              <div class="row">
                  <div class="col-sm-8">
                      <ul class="site-infos">
                          <li><i class="fa fa-phone"></i> +84 5858 - 4658</li>
                          <li><i class="fa fa-envelope"></i> Fat 2 Fit@email.com</li>
                          <li><i class="fa fa-map-marker"></i> 123 Jackson, New York</li>
                      </ul>
                  </div>
                  <div class="col-sm-4 text-right">
                      <ul class="social-media">
                          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-google"></i></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div> --}}

      <!-- End Top bar -->

      <!-- Start Nav bar -->

      <nav class="navbar animated">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                      data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <div class="search-link-mobile">
                      <a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                      <div class="search-form">
                          <form action="#" method="get">
                              <div class="form-group has-feedback">
                                  <input type="text" class="form-control" placeholder="Search">
                                  <i class="fa fa-search"></i>
                              </div>
                              <button type="submit" class="btn btn-primary">search</button>
                          </form>
                      </div>
                  </div>
                  <a class='navbar-brand' href='{{ route('home.index') }}'>
                      <img src="images/logo-3.png" alt="Fat 2 Fit Logo">
                  </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href='{{ route('home.index') }}'>Home</a></li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                              aria-haspopup="true" aria-expanded="false" data-hover="dropdown">About Us <i
                                  class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu dropdownhover-bottom">
                              <li><a href='about-me.html'>About Me</a></li>
                              <li><a href='about-team.html'>About Us - Team</a></li>
                          </ul>
                      </li>
                      <li><a href='lifestyle.html'>Lifestyle</a></li>
                      <li><a href='portfolio.html'>Portfolio</a></li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                              aria-haspopup="true" aria-expanded="false" data-hover="dropdown">Blog <i
                                  class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu dropdownhover-bottom">
                              <li class="dropdown sub-menu">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                      aria-haspopup="true" aria-expanded="false" data-hover="dropdown">Classic <i
                                          class="fa fa-angle-right"></i></a>
                                  <ul class="dropdown-menu dropdownhover-right">
                                      <li><a href='blog-left-sidebar.html'>Left Sidebar</a></li>
                                      <li><a href='blog-right-sidebar.html'>Right Sidebar</a></li>
                                      <li><a href='blog-full-width.html'>Full Width</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown sub-menu">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                      aria-haspopup="true" aria-expanded="false" data-hover="dropdown">Single <i
                                          class="fa fa-angle-right"></i></a>
                                  <ul class="dropdown-menu">
                                      <li><a href='standard-post.html'>Standard Post</a></li>
                                      <li><a href='gallery-post.html'>Gallery Post</a></li>
                                      <li><a href='video-post.html'>Video Post</a></li>
                                      <li><a href='audio-post.html'>Audio Post</a></li>
                                      <li><a href='quote-post.html'>Quote Post</a></li>
                                      <li><a href='link-post.html'>Link Post</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                              aria-haspopup="true" aria-expanded="false" data-hover="dropdown">Elements <i
                                  class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu dropdownhover-bottom">
                              <li class="dropdown sub-menu">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                      aria-haspopup="true" aria-expanded="false" data-hover="dropdown">Coming Soon <i
                                          class="fa fa-angle-right"></i></a>
                                  <ul class="dropdown-menu">
                                      <li><a href='coming-soon.html'>Default</a></li>
                                      <li><a href='coming-soon-animated.html'>Animated</a></li>
                                      <li><a href='coming-soon-bubbles.html'>With Bubbles</a></li>
                                      <li><a href='coming-soon-particles.html'>With Particles</a></li>
                                      <li><a href='coming-soon-snow.html'>With Snow</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown sub-menu">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                      aria-haspopup="true" aria-expanded="false" data-hover="dropdown">404 <i
                                          class="fa fa-angle-right"></i></a>
                                  <ul class="dropdown-menu">
                                      <li><a href='404.html'>Default</a></li>
                                      <li><a href='404-animated.html'>Animated</a></li>
                                      <li><a href='404-bubbles.html'>With Bubbles</a></li>
                                      <li><a href='404-particles.html'>With Particles</a></li>
                                      <li><a href='404-snow.html'>With Snow</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li><a href='contact-us.html'>Contact</a></li>
                      <li class="search-link">
                          <a href="#"><i class="fa fa-search"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
      <nav class="navbar-mobile">
          <div class="logo-wrapper">
              <a href="#" class="close-mobile">
                  <i class="fa fa-close"></i>
              </a>
              <a class='navbar-mobile-logo' href='{{ route('home.index') }}'>
                  <img src="images/logo-3.png" alt="Fat 2 Fit Logo">
              </a>
          </div>
          <ul class="mobile-menu">
              <li class="search-link">
                  <div class="search-form">
                      <form action="#">
                          <input class="form-control" type="text" name="s" size="32"
                              placeholder="Search">
                          <button class="btn" name="submit"><i class="fa fa-search"></i></button>
                          <span></span>
                      </form>
                  </div>
              </li>
              <li><a href='{{ route('home.index') }}'>Home</a></li>
              <li class="treeview">
                  <a href="#" class="treeview-toggle">About Us <i class="fa fa-angle-down"></i></a>
                  <ul class="treeview-menu">
                      <li><a href='about-me.html'>About Me</a></li>
                      <li><a href='about-team.html'>About Us - Team</a></li>
                  </ul>
              </li>
              <li><a href='lifestyle.html'>Lifestyle</a></li>
              <li><a href='portfolio.html'>Portfolio</a></li>
              <li class="treeview">
                  <a href="#" class="treeview-toggle">Blog <i class="fa fa-angle-down"></i></a>
                  <ul class="treeview-menu">
                      <li class="treeview-sub-menu">
                          <a href="#">Classic <i class="fa fa-angle-down"></i></a>
                          <ul class="treeview-sub-menu-treeview-menu">
                              <li><a href='blog-left-sidebar.html'>Left Sidebar</a></li>
                              <li><a href='blog-right-sidebar.html'>Right Sidebar</a></li>
                              <li><a href='blog-full-width.html'>Full Width</a></li>
                          </ul>
                      </li>
                      <li class="treeview-sub-menu">
                          <a href="#">Single <i class="fa fa-angle-down"></i></a>
                          <ul class="treeview-sub-menu-treeview-menu">
                              <li><a href='standard-post.html'>Standard Post</a></li>
                              <li><a href='gallery-post.html'>Gallery Post</a></li>
                              <li><a href='video-post.html'>Video Post</a></li>
                              <li><a href='audio-post.html'>Audio Post</a></li>
                              <li><a href='quote-post.html'>Quote Post</a></li>
                              <li><a href='link-post.html'>Link Post</a></li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <li class="treeview">
                  <a href="#" class="treeview-toggle">Elements <i class="fa fa-angle-down"></i></a>
                  <ul class="treeview-menu">
                      <li class="treeview-sub-menu">
                          <a href="#">Coming Soon <i class="fa fa-angle-down"></i></a>
                          <ul class="treeview-sub-menu-treeview-menu">
                              <li><a href='coming-soon.html'>Default</a></li>
                              <li><a href='coming-soon-animated.html'>Animated</a></li>
                              <li><a href='coming-soon-bubbles.html'>With Bubbles</a></li>
                              <li><a href='coming-soon-particles.html'>With Particles</a></li>
                              <li><a href='coming-soon-snow.html'>With Snow</a></li>
                          </ul>
                      </li>
                      <li class="treeview-sub-menu">
                          <a href="#">404 <i class="fa fa-angle-down"></i></a>
                          <ul class="treeview-sub-menu-treeview-menu">
                              <li><a href='404.html'>Default</a></li>
                              <li><a href='404-animated.html'>Animated</a></li>
                              <li><a href='404-bubbles.html'>With Bubbles</a></li>
                              <li><a href='404-particles.html'>With Particles</a></li>
                              <li><a href='404-snow.html'>With Snow</a></li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <li><a href='contact-us.html'>Contact</a></li>
          </ul>
      </nav>
      <div class="navbar-mobile-show">
          <a href="#">
              <i class="fa fa-bars"></i>
          </a>
      </div>

      <!-- Start Nav bar -->

  </div>

  <!-- End Header -->
