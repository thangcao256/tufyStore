<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once  ($filepath.'/../lib/database.php');
    include_once  ($filepath.'/../helpers/format.php');
?>
<?php
    class producer{
        private $db;
        private $fm;

        public function __construct() {
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function getproducer(){
            $query = "SELECT * FROM nhasanxuat";
            $result = $this->db->select($query);
            return $result;
        }

        
    }
?>