<?php
/**
 * Registra el post type jogador
 */
if (! function_exists('registraPostTypeJugador')) {
    function registraPostTypeJugador() {
        $labels = [
            'name'           => 'Jugadores',
            'singular_name'  => 'Jugador',
            'menu_name'      => 'Jugadores',
            'name_admin_bar' => 'Jugadores',
            'add_new'        => 'Añadir nuevo',
            'add_new_item'   => 'Añadir nuevo Jugador',
            'new_item'       => 'Nuevo Jugador',
            'edit_item'      => 'Editar Jugador',
            'view_item'      => 'Ver Jugador',
            'all_items'      => 'Jugadores',
            'search_items'   => 'Buscar Jugadores',
            'not_found'          => 'No se han encontrado Jugadores',
            'not_found_in_trash' => 'No se han encontrado Jugadores en la papelera',
        ];

        $params = \apply_filters('registraPostTypeJugador', [
            'labels'      => $labels,
            'description' => 'Jugadores',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'rewrite'            => [
                'slug'       => 'jugador',
                'with_front' => false
            ],
            'has_archive'        => true,
            'capability_type'    => 'page',
            'menu_icon'           => 'dashicons-admin-users',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title']
        ]);

        \register_post_type('jugador', $params);
    }

    add_action('init', 'registraPostTypeJugador');
}
/**
 * Registra el post type Baraja
 */
if (! function_exists('registraPostTypeBaraja')) {
    function registraPostTypeBaraja() {
        $labels = [
            'name'           => 'Barajas',
            'singular_name'  => 'Baraja',
            'menu_name'      => 'Barajas',
            'name_admin_bar' => 'Barajas',
            'add_new'        => 'Añadir nueva',
            'add_new_item'   => 'Añadir nueva Baraja',
            'new_item'       => 'Nueva Baraja',
            'edit_item'      => 'Editar Baraja',
            'view_item'      => 'Ver Baraja',
            'all_items'      => 'Barajas',
            'search_items'   => 'Buscar Barajas',
            'not_found'          => 'No se han encontrado Barajas',
            'not_found_in_trash' => 'No se han encontrado Barajas en la papelera',
        ];

        $params = \apply_filters('registraPostTypeBaraja', [
            'labels'      => $labels,
            'description' => 'Barajas',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'rewrite'            => [
                'slug'       => 'baraja',
                'with_front' => false
            ],
            'has_archive'        => true,
            'capability_type'    => 'page',
            'menu_icon'           => 'dashicons-images-alt2',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title']
        ]);

        \register_post_type('baraja', $params);
    }

    add_action('init', 'registraPostTypeBaraja');
}
/**
 * Registra el post type carta
 */
if (! function_exists('registraPostTypeCarta')) {
    function registraPostTypeCarta() {
        $labels = [
            'name'           => 'Cartas',
            'singular_name'  => 'Carta',
            'menu_name'      => 'Cartas',
            'name_admin_bar' => 'Cartas',
            'add_new'        => 'Añadir nueva',
            'add_new_item'   => 'Añadir nueva Carta',
            'new_item'       => 'Nueva Carta',
            'edit_item'      => 'Editar Carta',
            'view_item'      => 'Ver Carta',
            'all_items'      => 'Cartas',
            'search_items'   => 'Buscar Cartas',
            'not_found'          => 'No se han encontrado Cartas',
            'not_found_in_trash' => 'No se han encontrado Cartas en la papelera',
        ];

        $params = \apply_filters('registraPostTypeCarta', [
            'labels'      => $labels,
            'description' => 'Cartas',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'rewrite'            => [
                'slug'       => 'carta',
                'with_front' => false
            ],
            'has_archive'        => true,
            'capability_type'    => 'page',
            'menu_icon'           => 'dashicons-format-image',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title']
        ]);

        \register_post_type('carta', $params);
    }

    add_action('init', 'registraPostTypeCarta');
}
/**
 * Registra el post type Partidos
 */
