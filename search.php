<?php
    include('includes/config.php');
    include('includes/init.php');


    $words = new uplifting_words;
    $word = $_POST['search'];

    $searched_words = $words->search_words($word);
    // echo '<pre>';
    // var_dump($searched_words);
?>
        <table>
            <tr class="row">
                <th class='col-md-2'>ID</th>
                <th class='col-md-4'>Word</th>
                <th class='col-md-6'>Definition</th>
            </tr>
<?php
    foreach($searched_words as $word){
?>
            <tr class='row'>
                <td class='col-md-2'><?php echo $word['id'];?></td>
                <td class='col-md-4'><?php echo $word['words'];?></td>
                <td class='col-md-6'><?php echo $word['definition'];?></td>
            </tr>
<?php
    }
?>
        </table>