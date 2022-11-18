<?php
/**
 * "Card" layout for Display Posts Shortcode
 *
 */

echo '<div class="aof-card" style="--thumbnail:url(' . get_the_post_thumbnail_url() . ')"><a class="title" href="' . get_permalink() . '">' . get_the_post_thumbnail() . '<span>' . get_the_title() . '</span></a></div>';
