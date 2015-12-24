<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package storex
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<body>
<div class="site">
    <!--Header-->
    <header class="site-header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="top-widgets col-xs-12 col-md-4 col-sm-4">
                        <div id="text-6" class="widget-text left-aligned">
                            <div class="textwidget">
                                ENGLISH
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                        <div id="text-7" class="widget-text left-aligned">
                            <div class="textwidget">
                                USD
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-container col-xs-12 col-md-4 col-sm-4">
                                <span class="phone-header">
                                    <i class="fa fa-mobile"></i>
                                    123-456-789
                                </span>
                                <span class="mail-header">
                                    <i class="fa fa-envelope-o"></i>
                                    foxterart@gmail.com
                                </span>
                    </div>
                    <div class="top-nav-container col-xs-12 col-md-4 col-sm-4">
                        <nav class="header-top-nav">
                            <div class="menu-top-menu-container">
                                <ul id="menu-top-menu" class="menu">
                                    <li id="menu-item-31" class="">
                                        <a href="#">WISHLIST</a>
                                    </li>
                                    <li id="menu-item-32" class="">
                                        <a href="#">MY ACCOUNT</a>
                                    </li>
                                    <li id="menu-item-33" class="">
                                        <a href="#">CHECKOUT</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of Header top section -->
        <div class="sticky-wrapper">
            <div class="logo-wrapper">
                <!--Logo & hgoup-->
                <div class="container">
                    <div class="row">
                        <div class="site-logo col-md-2 col-sm-32 col-xs-2">
                            <a href="#" rel="home" title="StoreX">
                                <img src="img/Storex131_03@2x.png" alt="Just another WordPress site">
                            </a>
                        </div>
                        <div class="aside-logo-container col-md-10 col-sm-10 col-xs-10">
                            <div class="row">
                                <div class="col-md-8 col-xs-10">
                                    <div class="header-primary-nav">
                                        <!--Primary nav-->
                                        <nav class="primary-nav">
                                            <div class="wr-megamenu-container jsn-bootstrap3 primary-nav_2580">
                                                <ul id="wr-megamenu-12" class="wr-mega-menu nav-menu">

                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-70 current_page_item wr-megamenu-item level-0 menu-default">
                                                        <a href="#" class="menu-item-link">
                                                                    <span class="menu_title">
                                                                        <i class="fa fa-home"></i>
                                                                    </span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page wr-megamenu-item level-0 mega-item wr-megamenu-fixed">
                                                        <a href="#" class="menu-item-link">
                                                            <span class="menu_title">SHOP</span>
                                                        </a>
                                                    </li>

                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page wr-megamenu-item level-0 mega-item wr-megamenu-fixed">

                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-parent-item wr-megamenu-item level-0 menu-default">
                                                        <a href="#" class="menu-item-link">
                                                            <span class="menu_title">BLOG</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-parent-item wr-megamenu-item level-0 menu-default">
                                                        <a href="#" class="menu-item-link">
                                                            <span class="menu_title">PAGES</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-parent-item wr-megamenu-item level-0 menu-default">
                                                        <a href="#" class="menu-item-link">
                                                            <span class="menu_title">GALLERY</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page wr-megamenu-item level-0 menu-default">
                                                        <a href="#" class="menu-item-link">
                                                            <span class="menu_title">CONTACTS</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                    <!--End of Primary nav-->
                                </div>
                                <div class="col-md-4 col-xs-2">
                                    <div class="hgroup-sidebar">
                                        <div id="pt_search_widget-2" class="widget widget_pt_search_widget">
                                            <div class="search-wrapper">
                                                <div id="show-search" onClick="hide_show();return false;" return false" class="show-search" title="Click to show search-field">
                                                <i class="blue-bkg-fa-search"></i>
                                                <i class="fa fa-search"></i>
                                            </div>
                                            <script type="text/javascript">
                                                function hide_show() {
                                                    //Получаем стиль блока с айди div (для изменения)
                                                    var div = document.getElementById("pt-searchform-container").style.display;
                                                    if (div == "") div = "block";
                                                    //Если блок не отображается
                                                    if (div == "none") {
                                                        div = "block";
                                                    }
                                                    //или наоборот
                                                    else {
                                                        div = "none";
                                                    }
                                                    //Теперь меняем стили у ссылки
                                                    //и блока который хотим скрыть или показать
                                                    document.getElementById("pt-searchform-container").style.display = div;
                                                }
                                            </script>

                                            <div id="pt-searchform-container" style="width: 350px; display:none;" class="open">
                                                <form class="pt-searchform" method="get" action="#">
                                                    <input id="s" name="s" type="text" class="searchtext" value="" title="Text here..." placeholder="Text here..." tabindex="1">
                                                    <input id="searchsubmit" type="submit" class="search-button" value="Search" title="Click to search" tabindex="2">
                                                </form>
                                            </div>
                                        </div>
                                        <script type="text/javascript"></script>
                                    </div>
                                    <div id="woocommerce_widget_cart-3" class="widget woocommerce widget_shopping_cart">
                                        <div class="inner-cart-content">
                                            <div class="heading">
                                                <div class="cart-icon">
                                                    <i class="blue-bkg-fa-cart"></i>
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                                <div class="cart-widget-title">
                                                    Shoping cart
                                                </div>
                                                            <span class="count-icon">
                                                                0
                                                            </span>
                                                <a class="cart-contents" href="#" title="View your shopping cart">
                                                    0 items -
                                                                <span class="amount">
                                                                    £0.00
                                                                </span>
                                                </a>
                                            </div>
                                            <div class="widget_shopping_cart_content" >
                                                <ul class="cart_list product_list_widget ">
                                                    <li class="empty">
                                                        No products in the cart.
                                                    </li>
                                                </ul><!-- end product list -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<!-- end of Logo & hgroup -->


<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>
