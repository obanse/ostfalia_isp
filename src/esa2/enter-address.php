<html>
    <body>
        <h1>Lieferangaben</h1>

        <p>1. Wunsch: <?php echo $_POST["wishOne"]; ?></p>
        <p>2. Wunsch: <?php echo $_POST["wishTwo"]; ?></p>
        <p>3. Wunsch: <?php echo $_POST["wishThree"]; ?></p>

        <form action="wishes.php" method="POST">
            <label>Vor- und Nachname: </label>
            <input type="text" name="name" /><br>
            <label>PLZ und Ort: </label>
            <input type="text" name="city" /><br>
            <label>Telefon: </label>
            <input type="text" name="phone" /><br>
            <button type="reset">Abbrechen</button>
            <button type="submit">OK</button>
        </form>

    </body>
</html>
