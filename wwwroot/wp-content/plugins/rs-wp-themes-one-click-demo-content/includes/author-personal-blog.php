<?php
function rswpthemes_author_personal_blog_ocdc(){
	$demo_lists = array();
	$demo_lists['author-personal-blog-free'] = array(
            'title' => __( 'Author Personal Blog Free', 'rspbpc' ),/*Title*/
            'is_pro' => false, /*Is Premium*/
            'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'Author', 'personal', 'blog' ),/*Search keyword*/
            'categories' => array( 'free' ),/*Categories*/
               'template_url' => array(
                   'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-personal-blog/content.json',/*Full URL Path to content.json*/
                   'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-personal-blog/options.json',/*Full URL Path to options.json*/
                   'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-personal-blog/widgets.json'/*Full URL Path to widgets.json*/
               ),
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-personal-blog/screenshot.jpg',/*Full URL Path to demo screenshot image*/
            'demo_url' => 'https://demo.rswpthemes.com/author-personal-blog-pro-demo-selector',/*Full URL Path to Live Demo*/
         );
	return $demo_lists;
}