<?php
    $nameerr = "";
    $pageerr = "";
    $priceerr = "";
    $barerr = "";
    $autherr = "";

    if(isset($_POST["insert"])){
        $id = $_GET['book_id'];
        $sql_edit = "SELECT * FROM books WHERE book_id=$id";
        $result = mysqli_query($connection, $sql_edit);
        $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST["updt"])){
        include "validation.php";
        if($errC==0){
            $sql_update = "UPDATE books name='$name', pages='$page', price='$price', barcode='$bar', author='$author'
            WHERE book_id = $id";
            mysqli_query($connection, $sql_update);
            // ?header('location: ')
        }
    }
?>
<article>
    <form method="post">
        <h1>Edit Book</h1>
        Name
        <br>
        <input type="text" name="name"><span><?=$nameerr?></span>
        <br>
        Author
        <br>
        <input type="number" name="auth"><span><?=$autherr?></span>
        <br><br>
        <input type="submit" name="insert" value="Edit">
    </form>
</article>