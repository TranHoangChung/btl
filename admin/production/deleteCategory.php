<?php
    require_once("../../backend/filterAdmin.php");
    require_once("../../repository/addRepository.php");
    $addRepository = new addRepository();
    $addRepository->deleteById($_GET['id']);
    echo "<script>alert('Xóa thành công');
        window.location.href='category.php';
        </script>";
?>