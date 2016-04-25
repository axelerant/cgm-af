<?php

// Output a single menu item
function projects_menu_entry($id, $title, $link_self)
{
    global $blog_id;
    if ($link_self || $id != $blog_id) {
        echo '<li>';
        if ($id == $blog_id) {
            echo '<strong>';
        }
        $url = get_home_url($id);
        if (substr($url, -1) != '/') {
            // Note: I added a "/" to the end of the URL because WordPress
            // wasn't doing that automatically in v3.0.4. YMMV.
            $url .= '/';
        }
        echo '<a href="' . $url . '">' . $title . '</a>';
        if ($id == $blog_id) {
            echo '</strong>';
        }
        echo '</li>';
    }
}

// Output the whole menu
// If $link_self is false, skip the current site - used to display the menu on the homepage
function projects_menu($link_self = true)
{
    global $wpdb;

    echo '<ul>';

    projects_menu_entry(1, 'Home', $link_self);

    $blogs = $wpdb->get_results("
        SELECT blog_id
        FROM {$wpdb->blogs}
        WHERE site_id = '{$wpdb->siteid}'
        AND spam = '0'
        AND deleted = '0'
        AND archived = '0'
        AND blog_id != 1
    ");

    $sites = array();
    foreach ($blogs as $blog) {
        $sites[$blog->blog_id] = get_blog_option($blog->blog_id, 'blogname');
    }

    natsort($sites);
    foreach ($sites as $blog_id => $blog_title) {
        projects_menu_entry($blog_id, $blog_title, $link_self);
    }
    echo '</ul>';
}

// Adds a [bloglist] shortcode, so I can embed the menu into the static homepage.
// Note: I originally put it directly into the template, but that didn't work
// with WPtouch.
function bloglist_shortcode($atts)
{
    projects_menu(false);
}

add_shortcode('bloglist', 'bloglist_shortcode');