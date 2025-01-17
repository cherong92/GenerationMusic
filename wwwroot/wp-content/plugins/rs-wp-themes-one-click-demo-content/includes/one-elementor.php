<?php
function rswpthemes_one_elementor_ocdc(){
	$demo_lists = array();
	$demo_lists['one-elementor-free'] = array(
            'title' => __( 'One Elementor Free', 'rspbpc' ),/*Title*/
            'is_pro' => false, /*Is Premium*/
            'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'one elementor', 'blog' ),/*Search keyword*/
            'categories' => array( 'free' ),/*Categories*/
               'template_url' => array(
                   'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/one-elementor/content.json',
                   'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/one-elementor/options.json',
                   'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/one-elementor/widgets.json'
               ),
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/one-elementor/one-elementor.jpg',
            'demo_url' => 'https://smarterthemes.com/demo/one-elementor-free/',
        );
	return $demo_lists;
}