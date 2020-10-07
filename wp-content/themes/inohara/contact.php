<?php
/**
 * 
 * Template Name: contact

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
                    <img src="<?php echo(get_template_directory_uri()); ?>/img/contact/ttl_contact.png" alt="">
                </h2>
            </div>
            <!-- End ttl contact -->

            <div class="breadcrumb">
                <div class="breadcrumb_wrap">
                    <div class="inner">
                        <ul>
                            <li>トップ</li>
                            <li>お問い合わせ</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="contact_sec01">
                <div class="inner">
                    <h3 class="ttl_content01">
                        <span>
                            <img src="<?php echo(get_template_directory_uri()); ?>/img/company/before_ttl_content.png">
                        </span>お電話・FAXでのお問い合わせ
                    </h3>
                    <div class="contact_box">
                        <ul class="content_list">
                            <li class="Tel"><span><img src="<?php echo(get_template_directory_uri()); ?>/img/common/icon_tel.png" alt="tel"></span><a href="tel:+048-996-4331">048-996-4331 (代)</a></li>
                            <li><span><img src="<?php echo(get_template_directory_uri()); ?>/img/common/icon_fax.png" alt="fax"></span><a>048-996-1874</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contact_sec02">
                <div class="inner">
                    <h3 class="ttl_content01">
                        <span>
                            <img src="<?php echo(get_template_directory_uri()); ?>/img/company/before_ttl_content.png">
                        </span>メールフォームでのお問い合わせ
                    </h3>
                    <div class="contact_instruction">
                        <p>お手数ですが、<span>＊</span>の付いた項目は必ずご入力ください。<br> 半角カタカナ、外字（登録文字）での入力は文字化けの原因となりますのでお控えください。<br><a href="privacypolicy">個人情報保護方針</a> にご同意の上、送信ください。</p>
                    </div>
                    <div class="contact_form">
                        <form action="./lib/mail/mail.php" method="post" id="form" novalidate="novalidate">
                            <table class="table-contact">
                                <tbody>
                                    <tr>
                                        <th>会社名</th>
                                        <td><input type="text" name="会社名"></td>
                                    </tr>
                                    <tr>
                                        <th>お名前<img src="<?php echo(get_template_directory_uri()); ?>/img/contact/icon_contact_valid.png" alt="require" class="require"></th>
                                        <td>
                                            <input type="text" name="お名前">
                                            <p class="is_error_name"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>メールアドレス<img src="<?php echo(get_template_directory_uri()); ?>/img/contact/icon_contact_valid.png" alt="require" class="require"></th>
                                        <td>
                                            <input type="email" name="メールアドレス">
                                            <p class="is_error_mail"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>お電話番号</th>
                                        <td><input type="tel" name="お電話番号"></td>
                                    </tr>
                                    <tr>
                                        <th>FAX番号</th>
                                        <td><input type="text" name="FAX番号"></td>
                                    </tr>
                                    <tr>
                                        <th>お問い合わせ内容<img src="<?php echo(get_template_directory_uri()); ?>/img/contact/icon_contact_valid.png" alt="require" class="require"></th>
                                        <td>
                                            <textarea class="textarea" name="お問い合わせ内容"></textarea>
                                            <p class="is_error_textarea"></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Table form -->
                            <div class="submit_contact">
                                <input type="submit" value="送信">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End contact sec01 -->


       
</main><!-- #main -->

<?php
get_footer();
