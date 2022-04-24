<?php include 'includes/header.php'; ?>
<body>
    <div class="container">
    <form action="config/checkLogin.php" method="POST">
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="password">Wachtwoord</label>
        <input type="password" name="password">
        <input type="submit" name="login">
    </form>

</br>
</br>
</br>
</br>
</br>
<button type="button" class="btn btn-secondary"><a href="inlogbeheerder.php">admin inlog</a></button>

    </div>
</body>
<?php include 'includes/footer.php'; ?>