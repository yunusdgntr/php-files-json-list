<?php
header('Content-Type: application/json');

$dir          = "./images"; 

$list = array(); 

if(is_dir($dir)){
    if($dh = opendir($dir)){
        while(($file = readdir($dh)) != false){
          $match = preg_match("/.*\.(jpg|png|gif|jpeg|bmp)/", $file);
         if ($match) {
            if($file == "." or $file == ".."){
                //...
            } else { 
                $list3 = array(
                'file' => 'images/'.$file;
                array_push($list, $list3);
            }
        }}
    }

    $return_array = array('files'=> $list);

    echo json_encode($return_array);
}

?>