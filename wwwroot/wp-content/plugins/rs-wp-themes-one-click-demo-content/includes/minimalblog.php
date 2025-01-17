<?php
function rswpthemes_minimalblog_ocdc(){
	$demo_lists = array();
	$demo_lists['minimalblog-free'] = array(
            'title' => __( 'Minimalblog Free', 'rspbpc' ),/*Title*/
            'is_pro' => false, /*Is Premium*/
            'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'Minimalblog', 'blog' ),/*Search keyword*/
            'categories' => array( 'free' ),/*Categories*/
               'template_url' => array(
                   'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/minimalblog/content.json',
                   'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/minimalblog/options.json',
                   'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/minimalblog/widgets.json'
               ),
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/minimalblog/minimalblog.jpg',
            'demo_url' => 'https://smarterthemes.com/demo/minimalblog-free/',
        );
	return $demo_lists;
}