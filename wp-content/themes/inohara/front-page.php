<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inohara
 */

get_header();
?>

	<main id="primary" class="site-main">
    <div id="main">
            <div class="bnr_top">
                <img src="<?php echo(get_template_directory_uri()); ?>/img/top/bnr_top_inohara.jpg">
            </div>
            <section class="top_sec01">
                <div class="inner top_sec01_wrap">
                    <h2>お知らせ</h2>
                    <div class="top_sec01_news">
                        <img src="<?php echo(get_template_directory_uri()); ?>/img/top/icon_top_news.jpg">
                    </div>
                    <!-- <p> <span>2020.03.01</span>ホームページオープンしました。</p> -->
                   <p><?php query_posts('showposts=1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                       <span><?php the_date('F j. Y'); ?></span> 
                       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endwhile;?>
                        <?php endif; wp_reset_query(); ?>
                    </p> 
                </div>


            </section>
            <!-- End top sec01 -->
            <section class="top_sec02">
                <div class="inner wrap_top_sec">
                    <h2 class="ttl_section">会社案内</h2>
                    <span class="sub_ttl_section"> 
                      <img src="<?php echo(get_template_directory_uri()); ?>/img/top/icon_top_company.png">
                    </span>
                    <span class="sec_description">テキストが入ります。テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。 </span>
                    <div class="btn_top_more">
                        <a href="company.html">
                            <img src="<?php echo(get_template_directory_uri()); ?>/img/top/btn_top_more.png" alt="">
                        </a>
                    </div>

                </div>

            </section>
            <!-- End top sec 02 -->
            <section class="top_sec03">
                <div class="inner wrap_top_sec">
                    <h2 class="ttl_section">採用情報</h2>
                    <span class="sub_ttl_section"> 
                        <img src="<?php echo(get_template_directory_uri()); ?>/img/top/icon_top_recruit.png">
                    </span>
                    <span class="sec_description">テキストが入ります。テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。 </span>
                    <div class="btn_top_more">
                        <a href="recruit.html">
                            <img src="<?php echo(get_template_directory_uri()); ?>/img/top/btn_top_more.png" alt="">
                        </a>
                    </div>
                </div>
            </section>
            <!-- end  top sec 03 -->
            <section class="top_sec04">
                <div class="inner wrap_top_sec">
                    <h2 class="ttl_section">取扱製品</h2>
                    <span class="sub_ttl_section"> 
                    <img src="<?php echo(get_template_directory_uri()); ?>/img/top/icon_top_product.png">
                    </span>
                    <span class="sec_description">テキストが入ります。テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。 </span>
                    <div class="btn_top_more">
                        <a href="product.html">
                            <img src="<?php echo(get_template_directory_uri()); ?>/img/top/btn_top_more.png" alt="">
                        </a>
                    </div>
                </div>
            </section>
            <!-- end  top sec 04 -->

            <div class="btn_contact">
                <div class="inner btn_contact_top">
                    <a href="contact.html">お問い合わせ</a>
                </div>
            </div>
            <!-- End contact button -->
        </div>
	

	</main><!-- #main -->

<?php

get_footer();
