<?php
/**
* The navbar
*
*/
$navbar = array(
    'class'   => 'navbar clearfix',
    'items'   => array(
        'about'     => array('text'=>'About',       'url'=>'#about',    'title' => 'About Me'),
        'projects'  => array('text'=>'Projects',    'url'=>'#projects', 'title' => 'My Projects'),
        'contact'   => array('text'=>'Contact',     'url'=>'#contact',  'title' => 'Contact Me')
    ),
    'callback_selected' => function($url) {
        if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
          return true;
        }
    }
);


/**
* Create a navigation bar / menu for the site.
*
* @param string $menu for the navigation bar.
* @param boolean $collapsed to collapse navigation.
* @return string as the html for the menu.
*/
function get_navbar($menu, $collapsed = false) {
	$class = $collapsed == true ? $menu['class'] . " collapsed" : $menu['class'];
	$html = "<nav class='{$class}'>\n<ul>\n";
	foreach($menu['items'] as $item) {
		$selected = $menu['callback_selected']($item['url']) ? " class='selected' " : null;
		$html .= "<li><a {$selected} href='{$item['url']}' title='{$item['title']}'>{$item['text']}</a></li>\n";
	}
	$html .= "</ul>\n</nav>\n";
	return $html;
}


/**
 * Create attributes for parallax divider.
 *
 * @param string $menu for the navigation bar.
 * @return string as the html for the menu.
 */
function parallax_builder($name, $levels, $offset, $startLevel = 0, $ref = 0, $bottoM) {
	$html = null;
	for ($i = 1; $i <= $levels-$startLevel; $i++) {
		$top = $i == 1 ? $ref : $ref + ($offset*($i-1));
		$bottom = $bottoM == 0 ? 0 : $ref-($offset*$i);

		$pl = $i + $startLevel;
		$l = sprintf('%02d', $pl);

		$html .= "<div id='pl-{$pl}' class='plzi-{$pl} pl svg-container'\n";
		$html .= "data-bottom-top='bottom: {$top}%;'";
		$html .= "data-top-bottom='bottom: {$bottom}%;'";
		$html .= "data-anchor-target='#{$name}-anchor'>\n";
		//$html .= "<img src='img/{$name}/{$name}_forest-l-{$l}.png'>\n";
		$html .= "</div>";
	}
	return $html;
}
?>