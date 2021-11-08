<?php
    function urutkan(){
        
        $acak = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "meme", "clarin", "puchi");
        sort($acak);
        foreach($acak as $list){
            echo "$list<br>";
        }
    }
    echo "Data setelah diurutkan : <br>";
    urutkan()
?>