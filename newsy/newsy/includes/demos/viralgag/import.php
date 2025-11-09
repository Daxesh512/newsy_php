<?php
$demo_id         = 'viralgag';
$demo_import_url = newsy_get_demo_media_url( $demo_id );
$demo_path       = NEWSY_THEME_PATH . 'includes/demos/' . $demo_id . '/';

$demo['plugin'] = array( 'newsy-elements', 'newsy-social-share', 'newsy-voting', 'newsy-reaction', 'newsy-social-counter', 'newsy-view-counter' );

$demo['media'] = array(
	array(
		'the_ID'       => 'ak-newsy-logo',
		'file'         => $demo_import_url . $demo_id . '-logo.png',
		'resize'       => false,
		'force_import' => true,
	),
	array(
		'the_ID'       => 'ak-newsy-logo2x',
		'file'         => $demo_import_url . $demo_id . '-logo@2x.png',
		'resize'       => false,
		'force_import' => true,
	),
	array(
		'the_ID'       => 'ak-newsy-logo-dark',
		'file'         => $demo_import_url . $demo_id . '-logo-dark.png',
		'resize'       => false,
		'force_import' => true,
	),
	array(
		'the_ID'       => 'ak-newsy-logo-dark2x',
		'file'         => $demo_import_url . $demo_id . '-logo-dark@2x.png',
		'resize'       => false,
		'force_import' => true,
	),
	array(
		'the_ID'       => 'ak-newsy-logo-mobile',
		'file'         => $demo_import_url . $demo_id . '-mobile-logo.png',
		'resize'       => false,
		'force_import' => true,
	),
	array(
		'the_ID' => 'ak-media-favicon',
		'file'   => $demo_import_url . 'favicon.png',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-animal-logo',
		'file'   => $demo_import_url . 'animal-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-anime-logo',
		'file'   => $demo_import_url . 'anime-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-awesome-logo',
		'file'   => $demo_import_url . 'awesome-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-car-logo',
		'file'   => $demo_import_url . 'car-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-comic-logo',
		'file'   => $demo_import_url . 'comic-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-country-logo',
		'file'   => $demo_import_url . 'country-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-crafts-logo',
		'file'   => $demo_import_url . 'crafts-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-food-logo',
		'file'   => $demo_import_url . 'food-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-funny-logo',
		'file'   => $demo_import_url . 'funny-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-gaming-logo',
		'file'   => $demo_import_url . 'gaming-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-gif-logo',
		'file'   => $demo_import_url . 'gif-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-girl-logo',
		'file'   => $demo_import_url . 'girl-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-horror-logo',
		'file'   => $demo_import_url . 'horror-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-movie-logo',
		'file'   => $demo_import_url . 'movie-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-politics-logo',
		'file'   => $demo_import_url . 'politics-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-savage-logo',
		'file'   => $demo_import_url . 'savage-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-satisfying-logo',
		'file'   => $demo_import_url . 'satisfying-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-school-logo',
		'file'   => $demo_import_url . 'school-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-sport-logo',
		'file'   => $demo_import_url . 'sport-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-sport-logo',
		'file'   => $demo_import_url . 'sport-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-video-logo',
		'file'   => $demo_import_url . 'video-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-tech-logo',
		'file'   => $demo_import_url . 'tech-logo.jpg',
		'resize' => false,
	),
	array(
		'the_ID' => 'ak-wtf-logo',
		'file'   => $demo_import_url . 'wtf-logo.jpg',
		'resize' => false,
	),
	// reactions
	array(
		'the_ID' => 'ak-media-reaction-angry',
		'file'   => $demo_import_url . 'reactions/angry.svg',
	),
	array(
		'the_ID' => 'ak-media-reaction-clap',
		'file'   => $demo_import_url . 'reactions/clap.svg',
	),
	array(
		'the_ID' => 'ak-media-reaction-approved',
		'file'   => $demo_import_url . 'reactions/approved.svg',
	),
	array(
		'the_ID' => 'ak-media-reaction-shocked',
		'file'   => $demo_import_url . 'reactions/shocked.svg',
	),
	array(
		'the_ID' => 'ak-media-reaction-unhappy',
		'file'   => $demo_import_url . 'reactions/unhappy.svg',
	),
	array(
		'the_ID' => 'ak-media-reaction-liked',
		'file'   => $demo_import_url . 'reactions/liked.svg',
	),
	array(
		'the_ID' => 'ak-media-reaction-hahaha',
		'file'   => $demo_import_url . 'reactions/hahaha.svg',
	),
	array(
		'the_ID'       => 'ak-ad-300X250',
		'file'         => $demo_import_url . 'ads/300X250.png',
		'resize'       => false,
		'force_import' => true,
	),
	array(
		'the_ID'       => 'ak-ad-300X600',
		'file'         => $demo_import_url . 'ads/300X600.png',
		'resize'       => false,
		'force_import' => true,
	),
	array(
		'the_ID'       => 'ak-ad-350X300',
		'file'         => $demo_import_url . 'ads/350X300.png',
		'resize'       => false,
		'force_import' => true,
	),
	array(
		'the_ID'       => 'ak-ad-728X90',
		'file'         => $demo_import_url . 'ads/728X90.png',
		'resize'       => false,
		'force_import' => true,
	),
	array(
		'the_ID'       => 'ak-ad-970X90',
		'file'         => $demo_import_url . 'ads/970X90.png',
		'resize'       => false,
		'force_import' => true,
	),
	array(
		'the_ID'       => 'ak-ad-970X150',
		'file'         => $demo_import_url . 'ads/970X150.png',
		'resize'       => false,
		'force_import' => true,
	),
	array(
		'the_ID'       => 'ak-ad-970X250',
		'file'         => $demo_import_url . 'ads/970X250.png',
		'resize'       => false,
		'force_import' => true,
	),
	array(
		'the_ID' => 'ak-media-1',
		'file'   => $demo_import_url . 'posts/post-1.jpg',
	),
	array(
		'the_ID' => 'ak-media-2',
		'file'   => $demo_import_url . 'posts/post-2.gif',
	),
	array(
		'the_ID' => 'ak-media-3',
		'file'   => $demo_import_url . 'posts/post-3.jpg',
	),
	array(
		'the_ID' => 'ak-media-4',
		'file'   => $demo_import_url . 'posts/post-4.jpg',
	),
	array(
		'the_ID' => 'ak-media-5',
		'file'   => $demo_import_url . 'posts/post-5.gif',
	),
	array(
		'the_ID' => 'ak-media-6',
		'file'   => $demo_import_url . 'posts/post-6.jpg',
	),
	array(
		'the_ID' => 'ak-media-7',
		'file'   => $demo_import_url . 'posts/post-7.jpg',
	),
	array(
		'the_ID' => 'ak-video-7',
		'file'   => $demo_import_url . 'posts/post-7-video.mp4',
	),
	array(
		'the_ID' => 'ak-media-8',
		'file'   => $demo_import_url . 'posts/post-8.jpg',
	),
	array(
		'the_ID' => 'ak-video-8',
		'file'   => $demo_import_url . 'posts/post-8-video.mp4',
	),
	array(
		'the_ID' => 'ak-media-9',
		'file'   => $demo_import_url . 'posts/post-9.jpg',
	),
	array(
		'the_ID' => 'ak-video-9',
		'file'   => $demo_import_url . 'posts/post-9-video.mp4',
	),
	array(
		'the_ID' => 'ak-media-10',
		'file'   => $demo_import_url . 'posts/post-10.jpg',
	),
	array(
		'the_ID' => 'ak-media-11',
		'file'   => $demo_import_url . 'posts/post-11.jpg',
	),
	array(
		'the_ID' => 'ak-media-12',
		'file'   => $demo_import_url . 'posts/post-12.jpg',
	),
	array(
		'the_ID' => 'ak-media-13',
		'file'   => $demo_import_url . 'posts/post-13.jpg',
	),
	array(
		'the_ID' => 'ak-media-14',
		'file'   => $demo_import_url . 'posts/post-14.jpg',
	),
	array(
		'the_ID' => 'ak-media-15',
		'file'   => $demo_import_url . 'posts/post-15.jpg',
	),
	array(
		'the_ID' => 'ak-media-16',
		'file'   => $demo_import_url . 'posts/post-16.jpg',
	),
	array(
		'the_ID' => 'ak-media-17',
		'file'   => $demo_import_url . 'posts/post-17.jpg',
	),
	array(
		'the_ID' => 'ak-media-18',
		'file'   => $demo_import_url . 'posts/post-18.jpg',
	),
	array(
		'the_ID' => 'ak-media-19',
		'file'   => $demo_import_url . 'posts/post-19.jpg',
	),
	array(
		'the_ID' => 'ak-media-20',
		'file'   => $demo_import_url . 'posts/post-20.jpg',
	),
	array(
		'the_ID' => 'ak-media-21',
		'file'   => $demo_import_url . 'posts/post-21.jpg',
	),
	array(
		'the_ID' => 'ak-media-22',
		'file'   => $demo_import_url . 'posts/post-22.jpg',
	),
	array(
		'the_ID' => 'ak-media-23',
		'file'   => $demo_import_url . 'posts/post-23.jpg',
	),
	array(
		'the_ID' => 'ak-media-24',
		'file'   => $demo_import_url . 'posts/post-24.jpg',
	),
	array(
		'the_ID' => 'ak-media-25',
		'file'   => $demo_import_url . 'posts/post-25.jpg',
	),
	array(
		'the_ID' => 'ak-media-26',
		'file'   => $demo_import_url . 'posts/post-26.jpg',
	),
	array(
		'the_ID' => 'ak-media-27',
		'file'   => $demo_import_url . 'posts/post-27.jpg',
	),
	array(
		'the_ID' => 'ak-media-28',
		'file'   => $demo_import_url . 'posts/post-28.jpg',
	),
	array(
		'the_ID' => 'ak-media-29',
		'file'   => $demo_import_url . 'posts/post-29.jpg',
	),
	array(
		'the_ID' => 'ak-media-30',
		'file'   => $demo_import_url . 'posts/post-30.jpg',
	),
	array(
		'the_ID' => 'ak-media-31',
		'file'   => $demo_import_url . 'posts/post-31.jpg',
	),

	array(
		'the_ID' => 'ak-media-32',
		'file'   => $demo_import_url . 'posts/post-32.jpg',
	),
	array(
		'the_ID' => 'ak-media-33',
		'file'   => $demo_import_url . 'posts/post-33.jpg',
	),

	array(
		'the_ID' => 'ak-media-34',
		'file'   => $demo_import_url . 'posts/post-34.jpg',
	),
	array(
		'the_ID' => 'ak-media-35',
		'file'   => $demo_import_url . 'posts/post-35.jpg',
	),
	array(
		'the_ID' => 'ak-media-36',
		'file'   => $demo_import_url . 'posts/post-36.jpg',
	),
	array(
		'the_ID' => 'ak-media-37',
		'file'   => $demo_import_url . 'posts/post-37.jpg',
	),
	array(
		'the_ID' => 'ak-media-38',
		'file'   => $demo_import_url . 'posts/post-38.jpg',
	),
	array(
		'the_ID' => 'ak-media-39',
		'file'   => $demo_import_url . 'posts/post-39.jpg',
	),
	array(
		'the_ID' => 'ak-media-40',
		'file'   => $demo_import_url . 'posts/post-40.jpg',
	),
	array(
		'the_ID' => 'ak-media-41',
		'file'   => $demo_import_url . 'posts/post-41.jpg',
	),
	array(
		'the_ID' => 'ak-media-42',
		'file'   => $demo_import_url . 'posts/post-42.jpg',
	),
	array(
		'the_ID' => 'ak-media-43',
		'file'   => $demo_import_url . 'posts/post-43.jpg',
	),
	array(
		'the_ID' => 'ak-media-44',
		'file'   => $demo_import_url . 'posts/post-44.jpg',
	),

	array(
		'the_ID' => 'ak-media-45',
		'file'   => $demo_import_url . 'posts/post-45.jpg',
	),
	array(
		'the_ID' => 'ak-media-46',
		'file'   => $demo_import_url . 'posts/post-46.jpg',
	),
	array(
		'the_ID' => 'ak-media-47',
		'file'   => $demo_import_url . 'posts/post-47.jpg',
	),
	array(
		'the_ID' => 'ak-media-48',
		'file'   => $demo_import_url . 'posts/post-48.jpg',
	),
	array(
		'the_ID' => 'ak-media-49',
		'file'   => $demo_import_url . 'posts/post-49.jpg',
	),
	array(
		'the_ID' => 'ak-media-50',
		'file'   => $demo_import_url . 'posts/post-50.jpg',
	),
	array(
		'the_ID' => 'ak-media-51',
		'file'   => $demo_import_url . 'posts/post-51.jpg',
	),
	array(
		'the_ID' => 'ak-media-52',
		'file'   => $demo_import_url . 'posts/post-52.jpg',
	),
	array(
		'the_ID' => 'ak-media-53',
		'file'   => $demo_import_url . 'posts/post-53.jpg',
	),
	array(
		'the_ID' => 'ak-media-54',
		'file'   => $demo_import_url . 'posts/post-54.jpg',
	),
	array(
		'the_ID' => 'ak-media-55',
		'file'   => $demo_import_url . 'posts/post-55.jpg',
	),
	array(
		'the_ID' => 'ak-media-56',
		'file'   => $demo_import_url . 'posts/post-56.jpg',
	),
	array(
		'the_ID' => 'ak-media-57',
		'file'   => $demo_import_url . 'posts/post-57.jpg',
	),
	array(
		'the_ID' => 'ak-media-58',
		'file'   => $demo_import_url . 'posts/post-58.jpg',
	),
	array(
		'the_ID' => 'ak-media-59',
		'file'   => $demo_import_url . 'posts/post-59.jpg',
	),
	array(
		'the_ID' => 'ak-media-60',
		'file'   => $demo_import_url . 'posts/post-60.jpg',
	),
);

