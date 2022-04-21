<?php include 'includes/header.php'; ?>
<?php include('config/fietsen.php'); ?>
<div class="container">
    <div class="winkelwagen">
    <?php if(isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php
            echo$_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif?>

    <?php $results = db_connect()->query("SELECT * FROM fietsen WHERE type='heren'"); ?>
    <?php
    $klantid = 1;
    $productid = [];
    $aantalp = [];
    $prijs = [];
    $aantal = 1;
    ?>
    <table class="mandje">
        <tr>
            <th colspan="2">Product</th>
            <th>Aantal</th>
            <th>prijs</th>
        </tr>
    <?php while($row = $results->fetch_assoc()) { ?>
        <tr>
            <td><a href="detail.php?id=<?php echo$row['ID']; ?>"><img src="<?php echo$row['afbeelding']; ?>" height="100px" width="100px"></a></td>
            <td><?php echo$row['titel']; ?>, <?php echo$row['versnellingen']; ?> versnellingen, <?php echo$row['elektrisch']; ?> elektrisch, <?php echo$row['kleur']; ?></td>
            <td><?php echo $aantal?></td>
            <td>€<?php echo$row['prijs']; ?></td>
            <?php
                array_push($productid, $row['ID']);
                array_push($aantalp, $aantal);
                array_push($prijs, $row['prijs']);
            ?>
        </tr>
    <?php } ?>
        <tr>
            <th colspan="2"></th>
            <th>Totaal</th>
            <td>€<?php echo array_sum($prijs) ?></td>
        </tr>
    </table>
    <button onclick="bestel(<?php echo $productid . "," . $klantid . "," . $aantalp?>)">Betaal</button>

    <?php
    function bestel($array, $klant, $hoeveelheid)
    {
        $nummer = 0;
        foreach ($array as $product)
        {
            db_connect()->query("INSERT INTO bestellingen(klantid, producktid, aantal, afgeleverd) VALUES '$klant', ($product[$nummer],$hoeveelheid[$nummer],false)");
            $nummer++;
        }

    }
    ?>

    </div>
</div>
<?php include 'includes/footer.php'; ?>
