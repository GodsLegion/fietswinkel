<?php include 'includes/header.php'; ?>
<?php include('config/fietsen.php'); ?>
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
    <?php $results = db_connect()->query("SELECT * FROM fietsen WHERE type='heren'"); ?>


<!--    <div class="fiets">-->
<!--        --><?php //while($row = $results->fetch_assoc()) { ?>
<!--            <div>-->
<!--                <a href="detail.php?id=--><?php //echo$row['ID']; ?><!--">-->
<!--                    <img src="--><?php //echo$row['afbeelding']; ?><!--" height="200" width="200">-->
<!--                    <h2>--><?php //echo$row['titel']; ?><!--</h2>-->
<!--                    <h2>€--><?php //echo$row['prijs']; ?><!--</h2>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div style="width: 20px"></div>-->
<!--        --><?php //} ?>
<!--    </div>-->


    <table>
    <?php while($row = $results->fetch_assoc()) { ?>
        <tr>
            <td rowspan="2"><img src="<?php echo$row['afbeelding']; ?>" height="100px" width="100px"></td>
            <td><?php echo$row['titel']; ?></td>
            <td>€<?php echo$row['prijs']; ?></td>
            <td><?php echo$row['elektrisch']; ?></td>
            <td><?php echo$row['kleur']; ?></td>
            <td><?php echo$row['versnellingen']; ?></td>
        </tr>
        <tr>
            <td><?php echo$row['merk']; ?></td>
            <td><?php echo$row['model']; ?></td>
        </tr>

    <?php } ?>
    </table>

</div>
<?php include 'includes/footer.php'; ?>
