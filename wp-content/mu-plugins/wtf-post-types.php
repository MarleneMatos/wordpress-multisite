<?php

function wtf_post_types()
{
    // Shared supports
    $default_supports = array(
        'title',
        'editor',
        'comments',
        'revisions',
        'trackbacks',
        'author',
        'excerpt',
        'page-attributes',
        'thumbnail',
        'post-formats'
    );

    // Shared defaults
    $default_args = array(
        'public'       => true,
        'supports'     => $default_supports,
        'show_in_rest' => true,
    );

    // All post types configuration
    $post_types = array(

        'wtf' => array(
            'plural'   => 'Settings',
            'singular' => 'Setting',
            'menu_icon' => 'dashicons-admin-site-alt3',
            'has_archive' => false,
            'supports' => array('title'), // Only title needed
            'capabilities' => array(
                'create_posts' => 'do_not_allow',
            ),
        ),

        'contact' => array(
            'plural'   => 'Contacts',
            'singular' => 'Contact',
            'menu_icon' => 'dashicons-admin-site-alt3',
            'has_archive' => false,
            'supports' => array('title'), // Only title needed
            'capabilities' => array(
                'create_posts' => 'do_not_allow',
            ),
        ),

        'service' => array(
            'plural'   => 'Services',
            'singular' => 'Service',
            'rewrite'  => array('slug' => 'services'),
            'menu_icon' => 'dashicons-share-alt',
            'has_archive' => true,
        ),

        'product' => array(
            'plural'   => 'Products',
            'singular' => 'Product',
            'rewrite'  => array('slug' => 'services'),
            'menu_icon' => 'dashicons-share-alt',
            'has_archive' => true,
        ),

        'benefit' => array(
            'plural'   => 'Benefits',
            'singular' => 'Benefit',
            'rewrite'  => array('slug' => 'benefits'),
            'menu_icon' => 'dashicons-share-alt',
            'has_archive' => true,
        ),

        'skill' => array(
            'plural'   => 'Skills',
            'singular' => 'Skill',
            'rewrite'  => array('slug' => 'skills'),
            'menu_icon' => 'dashicons-admin-customizer',
            'has_archive' => true,
        ),

        'portfolio' => array(
            'plural'   => 'Portfolio',
            'singular' => 'Portfolio',
            'rewrite'  => array('slug' => 'project'),
            'menu_icon' => 'dashicons-open-folder',
            'has_archive' => true,
        ),

        'event' => array(
            'plural'   => 'Events',
            'singular' => 'Event',
            'rewrite'  => array('slug' => 'events'),
            'menu_icon' => 'dashicons-calendar-alt',
            'has_archive' => true,
        ),
    );

    // Create Main Parent Menu
    add_menu_page(
        'wtf Site',
        'wtf Site',
        'manage_options',
        'wtf-site',
        '',
        'dashicons-admin-generic',
        5
    );

    // Loop and register post types
    foreach ($post_types as $slug => $config) {

        $labels = array(
            'name'          => $config['plural'],
            'singular_name' => $config['singular'],
            'add_new_item'  => 'Add ' . $config['singular'],
            'edit_item'     => 'Edit ' . $config['singular'],
            'all_items'     => 'All ' . $config['plural'],
        );

        $args = array_merge($default_args, $config, array(
            'labels'      => $labels,
            'show_in_menu' => 'wtf-site', // 👈 Groups under wtf Site
        ));

        register_post_type($slug, $args);
    }
}

add_action('init', 'wtf_post_types');

//Add Custom Meta Box to wtf
function wtf_add_settings_metabox()
{
    add_meta_box(
        'wtf_settings_fields',
        'WTF Site Settings',
        'wtf_settings_fields_callback',
        'wtf',
        'normal',
        'high'
    );


    add_meta_box(
        'wtf_contacts_fields',
        'WTF Site Contacts',
        'wtf_contacts_fields_callback',
        'contact',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'wtf_add_settings_metabox');


//Fields
function wtf_settings_fields_callback($post)
{

    wp_nonce_field('wtf_settings_nonce', 'wtf_settings_nonce_field');

    $tracking_head = get_post_meta($post->ID, '_wtf_tracking_head', true);
    $tracking_body = get_post_meta($post->ID, '_wtf_tracking_body', true);
    $svg_code      = get_post_meta($post->ID, '_wtf_svg_code', true);
    $contact_form  = get_post_meta($post->ID, '_wtf_contact_form', true);
    $iframe        = get_post_meta($post->ID, '_wtf_iframe', true);

?>

    <p><strong>Tracking Head Scripts</strong></p>
    <textarea name="wtf_tracking_head" style="width:100%;height:120px;"><?php echo esc_textarea($tracking_head); ?></textarea>

    <p><strong>Tracking Body Scripts</strong></p>
    <textarea name="wtf_tracking_body" style="width:100%;height:120px;"><?php echo esc_textarea($tracking_body); ?></textarea>

    <p><strong>SVG Code</strong></p>
    <textarea name="wtf_svg_code" style="width:100%;height:200px;"><?php echo esc_textarea($svg_code); ?></textarea>

    <p><strong>Contact Form Shortcode</strong></p>
    <input type="text" name="wtf_contact_form" value="<?php echo esc_attr($contact_form); ?>" style="width:100%;" />

    <p><strong>Iframe Embed Code</strong></p>
    <textarea name="wtf_iframe" style="width:100%;height:120px;"><?php echo esc_textarea($iframe); ?></textarea>

<?php
}

//Save Fields
function wtf_save_settings_fields($post_id)
{

    if (!isset($_POST['wtf_settings_nonce_field'])) return;
    if (!wp_verify_nonce($_POST['wtf_settings_nonce_field'], 'wtf_settings_nonce')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (get_post_type($post_id) !== 'wtf') return;

    update_post_meta($post_id, '_wtf_tracking_head', $_POST['wtf_tracking_head']);
    update_post_meta($post_id, '_wtf_tracking_body', $_POST['wtf_tracking_body']);
    update_post_meta($post_id, '_wtf_svg_code', $_POST['wtf_svg_code']);
    update_post_meta($post_id, '_wtf_contact_form', $_POST['wtf_contact_form']);
    update_post_meta($post_id, '_wtf_iframe', $_POST['wtf_iframe']);
}
add_action('save_post', 'wtf_save_settings_fields');

//Output the Data on Frontend
/*
//Tracking Head (inside header.php before </head>)
$settings = get_posts(array(
    'post_type' => 'wtf',
    'numberposts' => 1
));

if ($settings) {
    echo get_post_meta($settings[0]->ID, '_wtf_tracking_head', true);
}

Tracking Head (inside header.php before </head>)
$settings = get_posts(array(
    'post_type' => 'wtf',
    'numberposts' => 1
));

if ($settings) {
    echo get_post_meta($settings[0]->ID, '_wtf_tracking_head', true);
}
//Tracking Body (inside body)
echo get_post_meta($settings[0]->ID, '_wtf_tracking_body', true);
//SVG
echo get_post_meta($settings[0]->ID, '_wtf_svg_code', true);
//Contact Form (Shortcode)
echo do_shortcode(get_post_meta($settings[0]->ID, '_wtf_contact_form', true));
//Iframe
echo get_post_meta($settings[0]->ID, '_wtf_iframe', true);

*/