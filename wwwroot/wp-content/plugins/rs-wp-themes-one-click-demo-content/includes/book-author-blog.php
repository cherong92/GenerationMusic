<?php
function rswpthemes_book_author_blog_ocdc(){
	$demo_lists = array();
	$demo_lists['book-author-blog-free'] = array(
            'title' => __( 'Book Author Blog Free', 'rspbpc' ),/*Title*/
            'is_pro' => false, /*Is Premium*/
            'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'Author', 'book', 'blog' ),/*Search keyword*/
            'categories' => array( 'free' ),/*Categories*/
               'template_url' => array(
                   'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/book-author-blog/content.json',/*Full URL Path to content.json*/
                   'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/book-author-blog/options.json',/*Full URL Path to options.json*/
                   'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/book-author-blog/widgets.json'/*Full URL Path to widgets.json*/
               ),
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/book-author-blog/screenshot.jpg',/*Full URL Path to demo screenshot image*/
            'demo_url' => 'https://rswpthemes.com/demo-page/?demo=author-portfolio-demo-selector',/*Full URL Path to Live Demo*/
         );
	return $demo_lists;
}