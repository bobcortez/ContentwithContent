<?php
    //Associative Array for Page Links
    //Href Link - Value Name
    $page_links = [
        //Page Link => Page Name
    ];

    echo '<ul id=navbar>';
    foreach ($page_links as $href => $value){
        echo '<li><a href="'.$href.'">'.$value.'</a></li>';
    }
    echo '</ul>';
?>