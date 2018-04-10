<?php
    /*
    *  Format the Date
    */
    function formatDate($date){
        return date('F j,Y ,g:i a',strtotime($date));
    }

    /*
    * Shorten the Text
    */
    function shortenText($text,$chars = 450){
        $text=$text." ";
        $text=substr($text,0,$chars);
        $text=$text.".......";
        return $text;
    }
?>