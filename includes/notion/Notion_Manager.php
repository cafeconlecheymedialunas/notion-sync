<?php

/*



/


add_action( 'elementor/dynamic_tags/register', function ($dynamic_tags_manager) use($notion_database) {
    $databases = $notion_database->get_databases();

    foreach($databases as $database){
        var_dump($database);
    }
} );


add_action( 'elementor/dynamic_tags/register', function () use($notion_database) {
    require_once( __DIR__ . '/src/dynamic-tags/demo-field-tag.php' );

	$dynamic_tags_manager->register( new \CWPAI_EL_dynamic_tag_demo_field );
} );
*/
use Notion\Notion;
use Notion\Search\Filter;
use Notion\Search\Query;
DEFINE("NOTION_TOKEN","secret_uPBBR6snphU8rKertMWty82DqrUNgGcVe4PJf5fCCSi");

class Notion_Manager{
  


    public function __construct() {
        $token ="secret_uPBBR6snphU8rKertMWty82DqrUNgGcVe4PJf5fCCSi";
        $this->notion = Notion::create($token);
    }

    function get_users() {
        return $this->notion->users()->findAll();
    }

    function get_database_by_id($request) {
        $parameters = $request->get_params();
        $database = $this->notion->databases()->find($parameters["database_id"]);
        return $database;
    }

    function get_databases() {
        $query = Query::all()->filterByDatabases();

        $response = $this->notion->search()->search($query);

        return $response;
    }

    function get_pages() {
        $query = Query::all()->filterByPages();

        $response = $this->notion->search()->search($query);

        return $response;
    }
}
