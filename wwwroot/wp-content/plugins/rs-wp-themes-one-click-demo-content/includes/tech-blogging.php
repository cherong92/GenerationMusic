<?php
function rswpthemes_tech_blogging_ocdc(){
	$demo_lists = array();
	$demo_lists['tech-blogging-free'] = array(
            'title' => __( 'Tech Blogging Free', 'rspbpc' ),/*Title*/
            'is_pro' => false, /*Is Premium*/
            'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'Tech', 'blog' ),/*Search keyword*/
            'categories' => array( 'free' ),/*Categories*/
               'template_url' => array(
                   'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/tech-blogging/content.json',
                   'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/tech-blogging/options.json',
                   'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/tech-blogging/widgets.json'
               ),
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/tech-blogging/screenshot.jpg',
            'demo_url' => 'https://smarterthemes.com/demo/tech-blogging/',
        );
	return $demo_lists;
}