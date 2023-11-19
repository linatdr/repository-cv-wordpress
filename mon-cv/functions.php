<?php 
function create_custom_posts() {
    register_post_type('skills', [
        'labels'=> ['name'=>'skills'],
        'public'=> true,
        'show_in_rest'=> true
    ]);
}
add_action('init', 'create_custom_posts');