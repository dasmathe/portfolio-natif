<?php
try {
    // Dossier source (où sont tes fichiers PHP)
    $sourceDir = __DIR__;
    // Dossier de sortie pour les fichiers HTML
    $outputDir = __DIR__ . '/output';

    echo "Source Directory: $sourceDir\n";
    echo "Output Directory: $outputDir\n";
    if (!is_writable($outputDir)) {
        throw new Exception("Le dossier de sortie n'est pas accessible en écriture : $outputDir");
    }

    // Crée le dossier output s'il n'existe pas
    if (!is_dir($outputDir)) {
        mkdir($outputDir, 0755, true);
    }
    
    if (!chmod($outputDir, 0755)) {
        throw new Exception("Impossible de modifier les permissions du dossier de sortie");
    }
    
    // Liste tous les fichiers PHP (sauf ce script)
    $files = glob("$sourceDir/*.php");
    if ($files === false) {
        throw new Exception("Impossible de lire les fichiers dans $sourceDir");
    }

    // Convertit chaque fichier PHP en HTML
    foreach ($files as $file) {
        $outputFile = $outputDir . '/' . basename($file, '.php') . '.html';
        
        // Capture le rendu PHP en HTML
        ob_start();
        include $file;
        $htmlContent = ob_get_clean();

        // Enregistre le fichier HTML généré
        file_put_contents($outputFile, $htmlContent);
        echo "Generated: $outputFile\n";
    }

    echo "Conversion terminée !";
}
catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "\n";
    exit(255);
}