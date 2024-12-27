<?php

    $tag = get_sub_field('acf_helper_title');

    echo '<' . $tag . '>';

        the_sub_field('acf_post_title'); 

    echo '</' . $tag . '>';
     
?>