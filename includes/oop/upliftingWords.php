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

            global $database; 

            $word       = $database->escape_string($this->word);
            $definition = $database->escape_string($this->definition);

            $sql = "INSERT INTO uplifting_words (`words`,`definition`) 
                VALUES ('{$word}','{$definition}')";

            $to_database = $database->query($sql);

            return $to_database;
        }

        public function delete_word($id){

            global $database;

            $sql = "DELETE FROM uplifting_words WHERE id='".$id."'";
            return $database->query($sql);
        }

    }


?>