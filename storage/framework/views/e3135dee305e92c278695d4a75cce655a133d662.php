
 <?php echo $__env->make('/includes/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="index" class="navbar-brand">Neuron</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/index">Главная </a></li>
                    <li><a href="/about">О нас</a></li>
                    <li><a href="/gellary">Галерия</a></li>
                    <li><a href="/contact">Контакты</a></li>
               </ul>
          </div>

  </div>
</div>

<!-- Home Section -->

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Привет. Это Неурон!</h1>
                    <h4>Отзывчивый блог HTML CSS Website Template</h4>
                    <a href="#blog" class="smoothScroll btn btn-default">Открой для себя больше</a>
               </div>

          </div>
     </div>
</section>

<!-- Blog Section -->

<section id="blog">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="<?php echo e(asset('/images/blog-image1.jpg')); ?>" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">Мы помогаем вам создавать идеальный современный дизайн</a></h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#"><img src="images/author-image1.jpg" class="img-responsive img-circle"> Jen Lopez</a></span>
                              <span><i class="fa fa-date"></i> Январ 01, 2018</span>
                              <span><a href="#"><i class="fa fa-comment-o"></i> 35 Комментарии</a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              <a href="single-post.html" class="btn btn-default">Продолжить чтение
</a>
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/blog-image2.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">In pretium tellus et ante accumsan</a></h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#"><img src="images/author-image2.jpg" class="img-responsive img-circle"> Leo Dennis</a></span>
                              <span><i class="fa fa-date"></i> June 10, 2017</span>
                              <span><a href="#"><i class="fa fa-comment-o"></i> 48 Comments</a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              <a href="single-post.html" class="btn btn-default">Продолжить чтение</a>
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-video">
                              <div class="embed-responsive embed-responsive-16by9">
                                   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Pgmx7z49OEk" allowfullscreen></iframe>
                              </div>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">Nam interdum maximus dolor faucibus</a></h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#"><img src="images/author-image1.jpg" class="img-responsive img-circle"> Jen Lopez</a></span>
                              <span><i class="fa fa-date"></i> May 30, 2017</span>
                              <span><a href="#"><i class="fa fa-comment-o"></i> 63 Comments</a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              <a href="single-post.html" class="btn btn-default">Continue Reading</a>
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/blog-image3.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">The ingredients that make a great burger</a></h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#"><img src="images/author-image2.jpg" class="img-responsive img-circle"> Leo Dennis</a></span>
                              <span><i class="fa fa-date"></i> Апрел 18, 2017</span>
                              <span><a href="#"><i class="fa fa-comment-o"></i> 124 Комментарии</a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              <a href="single-post.html" class="btn btn-default">Продолжить чтение</a>
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/blog-image4.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">Vestibulum vel mauris nec ex tempus</a></h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#"><img src="images/author-image1.jpg" class="img-responsive img-circle"> Jen Lopez</a></span>
                              <span><i class="fa fa-date"></i> Март 12, 2017</span>
                              <span><a href="#"><i class="fa fa-comment-o"></i> 256 Комментарии</a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              <a href="single-post.html" class="btn btn-default">Продолжить чтение</a>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>

<!-- Footer Section -->

 <?php echo $__env->make('/includes/foter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>