$demo['taxonomy'] = array(
	array(
		'the_ID'        => 'ak-featured-posts',
		'name'          => 'Featured',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(),
	),
	array(
		'the_ID'        => 'ak-animals',
		'name'          => 'Animals',
		'description'   => 'It\'s so fluffy I\'m gonna die!',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-animal-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-anime',
		'name'          => 'Anime & Manga',
		'description'   => 'Embrace your inner weeb!',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-anime-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-awesome',
		'name'          => 'Awesome',
		'description'   => 'Things that make you WOW',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-awesome-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-car',
		'name'          => 'Car',
		'description'   => 'Vroom vroom!',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-car-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-comic',
		'name'          => 'Comic',
		'description'   => 'Home of web comics',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-comic-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-country',
		'name'          => 'Country',
		'description'   => 'Around the world in a section',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-country-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-crafts',
		'name'          => 'Crafts',
		'description'   => 'What we love to do in free time',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-crafts-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-food',
		'name'          => 'Food',
		'description'   => 'Crazy foodies',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-food-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-funny',
		'name'          => 'Funny',
		'description'   => 'Why so serious',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-funny-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-gaming',
		'name'          => 'Gaming',
		'description'   => 'We don\'t die, we respawn!',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-gaming-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-gif',
		'name'          => 'GIF',
		'description'   => 'We don\'t die, we respawn!',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-gif-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-girl',
		'name'          => 'Girl',
		'description'   => 'Eye candies',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-girl-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-horror',
		'name'          => 'Horror',
		'description'   => 'Fear to the limit of fun',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-horror-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-movie',
		'name'          => 'Movie & TV',
		'description'   => 'A way to escape from real world',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-movie-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-politics',
		'name'          => 'Politics',
		'description'   => 'Political jokes. Deep or derp.',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-politics-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-satisfying',
		'name'          => 'Satisfying',
		'description'   => 'Your daily eyegasm',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-satisfying-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-savage',
		'name'          => 'Savage',
		'description'   => 'Apply cold water to burnt area',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-savage-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-school',
		'name'          => 'School',
		'description'   => 'Survival guide for students',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-school-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-sport',
		'name'          => 'Sport',
		'description'   => 'The sports fanatics hub',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-sport-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-tech',
		'name'          => 'Sci-Tech',
		'description'   => 'Scientards fun land',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-tech-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-video',
		'name'          => 'Video',
		'description'   => 'Hottest clips you should never miss',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-video-logo%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-wtf',
		'name'          => 'WTF',
		'description'   => 'Jaw-dropping moments',
		'taxonomy'      => 'category',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_header_custom_logo',
				'value' => '%attachment_url%ak-wtf-logo%attachment_url%',
			),
		),
	),
	// reactions
	array(
		'the_ID'        => 'ak-reaction-angry',
		'name'          => 'Angry',
		'taxonomy'      => 'reaction',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_badge_type',
				'value' => 'icon',
			),
			array(
				'key'   => 'term_badge_icon',
				'value' => '%attachment_url%ak-media-reaction-angry%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-reaction-clap',
		'name'          => 'Clap',
		'taxonomy'      => 'reaction',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_badge_type',
				'value' => 'icon',
			),
			array(
				'key'   => 'term_badge_icon',
				'value' => '%attachment_url%ak-media-reaction-clap%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-reaction-approved',
		'name'          => 'Approved',
		'taxonomy'      => 'reaction',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_badge_type',
				'value' => 'icon',
			),
			array(
				'key'   => 'term_badge_icon',
				'value' => '%attachment_url%ak-media-reaction-approved%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-reaction-shocked',
		'name'          => 'Shocked',
		'taxonomy'      => 'reaction',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_badge_type',
				'value' => 'icon',
			),
			array(
				'key'   => 'term_badge_icon',
				'value' => '%attachment_url%ak-media-reaction-shocked%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-reaction-unhappy',
		'name'          => 'Unhappy',
		'taxonomy'      => 'reaction',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_badge_type',
				'value' => 'icon',
			),
			array(
				'key'   => 'term_badge_icon',
				'value' => '%attachment_url%ak-media-reaction-unhappy%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-reaction-liked',
		'name'          => 'Liked',
		'taxonomy'      => 'reaction',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_badge_type',
				'value' => 'icon',
			),
			array(
				'key'   => 'term_badge_icon',
				'value' => '%attachment_url%ak-media-reaction-liked%attachment_url%',
			),
		),
	),
	array(
		'the_ID'        => 'ak-reaction-hahaha',
		'name'          => 'Hahaha',
		'taxonomy'      => 'reaction',
		'taxonomy_meta' => array(
			array(
				'key'   => 'term_badge_type',
				'value' => 'icon',
			),
			array(
				'key'   => 'term_badge_icon',
				'value' => '%attachment_url%ak-media-reaction-hahaha%attachment_url%',
			),
		),
	),
);

