<?php 
add_action('rest_api_init', function () use($notion_database) {
    
  
   
    register_rest_route('notion-sync/v1', '/databases/(?P<database_id>[a-zA-Z0-9-]+)', array(
        'methods' => 'GET',
        'callback' => array($notion_database, "get_database_by_id"),
    ));

    register_rest_route('notion-sync/v1', '/databases/', array(
        'methods' => 'GET',
        'callback' => array($notion_database, "get_databases"),
    ));

    register_rest_route('notion-sync/v1', '/pages/', array(
        'methods' => 'GET',
        'callback' => array($notion_database, "get_pages"),
    ));
});