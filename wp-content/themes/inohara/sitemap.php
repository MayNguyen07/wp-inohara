<?php
/**
 * 
 * Template Name: sitemap

 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inohara
 */

get_header();
?>
<main id="primary" class="site-main">
<div class="ttl_page">
                <h2>
                    <img src="<?php echo(get_template_directory_uri()); ?>/img/sitemap/ttl_sitemap.png" alt="">
                </h2>
            </div>
            <!-- End ttl company -->

            <div class="breadcrumb">
                <div class="breadcrumb_wrap">
                    <div class="inner">
                        <ul>
                            <li>トップ</li>
                            <li>サイトマップ</li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- End breadcrumb -->
            <section class="sitemap_content">
                <div class="inner sitemap wrap">
                    <h3 class="ttl_content01">
                        <span>
                            <img src="<?php echo(get_template_directory_uri()); ?>/img/company/before_ttl_content.png">
                        </span>サイトマップ
                    </h3>
                    <div class="sitemap_contents">
                        <ul>
                            <li><a href="./">トップ</a></li>
                        </ul>
                        <ul>
                            <li><a href="company.html">会社案内</a></li>
                            <li><a href="product.html">取扱製品</a></li>
                            <li><a href="recruit.html">採用情報</a></li>
                        </ul>
                        <ul>
                            <li><a href="contact.html">お問い合わせ</a></li>
                            <li><a href="privacypolicy.html">個人情報保護方針</a></li>
                            <li><a href="sitemap.html">サイトマップ</a></li>
                        </ul>
                    </div>

                </div>
            </section>

 </div>
</main>
<?php
get_footer();
