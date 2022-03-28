<?php

class photo_download {
    function download_photo($size){
        $thumLink="https://thumb.photo-ac.com";
        if($size=="s"){
            $thumLink = $thumLink."s.jpeg";
        }elseif($size=="l"){
            $thumLink = $thumLink."l.jpeg";
        }elseif($size=="m"){
            $thumLink = $thumLink."m.jpeg";
        }else{
            $thumLink = $thumLink."s.jpeg";
        }
        
        if(file_exists($thumLink)){
            $link_dl='';
        }
        return $link_dl;
    }
}
