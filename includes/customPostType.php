<?php


function domi_facts_cpt() {
    register_post_type('domi_facts_cpt',
        array(
            'labels'      => array(
                'name'               => _x('Fact', 'General name', 'wptheme.smartfarming'),
                'singular_name'      => _x('Fact', 'Singular name', 'wptheme.smartfarming'),
                'menu_name'          => _x('Fact', 'Menu name', 'wptheme.smartfarming'),
                'parent_item_colon'  => _x('Übergeordneter Fact', 'Parent item with colon', 'wptheme.smartfarming'),
                'all_items'          => _x('Alle Facts anzeigen', 'All items', 'wptheme.smartfarming'),
                'view_item'          => _x('Fact anzeigen', 'View item', 'wptheme.smartfarming'),
                'add_new_item'       => _x('Fact hinzufügen', 'Add new item', 'wptheme.smartfarming'),
                'add_new'            => _x('Fact hinzufügen', 'Add new', 'wptheme.smartfarming'),
                'edit_item'          => _x('Fact bearbeiten', 'Edit item', 'wptheme.smartfarming'),
                'update_item'        => _x('Fact aktualisieren', 'Update item', 'wptheme.smartfarming'),
                'search_items'       => _x('Fact suchen', 'Search items', 'wptheme.smartfarming'),
                'not_found'          => _x('Keine Facts gefunden.', 'Not found', 'wptheme.smartfarming'),
                'not_found_in_trash' => _x('Keine Facts im Papierkorb gefunden.', 'Not found in trash', 'wptheme.smartfarming'),
            ),
            'description'         => _x('Fact Informationen', 'Description', 'wptheme.fcseisa08'),
            'supports'            => ['title'],
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'rewrite'             => false,
            'menu_icon'           => 'dashicons-welcome-learn-more',
        )
    );
}
add_action('init', 'domi_facts_cpt');
?>