<?php
/**
 * @file
 * Theme settings file for Teamwork 15.
 *
 */

function teamwork_15_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['teamwork_15_cdn'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> instead of this website to serve the base CSS and Javascript files.  If you are using SASS, you will have to manually adjust your imports to avoid loading the same styles twice.'),
    '#default_value' => theme_get_setting('teamwork_15_cdn', 'teamwork_15'),
  );

$form['disclaimer'] = array(
  '#markup' => '<p>' . t('You may choose to include these Javascript files into your page to help enable these certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['teamwork_15_script1'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script modernizr.js'),
      '#default_value' => theme_get_setting('teamwork_15_script1', 'teamwork_15'),
    );

$form['teamwork_15_script2'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery-validate.js'),
      '#default_value' => theme_get_setting('teamwork_15_script2', 'teamwork_15'),
    );

$form['teamwork_15_script3'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script fastclick.js'),
      '#default_value' => theme_get_setting('teamwork_15_script3', 'teamwork_15'),
    );

$form['teamwork_15_script4'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script hammer.js'),
      '#default_value' => theme_get_setting('teamwork_15_script4', 'teamwork_15'),
    );

$form['teamwork_15_juiced_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('teamwork_15_juiced_main_background', 'teamwork_15'),
    );

$form['teamwork_15_juiced_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('teamwork_15_juiced_main_background_blurred', 'teamwork_15'),
    );

$form['teamwork_15_juiced_big_statement_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('teamwork_15_juiced_big_statement_background', 'teamwork_15'),
    );

$form['teamwork_15_juiced_big_statement_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('teamwork_15_juiced_big_statement_background_blurred', 'teamwork_15'),
    );

$form['teamwork_15_body_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area in a core layout.'),
      '#default_value' => theme_get_setting('teamwork_15_body_main_background', 'teamwork_15'),
    );

$form['teamwork_15_body_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('teamwork_15_body_main_background_blurred', 'teamwork_15'),
    );

$form['teamwork_15_footer_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the footer area in a core layout.'),
      '#default_value' => theme_get_setting('teamwork_15_footer_main_background', 'teamwork_15'),
    );

$form['teamwork_15_footer_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('teamwork_15_footer_main_background_blurred', 'teamwork_15'),
    );

}