if (! function_exists('registraPostTypePartido')) {
    function registraPostTypePartido() {
        $labels = [
            'name'           => 'Partidos',
            'singular_name'  => 'Partido',
            'menu_name'      => 'Partidos',
            'name_admin_bar' => 'Partidos',
            'add_new'        => 'Añadir nuevo',
            'add_new_item'   => 'Añadir nuevo Partido',
            'new_item'       => 'Nuevo Partido',
            'edit_item'      => 'Editar Partido',
            'view_item'      => 'Ver Partido',
            'all_items'      => 'Partidos',
            'search_items'   => 'Buscar Partidos',
            'not_found'          => 'No se han encontrado Partidos',
            'not_found_in_trash' => 'No se han encontrado Partidos en la papelera',
        ];

        $params = \apply_filters('registraPostTypePartido', [
            'labels'      => $labels,
            'description' => 'Partido',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'rewrite'            => [
                'slug'       => 'partido',
                'with_front' => false
            ],
            'has_archive'        => true,
            'capability_type'    => 'page',
            'menu_icon'           => 'dashicons-controls-play',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title']
        ]);

        \register_post_type('partido', $params);
    }

    add_action('init', 'registraPostTypePartido');
}
/**
 * Registra el post type Jornada
 */
if (! function_exists('registraPostTypeJornada')) {
    function registraPostTypeJornada() {
        $labels = [
            'name'           => 'Jornadas',
            'singular_name'  => 'Jornada',
            'menu_name'      => 'Jornadas',
            'name_admin_bar' => 'Jornadas',
            'add_new'        => 'Añadir nueva',
            'add_new_item'   => 'Añadir nueva Jornada',
            'new_item'       => 'Nueva Jornada',
            'edit_item'      => 'Editar Jornada',
            'view_item'      => 'Ver Jornada',
            'all_items'      => 'Jornadas',
            'search_items'   => 'Buscar Jornadas',
            'not_found'          => 'No se han encontrado Jornadas',
            'not_found_in_trash' => 'No se han encontrado Jornadas en la papelera',
        ];

        $params = \apply_filters('registraPostTypeJornada', [
            'labels'      => $labels,
            'description' => 'Jornada',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'rewrite'            => [
                'slug'       => 'jornada',
                'with_front' => false
            ],
            'has_archive'        => true,
            'capability_type'    => 'page',
            'menu_icon'           => 'dashicons-controls-repeat',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title']
        ]);

        \register_post_type('jornada', $params);
    }

    add_action('init', 'registraPostTypejornada');
}
/**
 * Registra el post type Temporada
 */
if (! function_exists('registraPostTypeTemporada')) {
    function registraPostTypeTemporada() {
        $labels = [
            'name'           => 'Temporadas',
            'singular_name'  => 'Temporada',
            'menu_name'      => 'Temporadas',
            'name_admin_bar' => 'Temporadas',
            'add_new'        => 'Añadir nueva',
            'add_new_item'   => 'Añadir nueva Temporada',
            'new_item'       => 'Nuevo Temporada',
            'edit_item'      => 'Editar Temporada',
            'view_item'      => 'Ver Temporada',
            'all_items'      => 'Temporadas',
            'search_items'   => 'Buscar Temporadas',
            'not_found'          => 'No se han encontrado Temporadas',
            'not_found_in_trash' => 'No se han encontrado Temporadas en la papelera',
        ];

        $params = \apply_filters('registraPostTypeTemporada', [
            'labels'      => $labels,
            'description' => 'Temporadas',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'rewrite'            => [
                'slug'       => 'temporada',
                'with_front' => false
            ],
            'has_archive'        => true,
            'capability_type'    => 'page',
            'menu_icon'           => 'dashicons-visibility',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title']
        ]);

        \register_post_type('temporada', $params);
    }

    add_action('init', 'registraPostTypeTemporada');
}
/**
 * Registra el post type Estadictica
 */
if (! function_exists('registraPostTypeEstadictica')) {
    function registraPostTypeEstadictica() {
        $labels = [
            'name'           => 'Estadicticas',
            'singular_name'  => 'Estadictica',
            'menu_name'      => 'Estadicticas',
            'name_admin_bar' => 'Estadicticas',
            'add_new'        => 'Añadir nuevo',
            'add_new_item'   => 'Añadir nuevo Estadictica',
            'new_item'       => 'Nuevo Estadictica',
            'edit_item'      => 'Editar Estadictica',
            'view_item'      => 'Ver Estadictica',
            'all_items'      => 'Estadicticas',
            'search_items'   => 'Buscar Estadicticas',
            'not_found'          => 'No se han encontrado Estadicticas',
            'not_found_in_trash' => 'No se han encontrado Estadicticas en la papelera',
        ];

        $params = \apply_filters('registraPostTypeEstadictica', [
            'labels'      => $labels,
            'description' => 'Estadicticas',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'rewrite'            => [
                'slug'       => 'estadictica',
                'with_front' => false
            ],
            'has_archive'        => true,
            'capability_type'    => 'page',
            'menu_icon'           => 'dashicons-editor-ul',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title']
        ]);

        \register_post_type('estadictica', $params);
    }

    add_action('init', 'registraPostTypeEstadictica');
}
/**
 * Registra el post type color
 */
