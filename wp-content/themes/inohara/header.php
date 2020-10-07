<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inohara
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>inohara</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<div id="page" class="container">

	<header id="header">
            <h1>
                <a href="./">
                    <img src="<?php echo(get_template_directory_uri()); ?>/img/common/header_logo.png" alt="">
                </a>
            </h1>
            <div id="gNav">
                <nav>
                    <ul class="nav_list">
                        <li><a href="./">トップ</a></li>
                        <li><a href="company">会社案内</a></li>
                        <li><a href="product">取扱製品</a></li>
                        <li><a href="recruit">採用情報</a></li>
                        <li class="header_email">
                            <a href="contact">
                                <img src="<?php echo(get_template_directory_uri()); ?>/img/common/bg_header_email.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="menu-toggle">
                <div class="hamburger"></div>
            </div>
            <!-- End header-->
        </header>