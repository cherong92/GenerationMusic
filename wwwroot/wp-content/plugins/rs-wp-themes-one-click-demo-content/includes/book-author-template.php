<?php
function rswpthemes_book_author_template_ocdc(){
	$demo_lists = array();
	$demo_lists['book-author-template-free'] = array(
            'title' => __( 'Book Author Template Free', 'rspbpc' ),/*Title*/
            'is_pro' => false, /*Is Premium*/
            'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'Book Author Template', 'blog' ),/*Search keyword*/
            'categories' => array( 'free' ),/*Categories*/
               'template_url' => array(
                   'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/book-author-template/content.json',
                   'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/book-author-template/options.json',
                   'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/book-author-template/widgets.json'
               ),
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/book-author-template/book-author-template.jpg',
            'demo_url' => 'https://rswpthemes.com/author-portfolio-pro-wordpress-theme/',
        );
	return $demo_lists;
}