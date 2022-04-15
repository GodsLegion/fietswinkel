<?php include "config/aanmelden.php"; ?>
<?php include 'includes/header.php'; ?>
<body>


 <?php
 
 require_once('config/userFunctions.php');
 // Check for user registration
 $newUser = null;
 if (isset($_POST['register'])){
     $newUser = registerUser($_POST['voornaam'], $_POST['achternaam'], $_POST['email'], $_POST['wachtwoord'], 
                                $_POST['land'], $_POST['stad'], $_POST['postcode'], $_POST['straatnaam'],$_POST['huisnummer'],);
         print_r($_POST);
     }
 ?>
     <div class="page registreren">
         <div class="container">
             <h1>Registreren</h1>
             <?php if ($newUser === 1){ ?>
                 <p>Nieuwe gebruiker succesvol toegevoegd!</p>
             <?php }else{ ?>
             
             <form action="#" method="post">
                 
                 <div class="inputRow">
                     <label for="firstName">Voornaam</label>
                     <input type="text" name="voornaam">
                 </div>
                 
                 <div class="inputRow">
                     <label for="lastName">Achternaam</label>
                     <input type="text" name="achternaam">
                 </div>
                 
                 <div class="inputRow">
                     <label for="email">Email</label>
                     <input type="email" name="email">
                 </div>
                 
                 <div class="inputRow">
                     <label for="password">Wachtwoord</label>
                     <input type="password" name="wachtwoord">
                 </div>

                 <div class="inputRow">
                     <label for="firstName">land</label>
                     <input type="text" name="land">
                 </div>

                 <div class="inputRow">
                     <label for="firstName">stad</label>
                     <input type="text" name="stad">
                 </div>

                 <div class="inputRow">
                     <label for="firstName">postcode</label>
                     <input type="text" name="postcode">
                 </div>

                 <div class="inputRow">
                     <label for="firstName">straatnaam</label>
                     <input type="text" name="straatnaam">
                 </div>

                 <div class="inputRow">
                     <label for="firstName">huisnummer</label>
                     <input type="text" name="huisnummer">
                 </div>
                 
                 <div class="inputRow">
                     <input type="submit" name="register" value="Registreer">
                 </div>
             
             </form>
             <?php } ?>
         </div>
     </div>
 

</body>
<?php include 'includes/footer.php'; ?>