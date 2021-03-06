<?php 
// Session starten
session_start();
if (isset($_POST["wunschEins"])) {
    $_SESSION = $_POST;
}

// HTML Header-Daten einbinden
include('./template/header.php');

// Ueberpruefen wenn Variable gesetzt, dann ausgeben, sonst Fehlermeldung ausgeben

/**
 * Ueberprueft ob Variable gesetzt ist und gibt diese aus. Im Fehler-Fall wird eine Fehlermeldung ausgegeben
 * @* @param string $var Zu überprüfende Variable
 * @* @return string
 */
function getVar($var): string {
    if (isset($_POST["$var"]) && $_POST["$var"] != "") {
        return $_POST["$var"];
    } else {
        return "<span class='form-empty'>nicht angegeben!<span>";
    }
}

?>

<body>
    <main class="flex-main flex-container"> 

        <!-- Ueberschrift -->
        <h1>Lieferangaben</h1>

        <!-- Formular: Ausgabe Wuensche -->
        <section class="form-output-wishes">
            <p>1. Wunsch: <?php echo getVar("wunschEins"); ?></p>
            <p>2. Wunsch: <?php echo getVar("wunschZwei"); ?></p>
            <p>3. Wunsch: <?php echo getVar("wunschDrei"); ?></p>
        </section>

        <!-- Formular: Lieferangaben -->
        <section class="flex-form">
            <form action="./wishes.php" method="POST">

                <div class="flex-row">
                    <label class="lbl-delivery">Vor- und Nachname:</label>
                    <input type="text" name="name" />
                </div>

                <div class="flex-row">
                    <label class="lbl-delivery">PLZ und Ort:</label>
                    <input type="text" name="city" />
                </div>
                
                <div class="flex-row">
                    <label class="lbl-delivery">Telefon:</label>
                    <input type="tel" name="phone" />
                </div>                

                <div class="flex-row">
                    <button type="reset" class="btn-reset">Abbrechen</button>
                    <button type="submit" class="btn-submit">OK</button>
                </div>
                
            </form>
        <section>

    </main>
</body>

<?php include('./template/footer.php'); ?>
