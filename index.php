<?php
	include('includes/config.php');
	include('includes/header.php');

    $words = new uplifting_words;
?>
<script>
    $(document).ready(function(){
        $.ajax({
            url: 'display_cars.php',
            type: 'POST',
            success: function(show_cars){
                if(!show_cars.error){
                    ("#show-cars").html("HELLO IT WORKS");
                }
            }
        });
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
        
        // This code adds cars to the database table cars . 
        $("#add-car-form").submit(function(evt){
            
            evt.preventDefault();
        
            var postData = $(this).serialize();
            var url = $(this).attr('action');
            
            $.post(url, postData, function(php_table_data){
                $("#car-result").html(php_table_data);
            });
        }); // Add Car code function ends.
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
                <div id="result">
                </div>
    		</div>
        </div>
	</section>
<?php include('includes/footer.php'); ?>