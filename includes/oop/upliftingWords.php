<?php

    class uplifting_words{

        public $word;
        public $definition;

        public function search_words($searched_word){

            global $database;

            $sql = "SELECT * FROM uplifting_words WHERE words LIKE '$searched_word%' ";
            $query = $database->query($sql);

            $data = array();
            while($row = mysqli_fetch_array($query)){
                // $data[] = $row['id'];
                // $data[] = $row['words'];
                $data[] = $row;
            }
            return $data;
        }

        public function enter_word(){
            
        }

    }


?>