<?php

	/* Убираем тег <p></p> у отрывков */
	remove_filter( 'the_excerpt','wpautop');

	add_filter('wpcf7_autop_or_not', '__return_false');
