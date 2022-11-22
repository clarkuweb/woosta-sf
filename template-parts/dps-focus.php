<?php
/**
 * "Round" layout for Display Posts Shortcode
 *
 */

echo '<a href="' . get_permalink() . '" style="--thumbnail:url(' . get_the_post_thumbnail_url() . ')">
				<div class="disc">
					<div class="bg"></div>
					<img src="' . get_the_post_thumbnail_url() . '" alt="" />
				</div>
				<h2>' . get_the_title() . '</h2>
			</a>';