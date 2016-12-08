<?php

function avatars($person, $users) {
    foreach($users as $user){
        if($person == $user['Name']){
            echo $user['Avatar'];
        }
    }
}

function posts($title, $comment, $name, $date) {
    echo '<h5 class="text-15 text700 pull-right">'.$title.'</h5>';
    echo '<a href="#" class="pull-right label fill-white text-gray">'.$name.' </a>';
    echo '<a href="#" class="pull-right label fill-white text-gray">'.$date.'</a>';
    echo '</div>';
    echo '</div>';
    echo '<div class="row">';
    echo '<p class="padding -padding-top">'.$comment.'</p>';
    echo '</div>';
    echo '<div class="row padding">';
    echo '<div class="pull-left">';
    echo '<a class=
        "btn icon round text-red fill-silver"><i class="fa fa-thumbs-up">
        </i></a> <a class=
        "btn white hover-disable text-red text600"></a>';
    echo '</div>';
    echo '<div class="pull-right">';
    echo '<a class= "btn icon round text-gray hover-text-red"><i class= "fa fa-comment"></i></a> ';
    echo '<a class= "btn white hover-disable text-red text600">83</a>';
    echo '</div>';

}
