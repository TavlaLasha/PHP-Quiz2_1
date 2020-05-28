<?php
    $nameerr = "";
    $pageerr = "";
    $priceerr = "";
    $barerr = "";
    $autherr = "";

    if(isset($_POST["insert"])){
        include "validation.php";
        if($errC==0){
            $sql = "INSERT INTO books (name, pages, price, barcode, author)
            VALUES ('$name', '$page', '$price', '$bar', '$author')";
            mysqli_query($connection, $sql);
            // ?header('location: ')
        }
    }
?>
<article>
    <form method="post">
        <h1>Add Book</h1>
        Name
        <br>
        <input type="text" name="name"><span><?=$nameerr?></span>
        <br>
        Author
        <br>
        <input type="number" name="auth"><span><?=$autherr?></span>
        <br><br>
        <input type="submit" name="insert" value="Add">
    </form>
</article>