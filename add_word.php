<?php
    include('includes/config.php');
    include('includes/init.php');

    $words = new uplifting_words;

    $word = $_POST['word'];
    $definition = $_POST['definition'];

    $words->word = $word;
    $words->definition = $definition;

    $words->enter_word();

    echo 'word: '.$words->word; 
    echo '<br>';
    echo 'definition: '.$words->definition;


    session_start();

    $_SESSION['word_entry'] = $word.' has been entered.';

    header("Location: index.php");
?>