if (! function_exists('registraPostTypeColor')) {
    function registraPostTypeColor() {
        $labels = [
            'name'           => 'Colores',
            'singular_name'  => 'Color',
            'menu_name'      => 'Colores',
            'name_admin_bar' => 'Colores',
            'add_new'        => 'Añadir nuevo',
            'add_new_item'   => 'Añadir nuevo Color',
            'new_item'       => 'Nuevo Color',
            'edit_item'      => 'Editar Color',
            'view_item'      => 'Ver Color',
            'all_items'      => 'Colores',
            'search_items'   => 'Buscar Colores',
            'not_found'          => 'No se han encontrado Colores',
            'not_found_in_trash' => 'No se han encontrado Colores en la papelera',
        ];

        $params = \apply_filters('registraPostTypeColor', [
            'labels'      => $labels,
            'description' => 'Colores',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'rewrite'            => [
                'slug'       => 'color',
                'with_front' => false
            ],
            'has_archive'        => true,
            'capability_type'    => 'page',
            'menu_icon'           => 'dashicons-align-left',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title']
        ]);

        \register_post_type('color', $params);
    }

    add_action('init', 'registraPostTypeColor');
}
/**
 * Registra el post type faccion
 */
if (! function_exists('registraPostTypeFaccion')) {
    function registraPostTypeFaccion() {
        $labels = [
            'name'           => 'Facciones',
            'singular_name'  => 'Facción',
            'menu_name'      => 'Facciones',
            'name_admin_bar' => 'Facciones',
            'add_new'        => 'Añadir nueva',
            'add_new_item'   => 'Añadir nueva Facción',
            'new_item'       => 'Nuevo Facción',
            'edit_item'      => 'Editar Facción',
            'view_item'      => 'Ver Facción',
            'all_items'      => 'Facciones',
            'search_items'   => 'Buscar Facciones',
            'not_found'          => 'No se han encontrado Facciones',
            'not_found_in_trash' => 'No se han encontrado Facciones en la papelera',
        ];

        $params = \apply_filters('registraPostTypeFaccion', [
            'labels'      => $labels,
            'description' => 'Facciones',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'rewrite'            => [
                'slug'       => 'facción',
                'with_front' => false
            ],
            'has_archive'        => true,
            'capability_type'    => 'page',
            'menu_icon'           => 'dashicons-align-left',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title']
        ]);

        \register_post_type('faccion', $params);
    }

    add_action('init', 'registraPostTypeFaccion');
}
/**
 * Registra el post type Tipo
 */
if (! function_exists('registraPostTypeTipo')) {
    function registraPostTypeTipo() {
        $labels = [
            'name'           => 'Tipos',
            'singular_name'  => 'Tipo',
            'menu_name'      => 'Tipos',
            'name_admin_bar' => 'Tipos',
            'add_new'        => 'Añadir nuevo',
            'add_new_item'   => 'Añadir nuevo Tipo',
            'new_item'       => 'Nuevo Tipo',
            'edit_item'      => 'Editar Tipo',
            'view_item'      => 'Ver Tipo',
            'all_items'      => 'Tipos',
            'search_items'   => 'Buscar Tipos',
            'not_found'          => 'No se han encontrado Tipos',
            'not_found_in_trash' => 'No se han encontrado Tipos en la papelera',
        ];

        $params = \apply_filters('registraPostTypeTipo', [
            'labels'      => $labels,
            'description' => 'Tipos',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'rewrite'            => [
                'slug'       => 'tipo',
                'with_front' => false
            ],
            'has_archive'        => true,
            'capability_type'    => 'page',
            'menu_icon'           => 'dashicons-align-left',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title']
        ]);

        \register_post_type('tipo', $params);
    }

    add_action('init', 'registraPostTypeTipo');
}