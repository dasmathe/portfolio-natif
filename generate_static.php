<?php
// Dossier source (où sont tes fichiers PHP)
$sourceDir = __DIR__;
// Dossier de sortie pour les fichiers HTML
$outputDir = __DIR__ . '/output';

// Crée le dossier output s'il n'existe pas
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0755, true);
}

// Liste tous les fichiers PHP (sauf ce script)
$files = glob("$sourceDir/*.php");

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