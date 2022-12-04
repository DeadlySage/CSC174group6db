<?php
    class crud{
        // private database object
        private $db;

        //constructor to initialize private var to the the database connection
        function __construct($conn){
            $this->db = $conn;
        }

        public function insert($pname){
            try {
                //insert SQL statement for execution
                $sql = "INSERT INTO POKEMON_LIST (pname) VALUES (:pname)";
                
                //prepare sql statemtn for execution
                $stmt = $this->db->prepare($sql);

                //replace placeholder with to actual values
                $stmt->bindParam(':pname',$pname);

                //execute insert statement
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getPokemon(){
            $sql = "SELECT * FROM POKEMON_LIST";
            $result = $this->db->query($sql);
            return $result;
        }

    }
?>