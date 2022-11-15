<?php
/**
 * "Round" layout for Display Posts Shortcode
 *
 */

echo '<li class="round"><div><a class="title" href="' . get_permalink() . '" style="--thumbnail:url(' . get_the_post_thumbnail_url() . ')">' . get_the_title() . '</a></div></li>';
