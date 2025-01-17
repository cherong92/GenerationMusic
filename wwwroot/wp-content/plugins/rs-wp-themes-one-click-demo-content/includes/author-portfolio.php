<?php
function rswpthemes_author_portfolio_ocdc(){
	$demo_lists = array();
	$demo_lists['author-portfolio-free'] = array(
        'title' => __( 'Author Portfolio Free', 'rspbpc' ),/*Title*/
        'is_pro' => false, /*Is Premium*/
        'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
        'author' => __( 'rswpthemes' ),/*Author Name*/
        'keywords' => array( 'Author Portfolio', 'blog' ),/*Search keyword*/
        'categories' => array( 'free' ),/*Categories*/
           'template_url' => array(
               'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-portfolio/content.json',/*Full URL Path to content.json*/
               'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-portfolio/options.json',/*Full URL Path to options.json*/
               'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-portfolio/widgets.json'/*Full URL Path to widgets.json*/
           ),
        'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-portfolio/screenshot.jpg',/*Full URL Path to demo screenshot image*/
        'demo_url' => 'https://rswpthemes.com/demo-page/?demo=author-portfolio-free',/*Full URL Path to Live Demo*/
     );
	return $demo_lists;
}