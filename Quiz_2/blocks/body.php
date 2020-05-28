<div id="cont">
    <nav>
        <ul>
            <?php
                $query = "SELECT * FROM books";
                $result = mysqli_query($connection, $query);
                if(!$result){
                    die("Error!");
                }
                while($row = mysqli_fetch_assoc($result)){
                    echo "<li><a href='?cat=".$row["name"]."'>".$row["name"]." "."<a href='?book_id=".$row["book_id"]."'><button>EDIT</button></a></li>";
                }
            ?>
        </ul>
    </nav>
</div>
<?php
    if(isset($_GET['top']) && $_GET['top']=='insert'){
        include "functions/info.php";
    }else if(isset($_GET['top']) && $_GET['top']=='delete'){
        include "functions/delete.php";
    }else if(isset($_GET['id'])){
        include "functions/edit.php";
    }else{
        include "functions/select.php";
    }
?>