# BROKEN ACCESS CONTROL 

###  ANALYSE DES VULNERABILITES "Broken Access Control"  ###


# Objectifs
# OBJECTIF GÉNÉRAL
L’objectif principal de notre travail est détecter les faiblesses relatives au "Broken Access Control" sur les applications et plateformes web..
 
# OBJECTIFS SPÉCIFIQUES

De façon spécifique, les objectifs visés sont:  

1- Mettre en place une méthodologie de recherche et de détection rapide de faiblesses "Broken Access Control.  

2- Détecter les faiblesses relatives au "Broken Access Control" dans les plateformes ou applications web.

3- Proposer des pistes d'amélioration pour renforcer la sécurité des applications web;

4- Sensibiliser les développeurs et les équipes de sécurité à l'importance de la sécurité dès le début du processus de développement 

Pour atteindre ces objectifs, voici notre démarche"    

### Description de la démarche ###

### 1-S'approprier des vulnérabilités Broken Access Control

Cette démarche est basée sur l'identification et la détection des faiblesses CWE  (https://owasp.org/Top10/A01_2021-Broken_Access_Control/)| https://cwe.mitre.org/data/definitions/23.html relatives aux vulnérabilités "Broken Access Control".

Liste des CWEs associées soit des faiblesses liées au Broken Access COntrol

CWE-22 Improper Limitation of a Pathname to a Restricted Directory ('Path Traversal')

CWE-23 Relative Path Traversal

CWE-35 Path Traversal: '.../...//'

CWE-59 Improper Link Resolution Before File Access ('Link Following')

CWE-200 Exposure of Sensitive Information to an Unauthorized Actor

CWE-201 Exposure of Sensitive Information Through Sent Data

CWE-219 Storage of File with Sensitive Data Under Web Root

CWE-264 Permissions, Privileges, and Access Controls (should no longer be used)

CWE-275 Permission Issues

CWE-276 Incorrect Default Permissions

CWE-284 Improper Access Control

CWE-285 Improper Authorization

CWE-352 Cross-Site Request Forgery (CSRF)

CWE-359 Exposure of Private Personal Information to an Unauthorized Actor

CWE-377 Insecure Temporary File

CWE-402 Transmission of Private Resources into a New Sphere ('Resource Leak')

CWE-425 Direct Request ('Forced Browsing')

CWE-441 Unintended Proxy or Intermediary ('Confused Deputy')

CWE-497 Exposure of Sensitive System Information to an Unauthorized Control Sphere

CWE-538 Insertion of Sensitive Information into Externally-Accessible File or Directory

CWE-540 Inclusion of Sensitive Information in Source Code

CWE-548 Exposure of Information Through Directory Listing

CWE-552 Files or Directories Accessible to External Parties

CWE-566 Authorization Bypass Through User-Controlled SQL Primary Key

CWE-601 URL Redirection to Untrusted Site ('Open Redirect')

CWE-639 Authorization Bypass Through User-Controlled Key

CWE-651 Exposure of WSDL File Containing Sensitive Information

CWE-668 Exposure of Resource to Wrong Sphere

CWE-706 Use of Incorrectly-Resolved Name or Reference

CWE-862 Missing Authorization

CWE-863 Incorrect Authorization

CWE-913 Improper Control of Dynamically-Managed Code Resources

CWE-922 Insecure Storage of Sensitive Information

CWE-1275 Sensitive Cookie with Improper SameSite Attribute

Consulter ce lien en cas de mise à jour : https://owasp.org/Top10/fr/A01_2021-Broken_Access_Control/


Pour les détecter, nous utilisons deux méthodes: méthode d'analyse statique automatisée et méthode d'analyse dynamique semi-automatisée.

### 2-Méthode d'analyse 1: Analyse statique automatisée ###

Les tests de sécurité des applications statiques (SAST) sont utilisés pour sécuriser les logiciels en examinant le code source du logiciel pour identifier les sources de vulnérabilités. Le processus d'analyse statique du code source existe depuis que les ordinateurs existent, la technique s'est étendue à la sécurité à la fin des années 90 https://en.wikipedia.org/wiki/Static_application_security_testing.

