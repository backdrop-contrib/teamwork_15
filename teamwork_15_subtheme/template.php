<?php
/**
 * @file
 * Teamwork15 sub theme template functions
 *
*/


/**
 * Implements hook_preprocess_maintenance_page().
 */
function teamwork_15_subtheme_preprocess_maintenance_page(&$variables) {
  backdrop_add_css(backdrop_get_path('theme', 'bartik') . '/css/maintenance-page.css');
}

/**
 * Implements hook_preprocess_layout().
 */
function teamwork_15_subtheme_preprocess_layout(&$variables) {
  if ($variables['content']['header']) {
    $variables['content']['header'] = '<div class="l-header-inner">' . $variables['content']['header'] . '</div>';
  }

if (theme_get_setting('teamwork_15_subtheme_cdn') > 0)
{
backdrop_add_css('http://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css', array('type' => 'external', 'every_page' => TRUE, 'group' => CSS_DEFAULT));
}

$var1 = theme_get_setting('teamwork_15_subtheme_juiced_main_background');
$var2 = theme_get_setting('teamwork_15_subtheme_juiced_big_statement_background');
$var3 = theme_get_setting('teamwork_15_subtheme_juiced_main_background_blurred');
$var4 = theme_get_setting('teamwork_15_subtheme_juiced_big_statement_background_blurred');

if ($var1 && $var3 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var1 && $var3 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .juiced-main { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var2 && $var4 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .l-big-statement::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat fixed; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var2 && $var4 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .l-big-statement { background: url($var2) no-repeat fixed; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}


$var5 = theme_get_setting('teamwork_15_subtheme_body_main_background');
$var6 = theme_get_setting('teamwork_15_subtheme_footer_main_background');
$var7 = theme_get_setting('teamwork_15_subtheme_body_main_background_blurred');
$var8 = theme_get_setting('teamwork_15_subtheme_footer_main_background_blurred');

if ($var5 && $var7 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .layout::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var5) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var5 && $var7 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .layout { background: url($var5) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var6 && $var8 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { footer.l-footer::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var6) no-repeat fixed; background-size: cover; background-position: center; } footer.l-footer { background: transparent; } }", array('type' => 'inline'));
}

if ($var6 && $var8 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { footer.l-footer { background: url($var6) no-repeat fixed; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (theme_get_setting('teamwork_15_subtheme_script1') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('teamwork_15_subtheme_script2') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('teamwork_15_subtheme_script3') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('teamwork_15_subtheme_script4') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

backdrop_add_js("themes/teamwork_15_subtheme/js/scripts.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')", array('type' => 'inline', 'scope' => 'footer', 'weight' => 9999));
}

/**
 * Implements theme_field__field_type().
 */
function teamwork_15_subtheme_field__taxonomy_term_reference($variables) {
  $output = '';

  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<h3 class="field-label">' . $variables['label'] . ': </h3>';
  }

  // Render the items.
  $output .= ($variables['element']['#label_display'] == 'inline') ? '<ul class="links inline">' : '<ul class="links">';
  foreach ($variables['items'] as $delta => $item) {
    $item_attributes = (isset($variables['item_attributes'][$delta])) ? backdrop_attributes($variables['item_attributes'][$delta]) : '';
    $output .= '<li class="taxonomy-term-reference-' . $delta . '"' . $item_attributes . '>' . backdrop_render($item) . '</li>';
  }
  $output .= '</ul>';

  // Render the surrounding DIV with appropriate classes and attributes.
  if (!in_array('clearfix', $variables['classes'])) {
    $variables['classes'][] = 'clearfix';
  }
  $output = '<div class="' . implode(' ', $variables['classes']) . '"' . backdrop_attributes($variables['attributes']) . '>' . $output . '</div>';

  return $output;
}

/**
 * Implements theme_preprocess_image_style().
 */
function teamwork_15_subtheme_preprocess_image_style(&$vars) {
  $vars['attributes']['class'][] = 'pure-img';
}

function teamwork_15_subtheme_button(&$vars) {

$classes = array('button-success', 'pure-button-primary', 'button-xlarge', 'pure-button');

if (!isset($vars['#attributes']['class'])) {
        $vars['#attributes'] = array('class' => $classes);
      }
      else {
        $vars['#attributes']['class'] = array_merge($vars['#attributes']['class'], $classes);
      }

if (!isset($vars['element']['#attributes']['class'])) {
        $vars['element']['#attributes'] = array('class' => $classes);
      }
      else {
        $vars['element']['#attributes']['class'] = array_merge($vars['element']['#attributes']['class'], $classes);
      }

return theme_button($vars);
}


function teamwork_15_subtheme_css_alter(&$css) {
  $css_to_remove = array();
  if (theme_get_setting('teamwork_15_subtheme_cdn') > 0)
  {
  $css_to_remove[] = backdrop_get_path('theme','teamwork_15') . '/css/pure.min.css';
  }

  if (theme_get_setting('teamwork_15_subtheme_sass') > 0)
  {
  $css_to_remove[] = backdrop_get_path('theme','teamwork_15') . '/css/style.css';
  $css_to_remove[] = backdrop_get_path('theme','teamwork_15') . '/css/pure.min.css';
  }

  foreach ($css_to_remove as $index => $css_file) {
      unset($css[$css_file]);
    }
}

/**
 * Implements hook_form_alter()
 */
function teamwork_15_subtheme_form_alter(&$form, &$form_state, $form_id) {
$classes = array('pure-form', 'pure-form-aligned');
if (!isset($form['#attributes']['class'])) {
        $form['#attributes'] = array('class' => $classes);
      }
      else {
        $form['#attributes']['class'] = array_merge($form['#attributes']['class'], $classes);
      }
}

function teamwork_15_subtheme_menu_tree($variables) {
return '<ul class="menu">' . $variables['tree'] . '</ul>';
}

/**
 * Overrides theme_form_element_label().
 */
function teamwork_15_subtheme_form_element_label(&$variables) {
  $element = $variables['element'];
  $title = filter_xss_admin($element['#title']);
 // If the element is required, a required marker is appended to the label.
  $required = !empty($element['#required']) ? theme('form_required_marker', array('element' => $element)) : '';
//   // This is also used in the installer, pre-database setup.
   $t = get_t();
   $attributes = array();

   if (!empty($element['#id'])) {
     $attributes['for'] = $element['#id'];
   }

   $output = '';
   if (isset($variables['#children'])) {

    if ($element['#type'] === "radio")
    {
    $output .= $variables['#children'];
    }

    if ($element['#type'] === "checkbox")
    {
    $output .= $variables['#children'];
    }

   }
   return ' <label' . backdrop_attributes($attributes) . '></label><div>' . $t('!title', array('!title' => $title)) .  "</div> \n";
}

/**
 * Implements theme_preprocess_menu_link().
 */
function teamwork_15_subtheme_menu_link(array $variables) {
$element = $variables['element'];

$classes = array('pure-menu-item');
$element['#attributes']['class'] = array_merge($element['#attributes']['class'], $classes);
$sub_menu = '';

if ($element['#below']) {
$sub_menu = backdrop_render($element['#below']);
}
$output = l($element['#title'], $element['#href'], $element['#localized_options']);
return '<li' . backdrop_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
