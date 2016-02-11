<?php
/**
 * @file
 * Theme settings for Teamwork15 sub theme
 *
*/

function teamwork_15_subtheme_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['disclaimer01'] = array(
  '#markup' => '<p><strong>' . t('These settings for the subtheme do NOT extend into the parent theme.') . '</strong></p>',
);

$form['teamwork_15_subtheme_cdn'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> instead of this website to serve the base CSS file.'),
    '#default_value' => theme_get_setting('teamwork_15_subtheme_cdn', 'teamwork_15_subtheme'),
  );

$form['teamwork_15_subtheme_sass'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Only load the your-custom.css sub-theme file and remove the parent theme styles.  Use caution:  this setting is for if you are trying to make a smaller download by compiling with Sass'),
    '#default_value' => theme_get_setting('teamwork_15_subtheme_sass', 'teamwork_15_subtheme'),
  );

$form['disclaimer'] = array(
  '#markup' => '<p>' . t('You may choose to include these Javascript files into your page to help enable these certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['teamwork_15_subtheme_script1'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script modernizr.js'),
      '#default_value' => theme_get_setting('teamwork_15_subtheme_script1', 'teamwork_15_subtheme'),
    );

$form['teamwork_15_subtheme_script2'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery-validate.js'),
      '#default_value' => theme_get_setting('teamwork_15_subtheme_script2', 'teamwork_15_subtheme'),
    );

$form['teamwork_15_subtheme_script3'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script fastclick.js'),
      '#default_value' => theme_get_setting('teamwork_15_subtheme_script3', 'teamwork_15_subtheme'),
    );

$form['teamwork_15_subtheme_script4'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script hammer.js'),
      '#default_value' => theme_get_setting('teamwork_15_subtheme_script4', 'teamwork_15_subtheme'),
    );

$form['teamwork_15_subtheme_juiced_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('teamwork_15_subtheme_juiced_main_background', 'teamwork_15_subtheme'),
    );

$form['teamwork_15_subtheme_juiced_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('teamwork_15_subtheme_juiced_main_background_blurred', 'teamwork_15_subtheme'),
    );

$form['teamwork_15_subtheme_juiced_big_statement_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('teamwork_15_subtheme_juiced_big_statement_background', 'teamwork_15_subtheme'),
    );

$form['teamwork_15_subtheme_juiced_big_statement_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('teamwork_15_subtheme_juiced_big_statement_background_blurred', 'teamwork_15_subtheme'),
    );

$form['teamwork_15_subtheme_body_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area in a core layout.'),
      '#default_value' => theme_get_setting('teamwork_15_subtheme_body_main_background', 'teamwork_15_subtheme'),
    );

$form['teamwork_15_subtheme_body_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('teamwork_15_subtheme_body_main_background_blurred', 'teamwork_15_subtheme'),
    );

$form['teamwork_15_subtheme_footer_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the footer area in a core layout.'),
      '#default_value' => theme_get_setting('teamwork_15_subtheme_footer_main_background', 'teamwork_15_subtheme'),
    );

$form['teamwork_15_subtheme_footer_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('teamwork_15_subtheme_footer_main_background_blurred', 'teamwork_15_subtheme'),
    );

}
