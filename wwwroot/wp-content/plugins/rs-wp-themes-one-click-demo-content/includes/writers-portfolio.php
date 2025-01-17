<?php
function rswpthemes_writers_portfolio_ocdc(){
	$demo_lists = array();
	$demo_lists['writers-portfolio-free'] = array(
            'title' => __( 'Writers Portfolio Free', 'rspbpc' ),/*Title*/
            'is_pro' => false, /*Is Premium*/
            'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'Writers Portfolio', 'blog' ),/*Search keyword*/
            'categories' => array( 'free' ),/*Categories*/
               'template_url' => array(
                   'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/writers-portfolio/content.json',
                   'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/writers-portfolio/options.json',
                   'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/writers-portfolio/widgets.json'
               ),
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/writers-portfolio/screenshot.jpg',
            'demo_url' => 'https://rswpthemes.com/demo-page/?demo=writers-portfolio-free',
        );
	return $demo_lists;
}