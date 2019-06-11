<?php

function generateLink($url, $label, $class) {
   $link = '<a href="' . $url . '" class="' . $class . '">';
   $link .= $label;
   $link .= '</a>';
   return $link;
}


function outputPostRow($number)  {
    include("travel-data.inc.php");
}

/*
  Function constructs a string containing the <img> tags necessary to display
  star images that reflect a rating out of 5
*/
function constructRating($rating) {
    $imgTags = "";
    
    // first output the gold stars
    for ($i=0; $i < $rating; $i++) {
        $imgTags .= '<img src="images/star-gold.svg" width="16" />';
    }
    
    // then fill remainder with white stars
    for ($i=$rating; $i < 5; $i++) {
        $imgTags .= '<img src="images/star-white.svg" width="16" />';
    }    
    
    return $imgTags;    
}

function findCountry($id,$path,$title,$description){
    echo '<li>';
    echo '<a href="detail.php?id='.$id.'" class="img-responsive">';
    echo '<img style="height : 225px" src="images/square-medium/'.$path.'" alt="'.$title.'" >';
    echo '<div class="caption">';
    echo '<div class="blur"></div>';
    echo '<div class="caption-text">';
    echo '<p>'.$description.'</p>';
    echo '</div>';
    echo '</div>';
    echo '</a>';
    echo '</li>';
}

?>