<?php 

    add_action('init', 'wyprawiamdobre_init_posttypes');
    
    function wyprawiamdobre_init_posttypes(){
        
        
        /*
         * Register Recipes Post Type
         */
        $recipes_args = array(
            'labels' => array(
                'name' => 'Przepisy',
                'singular_name' => 'Przpisy',
                'all_items' => 'Wszystkie przepisy',
                'add_new' => 'Dodaj nowy przepis',
                'add_new_item' => 'Dodaj nowy przepis',
                'edit_item' => 'Edytuj przepis',
                'new_item' => 'Nowy przepis',
                'view_item' => 'Zobacz przepis',
                'search_items' => 'Szukaj w przepisach',
                'not_found' =>  'Nie znaleziono żadnych przepisów',
                'not_found_in_trash' => 'Nie znaleziono żadnych przepisów w koszu', 
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields'
            ),
            'has_archive' => true           
        );
        
        register_post_type('recipes', $recipes_args);

    }

    
    add_action('init', 'wyprawiamdobre_init_taxonomies');
    /* Register taxonomies */
    
    function wyprawiamdobre_init_taxonomies(){
        
        // Ingredients
        // register_taxonomy(
        //     'ingredients',
        //     array('recipes'),
        //     array(
        //         'hierarchical' => true,
        //         'labels' => array(
        //             'name' => 'Składniki',
        //             'singular_name' => 'Składniki',
        //             'search_items' =>  'Wyszukaj składniki',
        //             'popular_items' => 'Najpopularniejsze składniki',
        //             'all_items' => 'Wszystkie składniki',
        //             'most_used_items' => null,
        //             'parent_item' => null,
        //             'parent_item_colon' => null,
        //             'edit_item' => 'Edytuj składnik', 
        //             'update_item' => 'Aktualizuj składnik',
        //             'add_new_item' => 'Dodaj nowy składnik',
        //             'new_item_name' => 'Nazwa nowego skadnika',
        //             'separate_items_with_commas' => 'Oddziel składniki przecinkiem',
        //             'add_or_remove_items' => 'Dodaj lub usuń składniki',
        //             'choose_from_most_used' => 'Wybierz spośród najczęścież używanych składników',
        //             'menu_name' => 'Składniki',
        //         ),
        //         'show_ui' => true,
        //         'update_count_callback' => '_update_post_term_count',
        //         'query_var' => true,
        //         'rewrite' => array('slug' => 'ingredient' )
        // ));

        // Meal Types
        register_taxonomy(
            'meal-type',
            array('recipes'),
            array(
                'hierarchical' => true,
                'labels' => array(
                    'name' => 'Typ Dania', 'taxonomy general name',
                    'singular_name' => 'Typ Dania', 'taxonomy singular name',
                    'search_items' =>  'Wyszukaj typ dania',
                    'popular_items' => 'Najpopularniejsze typy dań',
                    'all_items' => 'Wszystkie typy dań',
                    'most_used_items' => null,
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'edit_item' => 'Edytuj typ dania', 
                    'update_item' => 'Aktualizuj',
                    'add_new_item' => 'Dodaj nowy typ dania',
                    'new_item_name' => 'Nazwa nowego typu dania',
                    'separate_items_with_commas' => 'Oddziel typy dań przecinkiem',
                    'add_or_remove_items' => 'Dodaj lub usuń typ dania',
                    'choose_from_most_used' => 'Wybierz spośród najczęścież używanych typów dań',
                    'menu_name' => 'Typ Dania',
                ),
                'show_ui' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array('slug' => 'meal-type' )
        )); 
    }

?>
