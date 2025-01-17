<?php
function rswpthemes_faith_blog_ocdc(){
	$demo_lists = array();
	$demo_lists['faith-blog-free'] = array(
        'title' => __( 'Faith Blog Free', 'rspbpc' ),/*Title*/
        'is_pro' => false, /*Is Premium*/
        'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
        'author' => __( 'rswpthemes' ),/*Faith Name*/
        'keywords' => array( 'Faith Blog', 'blog' ),/*Search keyword*/
        'categories' => array( 'free' ),/*Categories*/
           'template_url' => array(
               'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/faith-blog/content.json',/*Full URL Path to content.json*/
               'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/faith-blog/options.json',/*Full URL Path to options.json*/
               'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/faith-blog/widgets.json'/*Full URL Path to widgets.json*/
           ),
        'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/faith-blog/faith-blog.jpg',/*Full URL Path to demo screenshot image*/
        'demo_url' => 'https://smarterthemes.com/demo/faith-blog-free/',/*Full URL Path to Live Demo*/
     );
	return $demo_lists;
}