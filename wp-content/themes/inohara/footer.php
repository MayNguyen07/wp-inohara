<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inohara
 */

?>

	<footer id="footer" >
	<div class="pagetop">
                <p> TO TOP</p>
            </div>
            <div class=" inner ft_contents ">

                <div class=" ft_address ">
                    <a href="./ "><img src="<?php echo(get_template_directory_uri()); ?>/img/common/footer_logo.png"></a>
                    <p class="ft_contents01 ">株式会社猪原商会</p>
                    <p class="ft_contents02 ">〒340-0808 埼玉県八潮市緑町2丁目17番地1</br>Tel 048-996-4431(代) Fax 048-996-1874</p>
                </div>
                <div class="ft_links ">
                    <div class="ft_links_top ">
                        <a href="./">トップ</a>
                        <a href="company">会社案内</a>
                        <a href="product">取扱製品</a>
                        <a href="recruit">採用情報</a>
                    </div>
                    <div class="ft_links_botom ">
                        <a href="contact">お問い合わせ</a>
                        <a href="privacypolicy">個人情報保護方針</a>
                        <a href="sitemap">サイトマップ</a>

                    </div>
                </div>

            </div>
            <div class="copyright ">Copyright (C) 2020 株式会社猪原商会. All Rights Reserved. </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
