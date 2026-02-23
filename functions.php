<? function theme_assets()
{
    // リセットCSS
    wp_enqueue_style(
        'theme-ress',
        'https://unpkg.com/ress@4.0.0/dist/ress.min.css'
    );

    // 他のCSS
    wp_enqueue_style(
        'theme-common',
        get_template_directory_uri() . '/css/common.css'
    );
    wp_enqueue_style(
        'theme-header',
        get_template_directory_uri() . '/css/header.css'
    );
    wp_enqueue_style(
        'theme-footer',
        get_template_directory_uri() . '/css/footer.css'
    );
    wp_enqueue_style(
        'theme-concept',
        get_template_directory_uri() . '/css/concept-page.css'
    );
    wp_enqueue_style(
        'theme-flow-page',
        get_template_directory_uri() . '/css/flow-page.css'
    );
    wp_enqueue_style(
        'theme-works-page',
        get_template_directory_uri() . '/css/works-page.css'
    );

    // JS
    wp_enqueue_script(
        'theme-main',
        get_template_directory_uri() . '/js/main.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_assets');


function create_works_post_type()
{
    register_post_type(
        'works',
        array(
            'label' => '施工事例',
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'works'),
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_works_post_type');


function works_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('works')) {
        $query->set('posts_per_page', 6);
    }
}
add_action('pre_get_posts', 'works_posts_per_page');

function theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');
