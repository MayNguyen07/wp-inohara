<?php
/**
 * 
 * Template Name: Copampany

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
                    <img src="<?php echo(get_template_directory_uri()); ?>/img/company/ttl_comopany.png" alt="">
                </h2>
            </div>
            <!-- End ttl company -->
            <div class="breadcrumb">
                <div class="breadcrumb_wrap">
                    <div class="inner">
                        <ul>
                            <li>トップ</li>
                            <li>会社案内</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End breadcrumb -->
            <div class="company_sec01">
                <div class="inner">
                    <h3 class="ttl_content01">
                        <span>
                            <img src="<?php echo(get_template_directory_uri()); ?>/img/company/before_ttl_content.png">
                        </span>ご挨拶
                    </h3>
                    <div class="box">
                        <p>猪原商会のホームページにお越し頂きありがとうございます。</p>
                        <p>弊社は昭和40年の創業時以来、地域密着で機械・器具・工具の販売をしています。<br>変化に即応・活きた情報・経験・知識・現場力でお客様のニーズに合う商品をご提案・ご提供できるように目指しております。</p>
                        <p>この機械・器具・工具販売を通じて日本の産業・ものづくりの発展のお手伝いがしたい。<br>そして、社員一人ひとりの生活をより豊かなものに、お客様の信頼・ご満足がいただけるように、このものづくりの国日本のために、日々精進してまいります。</p>
                    </div>
                </div>
            </div>
            <!-- End company sec01 -->
            <div class="company_sec02">
                <div class="inner">
                    <h3 class="ttl_content01">
                        <span>
                            <img src="<?php echo(get_template_directory_uri()); ?>/img/company/before_ttl_content.png">
                        </span> 会社概要
                    </h3>
                    <div class="infor_table">
                        <table>
                            <tbody>
                                <tr>
                                    <th>創業</th>
                                    <td>1965年</td>
                                </tr>
                                <tr>
                                    <th>設立</th>
                                    <td>1978年7月</td>
                                </tr>
                                <tr>
                                    <th>代表者</th>
                                    <td>代表取締役　猪原 薫</td>
                                </tr>
                                <tr>
                                    <th>所在地</th>
                                    <td>〒340-0808 埼玉県八潮市緑町2丁目17番地1<br>Tel 048-996-4331(代)　Fax 048-996-1874</td>
                                </tr>
                                <tr>
                                    <th>資本金</th>
                                    <td>1,000万円</td>
                                </tr>
                                <tr>
                                    <th>社員数</th>
                                    <td>13名</td>
                                </tr>
                                <tr>
                                    <th>取引銀行</th>
                                    <td>みずほ銀行<br>埼玉県信用金庫</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pic_services">
                        <img src="<?php echo(get_template_directory_uri()); ?>/img/company/pic_company.servic02.jpg" alt="">
                        <img src="<?php echo(get_template_directory_uri()); ?>/img/company/pic_company_service01.jpg" alt="">
                    </div>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3234.999624279391!2d139.83056281569853!3d35.82448492970873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601890f517692de1%3A0x6a4380248852cb90!2z5pel5pys44CB44CSMzQwLTA4MDgg5Z-8546J55yM5YWr5r2u5biC57eR55S677yS5LiB55uu77yR77yX4oiS77yR!5e0!3m2!1sja!2s!4v1598247138975!5m2!1sja!2s"></iframe>
                        <div class="note-map">
                            <p>◎ 東武スカイツリーライン草加駅からバスの場合<span>緑町一丁目から徒歩2分</span></p>
                            <p>◎ 八潮駅からバスの場合<span>小作田児童公園入口から徒歩1分</span></p>

                        </div>

                    </div>

                </div>
            </div>

     
	</main><!-- #main -->

<?php
get_footer();
