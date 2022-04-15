<?php include 'includes/header.php'; ?>
<?php include('config/fietsen.php'); ?>

<?php 
        if(isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $update = true;
            $record = db_connect()->query("SELECT * FROM fietsen WHERE ID=$id");  //aanpassen nieuwe database
            
            if($record->num_rows > 0) {
                $n = $record->fetch_array();

                $prijs= $n['prijs'];
                $titel= $n['titel'];
                $beschrijving= $n['beschrijving'];
                $type= $n['type'];
                $afbeelding= $n['afbeelding'];
                $merk= $n['merk'];
                $model= $n['model'];
                $kleur="kleur";
                $versnellingen= $n['versnellingen'];
                $elektrisch= $n['elektrisch'];
            
            }
        }
    ?>


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
            <?php $results = db_connect()->query("SELECT * FROM fietsen WHERE type='heren'"); ?>
            
            <table>
                <thead>
                    <tr>
                        <th>prijs</th>        
                        <th>titel</th>       
                        <th>beschrijving</th>         
                        <th>type</th>   
                        <th>afbeelding</th>    
                        <th>merk</th>         
                        <th>model</th>  
                        <th>kleur</th>  
                        <th>versnellingen</th>  
                        <th>elektrisch</th>  
                    </tr>
                </thead>

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
            </table>






    </div>
</body>


<?php include 'includes/footer.php'; ?>