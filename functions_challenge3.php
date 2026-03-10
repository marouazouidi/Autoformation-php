<?php
function isAdult($age){
    if($age >= 18){
        return true;
    }else{
        return false;
    }
}

$check = isAdult(17);
if($check){
    echo "Access Granted";
}else{
    echo "Access Denied";
}
?>