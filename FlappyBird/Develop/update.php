<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuovoNomeFile = $_POST["nomeNuovoFile"];
    
    // Scrivi il nuovo nome del file nella variabile nel file di configurazione
    include_once("imagename.php");

    // Verifica l'estensione del file
    $estensioneFile = pathinfo($nuovoNomeFile, PATHINFO_EXTENSION);
    $estensioniPermesse = array("jpg", "jpeg", "png");
    
    if (!in_array($estensioneFile, $estensioniPermesse)) {
      echo "Error: File extension not allowed.";
      exit;
    }
    
    // Verifica il nome del file
    if (!preg_match('/^[a-zA-Z0-9.]+$/', $nuovoNomeFile)) {
      echo "Errore: Only letters , numbers and dots are accepter";
      exit;
    }

    $imagename = $nuovoNomeFile;
    file_put_contents("imagename.php", "<?php\n\$imagename = \"$imagename\";\n?>");
    
    // Reindirizza a form.php dopo l'aggiornamento
    header("Location: form.php");
    exit;
  }
?>