$demo['post'] = array(
	array(
		'the_ID'            => 'ak-post-1',
		'post_title'        => '45 Ridiculous, Sneaky Ways Brands Have Fooled Consumers',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-1%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-movie%%,%%ak-funny%%,%%ak-tech%%,%%ak-savage%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-2',
		'post_title'        => '35 People Who Are Too Far Gone to Help',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-2%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-anime%%,%%ak-tech%%',
		),
		'post_meta'         => array(
			array(
				'key'   => 'post_primary_category',
				'value' => '%%ak-featured%%',
			),
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-3',
		'post_title'        => '19 Facts That Will Absolutely Demolish Everything You Thought You Knew',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-3%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-anime%%,%%ak-comic%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-4',
		'post_title'        => '19 Brilliant Summer Travel Hacks You Need to Know Before You Jet Off on Vacation',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-4%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-satisfying%%,%%ak-savage%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-5',
		'post_title'        => '19 Baby Gender Reveals That Are Actually Pretty Amazing',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-5%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%',
		),
		'post_meta'         => array(
			array(
				'key'   => 'post_primary_category',
				'value' => '%%ak-featured%%',
			),
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-6',
		'post_title'        => '19 Life-Saving Tips That Everyone Should Know',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-6%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-satisfying%%,%%ak-anime%%',
		),
		'post_meta'         => array(
			array(
				'key'   => 'post_primary_category',
				'value' => '%%ak-quiz%%',
			),
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-7',
		'post_title'        => '19 of the Most Hilarious Parenting Tweets You\'ll Ever Read',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-7%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-video%%,%%ak-savage%%',
		),
		'post_format'       => 'video',
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'upload',
					'mp4'  => '%attachment_url%ak-video-7%attachment_url%',
					'gif'  => 'yes',
					'time' => '0:11',
				),
			),
			array(
				'key'   => 'post_views_count',
				'value' => '2375',
			),
			array(
				'key'   => 'post_view_7days_last_day',
				'value' => '2375',
			),
		),
	),
	array(
		'the_ID'            => 'ak-post-8',
		'post_title'        => '20 People Who Posted \'Missed Connections\' and Actually Heard Back',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-8%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-food%%,%%ak-anime%%,%%ak-video%%,%%ak-savage%%',
		),
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'upload',
					'mp4'  => '%attachment_url%ak-video-8%attachment_url%',
					'gif'  => 'yes',
					'time' => '0:11',
				),
			),
		),
		'post_format'       => 'video',
	),
	array(
		'the_ID'            => 'ak-post-9',
		'post_title'        => '19 Notes from Kids Who Might be Psychopaths',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-9%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-satisfying%%,%%ak-comic%%,%%ak-video%%',
		),
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'upload',
					'mp4'  => '%attachment_url%ak-video-9%attachment_url%',
					'time' => '0:11',
				),
			),
		),
		'post_format'       => 'video',
	),
	array(
		'the_ID'            => 'ak-post-10',
		'post_title'        => '15 People Share the Dumbest Arguments They\'ve Ever Been a Part Of',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-10%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-11',
		'post_title'        => '35 Jokes You\'ll Only Get if You\'re a Woman',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-11%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-anime%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-12',
		'post_title'        => '20 GIFs of Animals That Will Put a Smile on Your Face',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-12%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-food%%,%%ak-comic%%,%%ak-anime%%',
		),
		'post_meta'         => array(
			array(
				'key'   => 'post_primary_category',
				'value' => '%%ak-quiz%%',
			),
			array(
				'key'   => 'post_views_count',
				'value' => '152',
			),
			array(
				'key'   => 'post_view_7days_last_day',
				'value' => '125',
			),
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-13',
		'post_title'        => '19 DIY Book Projects That Will Make You Scream “WHY!”',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-13%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-satisfying%%,%%ak-savage%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-14',
		'post_title'        => 'Just 19 Cat Pictures Because You Need Them Right Now',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-14%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-anime%%,%%ak-politics%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-15',
		'post_title'        => '19 People Confess the Most Embarrassing Things They\'ve Ever Done',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-15%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-satisfying%%,%%ak-politics%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-16',
		'post_title'        => '19 People Share Their the Weirdest Moments in Job Interviews',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-16%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-comic%%,%%ak-food%%,%%ak-anime%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-17',
		'post_title'        => '25 Things a Child Can Be Trusted With That Adults Totally Can\'t',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-17%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-savage%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-18',
		'post_title'        => '19 Brilliant Hacks for Your Next Family Camping Trip',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-18%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-politics%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-19',
		'post_title'        => '19 Strange, Subconscious Things Every Human Does Without Realizing It',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-19%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-satisfying%%,%%ak-anime%%,%%ak-savage%%',
		),
		'post_meta'         => array(
			array(
				'key'   => 'post_primary_category',
				'value' => '%%ak-featured%%',
			),
			array(
				'key'   => 'post_views_count',
				'value' => '1375',
			),
			array(
				'key'   => 'post_view_7days_last_day',
				'value' => '1375',
			),
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-20',
		'post_title'        => '19 Ridiculous Animal Memes That Prove We\'re the Lesser Species Once and for All',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-20%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-comic%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-21',
		'post_title'        => '19 Brilliant Money Tips That Will Have You Saving Cash in No Time',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-21%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%',
		),
		'post_meta'         => array(
			array(
				'key'   => 'post_primary_category',
				'value' => '%%ak-featured%%',
			),
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-22',
		'post_title'        => '15 Classic Princess Fairytales That Are Way More Hardcore Than Their Disney Counterparts',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-22%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-satisfying%%,%%ak-anime%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-23',
		'post_title'        => '19 Brilliant Tweets That Prove Women Are the Funniest of the Sexes',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-23%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-food%%,%%ak-comic%%,%%ak-politics%%',
		),
		'post_meta'         => array(
			array(
				'key'   => 'post_primary_category',
				'value' => '%%ak-quiz%%',
			),
			array(
				'key'   => 'post_views_count',
				'value' => '875',
			),
			array(
				'key'   => 'post_view_7days_last_day',
				'value' => '875',
			),
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-24',
		'post_title'        => '19 People Who Are Honestly Using the Internet All Wrong',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-24%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-satisfying%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-25',
		'post_title'        => 'The 30 Best Ways to Travel for Cheap This Summer',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-25%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-food%%,%%ak-comic%%,%%ak-anime%%,%%ak-politics%%',
		),
		'post_meta'         => array(
			array(
				'key'   => 'post_primary_category',
				'value' => '%%ak-featured%%',
			),
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-26',
		'post_title'        => '19 Times Teens Were Beyond Extra on Social Media',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-26%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-27',
		'post_title'        => '25 Photos of Incredible Places You\'ll Want to Visit ASAP',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-27%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-28',
		'post_title'        => 'We Found the 20 Best GIFs on the Whole Internet',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-28%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-satisfying%%,%%ak-politics%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-29',
		'post_title'        => '20 Ridiculously Funny Memes That Are Almost Too Spot On',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-29%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-food%%,%%ak-anime%%',
		),
		'post_format'       => 'post',
		'post_meta'         => array(
			array(
				'key'   => 'post_views_count',
				'value' => '375',
			),
			array(
				'key'   => 'post_view_7days_last_day',
				'value' => '375',
			),
		),
	),
	array(
		'the_ID'            => 'ak-post-30',
		'post_title'        => '19 Times Women Were Total Bosses While Lifting Each Other Up',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-30%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-comic%%,%%ak-politics%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-31',
		'post_title'        => '19 Weird Pictures That Will Make You Giggle Despite Your Best Intentions',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-31%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-satisfying%%,%%ak-food%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-32',
		'post_title'        => 'We Found the 19 Most Inaccurate Things You Always See in Movies',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-32%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-33',
		'post_title'        => 'We\'re Obsessed With the Man Who Photoshopped Himself Into 25 Movie Posters',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-33%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-comic%%,%%ak-anime%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-34',
		'post_title'        => '20 Amazing Pictures of Plate Art Made With Real Food',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-34%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-satisfying%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-35',
		'post_title'        => '20 Funny Things Teens Always Do in TV But Never in Real Life',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-35%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-satisfying%%,%%ak-anime%%',
		),
		'post_meta'         => array(
			array(
				'key'   => 'post_primary_category',
				'value' => '%%ak-featured%%',
			),
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-36',
		'post_title'        => '19 Dumb Things People Have Done That Made Them Question Their Own Intelligence',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-36%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-food%%,%%ak-comic%%,%%ak-politics%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-37',
		'post_title'        => '20 Mind-Bending Realities That Will Shake \'90s Kids to Their Cores',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-37%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-anime%%',
		),
		'post_format'       => 'post',
	),
	// update below
	array(
		'the_ID'            => 'ak-post-38',
		'post_title'        => '\'Hangry\' is officially a word in the Oxford English Dictionary',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-38%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-satisfying%%,%%ak-comic%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-39',
		'post_title'        => 'Salt Bae to open burger chain in LA and NYC: \'It won\'t just be for the wealthy\'',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-39%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-politics%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-40',
		'post_title'        => 'Science or silence? My battle to question doomsayers about the Great Barrier Reef',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-40%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-41',
		'post_title'        => 'SpaceX Falcon Heavy rocket launches successfully',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-41%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-food%%,%%ak-comic%%,%%ak-video%%',
		),
		'post_format'       => 'video',
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'url',
					'url'  => 'https://www.youtube.com/watch?v=sX1Y2JMK6g8',
					'time' => '02:22',
				),
			),

		),
	),
	array(
		'the_ID'            => 'ak-post-42',
		'post_title'        => 'Weird: Naked mole rats don\'t die of old age',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-42%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-satisfying%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-43',
		'post_title'        => 'Egyptian archaeologists discover 4,400-year-old tomb near Cairo',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-43%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-comic%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-44',
		'post_title'        => 'Get set for Super Mario movie: Nintendo fans go nuts',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-44%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-45',
		'post_title'        => '\'Big Bang Theory\' star Jim Parsons joins serial killer biopic about Ted Bundy',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-45%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-food%%,%%ak-comic%%,%%ak-anime%%,%%ak-video%%',
		),
		'post_format'       => 'video',
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'url',
					'url'  => 'https://www.youtube.com/watch?v=P9vQGH2v098',
					'time' => '12:22',
				),
			),
			array(
				'key'   => 'post_views_count',
				'value' => '47',
			),
			array(
				'key'   => 'post_view_7days_last_day',
				'value' => '47',
			),
		),
	),
	array(
		'the_ID'            => 'ak-post-46',
		'post_title'        => '\'Wonder Woman 2\' director teases what you definitely won\'t see in the sequel',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-46%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-satisfying%%,%%ak-food%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-47',
		'post_title'        => '\'Last Jedi\' fans furious after theater\'s audio malfunction',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-47%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-anime%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-49',
		'post_title'        => 'Swimsuit company makes bikinis from garbage',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-49%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-food%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-50',
		'post_title'        => 'Barca win can kick-start crucial run for Madrid, reveals Bale',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-50%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-satisfying%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-51',
		'post_title'        => 'Is cheerleading a sport or an activity?',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-51%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-anime%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-52',
		'post_title'        => 'Trump\'s fight to open access to experimental drugs',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-52%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-video%%',
		),
		'post_format'       => 'video',
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'url',
					'url'  => 'https://www.youtube.com/watch?v=mhLZ8JqcpRI',
					'time' => '12:30',
				),
			),
		),
	),
	array(
		'the_ID'            => 'ak-post-53',
		'post_title'        => 'Uber Co-Founder And CEO Travis Kalanick Resigns Due To Intense ',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-53%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-food%%,%%ak-comic%%,%%ak-video%%',
		),
		'post_format'       => 'video',
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'url',
					'url'  => 'https://www.youtube.com/watch?v=Fgmt38uiH8A',
					'time' => '02:30',
				),
			),
		),
	),
	array(
		'the_ID'            => 'ak-post-54',
		'post_title'        => 'The Most Ridiculous Ads for Fall Television',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-54%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-satisfying%%,%%ak-video%%',
		),
		'post_format'       => 'video',
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'url',
					'url'  => 'https://www.youtube.com/watch?v=mhLZ8JqcpRI',
					'time' => '00:30',
				),
			),
		),
	),
	array(
		'the_ID'            => 'ak-post-55',
		'post_title'        => 'Did Pink Just Throw Shade at Kim Kardashian?',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-55%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-anime%%,%%ak-video%%',
		),
		'post_format'       => 'video',
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'url',
					'url'  => 'https://www.youtube.com/watch?v=mhLZ8JqcpRI',
					'time' => '01:00',
				),
			),
			array(
				'key'   => 'post_views_count',
				'value' => '255',
			),
			array(
				'key'   => 'post_view_7days_last_day',
				'value' => '255',
			),
		),
	),
	array(
		'the_ID'            => 'ak-post-56',
		'post_title'        => 'Watch Awesome Kate Middleton Go Skiing',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-56%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-food%%,%%ak-video%%',
		),
		'post_format'       => 'video',
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'url',
					'url'  => 'https://www.youtube.com/watch?v=mhLZ8JqcpRI',
					'time' => '01:22',
				),
			),
		),
	),
	array(
		'the_ID'            => 'ak-post-57',
		'post_title'        => 'The Most Ridiculous Ads for Fall Television',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-57%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-comic%%,%%ak-video%%',
		),
		'post_format'       => 'video',
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'url',
					'url'  => 'https://www.youtube.com/watch?v=mhLZ8JqcpRI',
					'time' => '55:11',
				),
			),
		),
	),
	array(
		'the_ID'            => 'ak-post-58',
		'post_title'        => 'Justin Bieber Wants to Get Another Monkey',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-58%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-satisfying%%',
		),
		'post_format'       => 'post',
	),
	array(
		'the_ID'            => 'ak-post-59',
		'post_title'        => 'Would You Rather • New Year’s Edition            ',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-59%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-food%%,%%ak-anime%%,%%ak-video%%',
		),
		'post_format'       => 'video',
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'url',
					'url'  => 'https://www.youtube.com/watch?v=hKETTfMdvQc',
					'time' => '27:22',
				),
			),

		),
	),
	array(
		'the_ID'            => 'ak-post-60',
		'post_title'        => '19 Jokes Millennials Won\'t Know Whether To Laugh Or Cry At',
		'post_excerpt_file' => $demo_path . 'pages/post-excerpt-1.txt',
		'post_content_file' => $demo_path . 'pages/post-content-1.txt',
		'thumbnail_id'      => '%%ak-media-60%%',
		'post_terms'        => array(
			'category' => '%%ak-awesome%%,%%ak-funny%%,%%ak-food%%,%%ak-video%%',
		),
		'post_format'       => 'video',
		'post_meta'         => array(
			array(
				'key'   => 'featured_video',
				'value' => array(
					'type' => 'url',
					'url'  => 'https://www.youtube.com/watch?v=mhLZ8JqcpRI',
					'time' => '07:22',
				),
			),
		),
	),
	array(
		'the_ID'            => 'ak-trending-page',
		'post_title'        => 'Trending',
		'post_content_file' => $demo_path . 'pages/trending.txt',
		'post_type'         => 'page',
		'prepare_vc_css'    => true,
		'force_import'      => true,
	),
	array(
		'the_ID'            => 'ak-hot-page',
		'post_title'        => 'Hot',
		'post_content_file' => $demo_path . 'pages/hot.txt',
		'post_type'         => 'page',
		'prepare_vc_css'    => true,
		'force_import'      => true,
	),
	array(
		'the_ID'            => 'ak-popular-page',
		'post_title'        => 'Explore',
		'post_content_file' => $demo_path . 'pages/popular.txt',
		'post_type'         => 'page',
		'prepare_vc_css'    => true,
		'force_import'      => true,
	),
);

