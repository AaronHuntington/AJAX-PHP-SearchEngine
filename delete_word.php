<?php
    include('includes/config.php');
    include('includes/init.php');

    $words = new uplifting_words;

    $id = $_GET['id'];
    $word = $_GET['word'];

    $words->delete_word($id);

    session_start();

    $_SESSION['deleted_word'] = $word.' has been deleted.';

    header("Location: index.php");
?>