<?php
function rswpthemes_book_review_blog_ocdc(){
	$demo_lists = array();
	$demo_lists['book-review-blog'] = array(
        'title' => __( 'Book Review Blog', 'rspbpc' ),/*Title*/
        'is_pro' => false, /*Is Premium*/
        'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
        'author' => __( 'rswpthemes' ),/*Faith Name*/
        'keywords' => array( 'Book Review Blog', 'blog' ),/*Search keyword*/
        'categories' => array( 'free' ),/*Categories*/
           'template_url' => array(
               'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/book-review-blog/content.json',/*Full URL Path to content.json*/
               'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/book-review-blog/options.json',/*Full URL Path to options.json*/
               'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/book-review-blog/widgets.json'/*Full URL Path to widgets.json*/
           ),
        'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/book-review-blog/book-review-blog.jpg',/*Full URL Path to demo screenshot image*/
        'demo_url' => 'https://demo.rswpthemes.com/book-review-blog/',/*Full URL Path to Live Demo*/
     );
	return $demo_lists;
}