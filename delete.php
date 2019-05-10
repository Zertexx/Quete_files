<?php

if (file_exists('upload/'. $_GET['delete'])){
    unlink('upload/'. $_GET['delete']);
    header('Location: index.php');
}