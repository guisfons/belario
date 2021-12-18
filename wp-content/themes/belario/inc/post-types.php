<?php
/**
 * Declare all used post types
 */
function ks_register_post_types(){

    $def_posttype_args = array(

        'labels'             => array(),
        'description'        => '',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => '',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array('title', 'thumbnail', 'editor', 'author', 'excerpt', 'page-attributes' ),
        'show_in_rest'		 => true

    );

    $def_taxonomy_args = array(
        'hierarchical'      => true,
        'labels'            => array(),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => '',
        'show_in_rest'		 => true,
        'show_in_quick_edit' => true,
    );

    $posttypes = array(

        'cardapio' => array(

            'labels' => array(
                'name'               => __('Cardápio'),
                'singular_name'      => __('Cardápio'),
                'menu_name'          => __('Cardápio'),
                'name_admin_bar'     => __('cardapio'),
                'add_new'            => __('Novo Item'),
                'add_new_item'       => __('Novo Item'),
                'new_item'           => __('Novo Item'),
                'edit_item'          => __('Editar Item'),
                'view_item'          => __('Ver Item'),
                'all_items'          => __('cardapio'),
                'search_items'       => __('Procurar por item'),
                'parent_item_colon'  => __('cardapio pai:'),
                'not_found'          => __('Nenhum Item encontrado.'),
                'not_found_in_trash' => __('Nenhum Item encontrado na lixeira.')
            ),
            'menu_icon' => 'dashicons-text-page',
            'description' => __('cardapio'),
            'rest_base' =>'custom/cardapio',
            'has_archive' => 'biblioteca/cardapio',
            'rewrite'     => [
                'slug' => 'cardapio',
            ],
            'supports'    => array('title', 'thumbnail'),
            'show_in_rest' => false,  // @info inherited from old version
        ),

        'servicos' => array(

            'labels' => array(
                'name'               => __('Serviços'),
                'singular_name'      => __('Serviço'),
                'menu_name'          => __('Serviços'),
                'name_admin_bar'     => __('servicos'),
                'add_new'            => __('Novo Serviço'),
                'add_new_item'       => __('Novo Serviço'),
                'new_item'           => __('Novo Serviço'),
                'edit_item'          => __('Editar Serviço'),
                'view_item'          => __('Ver Serviço'),
                'all_items'          => __('Serviços'),
                'search_items'       => __('Procurar por Serviços'),
                'parent_item_colon'  => __('Serviços pai:'),
                'not_found'          => __('Nenhum Serviço encontrado.'),
                'not_found_in_trash' => __('Nenhum Serviço encontrado na lixeira.')
            ),
            'menu_icon' => 'dashicons-tag',
            'description' => __('Serviço'),
            'rest_base' =>'custom/servicos',
            'has_archive' => 'biblioteca/servicos',
            'rewrite'     => [
                'slug' => 'servicos',
            ],
            'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
            'show_in_rest' => false,  // @info inherited from old version
        ),

		'produto' => array(

            'labels' => array(
                'name'               => __('Produtos'),
                'singular_name'      => __('Produto'),
                'menu_name'          => __('Produtos'),
                'name_admin_bar'     => __('Produtos'),
                'add_new'            => __('Novo produto'),
                'add_new_item'       => __('Novo produto'),
                'new_item'           => __('Novo produto'),
                'edit_item'          => __('Editar produto'),
                'view_item'          => __('Ver produto'),
                'all_items'          => __('Produtos'),
                'search_items'       => __('Procurar por produtos'),
                'parent_item_colon'  => __('Produtos pai:'),
                'not_found'          => __('Nenhum Produto encontrado.'),
                'not_found_in_trash' => __('Nenhum Produto encontrado na lixeira.')
			),
            'menu_icon' => 'dashicons-food',
            'description' => __('Produtos'),
            'rest_base' =>'custom/produtos',
            'has_archive' => 'biblioteca/produtos',
            'rewrite'     => [
            	'slug' => 'produtos',
            ],
            'supports'    => array('title', 'editor', 'thumbnail'),
            'taxonomy'    => array(

                'produtos_categories' => array(

                    'hierarchical'      => true,
                    'labels'            => array(
                        'name'              => __('Categorias'),
                        'singular_name'     => __('Categoria'),
                        'search_items'      => __('Procurar por categoria' ),
                        'all_items'         => __('Categorias' ),
                        'parent_item'       => __('Categoria Pai' ),
                        'parent_item_colon' => __('Categorias Pai:' ),
                        'edit_item'         => __('Editar Categoria' ),
                        'update_item'       => __('Atualizar Categoria' ),
                        'add_new_item'      => __('Nova Categoria' ),
                        'new_item_name'     => __('Nova Categoria' ),
                        'menu_name'         => __('Categorias' ),
                    ),

                    'show_ui'           => true,
                    'show_admin_column' => true,
                    'query_var'         => true,
					'rewrite'           => array('slug' => 'produtos/categorias'),
					'show_in_rest'      => true,
                    'rest_base'         => 'produtos_categories'

                ),

            ),
		),

		'noticias' => array(

            'labels' => array(
                'name'               => __('Notícias'),
                'singular_name'      => __('Notícias'),
                'menu_name'          => __('Notícias'),
                'name_admin_bar'     => __('Notícias'),
                'add_new'            => __('Nova notícia'),
                'add_new_item'       => __('Nova notícia'),
                'new_item'           => __('Nova notícia'),
                'edit_item'          => __('Editar notícia'),
                'view_item'          => __('Ver notícia'),
                'all_items'          => __('Notícias'),
                'search_items'       => __('Procurar por notícia'),
                'parent_item_colon'  => __('Notícia pai:'),
                'not_found'          => __('Nenhuma notícia encontrado.'),
                'not_found_in_trash' => __('Nenhuma notícia encontrado na lixeira.')
			),
            'menu_icon' => 'dashicons-welcome-write-blog',
            'description' => __('Notícia'),
            'rest_base' =>'custom/noticia',
            'has_archive' => 'biblioteca/noticia',
            'rewrite'     => [
                'slug' => 'noticias',
            ],
            'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),

            'taxonomy'    => array(

                'noticias_categories' => array(

                    'hierarchical'      => true,
                    'labels'            => array(
                        'name'              => __('Categorias'),
                        'singular_name'     => __('Categoria'),
                        'search_items'      => __('Procurar por categoria' ),
                        'all_items'         => __('Categorias' ),
                        'edit_item'         => __('Editar Categoria' ),
                        'update_item'       => __('Atualizar Categoria' ),
                        'add_new_item'      => __('Nova Categoria' ),
                        'new_item_name'     => __('Nova Categoria' ),
                        'menu_name'         => __('Categorias' ),
                    ),

                    'show_ui'           => true,
                    'show_admin_column' => true,
                    'query_var'         => true,
					'rewrite'           => array('slug' => 'noticias/categorias'),
					'show_in_rest'      => true,
                    'rest_base'         => 'noticias_categories'

                ),

            ),
		),

        'footer' => array(
            'labels' => array(
                'name'               => __('Footer'),
                'singular_name'      => __('Footer'),
                'menu_name'          => __('Footer'),
            ),
            
            'menu_icon' => 'dashicons-tag',
            'description' => __('Footer'),
            'rewrite'     => [
                'slug' => 'footer',
            ],
            'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
            'show_in_rest' => false,  // @info inherited from old version
        ),

    );

    foreach ($posttypes as $posttype => $options) {

        $args = array_merge($def_posttype_args, $options);

        if(isset($args['taxonomy'])){

            $taxonomies = $args['taxonomy'];

            foreach($taxonomies as $taxonomy => $taxonomy_args){

                $taxonomy_args = array_merge($def_taxonomy_args, $taxonomy_args);

                register_taxonomy($taxonomy, array($posttype), $taxonomy_args);

            }

            unset($args['taxonomy']);

        }

        register_post_type($posttype, $args);

    }

}

add_action('init', 'ks_register_post_types', 10 );

/**
 * Change Native Posts labels
 */
function ks_change_post_label() {

    global $menu;
	global $submenu;

    $menu[5][0] = 'Blog';
    $submenu['edit.php'][5][0] = 'Blog';
    $submenu['edit.php'][10][0] = 'Adicionar post';

}

// add_action( 'admin_menu', 'ks_change_post_label' );

function ks_change_post_object() {

	global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Blog';
    $labels->singular_name = 'Blog';
	$labels->menu_name = 'Blog';
	$labels->name_admin_bar = 'Blog';
    $labels->add_new = 'Novo post';
    $labels->add_new_item = 'Novo post';
    $labels->new_item = 'Novo post';
    $labels->edit_item = 'Editar post';
    $labels->view_item = 'Ver post';
    $labels->all_items = 'Blog';
	$labels->search_items = 'Procurar post';
	$labels->parent_item_colon = 'Blog pai:';
    $labels->not_found = 'Nenhum post encontrado';
	$labels->not_found_in_trash = 'Nenhum post encontrada na lixeira';

}

// add_action( 'init', 'ks_change_post_object' );
