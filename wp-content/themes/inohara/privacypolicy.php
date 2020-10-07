<?php
/**
 * 
 * Template Name: privacypolicy

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
                    <img src="<?php echo(get_template_directory_uri()); ?>/img/privacy/ttl_privacy.png" alt="">
                </h2>
            </div>
            <!-- End ttl company -->
            <div class="breadcrumb">
                <div class="breadcrumb_wrap">
                    <div class="inner">
                        <ul>
                            <li>トップ</li>
                            <li>個人情報保護方針</li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- End breadcrumb -->
            <section class="privacy_content">
                <div class="inner privacy_wrap">
                    <h3 class="ttl_content01">
                        <span>
                            <img src="<?php echo(get_template_directory_uri()); ?>/img/company/before_ttl_content.png" alt="">
                        </span>個人情報保護方針
                    </h3>
                    <p class="des_first_ttl">株式会社猪原商会（以下「当社」）は、以下の通り個人情報を定めます。この個人情報保護方針は、当社のウェブサイトを利用している時に適用されます。<br>また、当ウェブサイトにおいてお預かりした個人情報は、この個人情報保護方針に従って管理されます。</p>
                    <div class="box box_policy01">
                        <h4>お預かりした個人情報の収集・利用について</h4>
                        <p>当社は、サービスの提供のために必要な個人情報以外は収集致しません。<br> 個人情報を利用する際には、目的を逸脱して利用することはありません。<br> また、必要な個人情報の収集の際には、事前に同意を得ます。</p>
                    </div>
                    <div class="box box_policy02">
                        <h4>お預かりした個人情報の共有・開示について</h4>
                        <p>当社は、以下の場合を除いて、お預かりした個人情報をご本人の許可なく第三者と共有することはありません。</p>
                        <div class="child_box02 privacy_box">
                            <ul>
                                <li>お客様の同意がある場合</li>
                                <li>収集当初の目的を達成するために、必要な業務を委託する場合</li>
                                <li>法令に基づき情報開示の依頼があった場合</li>
                            </ul>
                        </div>
                    </div>
                    <div class="box box_policy03">
                        <h4>お預かりした個人情報の修正・利用停止について</h4>
                        <p>お預かりした個人情報の修正・利用停止を必要とする場合には、その旨をご連絡ください。<br> ご本人である確認をとらせて頂いた上で対応させて頂きます。
                    </div>
                    <div class="box box_policy04">
                        <h4>セキュリティについて</h4>
                        <p>お預かりした個人情報は社内での使用に限定されており、お問い合わせ担当者など、<br> 特別な業務を果たす為に個人情報を必要とするスタッフだけがアクセスすることを許されます。</p>

                    </div>
                    <div class="box box_policy05">
                        <h4>個人情報保護方針の更新</h4>
                        <p>当社は、個人情報保護方針を一部改訂することがあります。<br>その際は、当ウェブサイト上にてお知らせ致します。</p>
                    </div>
                </div>
            </section>
            <!-- End privacy_content -->   
</main>
<?php
get_footer();
