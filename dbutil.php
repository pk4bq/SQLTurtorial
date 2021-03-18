//Pooja Kaji
//pk4bq

<?php
class DbUtil{
        public static $loginUser = "pk4bq";
        public static $loginPass = "Cheesedoodles00.";
        public static $host = "usersrv01.cs.virginia.edu"; // DB Host
        public static $schema = "pk4bq"; // DB Schema

        public static function loginConnection(){
                $db = new mysqli(DbUtil::$host, DbUtil::$loginUser, DbUtil::$loginPass, DbUtil::$schema);

                if($db->connect_errno){
                        echo("Could not connect to db");
                        $db->close();
                        exit();
                }

                return $db;
        }

}
?>
