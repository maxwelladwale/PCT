<?php



get_header();

?>

<div class="glax_fn_all_pages_content">





    <!-- ALL PAGES -->

    <div class="glax_fn_all_pages">

        <div class="glax_fn_all_pages_inner">



            <!-- WITHOUT SIDEBAR -->

            <div class="glax_fn_without_sidebar_page">

                <div class="container">



                    <div class="inner" >



                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <?php the_content(); ?>

                        <?php endwhile; endif; ?>



                    </div>

                </div>

            </div>

            <!-- /WITHOUT SIDEBAR -->

        </div>

    </div>

    <!-- /ALL PAGES -->

</div>



<?php get_footer(); ?>