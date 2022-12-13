<?php
    /* Template Name: about */
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

  <?php get_footer();?>


    <?php wp_footer();?>
</body>
</html>