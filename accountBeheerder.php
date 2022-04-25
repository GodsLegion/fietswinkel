<?php include 'includes/header.php'; ?>
<?php include('config/CRUD.php'); ?>
<?php 
        if(isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $update = true;
            $record = $db->query("SELECT * FROM fietsen WHERE ID=$id");    //aanpassen nieuwe database
            
            if($record->num_rows > 0) {
                $n = $record->fetch_array();
                $prijs = $n['prijs'];             //aanpassen nieuwe database 
                $titel = $n['titel'];       //aanpassen nieuwe database
                $beschrijving = $n['beschrijving']; 
                $type = $n['type']; 
                $afbeelding = $n['afbeelding']; 
                $merk = $n['merk']; 
                $model = $n['model']; 
                $kleur = $n['kleur']; 
                $versnellingen = $n['versnellingen']; 
                $elektrisch = $n['elektrisch']; 
            }
        }
    ?>
<body>
    <div class="container">
<h1>beheerder ingelogged</h1>
<?php
//session_start();

// checkt of je ingelogd bent zo nee ga je naar de inlog pagina
if(!isset($_SESSION['gebruiker'])){
    header("location: inlog.php");
    exit;
}


//als je bent ingeloged zie je dit
//echo "Welkom " . $_SESSION['klanten']['voornaam'] . " " . $_SESSION['klanten']['achternaam'] . "!";
?>





<?php if(isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php 
                echo$_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
            </div>
            <?php endif?>
        
            <?php $results = $db->query("SELECT * FROM fietsen"); ?>       <!--aanpassen nieuwe database -->
            
            <table>
                <thead>
                    <tr>
                    
                        <th>prijs</th>                     <!--aanpassen nieuwe database -->
                        <th>titel</th>                  <!--aanpassen nieuwe database -->
                        <th>beschrijving</th>   
                        <th>type</th>   
                        <th>afbeelding</th>   
                        <th>merk</th>   
                        <th>model</th>   
                        <th>kleur</th>   
                        <th>versnellingen</th>   
                        <th>elektriesch</th>   

                        <th colspan="2">Action</th>

                    </tr>
                </thead>
                
                <!--loop blijf door de database lopen -->
                <?php while($row = $results->fetch_assoc()) { ?>
                    <tr>

                        <td><?php echo$row['prijs']; ?></td>
                        <td><?php echo$row['titel']; ?></td>
                        <td><?php echo$row['beschrijving']; ?></td>
                        <td><?php echo$row['type']; ?></td>
                        <td><?php echo$row['afbeelding']; ?></td>
                        <td><?php echo$row['merk']; ?></td>
                        <td><?php echo$row['model']; ?></td>
                        <td><?php echo$row['kleur']; ?></td>
                        <td><?php echo$row['versnellingen']; ?></td>
                        <td><?php echo$row['elektrisch']; ?></td>
                        
                        <!-- edit knop-->
                        <td>
                            <a href="accountBeheerder.php?edit=<?php echo $row['ID']; ?>" class="edit_btn" >Edit</a>  
                        </td>
                        
                        <!-- delete knop-->
                        <td>
                            <a href="config/CRUD.php?del=<?php echo $row['ID']; ?>" class="del_btn">Delete</a>
                        </td>
                    
                    </tr>
                <?php } ?>
            </table>



        <form method="post"action="config/CRUD.php">

        <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <!--invoerveld naam-->
            <div class="input-group">
                <label>prijs</label> 
                <input type="text" name="prijs" value="<?php echo $prijs; ?>">
            </div>

            <!--invoerveld adres-->
            <div class="input-group">
                <label>titel</label>
                <input type="text" name="titel" value="<?php echo $titel; ?>">
            </div>

            <div class="input-group">
                <label>beschrijving</label>
                <input type="text" name="beschrijving" value="<?php echo $beschrijving; ?>">
            </div>

            <div class="input-group">
                <label>type</label>
                <input type="text" name="type" value="<?php echo $type; ?>">
            </div>

            <div class="input-group">
                <label>afbeelding</label>
                <input type="text" name="afbeelding" value="<?php echo $afbeelding; ?>">
            </div>

            <div class="input-group">
                <label>merk</label>
                <input type="text" name="merk" value="<?php echo $merk; ?>">
            </div>

            <div class="input-group">
                <label>model</label>
                <input type="text" name="model" value="<?php echo $model; ?>">
            </div>
                
            <div class="input-group">
                <label>kleur</label>
                <input type="text" name="kleur" value="<?php echo $kleur; ?>">
            </div>

            <div class="input-group">
                <label>versnellingen</label>
                <input type="text" name="versnellingen" value="<?php echo $versnellingen; ?>">
            </div>

            <div class="input-group">
                <label>elektriesch</label>
                <input type="text" name="elektrisch" value="<?php echo $elektrisch; ?>">
            </div>

            <!--is statement die kijkt of die een update of nieuwe gebruiker moet maken-->
            <div class="input-group">
            <?php if ($update == true): ?>
                <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
                <?php else: ?>
                    <button class="btn" type="submit" name="save">Save</button>
                <?php endif ?>
                

            </div>
        </form>
















<a href="logout.php"></br></br>Logout</a>


    </div>


<?php include 'includes/footer.php'; ?>