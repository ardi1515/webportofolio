<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>How To Create Post Carousel Slider using HTML CSS JavaScript</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <style>
        .blog-container {
            max-width: 1200px;
        }

        .section_padding {
            padding: 35px 0;
        }

        .section_heading {
            margin-bottom: 30px;
        }

        .section_heading h2 {
            color: #222;
            font-size: 40px;
            margin-left: 50px;
            font-weight: 700;
            margin-bottom: 25px;
            line-height: 30px;
            text-transform: uppercase;
        }

        .section_heading h2 span {
            color: orangered;
        }

        .section_heading p {
            font-size: 16px;
            margin: 10px 0 5px;
        }

        .box-area {
            width: none;
        }

        .single-blog {
            margin-left: 50px;
            box-sizing: border-box;
            width: none;
            transition: all 0.30s ease 0s;
        }

        .single-blog:hover {
            transform: translateY(-10px);
        }

        .single-blog .post-img {
            position: relative;
        }

        .single-blog .post-img img {
            width: 100%;
            height: auto;
        }

        .single-blog .post-img:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            background: rgba(255, 69, 0, 0.6);
            transition: all 0.30s ease 0s;
        }

        .single-blog:hover .post-img:after {
            opacity: 1;
        }

        .single-blog .single_blog {
            border-top: none;
            padding: 25px 20px 25px;
            background: #fff;
            position: relative;
        }

        .single-blog .post-title {
            margin: 0 0 15px 0px;
            font-size: 20px;
            color: #333;
            display: inline-block;
            text-transform: capitalize;
            transition: all 0.3s ease 0s;
        }

        .single-blog .blog-text {
            font-size: 15px;
            line-height: 23px;
            margin: 7px 0 10px;
        }

        .icon-area {
            list-style: none;
            font-size: 14px;
            padding: 0;
        }

        .icon-area>li {
            display: inline-block;
            margin-right: 5px;
            color: #555;
            font-style: italic;
        }

        .icon-area>li i {
            color: orangered;
            margin-right: 5px;
            font-size: 14px;
        }

        .btn-area a {
            background: linear-gradient(to right, #ff512f, #f09819);
            font-size: 14px;
            letter-spacing: 0.5px;
            padding: 11px 22px;
            margin: 10px 0px 10px;
            border: none;
            font-weight: 500;
            color: #fff;
            text-transform: capitalize;
            transition: all 0.2s ease-in-out 0s;
        }

        


    </style>
</head>
<body>
    <!-- START blog -->
    <section id="blog_area" class="section_padding">
        <div class="blog-container">
            <div class="section_heading text-center">
                <h2>Our <span>blog</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <br/> ultrices sapien vel quam luctus pulvinar.</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog_slider_area owl-carousel">
                        <div class="box-area">    
                            <div class="single-blog">
                                <div class="post-img">
                                    <img src="img/blog1.jpg" alt=""/>
                                </div>
                                <div class="single_blog">
                                    <a href="#"><h3 class="post-title">Web Design Agency</h3></a>
                                    <ul class="icon-area">
                                        <li><i class="fa fa-users"></i>Admin</li>
                                        <li><i class="fa fa-clock-o"></i>February 21,2022 </li>                                        
                                    </ul>
                                    <p class="blog-text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                    <div class="btn-area">
                                        <a href="https://www.dicoding.com/blog/panduan-lengkap-belajar-coding-html-untuk-pemula/" target="_blank" class="btn btn-default main_btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="box-area">    
                            <div class="single-blog wow fadeInUp">
                                <div class="post-img">
                                    <img src="img/blog2.jpg" alt=""/>
                                </div>
                                <div class="single_blog">
                                    <a href="#"><h3 class="post-title">Web Design Agency</h3></a>
                                    <ul class="icon-area">
                                        <li><i class="fa fa-users"></i>Admin</li>
                                        <li><i class="fa fa-clock-o"></i>February 21,2022 </li>                                        
                                    </ul>
                                    <p class="blog-text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                    <div class="btn-area">
                                        <a href="https://www.dicoding.com/blog/apa-itu-javascript-fungsi-dan-contohnya/" target="_blank" class="btn btn-default main_btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- END SINGLE blogS -->    
                        <div class="box-area">    
                            <div class="single-blog wow fadeInUp">
                                <div class="post-img">
                                    <img src="img/blog3.jpg" alt=""/>
                                </div>
                                <div class="single_blog">
                                    <a href="#"><h3 class="post-title">Web Design Agency</h3></a>
                                    <ul class="icon-area">
                                        <li><i class="fa fa-users"></i>Admin</li>
                                        <li><i class="fa fa-clock-o"></i>February 21,2022 </li>                                        
                                    </ul>
                                    <p class="blog-text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                    <div class="btn-area">
                                        <a href="https://www.dicoding.com/blog/contoh-use-case-diagram/" target="_blank" class="btn btn-default main_btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- END SINGLE blogS -->
                        <div class="box-area">    
                            <div class="single-blog wow fadeInUp">
                                <div class="post-img">
                                    <img src="img/blog4.jpg" alt=""/>
                                </div>
                                <div class="single_blog">
                                    <a href="#"><h3 class="post-title">Web Design Agency</h3></a>
                                    <ul class="icon-area">
                                        <li><i class="fa fa-users"></i>Admin</li>
                                        <li><i class="fa fa-clock-o"></i>February 21,2022 </li>                                        
                                    </ul>
                                    <p class="blog-text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                    <div class="btn-area">
                                        <a href="https://www.dicoding.com/blog/cara-membuat-erd-dan-contohnya/" target="_blank" class="btn btn-default main_btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- END SINGLE blogS -->
                        <div class="box-area">    
                            <div class="single-blog wow fadeInUp">
                                <div class="post-img">
                                    <img src="img/blog5.jpg" alt=""/>
                                </div>
                                <div class="single_blog">
                                    <a href="#"><h3 class="post-title">Web Design Agency</h3></a>
                                    <ul class="icon-area">
                                        <li><i class="fa fa-users"></i>Admin</li>
                                        <li><i class="fa fa-clock-o"></i>February 21,2022 </li>                                        
                                    </ul>
                                    <p class="blog-text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                    <div class="btn-area">
                                        <a href="https://www.dicoding.com/blog/machine-learning-adalah/" target="_blank" class="btn btn-default main_btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- END SINGLE blogS -->
                        <div class="box-area">    
                            <div class="single-blog wow fadeInUp">
                                <div class="post-img">
                                    <img src="img/blog6.jpg" alt=""/>
                                </div>
                                <div class="single_blog">
                                    <a href="#"><h3 class="post-title">Web Design Agency</h3></a>
                                    <ul class="icon-area">
                                        <li><i class="fa fa-users"></i>Admin</li>
                                        <li><i class="fa fa-clock-o"></i>February 21,2022 </li>                                        
                                    </ul>
                                    <p class="blog-text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </p>
                                    <div class="btn-area">
                                        <a href="https://www.dicoding.com/blog/apa-itu-sequence-diagram/" target="_blank" class="btn btn-default main_btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- END SINGLE blogS -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END blog -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script>
        $(".blog_slider_area").owlCarousel({
            autoplay: true,
            slideSpeed: 1000,
            items: 3,
            loop: true,
            nav: false,
            margin: 30,
            dots: true,
            responsive: {
                320: {
                    items: 1
                },
                767: {
                    items: 2
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>
</body>
</html>
