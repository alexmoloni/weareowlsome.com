<section class="section section-1">
	<?php
	$projects = get_posts( [
		'post_type'        => 'project',
		'posts_per_page'   => - 1,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'fields'           => 'ids',
		'suppress_filters' => 0
	] );
	alexmoloniGrid1( [
		'extra_css'    => 'projects-wrap',
		'item_ids'     => $projects,
		'with_fade_in' => true
	] ); ?>
</section>