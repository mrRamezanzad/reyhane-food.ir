<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <?php get_language_attributes() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>گروه صنعتی ریحانه | Reyhane food industrials</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri("./css/styles.css") ?>">
    <?php
    wp_head();


    wp_styles();
    ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

</head>

<body <?php body_class($class) ?>>

    <!-- Navigation Menue Section -->
    <nav class="fixed-top row ">
        <!-- nav right -->
        <span class="nav-right col-md-5">
            <ul class="nav flex-row-reverse menu-bg rounded ">
                <li class="nav-item"><a class="nav-link active " href="#">خانه</a></li>
                <li class="nav-item"><a class="nav-link active " href="#products">محصول</a></li>
                <li class="nav-item"><a class="nav-link active " href="#customers">اخبار و
                        رسانه</a>
                </li>
                <li class="nav-item"><a class="nav-link active " href="#aboutUs">درباره ما</a>
                </li>
            </ul>
        </span>
        <!-- Logo -->
        <span class="col-md-2 col-sm-3 logo"><img src=" <?php echo get_theme_file_uri("./sources/Logo.png") ?>" alt="گروه صنعتی ریحانه "></span>
        <!-- nav left -->
        <span class="nav-left col-md-5">
            <ul class=" nav flex-row-reverse menu-bg rounded">
                <li class="nav-item"><a class="nav-link active " href="#">منابع طبیعی</a></li>
                <li class="nav-item"><a class="nav-link active " href="#">مسعولیت های اجتماعی</a>
                </li>
                <li class="nav-item"><a class="nav-link active " href="#aboutUs">تماس با ما</a>
                </li>
            </ul>
        </span>
    </nav>
    <!-- Carrousel Section -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_theme_file_uri("./sources/mockup.jpg"); ?>" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_theme_file_uri("./sources/mockup.jpg"); ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_theme_file_uri("./sources/mockup.jpg"); ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Products Section -->
    <div id="products" class="products container ">
        <h2 id="products-title" class="text-success pt-3 pb-4 "> <i class="fa fa-barcode pr-2" aria-hidden="true"></i>محصولات</h2>
        <div class="row text-right products">
            <div class="row ">
                <div class="col-md-4 ">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo get_theme_file_uri("./sources/tuv-iso-140012004-logo.png"); ?>" width="100%" height="225" class="rounded float-left border"></img>
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center" x="50%" y="50%" fill="#eceeef" dy=".3em">iso14001:2015</text></svg>
                        <div class="card-body">
                            <p class="card-text">گواهینامه iso14001:2015 نمایند.البته استاندارد ایزو 14001:2015
                                تاحدود
                                زیادی بااستاندارد iso14001:2004 انطباق دارد بهمین جهت مطالعه استاندارد ایزو
                                iso14001:2004 به فهم دقیقتر ویرایش 2015 استاندارد ایزو 14001 کمک مضاعفی مینماید.
                                متن فارسی استاندارد ایزو 14001:2004 جهت دانلود درلینک زیرآورده شده است.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo get_theme_file_uri("./sources/tuv-iso-140012004-logo.png"); ?>" width="100%" height="225" class="rounded float-left border"></img>
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center" x="50%" y="50%" fill="#eceeef" dy=".3em">iso14001:2015</text></svg>
                        <div class="card-body">
                            <p class="card-text">گواهینامه iso14001:2015 نمایند.البته استاندارد ایزو 14001:2015
                                تاحدود
                                زیادی بااستاندارد iso14001:2004 انطباق دارد بهمین جهت مطالعه استاندارد ایزو
                                iso14001:2004 به فهم دقیقتر ویرایش 2015 استاندارد ایزو 14001 کمک مضاعفی مینماید.
                                متن فارسی استاندارد ایزو 14001:2004 جهت دانلود درلینک زیرآورده شده است.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 "">
                    <div class=" card mb-4 shadow-sm">
                    <img src="<?php echo get_theme_file_uri("./sources/tuv-iso-140012004-logo.png"); ?>" width="100%" height="225" class="rounded float-left border"></img>
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center" x="50%" y="50%" fill="#eceeef" dy=".3em">iso14001:2015</text></svg>
                    <div class="card-body">
                        <p class="card-text">گواهینامه iso14001:2015 نمایند.البته استاندارد ایزو 14001:2015
                            تاحدود
                            زیادی بااستاندارد iso14001:2004 انطباق دارد بهمین جهت مطالعه استاندارد ایزو
                            iso14001:2004 به فهم دقیقتر ویرایش 2015 استاندارد ایزو 14001 کمک مضاعفی مینماید.
                            متن فارسی استاندارد ایزو 14001:2004 جهت دانلود درلینک زیرآورده شده است.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Certificates Section -->
    <div class="certificates container-fluid bg-success" id="certificates">
        <div class="container h-100">
            <h2 class="  text-right p-3">گواهینامه ها <i class="fa fa-certificate" aria-hidden="true"></i>
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo get_theme_file_uri("./sources/tuv-iso-140012004-logo.png"); ?>" width="100%" height="225" class="rounded float-left border"></img>
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center" x="50%" y="50%" fill="#eceeef" dy=".3em">iso14001:2015</text></svg>
                        <div class="card-body">
                            <p class="card-text">گواهینامه iso14001:2015 نمایند.البته استاندارد ایزو 14001:2015
                                تاحدود
                                زیادی بااستاندارد iso14001:2004 انطباق دارد بهمین جهت مطالعه استاندارد ایزو
                                iso14001:2004 به فهم دقیقتر ویرایش 2015 استاندارد ایزو 14001 کمک مضاعفی مینماید.
                                متن فارسی استاندارد ایزو 14001:2004 جهت دانلود درلینک زیرآورده شده است.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo get_theme_file_uri("./sources/tuv-iso-140012004-logo.png"); ?>" width="100%" height="225" class="rounded float-left border"></img>
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center" x="50%" y="50%" fill="#eceeef" dy=".3em">iso14001:2015</text></svg>
                        <div class="card-body">
                            <p class="card-text">گواهینامه iso14001:2015 نمایند.البته استاندارد ایزو 14001:2015
                                تاحدود
                                زیادی بااستاندارد iso14001:2004 انطباق دارد بهمین جهت مطالعه استاندارد ایزو
                                iso14001:2004 به فهم دقیقتر ویرایش 2015 استاندارد ایزو 14001 کمک مضاعفی مینماید.
                                متن فارسی استاندارد ایزو 14001:2004 جهت دانلود درلینک زیرآورده شده است.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo get_theme_file_uri("./sources/tuv-iso-140012004-logo.png"); ?>" width="100%" height="225" class="rounded float-left border"></img>
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center" x="50%" y="50%" fill="#eceeef" dy=".3em">iso14001:2015</text></svg>
                        <div class="card-body">
                            <p class="card-text">گواهینامه iso14001:2015 نمایند.البته استاندارد ایزو 14001:2015
                                تاحدود
                                زیادی بااستاندارد iso14001:2004 انطباق دارد بهمین جهت مطالعه استاندارد ایزو
                                iso14001:2004 به فهم دقیقتر ویرایش 2015 استاندارد ایزو 14001 کمک مضاعفی مینماید.
                                متن فارسی استاندارد ایزو 14001:2004 جهت دانلود درلینک زیرآورده شده است.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Customers Section -->
    <div id="customers" class="certificates container-fluid ">
        <div class="container h-100">
            <h2 class="text-left p-3"><i class="fa fa-user-tie"></i> مشتریان
            </h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo get_theme_file_uri("./sources/tuv-iso-140012004-logo.png"); ?>" width="100%" height="225" class="rounded float-left border"></img>
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center" x="50%" y="50%" fill="#eceeef" dy=".3em">iso14001:2015</text></svg>
                        <div class="card-body">
                            <p class="card-text">گواهینامه iso14001:2015 نمایند.البته استاندارد ایزو 14001:2015
                                تاحدود
                                زیادی بااستاندارد iso14001:2004 انطباق دارد بهمین جهت مطالعه استاندارد ایزو
                                iso14001:2004 به فهم دقیقتر ویرایش 2015 استاندارد ایزو 14001 کمک مضاعفی مینماید.
                                متن فارسی استاندارد ایزو 14001:2004 جهت دانلود درلینک زیرآورده شده است.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo get_theme_file_uri("./sources/tuv-iso-140012004-logo.png"); ?>" width="100%" height="225" class="rounded float-left border"></img>
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center" x="50%" y="50%" fill="#eceeef" dy=".3em">iso14001:2015</text></svg>
                        <div class="card-body">
                            <p class="card-text">گواهینامه iso14001:2015 نمایند.البته استاندارد ایزو 14001:2015
                                تاحدود
                                زیادی بااستاندارد iso14001:2004 انطباق دارد بهمین جهت مطالعه استاندارد ایزو
                                iso14001:2004 به فهم دقیقتر ویرایش 2015 استاندارد ایزو 14001 کمک مضاعفی مینماید.
                                متن فارسی استاندارد ایزو 14001:2004 جهت دانلود درلینک زیرآورده شده است.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo get_theme_file_uri("./sources/tuv-iso-140012004-logo.png"); ?>" width="100%" height="225" class="rounded float-left border"></img>
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center" x="50%" y="50%" fill="#eceeef" dy=".3em">iso14001:2015</text></svg>
                        <div class="card-body">
                            <p class="card-text">گواهینامه iso14001:2015 نمایند.البته استاندارد ایزو 14001:2015
                                تاحدود
                                زیادی بااستاندارد iso14001:2004 انطباق دارد بهمین جهت مطالعه استاندارد ایزو
                                iso14001:2004 به فهم دقیقتر ویرایش 2015 استاندارد ایزو 14001 کمک مضاعفی مینماید.
                                متن فارسی استاندارد ایزو 14001:2004 جهت دانلود درلینک زیرآورده شده است.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add 'footer' snippet in css -->
    <div id="aboutUs" class=" bg-img bg-dark p-0 border-top border-success ">
        <div class="footer no-margin bg-dard pt-0">
            <div class="container  p-3 ">
                <div class="row flex-row-reverse">
                    <div class="col-md-3 text-right text-white">
                        <div class="headline text-success border border-success p-2 rounded">
                            <p>صنایع غذایی ریحانه</p>
                        </div>
                        <ul class="list-unstyled link-list text-right">
                            <li class=""><a class="nav-link active " href="#">خانه</a></li>
                            <li class=""><a class="nav-link active " href="#products">محصول</a>
                            </li>
                            <li class=""><a class="nav-link active " href="#customers">اخبار و
                                    رسانه</a>
                            </li>
                            <li class=""><a class="nav-link active " href="#aboutUs">درباره ما</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-3 footer-divider list-unstyled text-right text-white  ">
                        <div class="headline text-success border border-success p-2 rounded">
                            <p>پشتیبانی</p>
                        </div>

                        <ul>
                            <li class=""><a class="nav-link active " href="#">منابع طبیعی</a></li>
                            <li class=""><a class="nav-link active " href="#">مسعولیت های اجتماعی</a>
                            </li>
                            <li class=""><a class="nav-link active " href="#aboutUs">تماس با ما</a>
                            </li>
                        </ul>
                        <address>
                            <ul class="list-unstyled link-list text-right ">
                                <li><a class="nav-link active" href="#">09122305159</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope nav-link active"></i>info@reyhane-food.ir</a>
                                </li>
                            </ul>
                        </address>
                    </div>
                    <div class="col-md-3 footer-divider text-right">
                        <div class="headline text-success border border-success p-2 rounded ">
                            <p>منابع شرکت</p>
                        </div>
                        <ul class="list-unstyled link-list">
                            <li><a class="nav-link active" href="#">اخبار شرکت</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-divider float-right">
                        <div class="hedline  text-left text-light pt-5">
                            <p>ما را در رسانه های اجتماعی دنبال کنید</p>
                        </div>
                        <a href="" class="social-icon"><i class="fab fa-facebook  p-4 text-primary"></i></a>
                        <a href="" class="social-icon"><i class="fab fa-instagram  p-4 text-danger"></i></a>
                        <a href="" class="social-icon"><i class="fab fa-google  p-4 text-danger"></i></a>
                        <a href="" class="social-icon"><i class="fab fa-twitter  p-4 text-info"></i></a>
                    </div>


                </div>
            </div>
            <div class="col-12 p-2 pr-5">
                <blockquote class="blockquote text-right">
                    <img class="" src="<?php echo get_theme_file_uri("./sources/Logo.png"); ?>" alt="">
                    <footer class="blockquote-footer text-right">کلیه حقوق مادی و معنوی سایت محفوظ و متعلق
                        به گروه صنایع غذایی ریحانه می باشد. 1398 ©</footer>
                </blockquote>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/scripts.js"></script>
</body>
<?php wp_footer(); ?>
</html>