$demo['menu'] = array(
	array(
		'the_ID'   => 'ak-main-menu',
		'name'     => 'Main Navigation',
		'location' => 'main-menu',
		'items'    => array(
			array(
				'item_type' => 'custom',
				'title'     => 'Just In',
				'url'       => home_url(),
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => 'akfi-flash_on',
					),
				),
			),
			array(
				'item_id'   => '%%ak-popular-page%%',
				'item_type' => 'post',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => 'akfi-fire',
					),
				),
			),
			array(
				'item_id'   => '%%ak-trending-page%%',
				'item_type' => 'post',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => 'akfi-trending_up',
					),
				),
			),
			array(
				'item_id'   => '%%ak-hot-page%%',
				'item_type' => 'post',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => 'akfi-alarm',
					),
				),
			),
		),
	),
	array(
		'the_ID'   => 'ak-mobile-menu',
		'name'     => 'Mobile Navigation',
		'location' => 'mobile-menu',
		'items'    => array(
			array(
				'item_id'   => '%%ak-animals%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-animal-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-anime%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-anime-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-awesome%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-awesome-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-car%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-car-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-comic%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-comic-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-country%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-country-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-crafts%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-crafts-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-food%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-food-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-funny%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-funny-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-gaming%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-gaming-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-gif%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-gif-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-girl%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-girl-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-horror%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-horror-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-movie%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-movie-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-politics%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-politics-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-satisfying%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-satisfying-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-savage%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-savage-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-sport%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-sport-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-tech%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-tech-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-video%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-video-logo%attachment_url%',
					),
				),
			),
			array(
				'item_id'   => '%%ak-wtf%%',
				'item_type' => 'taxonomy',
				'taxonomy'  => 'category',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => '%attachment_url%ak-wtf-logo%attachment_url%',
					),
				),
			),
		),
	),
	array(
		'the_ID'   => 'ak-top-menu',
		'name'     => 'Top Navigation',
		'location' => 'top-menu',
		'items'    => array(
			array(
				'item_type' => 'custom',
				'title'     => 'Just In',
				'url'       => home_url(),
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => 'fa-rocket',
					),
				),
			),
			array(
				'item_id'   => '%%ak-popular-page%%',
				'item_type' => 'post',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => 'akfi-fire',
					),
				),
			),
			array(
				'item_id'   => '%%ak-trending-page%%',
				'item_type' => 'post',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => 'akfi-trending_up',
					),
				),
			),
			array(
				'item_id'   => '%%ak-hot-page%%',
				'item_type' => 'post',
				'item_meta' => array(
					array(
						'key'   => 'menu_icon',
						'value' => 'akfi-alarm',
					),
				),
			),

		),
	),
	array(
		'the_ID'        => 'ak-footer-menu',
		'name'          => 'Footer Navigation',
		'location'      => 'footer-menu',
		'recently-edit' => true,
		'items'         => array(
			array(
				'item_type' => 'custom',
				'title'     => 'Buy Now',
				'url'       => 'https://themeforest.net/item/newsy-viral-news-magazine-wordpress-theme/34626838&ref=akbilisim',
				'item_meta' => array(),
			),
			array(
				'item_type' => 'custom',
				'title'     => 'Documentation',
				'url'       => 'https://support.akbilisim.com/docs/newsy/introduction',
				'item_meta' => array(),
			),
			array(
				'item_type' => 'custom',
				'title'     => 'Support Center',
				'url'       => 'https://support.akbilisim.com/',
				'item_meta' => array(),
			),
			array(
				'item_type' => 'custom',
				'title'     => 'Contact Us',
				'url'       => 'https://themeforest.net/user/akbilisim?ref=akbilisim',
				'item_meta' => array(),
			),
		),
	),
);

