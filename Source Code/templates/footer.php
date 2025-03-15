<?php
	//Tambahkan get_header() disini
	get_header();

	while (punya_kiriman()) {
		the_post(); ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
		<hr>

		<?php
			}
			//Tambahkan get_footer() anda disini, yaa...
			get_footer();
?>
