<?php

function radio_wp_styles()
{
    wp_enqueue_style('style_css', get_stylesheet());
    wp_enqueue_style('index_css', get_stylesheet_directory_uri() . '/public/css/index.css');
    wp_enqueue_style('contato_css', get_stylesheet_directory_uri() . '/public/css/contato.css');
    wp_enqueue_style('equipe_css', get_stylesheet_directory_uri() . '/public/css/equipe.css');
    wp_enqueue_style('footer_css', get_stylesheet_directory_uri() . '/public/css/footer.css');
    wp_enqueue_style('inicial_css', get_stylesheet_directory_uri() . '/public/css/inicial.css');
    wp_enqueue_style('programacao_css', get_stylesheet_directory_uri() . '/public/css/programacao.css');
    wp_enqueue_style('programas_css', get_stylesheet_directory_uri() . '/public/css/programas.css');
    wp_enqueue_style('sobre_css', get_stylesheet_directory_uri() . '/public/css/sobre.css');

    wp_enqueue_script('index_js', get_template_directory_uri() . '/public/js/index.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'radio_wp_styles');

function adicionar_estilos_cmb2()
{
    wp_enqueue_style('custom-cmb2-styles', get_template_directory_uri() . '/custom-cmb2-styles.css');
}
add_action('wp_enqueue_scripts', 'adicionar_estilos_cmb2');

function cmb2_about_metaboxes()
{

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box(
        array(
            'id' => 'about_metabox',
            'title' => __('Sobre', 'cmb2'),
            'object_types' => array('page', ),
            // Post type
            'context' => 'normal',
            'priority' => 'high',
            'show_names' => true,
            // Show field names on the left
            'attributes' => array(
                //'placeholder' => 'A small amount of text',
                'rows' => 3,
                'required' => 'required',
            ),
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        )
    );

    // Regular text field
    $cmb->add_field(
        array(
            'name' => __('Conteúdo', 'cmb2'),
            'id' => 'about_text',
            'type' => 'textarea',
            'show_on_cb' => 'cmb2_hide_if_no_cats',
            // function should return a bool value
            // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
            // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
            // 'on_front'        => false, // Optionally designate a field to wp-admin only
            // 'repeatable'      => true,
        )
    );

    // Image field
    $cmb->add_field(
        array(
            'name' => __('Imagem Sobre', 'cmb2'),
            'id' => 'about_image',
            'type' => 'file',
            'preview_size' => 'large',
            // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
            // 'repeatable' => true,
        )
    );
}
add_action('cmb2_admin_init', 'cmb2_about_metaboxes');


// ** Campos programação **//
add_action('cmb2_admin_init', 'campos_programacao_segunda');
function campos_programacao_segunda()
{
    $cmb2 = new_cmb2_box([
        'id' => 'programacao_segunda',
        'title' => __('Programação de segunda', 'cmb2'),
        'object_types' => ['page'],
    ]);

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb2->add_field(
        array(
            'name' => '00h às 06h',
            'id' => 'segunda-prog-1',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '06h às 07h',
            'id' => 'segunda-prog-2',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '07h às 08h',
            'id' => 'segunda-prog-3',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '08h às 09h',
            'id' => 'segunda-prog-4',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '09h às 10h',
            'id' => 'segunda-prog-5',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '10h às 12h',
            'id' => 'segunda-prog-6',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12h às 12:40h',
            'id' => 'segunda-prog-7',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12:40h às 13h',
            'id' => 'segunda-prog-8',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13h às 13:30h',
            'id' => 'segunda-prog-9',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13:35h às 14:30h',
            'id' => 'segunda-prog-10',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '14:30h às 15:30h',
            'id' => 'segunda-prog-11',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '15:30h às 17h',
            'id' => 'segunda-prog-12',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '17h às 18h',
            'id' => 'segunda-prog-13',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '18h às 19h',
            'id' => 'segunda-prog-14',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '19h às 20h',
            'id' => 'segunda-prog-15',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '20h às 00h',
            'id' => 'segunda-prog-16',
            'type' => 'text',
        )
    );


}
add_action('cmb2_admin_init', 'campos_programacao_terca');
function campos_programacao_terca()
{
    $cmb2 = new_cmb2_box([
        'id' => 'programacao_terca',
        'title' => __('Programação de terça', 'cmb2'),
        'object_types' => ['page'],
    ]);

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb2->add_field(
        array(
            'name' => '00h às 06h',
            'id' => 'terca-prog-1',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '06h às 07h',
            'id' => 'terca-prog-2',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '07h às 08h',
            'id' => 'terca-prog-3',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '08h às 09h',
            'id' => 'terca-prog-4',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '09h às 10h',
            'id' => 'terca-prog-5',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '10h às 12h',
            'id' => 'terca-prog-6',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12h às 12:40h',
            'id' => 'terca-prog-7',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12:40h às 13h',
            'id' => 'terca-prog-8',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13h às 13:30h',
            'id' => 'terca-prog-9',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13:35h às 14:30h',
            'id' => 'terca-prog-10',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '14:30h às 15:30h',
            'id' => 'terca-prog-11',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '15:30h às 17h',
            'id' => 'terca-prog-12',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '17h às 18h',
            'id' => 'terca-prog-13',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '18h às 19h',
            'id' => 'terca-prog-14',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '19h às 20h',
            'id' => 'terca-prog-15',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '20h às 00h',
            'id' => 'terca-prog-16',
            'type' => 'text',
        )
    );


}
add_action('cmb2_admin_init', 'campos_programacao_quarta');
function campos_programacao_quarta()
{
    $cmb2 = new_cmb2_box([
        'id' => 'programacao_quarta',
        'title' => __('Programação de quarta', 'cmb2'),
        'object_types' => ['page'],
    ]);

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb2->add_field(
        array(
            'name' => '00h às 06h',
            'id' => 'quarta-prog-1',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '06h às 07h',
            'id' => 'quarta-prog-2',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '07h às 08h',
            'id' => 'quarta-prog-3',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '08h às 09h',
            'id' => 'quarta-prog-4',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '09h às 10h',
            'id' => 'quarta-prog-5',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '10h às 12h',
            'id' => 'quarta-prog-6',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12h às 12:40h',
            'id' => 'quarta-prog-7',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12:40h às 13h',
            'id' => 'quarta-prog-8',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13h às 13:30h',
            'id' => 'quarta-prog-9',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13:35h às 14:30h',
            'id' => 'quarta-prog-10',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '14:30h às 15:30h',
            'id' => 'quarta-prog-11',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '15:30h às 17h',
            'id' => 'quarta-prog-12',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '17h às 18h',
            'id' => 'quarta-prog-13',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '18h às 19h',
            'id' => 'quarta-prog-14',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '19h às 20h',
            'id' => 'quarta-prog-15',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '20h às 00h',
            'id' => 'quarta-prog-16',
            'type' => 'text',
        )
    );


}
add_action('cmb2_admin_init', 'campos_programacao_quinta');
function campos_programacao_quinta()
{
    $cmb2 = new_cmb2_box([
        'id' => 'programacao_quinta',
        'title' => __('Programação de quinta', 'cmb2'),
        'object_types' => ['page'],
    ]);

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb2->add_field(
        array(
            'name' => '00h às 06h',
            'id' => 'quinta-prog-1',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '06h às 07h',
            'id' => 'quinta-prog-2',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '07h às 08h',
            'id' => 'quinta-prog-3',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '08h às 09h',
            'id' => 'quinta-prog-4',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '09h às 10h',
            'id' => 'quinta-prog-5',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '10h às 12h',
            'id' => 'quinta-prog-6',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12h às 12:40h',
            'id' => 'quinta-prog-7',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12:40h às 13h',
            'id' => 'quinta-prog-8',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13h às 13:30h',
            'id' => 'quinta-prog-9',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13:35h às 14:30h',
            'id' => 'quinta-prog-10',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '14:30h às 15:30h',
            'id' => 'quinta-prog-11',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '15:30h às 17h',
            'id' => 'quinta-prog-12',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '17h às 18h',
            'id' => 'quinta-prog-13',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '18h às 19h',
            'id' => 'quinta-prog-14',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '19h às 20h',
            'id' => 'quinta-prog-15',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '20h às 00h',
            'id' => 'quinta-prog-16',
            'type' => 'text',
        )
    );


}
add_action('cmb2_admin_init', 'campos_programacao_sexta');
function campos_programacao_sexta()
{
    $cmb2 = new_cmb2_box([
        'id' => 'programacao_sexta',
        'title' => __('Programação de sexta', 'cmb2'),
        'object_types' => ['page'],
    ]);

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb2->add_field(
        array(
            'name' => '00h às 06h',
            'id' => 'sexta-prog-1',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '06h às 07h',
            'id' => 'sexta-prog-2',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '07h às 08h',
            'id' => 'sexta-prog-3',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '08h às 09h',
            'id' => 'sexta-prog-4',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '09h às 10h',
            'id' => 'sexta-prog-5',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '10h às 12h',
            'id' => 'sexta-prog-6',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12h às 12:40h',
            'id' => 'sexta-prog-7',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12:40h às 13h',
            'id' => 'sexta-prog-8',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13h às 13:30h',
            'id' => 'sexta-prog-9',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13:35h às 14:30h',
            'id' => 'sexta-prog-10',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '14:30h às 15:30h',
            'id' => 'sexta-prog-11',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '15:30h às 17h',
            'id' => 'sexta-prog-12',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '17h às 18h',
            'id' => 'sexta-prog-13',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '18h às 19h',
            'id' => 'sexta-prog-14',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '19h às 20h',
            'id' => 'sexta-prog-15',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '20h às 00h',
            'id' => 'sexta-prog-16',
            'type' => 'text',
        )
    );


}
add_action('cmb2_admin_init', 'campos_programacao_sabado');
function campos_programacao_sabado()
{
    $cmb2 = new_cmb2_box([
        'id' => 'programacao_sabado',
        'title' => __('Programação de sábado', 'cmb2'),
        'object_types' => ['page'],
    ]);

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb2->add_field(
        array(
            'name' => '00h às 06h',
            'id' => 'sabado-prog-1',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '06h às 07h',
            'id' => 'sabado-prog-2',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '07h às 08h',
            'id' => 'sabado-prog-3',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '08h às 09h',
            'id' => 'sabado-prog-4',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '09h às 10h',
            'id' => 'sabado-prog-5',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '10h às 12h',
            'id' => 'sabado-prog-6',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12h às 12:40h',
            'id' => 'sabado-prog-7',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12:40h às 13h',
            'id' => 'sabado-prog-8',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13h às 13:30h',
            'id' => 'sabado-prog-9',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13:35h às 14:30h',
            'id' => 'sabado-prog-10',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '14:30h às 15:30h',
            'id' => 'sabado-prog-11',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '15:30h às 17h',
            'id' => 'sabado-prog-12',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '17h às 18h',
            'id' => 'sabado-prog-13',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '18h às 19h',
            'id' => 'sabado-prog-14',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '19h às 20h',
            'id' => 'sabado-prog-15',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '20h às 00h',
            'id' => 'sabado-prog-16',
            'type' => 'text',
        )
    );


}
add_action('cmb2_admin_init', 'campos_programacao_domingo');
function campos_programacao_domingo()
{
    $cmb2 = new_cmb2_box([
        'id' => 'programacao_domingo',
        'title' => __('Programação de domingo', 'cmb2'),
        'object_types' => ['page'],
    ]);

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb2->add_field(
        array(
            'name' => '00h às 06h',
            'id' => 'domingo-prog-1',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '06h às 07h',
            'id' => 'domingo-prog-2',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '07h às 08h',
            'id' => 'domingo-prog-3',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '08h às 09h',
            'id' => 'domingo-prog-4',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '09h às 10h',
            'id' => 'domingo-prog-5',
            'type' => 'text',
        )
    );

    $cmb2->add_field(
        array(
            'name' => '10h às 12h',
            'id' => 'domingo-prog-6',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12h às 12:40h',
            'id' => 'domingo-prog-7',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '12:40h às 13h',
            'id' => 'domingo-prog-8',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13h às 13:30h',
            'id' => 'domingo-prog-9',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '13:35h às 14:30h',
            'id' => 'domingo-prog-10',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '14:30h às 15:30h',
            'id' => 'domingo-prog-11',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '15:30h às 17h',
            'id' => 'domingo-prog-12',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '17h às 18h',
            'id' => 'domingo-prog-13',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '18h às 19h',
            'id' => 'domingo-prog-14',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '19h às 20h',
            'id' => 'domingo-prog-15',
            'type' => 'text',
        )
    );
    $cmb2->add_field(
        array(
            'name' => '20h às 00h',
            'id' => 'domingo-prog-16',
            'type' => 'text',
        )
    );


}
//** fim campos programação **//

add_action('cmb2_admin_init', 'campos_prog_especiais');
function campos_prog_especiais()
{
    $cmb = new_cmb2_box(
        array(
            'id' => 'meu_registro_metabox',
            'title' => __('Programação Especial', 'cmb2'),
            'object_types' => array('page')
        )
    );

    $cmb->add_field(
        array(
            'name' => 'Horário',
            'id' => 'horario',
            'type' => 'text',
            'description' => 'ex: 00h às 01h',
        )
    );

    $cmb->add_field(
        array(
            'name' => 'Programação',
            'id' => 'esp-prog',
            'type' => 'text',
        )
    );
}

add_action('cmb2_admin_init', 'campos_redes_sociais');
function campos_redes_sociais()
{
    $cmb = new_cmb2_box(
        array(
            'id' => 'redes_metabox',
            'title' => __('Link das redes sociais', 'cmb2'),
            'object_types' => array('page')
        )
    );

    $cmb->add_field(
        array(
            'name' => 'Instagram',
            'id' => 'instagram',
            'type' => 'text',
        )
    );

    $cmb->add_field(
        array(
            'name' => 'Facebook',
            'id' => 'facebook',
            'type' => 'text',
        )
    );

    $cmb->add_field(
        array(
            'name' => 'Youtube',
            'id' => 'youtube',
            'type' => 'text',
        )
    );
}

add_action('cmb2_admin_init', 'campos_contato');
function campos_contato()
{
    $cmb = new_cmb2_box(
        array(
            'id' => 'contato_metabox',
            'title' => __('Dados de contato', 'cmb2'),
            'object_types' => array('page')
        )
    );

    $cmb->add_field(
        array(
            'name' => 'Endereço',
            'id' => 'endereco',
            'type' => 'text',
        )
    );

    $cmb->add_field(
        array(
            'name' => 'E-mail',
            'id' => 'email',
            'type' => 'text',
        )
    );

    $cmb->add_field(
        array(
            'name' => 'Número de telefone',
            'id' => 'telefone',
            'type' => 'text',
        )
    );
}

/*
add_action('cmb2_admin_init', 'campos_Galeria');
function campos_Galeria()
{
    $cmb = new_cmb2_box(
        array(
            'id' => 'meu_registro_metabox',
            'title' => __('Galeria', 'cmb2'),
            'object_types' => array('page')
        )
    );

    $group_field_id = $cmb->add_field(
        array(
            'id' => 'Galeria',
            'type' => 'group',
            'options' => array(
                'group_title' => __('Galeria {#}', 'cmb2'),
                'add_button' => 'Adicionar foto',
                'sortable' => true,
            ),
        )
    );

    $cmb->add_field(
        array(
            'name' => __('Imagem da Galeria', 'cmb2'),
            'id' => 'image',
            'type' => 'file',
            'preview_size' => 'large',
        )
    );

}*/