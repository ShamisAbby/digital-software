<?php
if(isset($_GET['file'])){

    $file = $_GET['file'];
    $read = '../assets/articles/'.$file;

    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $file . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($read);
}
