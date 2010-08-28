<?php

    add_action( 'init', 'sfn_events_custom_post_type');

    function sfn_events_custom_post_type() {
        
        register_post_type('event', 
            
            array(

                'labels'                => array(
                    'name'                  => __('Events'),
                    'singular_name'         => __('Event'),
                    'add_new'               => __('Add New'),
                    'add_new_item'          => __('Add New Event'),
                    'edit'                  => __('Edit'),
                    'edit_item'             => __('Edit Event'),
                    'new_item'              => __('New Event'),
                    'view'                  => __('View Events'),
                    'view_item'             => __('View Event'),
                    'search_items'          => __('Search Events'),
                    'not_found'             => __('No Events Found'),
                    'not_found_in_trash'    => __('No Events found in Trash'),
                     ), // end labels array
               'description'            => __('Your Events'),
               'public'                 => true,
               'menu_position'          => 5,
               //menu_icon              => need to add this later,
               'hierarchical'           => false, // functions like posts
               'supports'               => array('title', 'editor', 'revisions', 'excerpt', 'thumbnail'),
               'can_export'             => true, 
            ), // end register post type array

        ); // end register_post_type

    } // end sfn_events_custom_post_type

    // adding custom taxonomies
    add_action( 'init', 'sfn_events_custom_taxonomy');

    function sfn_events_custom_taxonomy(){
        register_taxonomy('event_location', array('event'), array(
            'labels'             => array(
                'name'                  => __('Event Location'),
                'singular_name'         => __('Event Location'),
                'search_items'          => __('Search Event Locations'),
                'popular_items'         => __('Popular Event Locations'),
                'all_items'             => __('All Event Locations'),
                'edit_item'             => __('Edit Event Locations'),
                'update_item'           => __('Update Event Locations'),
                'add_new_item'          => __('Add New Event Location'),
                'new_item_name'         => __('New Event Location'),
                ), // end labels array
            'public'            => true,
            'hierarchical'      => true, //acts like categories
            'rewrite'           => true,
            ), // end options array 
        ); // end register_taxonomy
        
        /*  todo:
        *   any other taxonomies would go here
        *   
        *   What other ones do I need? Probably should make them optional.
        *   Music venue would need: genre, related artists, price
        *   Club would need:        price, organizer, contact    
        *
        */
         
    } // end sfn_events_custom_taxonomy

?>
