<?php
include 'includes/header.php';
include('config/fietsen.php');
?>
<body>
<?php if(isset($_SESSION['message'])): ?>
    <div class="msg">
        <?php
        echo$_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php endif?>

<!--database verbinding met de querry-->
<?php $results = db_connect()->query("SELECT * FROM fietsen"); ?>
    <div class="container">
        <div class="fiets">
            <?php while($row = $results->fetch_assoc()) { ?>

                    <div>
                        <a href="detail.php?id=<?php echo$row['ID']; ?>">
                            <img src="<?php echo$row['afbeelding']; ?>" height="200" width="200">
                            <h2><?php echo$row['titel']; ?></h2>
                            <h2>€<?php echo$row['prijs']; ?></h2>
                        </a>
                    </div>
                    <div style="width: 20px"></div>

            <?php } ?>
        </div>
    </div>


</body>
<?php
include 'includes/footer.php';
?>