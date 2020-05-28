<?php
    $query = "SELECT book_id, name FROM books";
    $result = mysqli_query($connection, $query);
    if(isset($_GET["remove"])){
        $remove = $_GET["remove"];
        $delete_query = "DELETE FROM books WHERE book_id='$remove'";
        mysqli_query($connection, $delete_query);
        header('location: /?top=delete');
    }
?>
<article>
    <H1>Remove Book</H1>
    <?php
        while($row = mysqli_fetch_assoc($result)){
            echo "<p><a href='?top=deleteremove=".$row["book_id"]."'>".$row["name"]."</a></li>";
        }
    ?>
</article>