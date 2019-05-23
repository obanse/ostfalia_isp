<?php 
// Session starten
session_start();

// HTML Header-Daten einbinden
include('./template/header.php');

/**
 * Ueberprueft ob Variable gesetzt ist und gibt diese aus. Im Fehler-Fall wird eine Fehlermeldung ausgegeben
 * @* @param string $var Zu überprüfende Variable
 * @* @return string
 */
function getVar($var): string {
    if (isset($_POST["$var"]) && $_POST["$var"] != "") {
        return $_POST["$var"];
    } elseif (isset($_SESSION["$var"]) && $_SESSION["$var"] != "") {
        return $_SESSION["$var"];
    } else {        
        return "<span class='form-empty'>nicht angegeben!<span>";
    }
}
?>


<body>
    <main class="flex-main flex-container">  

        <!-- Ueberschrift -->
        <h1>Wunschübersicht</h1>

        <!-- Formular: Ausgabe Wuensche -->
        <section class="form-output-wishes">
            <p><strong>1. Wunsch:</strong> <?php echo getVar("wunschEins"); ?></p>
            <p><strong>2. Wunsch:</strong> <?php echo getVar("wunschZwei"); ?></p>
            <p><strong>3. Wunsch:</strong> <?php echo getVar("wunschDrei"); ?></p>
        </section>
        
        <!-- Formular: Ausgabe Lieferangaben -->
        <section class="form-output-delivery">
            <p><strong>Vor- und Nachname:</strong> <?php echo getVar("name"); ?></p>
            <p><strong>PLZ und Ort:</strong> <?php echo getVar("city"); ?></p>
            <p><strong>Telefon:</strong> <?php echo getVar("phone"); ?></p>
        </section>

    </main>
</body>

<?php include('./template/footer.php'); ?>
