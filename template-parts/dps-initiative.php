<?php
/**
 * "Card" layout for Display Posts Shortcode
 *
 */

echo '<div class="splide__slide">
<a href="' . get_permalink() . '">' . get_the_post_thumbnail() . '<h3 class="title">' . get_the_title() . '</h3></a>
<div class="excerpt">' . get_the_excerpt() . '</div>
</div>';