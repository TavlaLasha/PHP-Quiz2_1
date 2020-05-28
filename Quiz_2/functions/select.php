<article>
    <?php
        if(isset($_GET["cat"])){
            $cat = $_GET["cat"];
            $query = "SELECT * FROM books WHERE name = '$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($resilt);
    ?>
    <h3>Book</h3>
    <div>
        Name: <?=$row['name']?>
    </div>
    <div>
        Pages: <?=$row['pages']?>
    </div>
    <div>
        Price: <?=$row['price']?>
    </div>
    <div>
        Barcode: <?=$row['barcode']?>
    </div>
    <div>
        Author: <?=$row['author']?>
    </div>
    <br>
    <?php
    }
    ?>
</article>