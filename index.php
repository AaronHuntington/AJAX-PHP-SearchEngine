<?php
	include('includes/config.php');
	include('includes/header.php');
    session_start();

    $words = new uplifting_words;
?>
<script>
    $(document).ready(function(){
        $('#search').keyup(function(){
            var search = $('#search').val();
        
            $.ajax({
                url:'search.php',
                data:{search:search},
                type: 'POST',
                success:function(data){
                    if(!data.error) {
                        $('#result').html(data);
                    }
                }
            });
        }); 
    }); //Document ready function end.
</script>

    <section class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="text-center">PHP-AJAX Search Engine Template</h1>
        </div>
    </section>

	<section class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-3">
                <div class="row">
                    <h3>Search for Uplifting Words</h3>
                    <input 
                        class='form-control' 
                        type="text" 
                        name='search' 
                        id='search' 
                        placeholder='Search our Inventory'>
                </div>
                <br><br>
                <div class="row">
                    <h3>Word Entry</h3>
                    
                    <?php
                        if(isset($_SESSION['word_entry'])){
                            echo '<p>'.$_SESSION['word_entry'].'</p>';
                        }
                    ?>

                    <form method="post" id="" class="" action="add_word.php">
                        <div class="form-group col-md-12">
                            <label>Word</label>
                            <input type="text" name="word" class="form-control" placeholder='Enter Uplifting Word'>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="definition">Definition</label>
                            <br>
                            <textarea id="definition" name="definition" class="col-md-12">
                            </textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-pro-primary" value="Add Uplifting Word">
                        </div>
                    </form>
                </div>
            </div>
    		<div class="col-md-9">
    			<h1>Results</h1>

                <?php
                        if(isset($_SESSION['deleted_word'])){
                            echo '<h4 class="text-center" style="background: red; color: white; font-weight: bold; padding: 2px 0;">';
                            echo  $_SESSION['deleted_word'];
                            echo '</h4>';
                        }
                        session_unset();
                ?>
                <div id="result">
                </div>
    		</div>
        </div>
	</section>
<?php include('includes/footer.php'); ?>