<?php

/**
 * Debug Function
 */
function aty__debug($data, $isDie = false)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    ($isDie) ? die("<br/><br/><hr/><--------------------------- Thats's It ------------------------>") : "";
}


function articely_get_recent_stories()
{
    $stories = get_posts(["numberofposts" => 5]);
    if (is_array($stories) && count($stories) > 0) :
        printf("<label>%s</label>", __("You May Also Read...", "articely"));
        foreach ($stories as $article) :
            $title = get_the_title($article->ID);
            $featuredImg = articely_post_thumbnail_url($article->ID);
            $link = get_the_permalink($article->ID);

            printf('<article class="aty__sidebar--story"> <a href="%s" title="%s"><span class="aty__small--image"><img src="%s" alt="%s"></span><label>%s</label></a></article>', esc_url($link), esc_attr($title), esc_url($featuredImg), esc_attr($title), esc_attr($title));

        endforeach;
    endif;
}
