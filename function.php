<?php

function validate($array){
    foreach($array as $key=>$value) {
        if ($key == "name") {
            if (strlen($value) == 0 || strlen($value) > 55) {
                echo "Ops error";
                return false;
            }
        }
            if ($key == "surname") {
                if (strlen($value) == 0 || strlen($value) > 55) {
                    echo "Ops error";
                    return false;
                }
            }
                if ($key == "email") {
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)  || strlen($value) > 255) {
                        echo "email is not valid";
                        return false;
                    }
                }
                if ($key == "message") {
                    if (strlen(trim($value)) == 0 || strlen($value) > 255) {
                        echo "Ops error";
                        return false;
                    }
                }
    }

    return true;
}
//var_dump(validate($array));

function write_file($array, $patch){
    if(!file_exists('database')) {
        mkdir('database');
    }
    $oldArr=read_file($patch);
    if(!$oldArr){
        $allArr=[$array];
    }else{
        $allArr=$oldArr;
        array_push($allArr,$array);
    }
    $rez=file_put_contents($patch, serialize($allArr));
    return $rez;
}

function read_file($patch){
    if(file_exists($patch)){
        $str=file_get_contents($patch);
        $array=unserialize($str);

        return $array ? $array :[];
    }else{
        return [];
    }
}

function messageFormat($array){
    foreach($array as $key=>$value){
        if($key=="message"){
            $value=nl2br($value);
        }
    }
    return $array;
}

function view($name_view, $data =[], $arr=[]){
    include"teamPlates/header.php";
    include"teamPlates/{$name_view}.php";
}

function file_delete($array){
    foreach($array as $value){
        $file_name=$value['file_ini'];
   if(file_exists('file/'.$file_name)){
       unlink('file/'.$file_name);
   }
    }

}
