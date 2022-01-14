<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Naturopathe
*/

?>
</div>
<footer id="colophon" class="site-footer">
<div class="site-info">
<div id="f1" class="fwidgets">
<?php dynamic_sidebar('footer1'); ?>
</div>
<div id="f2" class="fwidgets">
<?php dynamic_sidebar('footer2'); ?>
</div>
<div id="f3" class="fwidgets">
<?php dynamic_sidebar('footer3'); ?>
</div>
<div id="f4" class="fwidgets">
<?php dynamic_sidebar('footer4'); ?>
</div>
<div style="clear:both;"></div>

<p id="copyright">Website developed by <a href="" target="_blank">Elsa</a></p>
</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>