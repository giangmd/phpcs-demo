<?php

class photo_download {
    function download($size){
        $domain="http://example.com";
        if($size=="s"){
            $downloadLink = $domain."s.jpeg";
        }elseif($size=="l"){
            $downloadLink = $domain."l.jpeg";
        }elseif($size=="m"){
            $downloadLink = $domain."m.jpeg";
        }else{
            $downloadLink = $domain."s.jpeg";
        }
        
        if(file_exists($downloadLink)){
            header('Content-Type: application/octet-stream');
            header("Content-Transfer-Encoding: Binary");
            header("Content-disposition: attachment; filename=\"".$downloadLink."\"");
        }else{
            header("Location: http://example.com");
        }
    }
}
