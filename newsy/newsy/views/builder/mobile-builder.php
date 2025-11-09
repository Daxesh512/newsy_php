<?php

$mobile_rows = newsy_get_option( 'builder_header_mobile' );

if ( empty( $mobile_rows['mobile'] ) ) {
	$mobile_rows = Newsy\Support\PartBuilderData::builder_header_mobile_defaults();
}

// render sticky elements
newsy_generate_bar( $mobile_rows['mobile'], 'mobile' );

unset( $mobile_rows );
