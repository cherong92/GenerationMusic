<?php
/**
 * Plugin Name:       Rs Wp Themes One Click Demo Content
 * Plugin URI:
 * Description:       This is a Recommended Plugin for All RS WP THEMES
 * Version:           2.1.15
 * Requires at least: 4.9
 * Requires PHP:      5.6
 * Author:            RS WP THEMES
 * Author URI:        https://rswpthemes.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       rswpthemes-one-click-demo-content
 */

if (!defined('RSWPTHEMES_OCDC_PLUGIN_PATH')) {
    define('RSWPTHEMES_OCDC_PLUGIN_PATH', plugin_dir_path( __file__ ));
}
if (!defined('RSWPTHEMES_OCDC_PLUGIN_URL')) {
    define('RSWPTHEMES_OCDC_PLUGIN_URL', plugin_dir_url( __file__ ));
}

function rswpthemes_ocdc_demo_import_lists(){
   $getRswpThemesSlug = get_stylesheet();
   $demo_lists = array();
    require RSWPTHEMES_OCDC_PLUGIN_PATH . '/includes/author-portfolio.php';
    require RSWPTHEMES_OCDC_PLUGIN_PATH . '/includes/writers-portfolio.php';
    require RSWPTHEMES_OCDC_PLUGIN_PATH . '/includes/book-author-blog.php';
    require RSWPTHEMES_OCDC_PLUGIN_PATH . '/includes/author-personal-blog.php';
    require RSWPTHEMES_OCDC_PLUGIN_PATH . '/includes/author-blog.php';
    require RSWPTHEMES_OCDC_PLUGIN_PATH . '/includes/book-author-template.php';
    require RSWPTHEMES_OCDC_PLUGIN_PATH . '/includes/minimalblog.php';
    require RSWPTHEMES_OCDC_PLUGIN_PATH . '/includes/faith-blog.php';
    require RSWPTHEMES_OCDC_PLUGIN_PATH . '/includes/one-elementor.php';
    require RSWPTHEMES_OCDC_PLUGIN_PATH . '/includes/tech-blogging.php';
    require RSWPTHEMES_OCDC_PLUGIN_PATH . '/includes/book-review-blog.php';
    require RSWPTHEMES_OCDC_PLUGIN_PATH . '/includes/premium-demos.php';
    if ('writers-portfolio' === $getRswpThemesSlug) {
        $demo_lists = array_merge(rswpthemes_writers_portfolio_ocdc(), rswpthemes_ocdc_premium_demos());
    }elseif('author-portfolio' === $getRswpThemesSlug){
        $demo_lists = array_merge(rswpthemes_author_portfolio_ocdc(), rswpthemes_ocdc_premium_demos());
    }elseif('author-personal-blog' === $getRswpThemesSlug){
        $demo_lists = array_merge(rswpthemes_author_personal_blog_ocdc(), rswpthemes_ocdc_premium_demos());
    }elseif('book-author-blog' === $getRswpThemesSlug){
        $demo_lists = array_merge(rswpthemes_book_author_blog_ocdc(), rswpthemes_ocdc_premium_demos());
    }elseif('minimalblog' === $getRswpThemesSlug){
        $demo_lists = array_merge(rswpthemes_minimalblog_ocdc(), rswpthemes_ocdc_premium_demos());
    }elseif('author-blog' === $getRswpThemesSlug){
        $demo_lists = array_merge(rswpthemes_author_blog_ocdc(), rswpthemes_ocdc_premium_demos());
    }elseif('book-author-template' === $getRswpThemesSlug){
        $demo_lists = array_merge(rswpthemes_book_author_template_ocdc(), rswpthemes_ocdc_premium_demos());
    }elseif('faith-blog' === $getRswpThemesSlug){
        $demo_lists = array_merge(rswpthemes_faith_blog_ocdc(), rswpthemes_ocdc_premium_demos());
    }elseif('one-elementor' === $getRswpThemesSlug){
        $demo_lists = array_merge(rswpthemes_one_elementor_ocdc(), rswpthemes_ocdc_premium_demos());
    }elseif('tech-blogging' === $getRswpThemesSlug){
        $demo_lists = array_merge(rswpthemes_tech_blogging_ocdc(), rswpthemes_ocdc_premium_demos());
    }elseif('book-review-blog' === $getRswpThemesSlug){
        $demo_lists = array_merge(rswpthemes_book_review_blog_ocdc(), rswpthemes_ocdc_premium_demos());
    }elseif('book-blogger' === $getRswpThemesSlug){
        $demo_lists = rswpthemes_ocdc_premium_demos();
    }elseif('fitness-blog' === $getRswpThemesSlug){
        $demo_lists = rswpthemes_ocdc_premium_demos();
    }elseif('electronic-store' === $getRswpThemesSlug){
        $demo_lists = rswpthemes_ocdc_premium_demos();
    }

   return $demo_lists;
}
add_filter('advanced_import_demo_lists','rswpthemes_ocdc_demo_import_lists');