$demo['widget'] = array(
	array(
		'the_ID'  => 'ak-widget-ad',
		'widget'  => 'newsy_ad',
		'sidebar' => 'primary-sidebar',
		'options' => array(
			'type'  => 'image',
			'image' => '%%ak-ad-300X250%%',
		),
	),
	array(
		'the_ID'  => 'ak-widget-trending',
		'widget'  => 'newsy_list_2_wide',
		'sidebar' => 'primary-sidebar',
		'options' => array(
			'count'               => '10',
			'order_by'            => 'popular_week',
			'block_extra_classes' => 'ak-block-module-inner-boxed',
			'item_margin'         => '15',
			'numeric_items_style' => 'style-7',
		),
	),
	array(
		'the_ID'  => 'ak-widget-popular-menu',
		'widget'  => 'newsy_nav_menu',
		'sidebar' => 'secondary-sidebar',
		'options' => array(
			'title'              => 'POPULAR',
			'menu'               => '%%ak-top-menu%%',
			'header_style'       => 'style-11',
			'header_title_color' => '#999999',
		),
	),
	array(
		'the_ID'  => 'ak-widget-section-menu',
		'widget'  => 'newsy_nav_menu',
		'sidebar' => 'secondary-sidebar',
		'options' => array(
			'title'              => 'SECTIONS',
			'menu'               => '%%ak-mobile-menu%%',
			'header_style'       => 'style-11',
			'header_title_color' => '#999999',
		),
	),
);

$demo['option'] = array(
	array(
		'the_ID'            => 'ak-newsy-options',
		'type'              => 'option',
		'option_name'       => NEWSY_THEME_OPTIONS,
		'option_value_file' => $demo_path . 'options.json',
		'prepare_css'       => true,
	),
	array(
		'the_ID'       => 'ak-current-theme',
		'type'         => 'option',
		'option_name'  => 'newsy_current_theme_style',
		'option_value' => $demo_id,
	),
	array(
		'the_ID'       => 'ak-site-icon',
		'type'         => 'wp_option',
		'option_name'  => 'site_icon',
		'option_value' => '%%ak-media-favicon%%',
	),
	array(
		'the_ID'       => 'ak-posts_per_page',
		'type'         => 'wp_option',
		'option_name'  => 'posts_per_page',
		'option_value' => '10',
		'remove_off'   => true,
	),
	array(
		'the_ID'       => 'ak-users_can_register',
		'type'         => 'wp_option',
		'option_name'  => 'users_can_register',
		'option_value' => true,
		'remove_off'   => true,
	),
);
