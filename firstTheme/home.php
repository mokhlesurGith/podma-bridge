<?php
    /* Template Name: home */
    get_header();
?>
    <!-- menu part start -->
    <section class="container-fluid main_menu">
        <div class="container menu_1 navbar-expand">
            <?php wp_nav_menu( array(
                'theme_location'=> 'TM',
                'menu_class' => 'navbar-nav',
            ))?>
        </div>
    </section>
    <!-- menu part End -->

    <!-- search start -->
    <section class="search_bar container py-3">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <form action="">
                    <input class="w-75 px-2 py-1" value="<?= get_search_query();?>" name="s" type="search" placeholder="search anything">
                    <button class="px-2 py-1">submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- search end -->

    <!-- hero part start -->
    <section class="container hero my-4">
        <div class="row hero_top m-auto w-75 text-center">
            <h1 class="h3 mb-3">Welcome to <span class="text-danger">PADMA MULTIPURPOSE BRIDGE PROJECT</span></h1>
            <p class="text-muted">The Padma Bridge is a multipurpose road-rail bridge across the Padma River to be constructed in Bangladesh. When completed it will be the largest bridge in Bangladesh and the first fixed river crossing for road traffic. It will connect Louhajong, Munshiganj to Shariatpur and Madaripur, linking the south-west of the country, to northern and eastern regions.</p>
        </div>
        <div class="row hero_bottom mt-4">
            <div class="col-sm-4">
                <div class="card text-center" style="width: 18rem;">
                    <?php dynamic_sidebar('hbimg');?>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('hbbody');?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center" style="width: 18rem;">
                    <?php dynamic_sidebar('hbimg');?>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('hbbody2');?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center" style="width: 18rem;">
                    <?php dynamic_sidebar('hbimg');?>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('hbbody3');?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- hero part end -->

    <!-- photo part start -->
    <section class="container photo mt-4 text-center">
        <div class="row photo_top">
            <div class="col-lg-4 p-0">
                <div class="green_border text-success mt-4 pt-3">
                    -----------------------------------------------------------
                </div>
                <!-- <img src="<?= get_template_directory().'/assets/images/'?>" alt=""> -->
            </div>
            <div class="col-lg-4">
                <h4>Recent Photos</h4>
                <p>Some latest project pictures</p>
            </div>
            <div class="col-lg-4 p-0">
                <div class="green_border text-success mt-4 pt-3">
                    -----------------------------------------------------------
                </div>
            </div>
        </div>
        <div class="row photo_bottom">
            <div class="col-sm-3">
                <div class="card" style="">
                    <?php dynamic_sidebar('p_img1');?>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('p_body_1');?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="">
                    <?php dynamic_sidebar('p_img2');?>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('p_body_2');?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="">
                    <?php dynamic_sidebar('p_img3');?>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('p_body_3');?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="">
                    <?php dynamic_sidebar('p_img4');?>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('p_body_4');?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- photo part End -->

    <!-- News Part Start -->
    <section class="container news text-center">
        <div class="row news_top">
            <div class="col-lg-4 p-0">
                <div class="green_border text-success mt-4 pt-3">
                    -----------------------------------------------------------
                </div>
                <!-- <img src="<?= get_template_directory().'/assets/images/'?>" alt=""> -->
            </div>
            <div class="col-lg-4">
                <h4>NEWS & EVENTS</h4>
                <p>CLICK HERE TO VIEW ALL</p>
            </div>
            <div class="col-lg-4 p-0">
                <div class="green_border text-success mt-4 pt-3">
                    -----------------------------------------------------------
                </div>
            </div>
        </div>
        <div class="row news_botom my-4">
            <div class="col-lg-3">
                <!-- start -->

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            $x=0;
                            while(have_posts()){ the_post();
                            $x++;
                        ?>
                            <div class="carousel-item <?= ($x==1)?'active':''?>">
                                <?php the_title();?>
                            </div>
                        <?php }?>

                    </div>
                </div>

                <!-- end -->
            </div>
            <div class="col-lg-9"></div>
        </div>
        
    </section>
    <!-- News Part End -->

  <?php get_footer();?>


    <?php wp_footer();?>
</body>
</html>