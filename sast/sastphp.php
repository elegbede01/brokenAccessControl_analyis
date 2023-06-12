<!-- Auteur: Joseph ELEGBEDE -->
<?php
// Inclusion des dépendances de progpilot
require_once './vendor/autoload.php';

// Création d'une instance de Context
$context = new \progpilot\Context;
// Création d'une instance d'Analyzer
$analyzer = new \progpilot\Analyzer;

// Vérification des paramètres en ligne de commande
if ($argc < 2) {
    echo "Usage: php analyze.php <folder>\n";
    exit(1);
}

// Récupération du dossier racine à analyser à partir des paramètres en ligne de commande
$rootFolder = $argv[1];

// Analyse récursive du dossier racine
analyzeFolder($rootFolder);

/**
 * Analyse récursive d'un dossier et de ses sous-dossiers
 * @param string $folder Le dossier à analyser
 */
function analyzeFolder($folder)
{
    // Vérification si le dossier existe
    if (!is_dir($folder)) {
        echo "Error: $folder is not a valid folder.\n";
        return;
    }

    echo "Analyzing folder: $folder\n";

    // Récupération de tous les fichiers et dossiers du dossier
    $entries = scandir($folder);

    // Parcours de chaque entrée
    foreach ($entries as $entry) {
        // Exclusion des dossiers . et ..
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Chemin complet de l'entrée
        $entryPath = "$folder/$entry";

        // Vérification si l'entrée est un dossier
        if (is_dir($entryPath)) {
            // Analyse récursive du sous-dossier
            analyzeFolder($entryPath);
        } elseif (is_file($entryPath) && pathinfo($entryPath, PATHINFO_EXTENSION) == 'php') {
            // Analyse du fichier PHP
            analyzeFile($entryPath);
        }
    }
}

/**
 * Analyse un fichier PHP
 * @param string $file Le fichier à analyser
 */
function analyzeFile($file)
{
    global $context, $analyzer;

    echo "Analyzing file: $file\n";

    // Configuration du fichier à analyser dans le contexte
    $context->inputs->setFile($file);

    try {
        // Exécution de l'analyse
        $analyzer->run($context);
    } catch (Exception $e) {
        echo "Exception: ".$e->getMessage()."\n";
    }

    // Récupération des résultats de l'analyse
    $results = $context->outputs->getResults();

    // Filtrage des résultats basé sur le numéro CWE
    $filteredResults = filterResultsByCWE($results);

    // Création d'un dossier spécifique pour l'analyse
    $analysisFolder = createAnalysisFolder($file);

    // Enregistrement des résultats filtrés dans un fichier HTML
    saveFilteredResultsToHTML($analysisFolder, $filteredResults);

    // Affichage des résultats filtrés
    echo "Filtered Results:\n";
    printResults($filteredResults);
    echo "\n";
}

/**
 * Filtre les résultats en fonction du numéro CWE
 * @param array $results Les résultats de l'analyse
 * @return array Les résultats filtrés
 */
function filterResultsByCWE($results)
{
    $allowedCWEs = [
        'CWE_79', 'CWE_23', 'CWE_35', 'CWE_59', 'CWE_200', 'CWE_201', 'CWE_219',
        'CWE_264', 'CWE_275', 'CWE_276', 'CWE_284', 'CWE_285', 'CWE_352', 'CWE_359',
        'CWE_377', 'CWE_402', 'CWE_425', 'CWE_441', 'CWE_497', 'CWE_538', 'CWE_540',
        'CWE_548', 'CWE_552', 'CWE_566', 'CWE_601', 'CWE_639', 'CWE_651', 'CWE_668',
        'CWE_706', 'CWE_862', 'CWE_863', 'CWE_913', 'CWE_922', 'CWE_1275'
    ];

    $filteredResults = [];

    foreach ($results as $result) {
        if (isset($result['cwe']) && in_array($result['cwe'], $allowedCWEs)) {
            $filteredResults[] = $result;
        }
    }

    return $filteredResults;
}

/**
 * Crée un dossier spécifique pour l'analyse
 * @param string $file Le fichier analysé
 * @return string Le chemin du dossier d'analyse
 */
function createAnalysisFolder($file)
{
    $outputFolder = 'output';
    $fileName = basename($file, '.php');
    $analysisFolder = "$outputFolder/$fileName";

    // Vérification si le dossier d'analyse existe déjà
    if (!is_dir($analysisFolder)) {
        mkdir($analysisFolder, 0777, true);
    }

    return $analysisFolder;
}

/**
 * Enregistre les résultats filtrés dans un fichier HTML
 * @param string $folder Le dossier d'analyse
 * @param array $results Les résultats filtrés de l'analyse
 */
function saveFilteredResultsToHTML($folder, $results)
{
    // Chemin du fichier HTML de sortie
    $htmlFilePath = "$folder/results.html";

    // Ouverture du fichier en mode écriture
    $htmlFile = fopen($htmlFilePath, 'w');

    // Conversion des résultats en une chaîne de caractères formatée
    $formattedResults = formatResults($results);

    // Écriture du contenu HTML
    $htmlContent = "<pre>$formattedResults</pre>";

    // Écriture du contenu dans le fichier
    fwrite($htmlFile, $htmlContent);

    // Fermeture du fichier
    fclose($htmlFile);

    echo "Filtered HTML Results saved to: $htmlFilePath\n";
}

/**
 * Formatte les résultats pour l'affichage
 * @param array $results Les résultats de l'analyse
 */
function printResults($results)
{
    foreach ($results as $result) {
        echo "Vulnerability Name: {$result['name']}\n";
        echo "Vulnerability CWE: {$result['cwe']}\n";
        echo "Vulnerability ID: {$result['id']}\n";
        echo "Vulnerability Type: {$result['type']}\n\n";
    }
}
?>
