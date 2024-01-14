@extends('layout.front.main')
@section('content')	
     <!-- start slider section -->
     <article class="slider">
        <!-- @foreach ($sliders as $_item)
            <section class="slide">
                <img src="{{asset('img/sliders/'.$_item->image) }}" alt="">

                <div class="slide-content">
                    <h2 class="slide-title">Online Courses</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        <br>
                        Lorem Ipsum has been the industry's.
                    </p>
                </div>
            </section>
        @endforeach -->
        
        <section class="slide">
            <img src="img/sliders/1704956320.jpeg" alt="">

            <div class="slide-content">
                <h2 class="slide-title">Learn Anytime</h2>
                <p>

                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    <br>
                    Lorem Ipsum has been the industry's.
                </p>
            </div>

        </section>



        <nav class="slider-nav">
            <span class="prev-slide"></span>
            <span class="next-slide"></span>
        </nav>
    </article>
    <!-- end slider section -->

    <section class="">
        <div class="container">
            <div class="row">
                <!-- <main class="col-12 col-lg-12 left-sidebar bg-white mb-5 pt-5 pb-5"> -->
                    <!-- ١ start My Courses -->
                    <div class="mb-4">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="#course- text-extra-dark-gray font-weight-600 title-bg">
                                    <!-- My Courses -->
                                    الفنون والتصميم
                                </h6>
            
                            </div>
                        </div>
                            <div class="row featured-courses">
                                <!-- start features box item -->
                                <div class="col-12 col-lg-3 col-md-6">
            
                                    <a href="#">
                                        <img src="img/courses/access.png" alt="">
                                    </a>
            
                                    <a href="#">
            
                                        <div class="bg-light">
                                            <p class="text-dark font-weight-bold mb-2"> شات جي بي تي للربح أونلاين
                                            </p>
            
                                            <div class="featured-date mb-2">
                                                <!-- <i class="fas fa-user "></i> -->
                                                <i class="far fa-user"></i>
                                                <span>30 فرد</span>
                                            </div>
                                            <hr/>
                                            <div class="featured-date mb-2">
                                                <i class="far fa-money-bill-alt"></i>
                                                <!-- <span>1000 RQ</span> -->
                                                <span>1000 ريال قطري</span>
                                            </div>
            
                                        </div>
                                    </a>
                                </div>
                                <!-- end features box item -->
            
                                <!-- start features box item -->
                                <div class="col-12 col-lg-3 col-md-6">
            
                                    <a href="#">
                                        <img src="img/courses/excel.webp" alt="">
                                    </a>
            
                                    <a href="#">
            
                                        <div class="bg-light">
                                            <p class="text-dark font-weight-bold mb-2"> تصميم نموذج عمل قوي
                                            </p>
            
                                            <div class="featured-date mb-2">
                                                <!-- <i class="fas fa-user "></i> -->
                                                <i class="far fa-user"></i>
                                                <span>30 فرد</span>
                                            </div>
                                            <hr/>
                                            <div class="featured-date mb-2">
                                                <i class="far fa-money-bill-alt"></i>
                                                <!-- <span>1000 RQ</span> -->
                                                <span>1000 ريال قطري</span>
                                            </div>
            
                                        </div>
                                    </a>
                                </div>
                                <!-- end features box item -->
            
                                <!-- start features box item -->
                                <div class="col-12 col-lg-3 col-md-6">
            
                                    <a href="#">
                                        <img src="img/courses/PowerPoint.jpg" alt="">
                                    </a>
            
                                    <a href="#">
            
                                        <div class="bg-light">
                                            <p class="text-dark font-weight-bold mb-2"> شات جي بي تي للربح أونلاين
                                            </p>
            
                                            <div class="featured-date mb-2">
                                                <!-- <i class="fas fa-user "></i> -->
                                                <i class="far fa-user"></i>
                                                <span>30 فرد</span>
                                            </div>
                                            <hr/>
                                            <div class="featured-date mb-2">
                                                <i class="far fa-money-bill-alt"></i>
                                                <!-- <span>1000 RQ</span> -->
                                                <span>1000 ريال قطري</span>
                                            </div>
            
                                        </div>
                                    </a>
                                </div>
                                <!-- end features box item -->
            
                                <!-- start features box item -->
                                <div class="col-12 col-lg-3 col-md-6">
            
                                    <a href="#">
                                        <img src="img/courses/access.png" alt="">
                                    </a>
            
                                    <a href="#">
            
                                        <div class="bg-light">
                                            <p class="text-dark font-weight-bold mb-2"> إدارة حسابات كبار العملاء
                                            </p>
            
                                            <div class="featured-date mb-2">
                                                <!-- <i class="fas fa-user "></i> -->
                                                <i class="far fa-user"></i>
                                                <span>30 فرد</span>
                                            </div>
                                            <hr/>
                                            <div class="featured-date mb-2">
                                                <i class="far fa-money-bill-alt"></i>
                                                <!-- <span>1000 RQ</span> -->
                                                <span>1000 ريال قطري</span>
                                            </div>
            
                                        </div>
                                    </a>
                                </div>
                                <!-- end features box item -->
            
                                
                                <!-- start features box item -->
                                
                                <!-- end features box item -->
            
                                <!-- start features box item -->
                                <div class="col-12 col-lg-3 col-md-6">
                                    <a href="#">
                                        <img src="img/courses/word.jpg" class="img-fluid">
                                    </a>
                                    <a href="#">
                                        <div class="bg-light">
                                            <p class="text-dark font-weight-bold mb-2"> الجانب التجاري من التجارة الإلكترونية</p>
                                            <div class="featured-date mb-2">
                                                <!-- <i class="fas fa-user "></i> -->
                                                <i class="far fa-user"></i>
                                                <span>30 فرد</span>
                                            </div>
                                            <hr/>
                                            <div class="featured-date mb-2">
                                                <i class="far fa-money-bill-alt"></i>
                                                <!-- <span>1000 RQ</span> -->
                                                <span>1000 ريال قطري</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- end features box item -->
                                <!-- start features box item -->
                                <div class="col-12 col-lg-3 col-md-6">
                                    <a href="#">
                                        <img src="img/courses/word.jpg" class="img-fluid">
                                    </a>
                                    <a href="#">
                                        <div class="bg-light">
                                            <p class="text-dark font-weight-bold mb-2"> الجانب التجاري من التجارة الإلكترونية</p>
                                            <div class="featured-date mb-2">
                                                <!-- <i class="fas fa-user "></i> -->
                                                <i class="far fa-user"></i>
                                                <span>30 فرد</span>
                                            </div>
                                            <hr/>
                                            <div class="featured-date mb-2">
                                                <i class="far fa-money-bill-alt"></i>
                                                <!-- <span>1000 RQ</span> -->
                                                <span>1000 ريال قطري</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- end features box item -->
                                <!-- start features box item -->
                                <div class="col-12 col-lg-3 col-md-6">
                                    <a href="#">
                                        <img src="img/courses/word.jpg" class="img-fluid">
                                    </a>
                                    <a href="#">
                                        <div class="bg-light">
                                            <p class="text-dark font-weight-bold mb-2"> الجانب التجاري من التجارة الإلكترونية</p>
                                            <div class="featured-date mb-2">
                                                <!-- <i class="fas fa-user "></i> -->
                                                <i class="far fa-user"></i>
                                                <span>30 فرد</span>
                                            </div>
                                            <hr/>
                                            <div class="featured-date mb-2">
                                                <i class="far fa-money-bill-alt"></i>
                                                <!-- <span>1000 RQ</span> -->
                                                <span>1000 ريال قطري</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- end features box item -->
                                <!-- start features box item -->
                                <div class="col-12 col-lg-3 col-md-6">
                                    <a href="#">
                                        <img src="img/courses/word.jpg" class="img-fluid">
                                    </a>
                                    <a href="#">
                                        <div class="bg-light">
                                            <p class="text-dark font-weight-bold mb-2"> الجانب التجاري من التجارة الإلكترونية</p>
                                            <div class="featured-date mb-2">
                                                <!-- <i class="fas fa-user "></i> -->
                                                <i class="far fa-user"></i>
                                                <span>30 فرد</span>
                                            </div>
                                            <hr/>
                                            <div class="featured-date mb-2">
                                                <i class="far fa-money-bill-alt"></i>
                                                <!-- <span>1000 RQ</span> -->
                                                <span>1000 ريال قطري</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- end features box item -->
            
            
                            </div>
                    </div>
                    <!-- ١ end My Courses -->
                    <!-- 2 start My Courses -->
                    <div class="mb-4">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="#course- text-extra-dark-gray font-weight-600 title-bg">
                                    <!-- My Courses -->
                                     إدارة الأعمال
                                </h6>
            
                            </div>
                        </div>
                        <div class="row featured-courses">
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/access.png" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> شات جي بي تي للربح أونلاين
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/excel.webp" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> تصميم نموذج عمل قوي
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/PowerPoint.jpg" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> شات جي بي تي للربح أونلاين
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/access.png" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> إدارة حسابات كبار العملاء
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            
                          
        
        
                        </div>
                    </div>
                    <!-- 2 end My Courses -->
                    <!-- 3 start My Courses -->
                    <div class="mb-4">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="#course- text-extra-dark-gray font-weight-600 title-bg">
                                    <!-- My Courses -->
                                      تنمية مهارات الأبناء
                                </h6>
            
                            </div>
                        </div>
                        <div class="row featured-courses">
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/access.png" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> شات جي بي تي للربح أونلاين
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/excel.webp" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> تصميم نموذج عمل قوي
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/PowerPoint.jpg" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> شات جي بي تي للربح أونلاين
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/access.png" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> إدارة حسابات كبار العملاء
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            
                           
        
                        </div>
                    </div>
                    <!-- 3 end My Courses -->
                    <!-- 4 start My Courses -->
                    <div class="mb-4">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="#course- text-extra-dark-gray font-weight-600 title-bg">
                                    <!-- My Courses -->
                                    الصحة والحياة
                                </h6>
            
                            </div>
                        </div>
                        <div class="row featured-courses">
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/access.png" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> شات جي بي تي للربح أونلاين
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/excel.webp" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> تصميم نموذج عمل قوي
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/PowerPoint.jpg" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> شات جي بي تي للربح أونلاين
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/access.png" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> إدارة حسابات كبار العملاء
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
        
                                <a href="#">
                                    <img src="img/courses/PowerPoint.jpg" alt="">
                                </a>
        
                                <a href="#">
        
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> شات جي بي تي للربح أونلاين
                                        </p>
        
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
        
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
                            <!-- start features box item -->
                            <div class="col-12 col-lg-3 col-md-6">
                                <a href="#">
                                    <img src="img/courses/word.jpg" class="img-fluid">
                                </a>
                                <a href="#">
                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> الجانب التجاري من التجارة الإلكترونية</p>
                                        <div class="featured-date mb-2">
                                            <!-- <i class="fas fa-user "></i> -->
                                            <i class="far fa-user"></i>
                                            <span>30 فرد</span>
                                        </div>
                                        <hr/>
                                        <div class="featured-date mb-2">
                                            <i class="far fa-money-bill-alt"></i>
                                            <!-- <span>1000 RQ</span> -->
                                            <span>1000 ريال قطري</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end features box item -->
        
        
                        </div>
                    </div>
                    <!-- 4 end My Courses -->
                <!-- </main> -->
            </div>

            <!-- start Zoom Meetings -->
            <div class="row">
                <div class="col-12">
                    <h6 class="#course- text-extra-dark-gray font-weight-600 title-bg">
                        اعلانات عروض</h6>

                </div>
            </div>
            <div class="row">
                <div class=" swiper-slider-clients swiper-container">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="featured-courses">
                                <!-- start features box item -->
                                <a href="#">
                                    <img src="img/courses/word.jpg" class="img-fluid">
                                </a>
                                <!-- <a href="#">
                                    <div class="bg-light">

                                        <p class="text-dark font-weight-bold mb-2"> Introduction And WORD</p>

                                        <div class="featured-date mb-2">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>30 Jun</span>
                                        </div>


                                        <div class="featured-date mb-2">
                                            <i class="fas fa-money-bill-alt"></i>
                                            <span>1000 EGP</span>
                                        </div>

                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                    </div>
                                </a> -->
                                <!-- end features box item -->


                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="featured-courses">
                                <a href="#">
                                    <img src="img/courses/excel.webp" alt="">
                                </a>

                                <!-- <a href="#">

                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> Excel
                                        </p>

                                        <div class="featured-date mb-2">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>30 Jun</span>
                                        </div>


                                        <div class="featured-date mb-2">
                                            <i class="fas fa-money-bill-alt"></i>
                                            <span>1000 EGP</span>
                                        </div>

                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                    </div>
                                </a> -->


                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-courses">
                                <a href="#">
                                    <img src="img/courses/PowerPoint.jpg" alt="">
                                </a>

                                <!-- <a href="#">

                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> PowerPoint
                                        </p>

                                        <div class="featured-date mb-2">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>30 Jun</span>
                                        </div>


                                        <div class="featured-date mb-2">
                                            <i class="fas fa-money-bill-alt"></i>
                                            <span>1000 EGP</span>
                                        </div>

                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                    </div>
                                </a> -->
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-courses">
                                <a href="#">
                                    <img src="img/courses/access.png" alt="">
                                </a>

                                <!-- <a href="#">

                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> Access
                                        </p>

                                        <div class="featured-date mb-2">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>30 Jun</span>
                                        </div>


                                        <div class="featured-date mb-2">
                                            <i class="fas fa-money-bill-alt"></i>
                                            <span>1000 EGP</span>
                                        </div>

                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                    </div>
                                </a> -->
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="featured-courses">
                                <!-- start features box item -->
                                <a href="#">
                                    <img src="img/courses/word.jpg" class="img-fluid">
                                </a>
                                <!-- <a href="#">
                                    <div class="bg-light">

                                        <p class="text-dark font-weight-bold mb-2"> Introduction And WORD</p>

                                        <div class="featured-date mb-2">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>30 Jun</span>
                                        </div>


                                        <div class="featured-date mb-2">
                                            <i class="fas fa-money-bill-alt"></i>
                                            <span>1000 EGP</span>
                                        </div>

                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                    </div>
                                </a> -->
                                <!-- end features box item -->


                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="featured-courses">
                                <a href="#">
                                    <img src="img/courses/excel.webp" alt="">
                                </a>

                                <!-- <a href="#">

                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> Excel
                                        </p>

                                        <div class="featured-date mb-2">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>30 Jun</span>
                                        </div>


                                        <div class="featured-date mb-2">
                                            <i class="fas fa-money-bill-alt"></i>
                                            <span>1000 EGP</span>
                                        </div>

                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                    </div>
                                </a> -->


                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-courses">
                                <a href="#">
                                    <img src="img/courses/PowerPoint.jpg" alt="">
                                </a>

                                <!-- <a href="#">

                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> PowerPoint
                                        </p>

                                        <div class="featured-date mb-2">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>30 Jun</span>
                                        </div>


                                        <div class="featured-date mb-2">
                                            <i class="fas fa-money-bill-alt"></i>
                                            <span>1000 EGP</span>
                                        </div>

                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                    </div>
                                </a> -->
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-courses">
                                <a href="#">
                                    <img src="img/courses/access.png" alt="">
                                </a>

                                <!-- <a href="#">

                                    <div class="bg-light">
                                        <p class="text-dark font-weight-bold mb-2"> Access
                                        </p>

                                        <div class="featured-date mb-2">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>30 Jun</span>
                                        </div>


                                        <div class="featured-date mb-2">
                                            <i class="fas fa-money-bill-alt"></i>
                                            <span>1000 EGP</span>
                                        </div>

                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                    </div>
                                </a> -->
                            </div>
                        </div>








                    </div>
                    <div class="swiper-pagination d-none"></div>
                    <div class="swiper-button-next slider-long-arrow-white"></div>
                    <div class="swiper-button-prev slider-long-arrow-white"></div>
                </div>
            </div>
            <!-- end Zoom Meetings -->
        </div>
       
    </section>
@endsection
