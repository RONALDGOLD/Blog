<?php get_header();?>
<?php while(have_post()){the_post();
	hte_title();
	echo"<hr>";

}?>

<?php get_footer();?>