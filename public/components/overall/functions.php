<?php
    // page sections
    function page_head($page_title, $page_description, array $style_array, array $script_array){
        $style_link_items = echo_list_of_html_style_tag($style_array);

        echo '
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta description="'.$page_description.'">
            '.$style_link_items.'
            <title>'.$page_title.'</title>
        </head>
        ';
    }

    function page_footer($content, array $style_array, array $script_array){
        $style_link_items = echo_list_of_html_style_tag($style_array);
        $scripts_link_items = echo_list_of_html_scripts_tag($script_array);
        $result = $content .$style_link_items .$scripts_link_items;

        echo $result;
    }


    function echo_list_of_html_style_tag(array $style_array){
        $styles = array();
        for($i = 0; $i < count($style_array); $i++){
            $styles[] = '<link rel="stylesheet" href="'.$style_array[$i].'">';
        }
        echo implode(",", $styles);
    }

    function echo_list_of_html_scripts_tag(array $scripts_array){
        $scripts = array();
        for($i = 0; $i < count($scripts_array); $i++){
            $scripts[] = '<script src="'.$scripts_array[$i].'"></script>';
        }
        echo implode(",", $scripts);
    }