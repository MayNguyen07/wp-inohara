<?php
/**
 * 
 * Template Name: recruit

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
                    <img src="<?php echo(get_template_directory_uri()); ?>/img/recruit/ttl_recruit.png" alt="">
                </h2>
            </div>
            <!-- End ttl company -->
            <div class="breadcrumb">
                <div class="breadcrumb_wrap">
                    <div class="inner">
                        <ul>
                            <li>トップ</li>
                            <li>採用情報</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End breadcrumb -->
            <div class="recruit_sec01">
                <div class="inner">
                    <h3 class="ttl_content01">
                        <span>
                            <img src="<?php echo(get_template_directory_uri()); ?>/img/company/before_ttl_content.png">
                        </span>募集要項
                    </h3>
                    <div class="box">
                        <p>挨拶、返事、声掛けの三原則を念頭に働きやすい職場を目指しています。未経験者でもご安心ください。<br>活躍できるように丁寧に親身になりお教えいたします。
                        </p>
                    </div>
                    <div class="infor_table">
                        <table>
                            <tbody>
                                <tr>
                                    <th>業務内容</th>
                                    <td>営業</td>
                                </tr>
                                <tr>
                                    <th>雇用形態</th>
                                    <td>正社員（中途）未経験可</td>
                                </tr>
                                <tr>
                                    <th>資格</th>
                                    <td>普通免許</td>
                                </tr>
                                <tr>
                                    <th>給与</th>
                                    <td>月給180.00円以上（経験、能力を考慮します</td>
                                </tr>
                                <tr>
                                    <th>勤務時間</th>
                                    <td>8：30~17：30</td>
                                </tr>
                                <tr>
                                    <th>休日・休暇 </th>
                                    <td>隔週土曜日（7月、8月は毎週土曜日休み）日曜日、祝日、GW、夏季休暇、年末年始休暇</td>
                                </tr>
                                <tr>
                                    <th>待遇</th>
                                    <td>昇給年1回、賞与年2回、各種社会保険完備、忘年会、通勤手当、皆勤手当 <br>試用期間3ヶ月あり
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- End recruit sec01 -->
            <div class="recruit_sec02">
                <div class="inner">
                    <div class="box recruit_box01">
                        <h4>
                            <span>
                            <img src="<?php echo(get_template_directory_uri()); ?>/img/recruit/before_ttl_recruit01.jpg" alt="">
                        </span> 応募方法
                        </h4>
                        <p>電話またはメールフォームでご連絡の上、履歴書（写真貼付）を郵送してください<br>ご応募の秘密は厳守いたします。</p>
                        <div class="child_box02">
                            <ul class="content_list">
                                <li class="Tel"><span><img src="<?php echo(get_template_directory_uri()); ?>/img/common/icon_tel.png"></span><a href="tel:+048-996-4331">048-996-4331 (代)</a></li>
                            </ul>
                            <p class="tel_text">担当 ／ 採用係　履歴書送付先 ／ 〒340-0808 埼玉県八潮市緑町2丁目17番地1</p>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End recruit sec02 -->

            <div class="btn_contact">
                <div class="inner btn_contact_top recruit_btn">
                    <a href="contact.html">お問い合わせ</a>
                </div>
            </div>

         
</main>
<?php
get_footer();
