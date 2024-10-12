<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from sandbox-tailwind-template.netlify.app/demo2 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2024 03:13:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="Tailwind CSS, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Sandbox - Modern & Multipurpose Tailwind CSS Template</title>

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Manrope:wght@400;500;700&amp;family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

  


  <?php wp_head();?>


</head>

<body>
  <div class="grow shrink-0">
    <header class="relative wrapper !bg-[#ffffff] ">
      <div class="bg-[rgba(63,120,224)] text-white font-bold text-[.75rem] mb-2">
        <div class="container py-2 xl:flex lg:flex md:flex xl:flex-row lg:flex-row md:flex-row">
          <div class="flex flex-row items-center">
            <div class="icon text-white !text-[1.1rem] !mt-[.25rem] !mr-[.5rem]"> <i class="uil uil-location-pin-alt before:content-['\ebd8']"></i></div>
            <address class="mb-0 not-italic leading-[inherit] block">Moonshine St. 14/05 Light City</address>
          </div>
          <div class="flex flex-row items-center me-6 ms-auto">
            <div class="icon text-white !text-[1.1rem] !mt-[.25rem] !mr-[.5rem]"> <i class="uil uil-phone-volume before:content-['\ec50']"></i></div>
            <p class="mb-0">00 (123) 456 78 90</p>
          </div>
          <div class="flex flex-row items-center">
            <div class="icon text-white !text-[1.1rem] !mt-[.25rem] !mr-[.5rem]"> <i class="uil uil-message before:content-['\ebfe']"></i></div>
            <p class="mb-0"><a href="mailto:sandbox@email.com" class="hover text-white hover:!text-white">sandbox@email.com</a></p>
          </div>
        </div>
        <!-- /.container -->
      </div>
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container xl:flex-row lg:flex-row !flex-nowrap items-center">
          <div class="navbar-brand w-full">
            <a href='index.html'>
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" srcset="./assets/img/logo@2x.png 2x" alt="image">
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header xl:hidden lg:hidden flex items-center justify-between flex-row p-6">
              <h3 class="text-white xl:text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white mr-[-0.75rem] m-0 p-0 leading-none text-[#343f52] transition-all duration-[0.2s] ease-in-out border-0 motion-reduce:transition-none before:text-[1.05rem] before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(255,255,255,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)] focus:outline-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex  flex-col !h-full">
              <ul class="navbar-nav">

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class='dropdown-item' href='services.html'>Services I</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='services2.html'>Services II</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class='dropdown-item' href='about.html'>About I</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='about2.html'>About II</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class='dropdown-item' href='shop.html'>Shop I</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='shop2.html'>Shop II</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='shop-product.html'>Product Page</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='shop-cart.html'>Shopping Cart</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='shop-checkout.html'>Checkout</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Contact</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class='dropdown-item' href='contact.html'>Contact I</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='contact2.html'>Contact II</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='contact3.html'>Contact III</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Career</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class='dropdown-item' href='career.html'>Job Listing I</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='career2.html'>Job Listing II</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='career-job.html'>Job Description</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Utility</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class='dropdown-item' href='404.html'>404 Not Found</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='page-loader.html'>Page Loader</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='signin.html'>Sign In I</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='signin2.html'>Sign In II</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='signup.html'>Sign Up I</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='signup2.html'>Sign Up II</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='terms.html'>Terms</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class='dropdown-item' href='pricing.html'>Pricing</a></li>
                    <li class="nav-item"><a class='dropdown-item' href='onepage.html'>One Page</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Projects</a>
                  <div class="dropdown-menu dropdown-lg">
                    <div class="dropdown-lg-content">
                      <div>
                        <h6 class="dropdown-header">Project Pages</h6>
                        <ul class="pl-0 list-none">
                          <li><a class='dropdown-item' href='projects.html'>Projects I</a></li>
                          <li><a class='dropdown-item' href='projects2.html'>Projects II</a></li>
                          <li><a class='dropdown-item' href='projects3.html'>Projects III</a></li>
                          <li><a class='dropdown-item' href='projects4.html'>Projects IV</a></li>
                        </ul>
                      </div>
                      <!-- /.column -->
                      <div>
                        <h6 class="dropdown-header">Single Projects</h6>
                        <ul class="pl-0 list-none">
                          <li><a class='dropdown-item' href='single-project.html'>Single Project I</a></li>
                          <li><a class='dropdown-item' href='single-project2.html'>Single Project II</a></li>
                          <li><a class='dropdown-item' href='single-project3.html'>Single Project III</a></li>
                          <li><a class='dropdown-item' href='single-project4.html'>Single Project IV</a></li>
                        </ul>
                      </div>
                      <!-- /.column -->
                    </div>
                    <!-- /auto-column -->
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class='dropdown-item' href='blog.html'>Blog without Sidebar</a></li>
                    <li class="nav-item"><a class='dropdown-item' href='blog2.html'>Blog with Sidebar</a></li>
                    <li class="nav-item"><a class='dropdown-item' href='blog3.html'>Blog with Left Sidebar</a></li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog Posts</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class='dropdown-item' href='blog-post.html'>Post without Sidebar</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='blog-post2.html'>Post with Sidebar</a></li>
                        <li class="nav-item"><a class='dropdown-item' href='blog-post3.html'>Post with Left Sidebar</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
				
				
				
				
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Documentation</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="mega-menu-content">
                      <div class="flex flex-wrap mx-0 xl:mx-[-7.5px] lg:mx-[-7.5px]">
                        <div class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] max-w-full">
                          <h6 class="dropdown-header">Usage</h6>
                          <ul class="pl-0 list-none  xl:columns-2 lg:columns-2  xl:pb-1 lg:pb-1">
      <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class='dropdown-item' href='docs/index.html'>Get Started</a></li>
      <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class='dropdown-item' href='docs/forms.html'>Forms</a></li>
      <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class='dropdown-item' href='docs/faq.html'>FAQ</a></li>
      <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class='dropdown-item' href='docs/changelog.html'>Changelog</a></li>
      <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class='dropdown-item' href='docs/credits.html'>Credits</a></li>
                          </ul>
                          <h6 class="dropdown-header xl:!mt-6 lg:!mt-6">Styleguide</h6>
                          <ul class="pl-0 list-none  xl:columns-2 lg:columns-2 ">
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class='dropdown-item' href='docs/styleguide/colors.html'>Colors</a></li>
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class='dropdown-item' href='docs/styleguide/fonts.html'>Fonts</a></li>
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class='dropdown-item' href='docs/styleguide/icons-svg.html'>SVG Icons</a></li>
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class='dropdown-item' href='docs/styleguide/icons-font.html'>Font Icons</a></li>
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class='dropdown-item' href='docs/styleguide/illustrations.html'>Illustrations</a></li>
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class='dropdown-item' href='docs/styleguide/backgrounds.html'>Backgrounds</a></li>
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class='dropdown-item' href='docs/styleguide/misc.html'>Misc</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                        <div class="xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] max-w-full xl:border-l-[rgba(164,174,198,0.2)] xl:border-l xl:border-solid lg:border-l-[rgba(164,174,198,0.2)] lg:border-l lg:border-solid">
                          <h6 class="dropdown-header">Elements</h6>
                          <ul class="pl-0 list-none  xl:columns-3 lg:columns-3 ">
                            <li><a class='dropdown-item' href='docs/elements/accordion.html'>Accordion</a></li>
                            <li><a class='dropdown-item' href='docs/elements/alerts.html'>Alerts</a></li>
                            <li><a class='dropdown-item' href='docs/elements/animations.html'>Animations</a></li>
                            <li><a class='dropdown-item' href='docs/elements/avatars.html'>Avatars</a></li>
                            <li><a class='dropdown-item' href='docs/elements/background.html'>Background</a></li>
                            <li><a class='dropdown-item' href='docs/elements/badges.html'>Badges</a></li>
                            <li><a class='dropdown-item' href='docs/elements/buttons.html'>Buttons</a></li>
                            <li><a class='dropdown-item' href='docs/elements/card.html'>Card</a></li>
                            <li><a class='dropdown-item' href='docs/elements/carousel.html'>Carousel</a></li>
                            <li><a class='dropdown-item' href='docs/elements/dividers.html'>Dividers</a></li>
                            <li><a class='dropdown-item' href='docs/elements/form-elements.html'>Form Elements</a></li>
                            <li><a class='dropdown-item' href='docs/elements/image-hover.html'>Image Hover</a></li>
                            <li><a class='dropdown-item' href='docs/elements/image-mask.html'>Image Mask</a></li>
                            <li><a class='dropdown-item' href='docs/elements/lightbox.html'>Lightbox</a></li>
                            <li><a class='dropdown-item' href='docs/elements/player.html'>Media Player</a></li>
                            <li><a class='dropdown-item' href='docs/elements/modal.html'>Modal</a></li>
                            <li><a class='dropdown-item' href='docs/elements/pagination.html'>Pagination</a></li>
                            <li><a class='dropdown-item' href='docs/elements/progressbar.html'>Progressbar</a></li>
                            <li><a class='dropdown-item' href='docs/elements/shadows.html'>Shadows</a></li>
                            <li><a class='dropdown-item' href='docs/elements/shapes.html'>Shapes</a></li>
                            <li><a class='dropdown-item' href='docs/elements/tables.html'>Tables</a></li>
                            <li><a class='dropdown-item' href='docs/elements/tabs.html'>Tabs</a></li>
                            <li><a class='dropdown-item' href='docs/elements/text-animations.html'>Text Animations</a></li>
                            <li><a class='dropdown-item' href='docs/elements/text-highlight.html'>Text Highlight</a></li>
                            <li><a class='dropdown-item' href='docs/elements/tiles.html'>Tiles</a></li>
                            <li><a class='dropdown-item' href='docs/elements/tooltips-popovers.html'>Tooltips & Popovers</a></li>
                            <li><a class='dropdown-item' href='docs/elements/typography.html'>Typography</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                      </div>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer xl:hidden lg:hidden">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br> 00 (123) 456 78 90 <br>
                  <nav class="nav social social-white mt-4">
                  <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-twitter before:content-['\ed59'] !text-white text-[1rem]"></i></a>
                  <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
                  <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a>
                  <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
                  <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-full !flex !ml-auto">
            <ul class="navbar-nav !flex-row !items-center !ml-auto">
              <li class="nav-item dropdown language-select uppercase group">
                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                <ul class="dropdown-menu group-hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]">
                  <li class="nav-item"><a class="dropdown-item hover:text-[#3f78e0] hover:bg-[inherit] focus:text-[#3f78e0] focus:bg-[inherit]" href="#">En</a></li>
                  <li class="nav-item"><a class="dropdown-item hover:text-[#3f78e0] hover:bg-[inherit] focus:text-[#3f78e0] focus:bg-[inherit]" href="#">De</a></li>
                  <li class="nav-item"><a class="dropdown-item hover:text-[#3f78e0] hover:bg-[inherit] focus:text-[#3f78e0] focus:bg-[inherit]" href="#">Es</a></li>
                </ul>
              </li>
              <li class="nav-item hidden xl:block lg:block md:block">
                <a class='btn btn-sm btn-primary text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:border-[#3f78e0] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem] hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]' href='contact.html'>Contact</a>
              </li>
              <li class="nav-item xl:hidden lg:hidden">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->