<?php

function articely_render_category_list($atts)
{
    $productType = get_terms(['taxonomy' => 'product_type', 'hide_empty' => true]);
}
add_shortcode('CATEGORY_LIST', 'articely_render_category_list');
