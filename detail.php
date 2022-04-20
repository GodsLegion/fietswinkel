<?php include 'includes/header.php'; ?>
<?php include('config/fietsen.php'); ?>

<?php
$id = $_GET['id'];
?>


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
    <?php $results = db_connect()->query("SELECT * FROM fietsen WHERE ID = $id "); ?>

        <?php while($row = $results->fetch_assoc()) { ?>
            <img src="<?php echo$row['afbeelding']; ?>" style="width: 500px; height: 400px;">
            <h2><?php echo$row['titel']; ?></h2>
            <h2>€<?php echo$row['prijs']; ?>,00</h2>
            <form action="" method="post">

                <button>In winkelwagen</button>
            </form>

            <br>
            <br>
            <h2>Beschrijving</h2>
            <div><?php echo$row['beschrijving']; ?></div>
            <table>
                <tr>
                    <th>type</th>
                    <td><?php echo$row['type']; ?></td>
                </tr>
                <tr>
                    <th>merk</th>
                    <td><?php echo$row['merk']; ?></td>
                </tr>
                <tr>
                    <th>model</th>
                    <td><?php echo$row['model']; ?></td>
                </tr>
                <tr>
                    <th>kleur</th>
                    <td><?php echo$row['kleur']; ?></td>
                </tr>
                <tr>
                    <th>versnellingen</th>
                    <td><?php echo$row['versnellingen']; ?></td>
                </tr>
                <tr>
                    <th>elektrisch</th>
                    <td><?php echo$row['elektrisch']; ?></td>
                </tr>
            </table>
        <?php } ?>

</div>



<?php include 'includes/footer.php'; ?>
