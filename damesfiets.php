<?php include 'includes/header.php'; ?>
<?php include('config/fietsen.php'); ?>



<body>
    <div class="container">


    <?php if(isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php 
                echo$_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
            </div>
            <?php endif?>
        
            <!--database verbinding met de querry-->
            <?php $results = db_connect()->query("SELECT * FROM fietsen WHERE type='dames'"); ?>


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


                <!--loop die alles op het scherm print-->
                <?php while($row = $results->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo$row['prijs']; ?></td>      <!--aanpassen nieuwe database-->
                        <td><?php echo$row['titel']; ?></td>      <!--aanpassen nieuwe database-->
                        <td><?php echo$row['beschrijving']; ?></td>        <!--aanpassen nieuwe database-->
                        <td><?php echo$row['type']; ?></td>  
                        <td><?php echo$row['afbeelding']; ?></td>   
                        <td><?php echo$row['merk']; ?></td>   
                        <td><?php echo$row['model']; ?></td>   
                        <td><?php echo$row['kleur']; ?></td>   
                        <td><?php echo$row['versnellingen']; ?></td> 
                        <td><?php echo$row['elektrisch']; ?></td>            <!--aanpassen nieuwe database-->

                    </tr>

                <?php } ?>







    </div>
</body>


<?php include 'includes/footer.php'; ?>