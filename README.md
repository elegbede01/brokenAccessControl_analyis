# BROKEN ACCESS CONTROL 

###  ANALYSE DES VULNERABILITES "Broken Access Control"  ###


# Objectifs
# OBJECTIF GÉNÉRAL
L’objectif principal de notre travail est de contribuer à la sécurité des applications web des entreprises, des institutions et particuliers en identifiant les faiblesses et vulnérabilités courantes  "Broken Access Control"  dans la sous-région et au Bénin et dans le monde.
 
# OBJECTIFS SPÉCIFIQUES

De façon spécifique, les objectifs visés sont:
1- Détecter les vulnérabiltés ou faiblesses du type "Broken Access Control" dans les plateformes ou applications web.  ;
2-Mettre en place une méthodologie de recherche et de détection rapide de faiblesses ou de vulnérabilités "Broken Access Control".
3-Proposer des pistes d'amélioration pour renforcer la sécurité des applications web;
4-Sensibiliser les développeurs et les équipes de sécurité à l'importance de la sécurité dès le début du processus de développement 

Pour atteindre ces objectifs,en particulier la méthodologie de recherche et de détection des vulnérabilités "Broken Access Control"    


### Description de la démarche ###

Cette démarche est basée sur l'identification et la détection des CWE  (https://owasp.org/Top10/A01_2021-Broken_Access_Control/)| https://cwe.mitre.org/data/definitions/23.html relatives aux vulnérabilités "Broken Access Control".

Pour cela, nous utilisons deux méthodes: méthode d'analyse statique automatisée et méthode d'analyse dynamique semi-automatisée.

### 1-Méthode d'analyse 1: Analyse statique automatisée ###

Les tests de sécurité des applications statiques (SAST) sont utilisés pour sécuriser les logiciels en examinant le code source du logiciel pour identifier les sources de vulnérabilités. Le processus d'analyse statique du code source existe depuis que les ordinateurs existent, la technique s'est étendue à la sécurité à la fin des années 90 https://en.wikipedia.org/wiki/Static_application_security_testing.

Cette méthode analyse directement le code source du programme sans l’exécuter afin de déterminer la qualité de l'application web. L’analyse peut être effectuée à plusieurs niveaux du programme qui comprennent, entre autre, le niveau "unité" qui se concentre sur une portion de code sans prendre en compte le contexte général du programme et le niveau "système" où la globalité de l'application est analysée avec les différentes relations existantes entre les unités. Ce type d’analyse est susceptible de trouver un grand nombre de vulnérabilités, mais a souvent pour défaut de retourner beaucoup de fausses alertes https://owasp.org/www-community/Source_Code_Analysis_Tools et de durer dans le temps. L’analyse statique de code peut être effectuée manuellement, communément appelée la revue de code ou inspection de code, ou bien en utilisant des outils automatisés (Static Application Security Testing (SAST), on parle d'analyse statique automatisée \cite{theseRaounak}. Les outils d’analyse statique automatisée utilisés dans le cadre de notre travail seront abordées à la suite.

### Outil 1: Bearer ###

   Bearer (\url{https://github.com/Bearer/bearer}) est un outil opensource de test statique de sécurité des applications (SAST) qui scanne le code source et analyse les flux de données pour découvrir, filtrer et hiérarchiser les risques de sécurité et les vulnérabilités conduisant à des expositions de données sensibles (PII, PHI).
   earer est entièrement personnalisable, de la création de vos propres règles à la détection des composants (base de données, API) et à la classification des données.
# Installation de Bearer #

Consulter ici https://github.com/Bearer/bearer
# Comment analyser du code avec Bearer
Le moyen le plus simple d'essayer Bearer est d'utiliser notre dossier de projet. Il convient de cloner ou de télécharger le projet opensource (le code source de l'application à tester) à un emplacement courant pour commencer.
# ******************************************Utilisation****************************************

$ git clone https://github.com/Bearer/nom_projet.git

Maintenant, exécutez la commande scan avec bearer scan sur le répertoire du projet :
$ bearer scan nom_projet

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

### 2-Méthodes d'analyse 2: Analyse dynamique semi-automatisée ###

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

%\subsubsection{Analyse comparatives des outils}

Les tests doivent être effectués sur les applications  disponible via hackerone https://hackerone.com.
 

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

## CONTACT ##

Lien: https://github.com/elegbede01/brokenAccessControl_analyis
Email: elegbede.joseph@owasp.org
### AUTHEURS ###

```
 ELEGBEDE Joseph                          
 Email: elegbede.joseph@owasp.org            
                                         
```