Cette méthode analyse directement le code source du programme sans l’exécuter afin de déterminer la qualité de l'application web. L’analyse peut être effectuée à plusieurs niveaux du programme qui comprennent, entre autre, le niveau "unité" qui se concentre sur une portion de code sans prendre en compte le contexte général du programme et le niveau "système" où la globalité de l'application est analysée avec les différentes relations existantes entre les unités. Ce type d’analyse est susceptible de trouver un grand nombre de vulnérabilités, mais a souvent pour défaut de retourner beaucoup de fausses alertes https://owasp.org/www-community/Source_Code_Analysis_Tools et de durer dans le temps. L’analyse statique de code peut être effectuée manuellement, communément appelée la revue de code ou inspection de code, ou bien en utilisant des outils automatisés (Static Application Security Testing (SAST), on parle d'analyse statique automatisée \cite{theseRaounak}. Les outils d’analyse statique automatisée utilisés dans le cadre de notre travail seront abordées à la suite.

### Outil 1: Bearer ###  

   Bearer (\url{https://github.com/Bearer/bearer}) est un outil opensource de test statique de sécurité des applications (SAST) qui scanne le code source et analyse les flux de données pour découvrir, filtrer et hiérarchiser les risques de sécurité et les vulnérabilités conduisant à des expositions de données sensibles (PII, PHI).
   earer est entièrement personnalisable, de la création de vos propres règles à la détection des composants (base de données, API) et à la classification des données.
# Installation de Bearer #

Consulter ici https://github.com/Bearer/bearer
# Comment analyser du code avec Bearer
Le moyen le plus simple d'essayer Bearer est d'utiliser notre dossier de projet. Il convient de cloner ou de télécharger le projet opensource (le code source de l'application à tester) à un emplacement courant pour commencer.
# Utilisation # 

$ git clone https://github.com/Bearer/nom_projet.git

Maintenant, exécutez la commande scan avec bearer scan sur le répertoire du projet :
``` 
$ bearer scan nom_projet      
                                        
```
Nous obtenons  à la fin de l'opération un rapport complet.
L'exécution de Bearer ne devrait pas prendre plus de temps que l'exécution de votre suite de tests}.

Pour plus d'informations et de conseils d'utilisation, consultez la documentation. \url{https://docs.bearer.com/reference/datatypes/}

# Outil 2: Progpilot #

Progpilot (https://github.com/designsecurity/progpilot) est un outil d'analyse statique open-source pour détecter les vulnérabilités de sécurité dans le code PHP.{progpilot}.Progpilot peut détecter un large éventail de vulnérabilités de sécurité. Il est conçu pour être facile à utiliser et s'intègre parfaitement avec des environnements de développement PHP populaires tels que Visual Studio Code et Atom. Il peut également être utilisé en tant qu'outil en ligne de commande autonome.

# Installation de progpilot
Consulter la documentation: https://github.com/designsecurity/progpilot
# Comment utiliser progpilot
La commande progpilot prend en argument le chemin des fichiers et dossiers à analyser et éventuellement un fichier de configuration 

# Sans onfiguration du fichier 

``` 
$ progpilot example1.php example2.php folder1/ folder2/      
                                        
```
# Avec configuration du fichier 

```
 $ progpilot example1.php example2.php folder1/ folder2/       
                                        
```

Pour plus d'informations, consulter le fichier readme via https://github.com/designsecurity/progpilot#readme.
    
# Outil 3: Brakeman #

Brakeman est un outil open source d'analyse de sécurité statique pour Ruby on Rails. Il est conçu pour détecter les vulnérabilités de sécurité dans les applications Ruby on Rails.

Brakeman analyse le code source de l'application Ruby on Rails et génère un rapport de sécurité détaillé qui répertorie toutes les vulnérabilités de sécurité détectées, avec des recommandations pour les corriger. L'outil est facile à utiliser et peut être intégré dans des outils de développement tels que Jenkins et Travis CI pour automatiser l'analyse de sécurité.

Il est également capable de détecter les vulnérabilités de sécurité dans les bibliothèques tierces utilisées par l'application \citeurl{brakeman}.
Pour réaliser l'analyse statique automatisée, il est nécessaire d'accéder au code source, nous l'appliquons aux applications opensource dont le code source est disponible sur github.Ce sont les plateformes que nous allons selectionner à travers les lignes ci-après.\\

# Comment utiliser Brakeman? #

```
 $ brakeman /path/to/rails/application          
                                        
```
## Choix des outils ###

# Critères de choix # 

 Nous privilégions les outils opensource pour non seulement profiter de leur gratuité mais aussi de leur pleine puissance sans oublier les critères de choix de bon outil abordés par OWASP https://owasp.org/www-community/Source_Code_Analysis_Tools à savoir prend en charge votre langage de programmation, 
 capacité à détecter les vulnérabilités, basée sur le Top 10 de l'OWASP, la précision (taux de faux positifs/faux négatifs), note de 
 référence OWASP,capacité à comprendre les bibliothèques/frameworks dont vous avez besoin, disponibilité en tant que plug-in dans les 
 IDE de développeur préférés,facilité d'installation/d'utilisation,capacité à inclure dans les outils d'intégration/déploiement continus, 
 coût de la licence,interopérabilité de la sortie.
Nous avons étudié plusieurs outils sur la base de plusieurs autres critères complémentaires à savoir: nombre de contributeurs, 
nombre de stars, nombre de vues, la date de dernière version, la date du dernier commit et le nombre de forks et le temps d'analyse. 
Les résultats de cette étude sont classés dans le tableau suivant:


### Analyse comparatives des outils ### 

En somme, Progpilot, Brakeman et Bearer offrent des fonctionnalités d'analyse de sécurité différentes, adaptées à des langages de programmation et à des cas d'utilisation spécifiques. Progpilot est spécialisé dans l'analyse des codes PHP et donc des frameworks et bibliothèques PHP, Brakeman se concentre sur les applications Ruby on Rails, tandis que Bearer est conçu pour la sécurité des API et dont  le rapport d'analyse est bien hiérarchisé.

### 3- Méthodes d'analyse 2: Analyse dynamique semi-automatisée ###

Les premières méthodes de test dynamique de sécurité ont été développées dans les années 1990. Au début, ces méthodes étaient très rudimentaires et peu fiables, mais elles ont évolué pour devenir des outils sophistiqués capables de détecter une large gamme de vulnérabilités de sécurité.
L’analyse dynamique appelée test en boîte noire surveille le comportement d’un programme lorsqu’il est exécuté avec un ensemble spécifique d’entrées. Pour que l’analyse dynamique de programme soit efficace, le programme cible doit être exécuté avec suffisamment d’entrées de test pour couvrir presque toutes les sorties possibles. Néanmoins, comme le nombre d’entrées possibles est infini, des mesures de test du logiciel, telles que la couverture du code, sont utilisées pour s’assurer qu’une portion adéquate de l’ensemble des comportements possibles du programmes a été couverte. À l’inverse de l’analyse statique, les vulnérabilités  que produit l’analyse dynamique sont moins nombreuses mais plus réelles.\cite{theseRaounak}

L’analyse dynamique peut être effectuée manuellement,on parle d'analyse dynamique manuelle ou bien en utilisant des outils automatisés (Dynamic Application Security Testing (DAST), on parle d'analyse dynamique automatisée.

L'analyse dynamique semi-automatisée est un processus de test des applications web qui combine des techniques d'analyse dynamique automatisée avec des tests manuels(analyse dynamique manuelle). Cette approche est également connue sous le nom de tests semi-dynamiques des applications.
Un testeur effectue une vérification manuelle pour valider et confirmer la présence de chaque vulnérabilité détectée à l'aide de l'outil automatisé. Les résultats sont ensuite présentés dans un rapport détaillé qui inclut les vulnérabilités détectées et les recommandations pour les corriger.\citeurl{semianalyse}

Les avantages de l'analyse dynamique semi-automatisée incluent la rapidité et l'efficacité de l'analyse automatisée, ainsi que l'exactitude et la précision des tests manuels pour détecter des vulnérabilités plus complexes. Cette méthode de test permet également aux testeurs de mieux comprendre l'application web testée, ce qui peut aider à identifier les vulnérabilités uniques et les faiblesses qui pourraient ne pas être détectées par les outils d'analyse automatisée seuls.

Cependant, l'analyse dynamique semi-automatisée peut également présenter certaines limitations. Par exemple, elle peut nécessiter plus de temps et de ressources pour effectuer des tests manuels supplémentaires, ce qui peut augmenter le coût de l'analyse. De plus, elle peut être moins efficace pour détecter des vulnérabilités complexes qui nécessitent une expertise et une expérience plus approfondies.
Les outils d'analyse dynamique automatisés que nous utiliserons sont présentées ci-dessous.

# Présentation des outils #
# Outils 1: OWASP ZAP # 

# Présentation de OWASP ZAP ou Zaproxy # 

Zed Attack Proxy (ZAP) est un outil open source gratuit pour tester les applications web. Il est maintenu par l'Open Web Application Security Project (OWASP) et fonctionne comme un proxy qui permet d'intercepter et d'inspecter les messages entre le navigateur et l'application Web.ZAP est flexible et extensible, avec des fonctionnalités pour différents niveaux de compétence en matière de tests de sécurité telles que l'analyse de sécurité automatisée et manuelle, l'interception de requêtes et de réponses, la modification de requêtes et de réponses, la recherche de vulnérabilités courantes, etc https://owasp.org/www-project-zap/.


ZAP offre des fonctionnalités supplémentaires gratuites grâce à une variété de modules complémentaires disponibles sur le marché ZAP. Ces modules sont accessibles depuis le client ZAP et permettent aux utilisateurs d'étendre les fonctionnalités de l'outil: dans ce travail nous utilisons en plus les modules "access control" et "pentesterpack". 

Le processus de pentesting}, les étapes pentesting avec OWASP ZAP et la présentation complète est disponible via la documentation.

Les étapes de test y compris la configuration du proxy sur Firefox est disponible  via https://fre.myservername.com/owasp-zap-tutorial-comprehensive-review-owasp-zap-tool.

### Choix des outils ###

Nous avons porté notre choix sur OWASP ZAP ou Zaproxy pour l'analyse dynamique.
Nous aborderons les critères qui justifient ce choix dans la sous-section suivante.

# Critères de choix # 
Nous avons privilégié également les solutions les plus à jours et ayant plus de stars.
Tout comme dans le cas de l'analyse statique automatisée, nous privilégions les outils opensource en tenant aussi compte les critères recommandées par OWASP https://owasp.org/www-project-devsecops-guideline/latest/02b-Dynamic-Application-Security-Testing.
Nous avons étudié plusieurs outils sur la base de plusieurs autres critères complémentaires à savoir: nombre de contributeurs, nombre de stars, nombre de vues, la date de dernière version, la date du dernier commit et le nombre de forks et le temps d'analyse. Les résultats de cette étude sont classés dans le tableau suivants:


Les tests doivent être effectués sur les applications  disponibles via hackerone https://hackerone.com.
Hackerone /logo_hackerone.png
 

### Matériels ###
# Ordinateur et système
Pour ce travail, nous nous somme servis d’un ordinateur dont les caractéristiques sont les suivantes :

    . Marque :MSI
    . Modèle :}GP70 2PE
    . Système d’exploitation: Kali linux
    . Version du kernel : 6.1.0-kali5-amd64
    . Architecture : 64 bits
    . Processeur : Core i7
    . Mémoire RAM : 16 Go

Pour les tests, nous utilisons une une machine virtuelle virtualbox:
    . OS : kali 
    . Version : 20.10
    . Version du kernel : 5.8.0-63-generic
    . Architecture : 64 bits
    . Processeur : QEMU Virtual CPU version 2.5+
    . Mémoire RAM : 2 Go


#/////////////////////////////////////////////////////////////////

### 4- Filtrer les faiblesses obtenus dans les rapports d'analyse: s'intéresser uniquement aux CWE relatifs à ceux cités en étape 1.


### 5- Automatisation de la démarche.

Pour automatiser notre démarche , nous avons écrire quelques scripts selon la méthode choisie statique ou dynamique et selon la technologie utilisée.

     ### Analyse statique

     ## Pour PHP

     Ce script basé sur progpilot abordé précédemment, compare les CWE du rapport d'analyse effectuée par progpilot à l'ensemble des
     CWE qui constitue les CWE des vulnérabilités broken Access Control et renvoie ces derniers avec les détails permettant de localiser la ou les faiblesse(s)

      Analyse statique automatisée des applications à technologie PHP /sastphp.php

      '''
      <?php
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

      ?>
      '''


## CONTACT ##

Lien: https://github.com/elegbede01/brokenAccessControl_analyis
Email: elegbede.joseph@owasp.org
### AUTHEURS ###

```
 ELEGBEDE Joseph                          
 Email: elegbede.joseph@owasp.org            
                                         
```

