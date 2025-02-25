<?php
try {
    // Dossier source (où sont tes fichiers PHP)
    $sourceDir = __DIR__;
    // Dossier de sortie pour les fichiers HTML
    $outputDir = __DIR__ . '/output';

    echo "Source Directory: $sourceDir\n";
    echo "Output Directory: $outputDir\n";

    // Crée le dossier output s'il n'existe pas
    if (!is_dir($outputDir)) {
        if (!mkdir($outputDir, 0755, true)) {
            throw new Exception("Impossible de créer le dossier de sortie : $outputDir");
        }
    }

    // Vérifie si le dossier est bien accessible en écriture
    if (!is_writable($outputDir)) {
        throw new Exception("Le dossier de sortie n'est pas accessible en écriture : $outputDir");
    }

    // Liste tous les fichiers PHP sauf ce script
    $files = glob("$sourceDir/*.php");

    if ($files === false) {
        throw new Exception("Impossible de lire les fichiers dans $sourceDir");
    }

    foreach ($files as $file) {
        // Exclure ce script et éviter d'inclure des fichiers déjà générés
        if ($file === __FILE__ || strpos($file, 'output/') !== false) {
            continue;
        }

        $outputFile = $outputDir . '/' . basename($file, '.php') . '.html';

        // Capture le rendu PHP en HTML
        ob_start();
        include $file;
        $htmlContent = ob_get_clean();

        // Enregistre le fichier HTML généré
        if (file_put_contents($outputFile, $htmlContent) === false) {
            throw new Exception("Impossible d'écrire dans le fichier : $outputFile");
        }

        echo "Generated: $outputFile\n";
    }

    echo "Conversion terminée !";
}
catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "\n";
    exit(255);
}