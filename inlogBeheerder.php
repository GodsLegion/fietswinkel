<?php include 'includes/header.php'; ?>
<body>
    <div class="container">
        <h1>beheerder inlog</h1>
    <form action="config/checkLoginBeheerder.php" method="POST">
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="password">Wachtwoord</label>
        <input type="password" name="password">
        <input type="submit" name="login">
    </form>


    </div>
</body>
<?php include 'includes/footer.php'; ?>