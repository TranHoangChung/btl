<?php
    require_once("../../connect.php");
    class addRepository{
        public function insert($name){
            global $conn;
            $sql = "insert into category(name) values('$name')"; 
            mysqli_query($conn,$sql);     
        }
        public function getAll(){
            global $conn;
            $sql = "select * from category"; 
            return mysqli_query($conn,$sql);     
        }
        public function getById($id){
            global $conn;
            $sql = "select * from category where id=$id"; 
            return mysqli_query($conn,$sql)->fetch_assoc();
        }
        public function deleteById($id){
            global $conn;
            $sql = "delete from category where id=$id"; 
            mysqli_query($conn,$sql);
        }
        public function updateById($id,$name){
            global $conn;
            $sql = "update category set name='$name' where id=$id"; 
            mysqli_query($conn,$sql);
    }
}
?>