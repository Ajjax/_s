<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php
	echo "<h2>Bonjour ceci est une sidebar</h2>";
	?>
	<?php dynamic_sidebar( 'sidebar-1' );
	echo "<h1>Ceci est la fin du widget</h1>";
	 ?>
</aside><!-- #secondary -->

<div class="sidebar" style="width:25%">
  <h2>Menu</h2>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>