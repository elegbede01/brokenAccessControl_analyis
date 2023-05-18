

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

Les tests de sécurité des applications statiques (SAST) sont utilisés pour sécuriser les logiciels en examinant le code source du logiciel pour identifier les sources de vulnérabilités. Le processus d'analyse statique du code source existe depuis que les ordinateurs existent, la technique s'est étendue à la sécurité à la fin des années 90 \citeurl{sastWiki}.
Cette méthode analyse directement le code source du programme sans l’exécuter afin de déterminer la qualité de l'application web. L’analyse peut être effectuée à plusieurs niveaux du programme qui comprennent, entre autre, le niveau "unité" qui se concentre sur une portion de code sans prendre en compte le contexte général du programme et le niveau "système" où la globalité de l'application est analysée avec les différentes relations existantes entre les unités. Ce type d’analyse est susceptible de trouver un grand nombre de vulnérabilités, mais a souvent pour défaut de retourner beaucoup de fausses alertes \citeurl{lemagit} \citeurl{owaspsast} et de durer dans le temps. L’analyse statique de code peut être effectuée manuellement, communément appelée la revue de code ou inspection de code, ou bien en utilisant des outils automatisés (Static Application Security Testing (SAST), on parle d'analyse statique automatisée \cite{theseRaounak}. Les outils d’analyse statique automatisée utilisés dans le cadre de notre travail seront abordées à la suite.

### Outil 1: Bearer ###

   Bearer (\url{https://github.com/Bearer/bearer}) est un outil opensource de test statique de sécurité des applications (SAST) qui scanne le code source et analyse les flux de données pour découvrir, filtrer et hiérarchiser les risques de sécurité et les vulnérabilités conduisant à des expositions de données sensibles (PII, PHI).Bearer est entièrement personnalisable, de la création de vos propres règles à la détection des composants (base de données, API) et à la classification des données \citeurl{bearer}.
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

# Outil 2: Progpilot 
    Progpilot (https://github.com/designsecurity/progpilot) est un outil d'analyse statique open-source pour détecter les vulnérabilités de sécurité dans le code PHP.\citeurl{progpilot}.Progpilot peut détecter un large éventail de vulnérabilités de sécurité. Il est conçu pour être facile à utiliser et s'intègre parfaitement avec des environnements de développement PHP populaires tels que Visual Studio Code et Atom. Il peut également être utilisé en tant qu'outil en ligne de commande autonome.\\

# Installation de progpilot
Consulter la documentation: 
# Comment utiliser progpilot
La commande progpilot prend en argument le chemin des fichiers et dossiers à analyser et éventuellement un fichier de configuration :
\lstconsolestyle

\begin{lstlisting}[language=bash]
# Sans onfiguration du fichier file
$ progpilot example1.php example2.php folder1/ folder2/
# Avec configuration du fichier file
$ progpilot --configuration configuration.yml example1.php example2.php folder1/ folder2/
Si vous l''avez installé avec composer, le programme sera situé dans vendor/bin/progpilot
\end{lstlisting}


Pour plus d'informations, consulter le fichier readme via \url{https://github.com/designsecurity/progpilot#readme}.
    
# Outil 3: Brakeman

Brakeman est un outil open source d'analyse de sécurité statique pour Ruby on Rails. Il est conçu pour détecter les vulnérabilités de sécurité dans les applications Ruby on Rails.

Brakeman analyse le code source de l'application Ruby on Rails et génère un rapport de sécurité détaillé qui répertorie toutes les vulnérabilités de sécurité détectées, avec des recommandations pour les corriger. L'outil est facile à utiliser et peut être intégré dans des outils de développement tels que Jenkins et Travis CI pour automatiser l'analyse de sécurité.

Il est également capable de détecter les vulnérabilités de sécurité dans les bibliothèques tierces utilisées par l'application \citeurl{brakeman}.
Pour réaliser l'analyse statique automatisée, il est nécessaire d'accéder au code source, nous l'appliquons aux applications opensource dont le code source est disponible sur github.Ce sont les plateformes que nous allons selectionner à travers les lignes ci-après.\\

# Comment utiliser Brakeman?

\begin{lstlisting}
$ brakeman /path/to/rails/application

% /path/to/rails/application: chemin du dossier contenant 
% le code source de l'application.
\end{lstlisting}

Ces outils n'ont pas été pris au hasard, nous évoquerons les différents critères qui ont conduit à ces choix.

## Choix des outils ###

# Critères de choix # 
 Nous privilégions les outils opensource pour non seulement profiter de leur gratuité mais aussi de leur pleine puissance sans oublier les critères de choix de bon outil abordés par OWASP \citeurl{owaspsast} à savoir prend en charge votre langage de programmation, capacité à détecter les vulnérabilités, basée sur le Top 10 de l'OWASP, la précision (taux de faux positifs/faux négatifs), note de référence OWASP,capacité à comprendre les bibliothèques/frameworks dont vous avez besoin, disponibilité en tant que plug-in dans les IDE de développeur préférés,facilité d'installation/d'utilisation,capacité à inclure dans les outils d'intégration/déploiement continus, coût de la licence,interopérabilité de la sortie.
Nous avons étudié plusieurs outils sur la base de plusieurs autres critères complémentaires à savoir: nombre de contributeurs, nombre de stars, nombre de vues, la date de dernière version, la date du dernier commit et le nombre de forks et le temps d'analyse. Les résultats de cette étude sont classés dans le tableau suivant:

\begin{table}[H]
    \centering
    \caption{Liste des outils pour méthode 1}
    \label{tab:service_level}
    \begin{tabular}{|p{3cm}|p{2.1cm}|p{1.2cm}|p{1.2cm}|p{1.5cm}|p{1.5cm}|p{1.5cm}|}
        \hline
 \textbf{Outils d'analyse statique automatisée} & \textbf{Contributeurs} & \textbf{Nombre de stars} & \textbf{nombre de vues} & \textbf{Dernière version} & \textbf{Dernier commit} & \textbf{nombre de forks} \\ [0.5ex] 
 \hline\hline
 betterscan-ce & 7 & 412 & 9 &1semaine  &1semaine &66 \\ 
 \hline\hline
  wapiti & 27 & 580 & 21 &1semaine  &2semaine &112\\
   \hline\hline
  pomerium & 84 & 3500 & 35 &3semaines  &3 jours &112\\
  \hline\hline
  Rips & - & 285 & 21 & -  &2 ans &82\\
  \hline\hline
  Kube-bench & 5 & 5700 & 107 &3semaines  &3semaines &1100\\
  \hline\hline
  Brakeman & 128 & 6600 & 168 &3semaines  &3semaines &727\\
  \hline\hline
 bearer & 12 & 805 & 14 &2 jours  &2 jours &26\\
  \hline\hline
  progpilot & 6 & 281 & 15 &3semaines  &3semaines &59\\
  \hline\hline
  Graudit & 13 & 1200 & 34 &3 mois  &3 mois &322\\
  \hline\hline
  nodejsscan & 12 & 2100 & 58 &3 mois  &17/06/2022 &328\\
  \hline\hline
  ShiftLeft Scan ou sast-scan & 15 & 621 & 31 &3semaines  &3semaines &111\\
  \hline\hline
 codeql & 246 & 5800 & 214 & 4h  & 4h &1300\\
 %\hline\hline
 %Total of Test & \multicolumn{6}{|c|}{13645} \\ [1ex] 
 \hline\hline
    \end{tabular} 
\end{table}

### Analyse comparatives des outils ### 

\begin{table}[H]
    \centering
    \caption{Tableau comparatif des outils de la méthode 1 } 
    \label{tab:service_level}
    \begin{tabular}{|p{3cm}|p{4.1cm}|p{4.2cm}|p{4.2cm}|}
        \hline
 \textbf{Outils méthode 1} & \textbf{Points forts} & \textbf{Points faibles} \\ [0.5ex] 
 \hline\hline
 Bearer & spécialisée pour les API,détection des anomalies avec l'apprentissage automatique.
 langages: c/c++, Ruby, TypeScript, javascript,HTML et Shell
Intégrations prêtes à l'emploi avec des API populaires.
Alertes et blocage automatique des requêtes malveillantes. & Limitation à la sécurité des API,
dépendance aux intégrations prédéfinies et possibilité de limitations de couverture.\\ 
 \hline\hline
  Brakeman & Ruby on rails, détection injections SQL et les attaques XSS.
rapports détaillés,intégration CI/CD pour une vérification automatisée de la sécurité.
 & Limitation aux applications Ruby on Rails.
temps d'analyse dépendant de la taille et de la complexité de l'application,nécessite des connaissances en Ruby on Rails pour interpréter les résultats.\\
   \hline\hline
  Progpilot & Langage PHP et ses frameworks et bibliothèques.
Capacité à analyser le flux de contrôle et les traces du code.
,détection injections de code et les attaques XSS,possibilité de personnalisation & Limitation à PHP.
Le temps dépend de taille et de la complexité du code.
Nécessite des connaissances spécifiques à PHP pour interpréter les résultats.\\
 %Total of Test & \multicolumn{6}{|c|}{13645} \\ [1ex] 
 \hline\hline
    \end{tabular} 
\end{table}
En somme, Progpilot, Brakeman et Bearer offrent des fonctionnalités d'analyse de sécurité différentes, adaptées à des langages de programmation et à des cas d'utilisation spécifiques. Progpilot est spécialisé dans l'analyse des codes PHP et donc des frameworks et bibliothèques PHP, Brakeman se concentre sur les applications Ruby on Rails, tandis que Bearer est conçu pour la sécurité des API et dont  le rapport d'analyse est bien hiérarchisé.

\section{Méthodes d'analyse 2: Analyse dynamique semi-automatisée}
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

Zed Attack Proxy (ZAP) est un outil open source gratuit pour tester les applications web. Il est maintenu par l'Open Web Application Security Project (OWASP) et fonctionne comme un proxy qui permet d'intercepter et d'inspecter les messages entre le navigateur et l'application Web.ZAP est flexible et extensible, avec des fonctionnalités pour différents niveaux de compétence en matière de tests de sécurité telles que l'analyse de sécurité automatisée et manuelle, l'interception de requêtes et de réponses, la modification de requêtes et de réponses, la recherche de vulnérabilités courantes, etc.\citeurl{zap}\\

\begin{figure}[H]
    \centering
    \includegraphics[width=\textwidth]{images/browser-no-proxy.png}
    \caption{OWASP ZAP comme man-in-the-middle proxy"}
    \label{fig:internetbj}
\end{figure}

ZAP offre des fonctionnalités supplémentaires gratuites grâce à une variété de modules complémentaires disponibles sur le marché ZAP. Ces modules sont accessibles depuis le client ZAP et permettent aux utilisateurs d'étendre les fonctionnalités de l'outil: dans ce travail nous utilisons en plus les modules "access control" et "pentesterpack". 


\textbf{Le processus de pentesting}, les étapes pentesting avec OWASP ZAP et la présentation complète est disponible via la documentation.\citeurl{zap}.
\begin{figure}[H]
    \centering
    \includegraphics[width=\textwidth]{images/demarragezap.png}
    \caption{"Démarrage rapide de ZAP "}
    \label{fig:internetbj}
\end{figure}
\citeurl{tutozap}.
Les étapes de test y compris la configuration du proxy sur Firefox est disponible  via \url{https://fre.myservername.com/owasp-zap-tutorial-comprehensive-review-owasp-zap-tool} \citeurl{tutozap}.
%/////////////////////////////////
%////////////////////////////////
%\subsubsection{Dotdotpwn}
%DotDotPwn est un outil de test de pénétration open-source qui vise à détecter les vulnérabilités d'inclusion de fichiers dans les applications web. Il permet d'automatiser les attaques en utilisant des séquences de caractères spécialement conçues pour exploiter ces vulnérabilités.
%Compatible avec la plupart des systèmes d'exploitation, il prend en charge plusieurs protocoles tels que HTTP, FTP, SMB, SSH, Telnet, SMTP, POP3, etc. pour tester la sécurité des applications.
%DotDotPwn peut être utilisé pour trouver des vulnérabilités d'inclusion de fichiers en testant les entrées utilisateur dans les paramètres de l'URL, les en-têtes HTTP et d'autres entrées utilisateur. Il est également capable de vérifier l'existence de fichiers sensibles sur le serveur, tels que les fichiers de configuration et les fichiers de journal.%

\subsection{Choix des outils}
Nous avons porté notre choix sur OWASP ZAP ou Zaproxy pour l'analyse dynamique.
Nous aborderons les critères qui justifient ce choix dans la sous-section suivante.
\subsubsection{Critères de choix}
Nous avons privilégié également les solutions les plus à jours et ayant plus de stars.
Tout comme dans le cas de l'analyse statique automatisée, nous privilégions les outils opensource en tenant aussi compte les critères recommandées par OWASP \citeurl{owaspdast}.
Nous avons étudié plusieurs outils sur la base de plusieurs autres critères complémentaires à savoir: nombre de contributeurs, nombre de stars, nombre de vues, la date de dernière version, la date du dernier commit et le nombre de forks et le temps d'analyse. Les résultats de cette étude sont classés dans le tableau suivants:
\begin{table}[H]
    \centering
    \caption{Liste des outils d'analyse dynamique automatisée}
    \label{tab:service_level}
    \begin{tabular}{|p{3cm}|p{2.1cm}|p{1.2cm}|p{1.2cm}|p{1.5cm}|p{1.5cm}|p{1.5cm}|}
        \hline
 \textbf{Outils d'analyse dynamique automatisée} & \textbf{Contributeurs} & \textbf{Nombre de stars} & \textbf{nombre de vues} & \textbf{Dernière version} & \textbf{Dernier commit} & \textbf{nombre de forks} \\ [0.5ex] 
 \hline\hline
 DynaPyt & 5 & 22 & 3 & 30/01/2023  & 1 mois &5 \\ 
 \hline\hline
 souper & 29+ & 1900 & 67 &4semaines  &4semaines &162\\
   \hline\hline
  suture & 24 & 1400 & 21 &1semaines  &2semaines &112\\
  \hline\hline
  Enlightn & 2 & 366 & 35 &3 semaines  &3 jours &275\\
  \hline\hline
CrossHair & 17 & 853 & 13 &02/02/2023  &1 mois & 40\\
  \hline\hline
  zaproxy ou OWASP ZAP & 198  & 10600 & 389 &02/03/2023 &2 jours &2000\\
 %\hline\hline
 %Total of Test & \multicolumn{6}{|c|}{13645} \\ [1ex] 
 \hline\hline
    \end{tabular} 
\end{table}
%\subsubsection{Analyse comparatives des outils}

\section{Choix des applications}
\subsection{Critères de choix}
Les plate-formes ou les applications sur lesquelles nous travaillons sont \textbf{des applications monétaires en ligne, des plate-formes de développement logiciel ou des frameworks et des plate-formes de traduction multilingues qui sont des plate-formes plus ou moins populaires et les plus sensibles aux vulnérabilités}. 
Sur la base donc de la sensiblilité des ces plateformes aux vulnérabolités, sept (07) ont été retenues pour les plateformes opensource et cinq pour les plateformes non opensource.\\
\subsection{Les applications pour méthode 1}
Nous avons tourné nos analyses statiques vers des entreprises ayant soumis des programmes de bug bounty sur la plateforme numéro de bug bounty: HackerOne soit des tests effectués sur sept (07) plateformes opensource.\\

\subsubsection{Application 1:\textbf{Weblate} }
   Plateforme Web de traduction en continu.Logiciel libre de traduction utilisé par plus de 2 500 projets Open Source (disponible via \url{https://github.com/WeblateOrg/weblate/}) et entreprises, et ce dans 165 pays.
    \textbf{Caractéristiques de Weblate}\\
    En tant qu’outil de traduction assistée par ordinateur riche en fonctionnalités, Weblate fait gagner du temps aux développeurs et aux traducteurs et apportent de la joie aux utilisateurs à travers le monde! Consultez la documentation documentation pour en savoir plus \url{https://docs.weblate.org/en/latest/} \citeurl{weblate}.
    
    Le programme de bug bounty de cette plateforme avec la politique de ce programme sont disponibles sur hackerone via: \url{https://hackerone.com/weblate?type=team}.
\newline
\subsubsection{Application 2:\textbf{Django} }
        
    Django est un framework Web Python de haut niveau qui encourage un développement rapide et une conception propre et pragmatique. Construit par des développeurs expérimentés, il prend en charge une grande partie des tracas du développement Web, vous pouvez donc vous concentrer sur l'écriture de votre application sans avoir à réinventer la roue. C'est gratuit et open source et disponible via \url{https://github.com/django/django}\citeurl{django}.\\
Le programme de bug bounty de cette plateforme avec la politique de ce programme sont disponibles sur hackerone via: \url{https://hackerone.com/django?type=team}\\
\newline
\subsubsection{Application 3:\textbf{Gitlab} }
GitLab est un gestionnaire de dépôts Git basé sur le web qui fournit une gestion de code source, une intégration et une livraison continues (CI/CD), une revue de code et d'autres fonctionnalités de collaboration. Il permet aux développeurs d'héberger leurs dépôts Git sur les serveurs de GitLab ou de l'installer sur leurs propres serveurs \citeurl{gitlab}.\\
Son code est disponible via \url{https://gitlab.com/gitlab-org/gitlab} ou via     \url{https://github.com/gitlabhq}\\ 
Pour voir à quoi ressemble GitLab, veuillez consulter la page des fonctionnalités sur le site Web \url{https://about.gitlab.com/features/?stage=plan}.
Le programme de bug bounty de cette plateforme avec la politique de ce programme sont disponibles sur hackerone via:  \url{https://hackerone.com/gitlab?type=team}.\\
\newline
\subsubsection{Application 4:\textbf{Wordpress} }

WordPress est un Système de gestion de contenu (SGC) gratuit et open source. Il permet de créer des sites Internet complets et variés, reposant sur une base de données MySQL. WordPress est le leader incontesté des SGC, il propulse un très grand nombre de blogs et de sites de e-commerce \citeurl{wordpres}.Son code source est disponible sur \url{https://github.com/WordPress/WordPress/tree/master/wp-admin}.\\
-Facilité d'utilisation : WordPress est facile à utiliser et ne nécessite pas de compétences techniques avancées. Il est simple à installer et à configurer, même pour les débutants.
Le programme de bug bounty de cette plateforme avec la politique de ce programme sont disponibles sur hackerone via \url{https://hackerone.com/wordpress?type=team}. \\

\subsubsection{Application 5 : \textbf{Rocket.chat}}

    Rocket.Chat est un service de messagerie électronique et de chat d'équipe présenté comme une alternative à Slack. Ce système de chat est gratuit, open-source et auto-hébergé pour les équipes disponible via \url{}\citeurl{rocket.chat01}.\\
    Site:\url{https://fr.rocket.chat/}\\
   Code source:  \url{https://github.com/RocketChat/Rocket.Chat}.
   
\subsubsection{Application 6: Laravel} 
LARAVEL est un Framework du langage de programmation PHP. Créé par Taylor Otwel, ce framework regroupe les meilleures librairies utiles pour créer un site web. En outre, l’excellent framework laravel intègre aussi bien d’autres fonctionnalités exclusives. C’est notamment le cas de son moteur de template Blade \citeurl{laravel}.\\
 Laravel est gratuit et orienté objet. Il a été pensé pour rendre le développement d'applications web rapide et facile. Tout comme son grand frère Symfony dont il utilise certaines briques, il applique le pattern MVC (pour "Model View Controller") et offre nativement un ensemble de composants et fonctionnalités qui permettent de développer une application PHP moderne et robuste \citeurl{laravel01}.\\

Le code source de laravel est disponible via: \url{https://github.com/laravel/laravel/tree/10.x/public} \\
Le programme de bug bounty de cette plateforme avec la politique de ce programme sont disponibles sur hackerone via  \url{https://hackerone.com/laravel?type=team}.

\subsubsection{Application 7:\textbf{Rabobank} }
             
    La Rabobank est une institution financière internationale de banque assurance d’origine néerlandaise, constituée en 1972 par la fusion des banques Coöperatieve Centrale Raiffeisen-Bank et Coöperatieve Centrale Boerenleenbank. De par sa structure, c'est une coopérative1. En 2012, c'est le « plus grand crédit agricole du monde ».\\
Pour les grands ou les petits défis, dans tous les domaines, les gens unissent leurs forces à la recherche de solutions. Rabobank le fait depuis près de 125 ans. Et continuera à le faire. Pour faire grandir ensemble un monde meilleur \citeurl{rabobank}. 

Programme de bug bounty: \url{https://github.com/rabobank-cdc/DeTTECT.git}

\subsection{Les applications pour méthode 2}
Cinq (05) applications ou plateformes web ayant leurs progrmmes de bug bounty sur Hackerone ont été choisies sur les même bases de critères que pour la première méthode sauf que cette fois ces applications ou plateformes ne sont pas open source.\\
\subsubsection{Application 1:\textbf{Moonpay}}
Avec moonpay, achetez et vendez des cryptos avec MoonPay. 
Moonpay est une plateforme populaire dans le domaine des paiements en ligne spécifique de vente et d’achat des crypto-monnaies.Consultez la plateforme via: \url{https://www.moonpay.com/fr}.Consultez le programme de bug bounty correspondant avec la politique du même programme.\\
\subsubsection{Application 2: \textbf{Larksuite}}
Lark est une plateforme de collaboration et de communication basée sur le cloud, développée par Lark Technologies Pte. Ltd., une entreprise technologique basée à Singapour. Lark comprend des fonctionnalités telles que la messagerie, la visioconférence, la collaboration sur des documents, la gestion de calendrier, et plus encore.
Les principales fonctionnalités de Lark comprennent sa capacité à s'intégrer à d'autres outils de productivité et de collaboration, tels que Google Drive, Google Calendar et Trello, ainsi que ses capacités intégrées de traduction et de transcription. Lark offre également une gamme de fonctionnalités de sécurité et de confidentialité, telles que le chiffrement de bout en bout, la protection des données et le contrôle d'accès.
Lark gagne en popularité ces dernières années, notamment en Asie, en tant qu'alternative à d'autres plateformes de collaboration et de communication telles que Slack, Microsoft Teams et Zoom.
Consultez la plateforme via \url{https://www.larksuite.com/}.\\
       Le programme de bug bounty correspondant est disponible via:
\url{https://hackerone.com/lark_technologies?type=team }.\\

\subsubsection{Application 3: \textbf{Yahoo}}
        
Yahoo (\url{https://fr.yahoo.com/?p=us}) est une entreprise américaine de médias numériques fondée en 1994 par Jerry Yang et David Filo. À l'origine, Yahoo était un ann uaire web qui recensait les sites internet les plus populaires et offrait un moteur de recherche. Depuis, Yahoo a élargi son offre de services en ligne, notamment en proposant des services de messagerie, de finance, d'actualités, de sport, de divertissement et de publicité en ligne.Yahoo a été l'un des principaux moteurs de recherche dans les années 1990 et au début des années 2000, mais a progressivement perdu de son influence face à la concurrence de Google. En 2016, Yahoo a été acquis par Verizon Communications pour 4,5 milliards de dollars. La société a ensuite été renommée en Oath Inc., avant de changer de nom pour Verizon Media en 2019.
Aujourd'hui, Yahoo est principalement connu pour sa plateforme de messagerie Yahoo Mail et son portail web Yahoo.com, qui offre des services de courrier électronique, d'actualités, de recherche, de finance et de divertissement.
    
Le  programme de bug bounty de cette plateforme est disponible sur hackerone via  \url{https://hackerone.com/yahoo?type=team }

\subsubsection{Application 4: \textbf{MTN}}

MTN (\url{https://www.mtn.com/}) est une entreprise de télécommunications africaine, fondée en 1994 en Afrique du Sud. MTN fournit des services de téléphonie mobile, d'Internet et de réseau aux consommateurs et aux entreprises dans 21 pays africains, ainsi que dans le Moyen-Orient.
MTN est actuellement le plus grand opérateur de téléphonie mobile en Afrique et compte plus de 257 millions de clients dans le monde. MTN propose une gamme de produits et services de télécommunications, tels que des offres de forfaits mobiles prépayés et postpayés, des services de paiement mobile, des services bancaires mobiles, des services de divertissement, des offres d'accès à Internet, et plus encore.\\
MTN a été impliqué dans diverses initiatives de développement communautaire, notamment dans les domaines de la santé, de l'éducation, de l'environnement et du développement économique en Afrique. C'est la plateforme web du  groupe mtn disponible via 
\url{https://hackerone.com/mtn_group?type=team}.\\

\subsubsection{Application 5: \textbf{Paypal}}

PayPal (\url{https://www.paypal.com/fr/home}) est une entreprise américaine de paiement en ligne fondée en 1998. Elle permet aux particuliers et aux entreprises de transférer de l'argent en ligne de manière sécurisée, rapide et facile. PayPal propose une variété de services de paiement en ligne, y compris des paiements par carte de crédit, des paiements par débit bancaire, des paiements par portefeuille électronique et des paiements mobiles.
PayPal est disponible dans plus de 200 pays et est accepté par des millions de marchands en ligne, ainsi que par de nombreux sites d'enchères en ligne.
Ses fonctionnalité sont notamment recevoir, envoyer de l'argent. 
La plateforme web de paypal est disponible via ce lien: \url{https://hackerone.com/paypal?type=team}.
 

\section{Automatisation de la démarche}
\subsection{Description}
Notre démarche se résume par dépôt github disponible via \url{https://github.com/elegbede01/}

\section{Matériels}
\textbf{Ordinateur et système}
Pour ce travail, nous nous somme servis d’un ordinateur dont les caractéristiques sont les suivantes :

\begin{itemize}
    \item \textbf{Marque :} MSI
    \item \textbf{Modèle :} GP70 2PE
    \item \textbf{Système d’exploitation:} Kali linux
    \item \textbf{Version du kernel :} 6.1.0-kali5-amd64
    \item \textbf{Architecture :} 64 bits
    \item \textbf{Processeur :} Core i7
    \item \textbf{Mémoire RAM :} 16 Go
\end{itemize}                  
Pour les tests, nous utilisons une une machine virtuelle virtualbox:
\begin{itemize}
    \item \textbf{OS :} kali 
    \item \textbf{Version :} 20.10
    \item \textbf{Version du kernel :} 5.8.0-63-generic
    \item \textbf{Architecture :} 64 bits
    \item \textbf{Processeur :} QEMU Virtual CPU version 2.5+
    \item \textbf{Mémoire RAM :} 2 Go
\end{itemize}

%\item \textbf{Burpsuite community}\\

%    \textbf{Automatisation}\\

%BurpSuite Community (dernière version 2023.3.3) est une plate-forme intégrée pour effectuer des tests de sécurité des applications Web. Ses différents outils fonctionnent ensemble de manière transparente pour prendre en charge l'ensemble du processus de test, depuis la cartographie initiale et l'analyse de la surface d'attaque d'une application, jusqu'à la recherche et l'exploitation des vulnérabilités de sécurité.\\
%Burp vous donne un contrôle total, vous permettant de combiner des techniques manuelles avancées avec une automatisation de pointe, pour rendre votre travail plus rapide, plus efficace et plus amusant.
%Burp Suite Community Edition contient les composants clés, chacun réalisant une tâche particulière  à savoir:\citeurl{burp}\\
%\begin{itemize}
%    \item \textbf{Un proxy intercepteur}, un module qui intercepte les requêtes et les réponses et permet à l’utilisateur de manipuler le trafic.
%    \item \textbf{Un Spider « Scanner » } un module qui parcourt les pages de l’application Web à tester et identifie ses vulnérabilités de manière automatique
%    \item \textbf{Un répéteur « Repeater »}, pour manipuler et renvoyer des demandes individuelles.
 %   \item \textbf{Un « Intruder »}, un module qui permet de créer et d’automatiser des attaques contre
%l’application cible et de détecter ses vulnérabilités. Ce composant est paramétrable et
%l’utilisateur peut personnaliser les attaques comme il le souhaite.C'est un module qui envoie des %requêtes et analyse les réponses associées.
%    \item \textbf{Un outil Sequencer}, pour tester le caractère aléatoire des jetons de session.
%    \item \textbf{Extensibilité}, vous permettant d'écrire facilement vos propres plugins, pour effectuer des tâches complexes et hautement personnalisées dans Burp.\\
%\end{itemize}
%Burp est facile à utiliser et intuitif, permettant aux nouveaux utilisateurs de commencer à travailler immédiatement. Burp est également hautement configurable et contient de nombreuses fonctionnalités puissantes pour aider les testeurs les plus expérimentés dans leur travail.

%Burp Suite Community Edition nécessite l'environnement d'exécution officiel Java SE 13 ou version ultérieure.

%Il est disponible sur toutes les plateformes en trois versions : une version professionnelle, une version entreprise et une version communauté et sont téléchargeables via \url{https://portswigger.net/burp/releases/professional-community-2023-3-3?requestededition=community&requestedplatform=}. Les deux premières versions sont payantes tandis que la dernière est gratuite.\\
%\begin{figure}[H]
%    \centering
%    \includegraphics[width=\textwidth]{images/burpdash.png}
%    \caption{Aperçu du dashboard de Burpsuite community }
%    \label{fig:internetbj}
%\end{figure}
\addcontentsline{toc}{section}{Conclusion}
\section*{Conclusion}
Dans ce chapitre, nous avons présenté la méthodologie utilisée à travers l'analyse statique automatisée et l'analyse dynamique semi-automatisée.Les matériels utilisés dans ce travail font également l'objet de  ce chapitre. Nous avons aussi présenté les logiciels et outils d'analyse liés à chaque méthode. Nous avons aussi parlé du cadre de stage qu'est MA-INFO. Tout ceci n'a pas été sans difficultés notamment en ce qui concerne les logiciels d'analyse ou nous avons été obligés d'étudier plusieurs outils afin de choisir ceux qui ont plus d'efficacité, plus de performance et surtout les plus à jour.





#/////////////////////////////////////////////////////////////////
### DESCRIPTION ###

Démarche  - The Directory Traversal Fuzzer

It's a very flexible intelligent fuzzer to discover traversal 
directory vulnerabilities in software such as HTTP/FTP/TFTP 
servers, Web platforms such as CMSs, ERPs, Blogs, etc. 

Also, it has a protocol-independent module to send the desired 
payload to the host and port specified. On the other hand, it 
also could be used in a scripting way using the STDOUT module.

It's written in perl programming language and can be run 
either under OS X, *NIX or Windows platforms. It's the first Mexican 
tool included in BackTrack Linux (BT4 R2).

Fuzzing modules supported in this version: 
- HTTP
- HTTP URL
- FTP
- TFTP
- Payload (Protocol independent)
- STDOUT


### REQUIREMENTS ###

- Perl (http://www.perl.org)
Programmed and tested on Perl 5.8.8 and 5.10

- Nmap (http://www.nmap.org)
Only if you plan to use the OS detection feature
(needs root privileges)

Perl modules:
- Net::FTP
- TFTP (only required if fuzzing TFTP)
- Time::HiRes
- Socket
- IO::Socket
- Getopt::Std

You can easily install the missing modules doing the 
following as root:

```
# perl -MCPAN -e "install <MODULE_NAME>"
```

or

```
# cpan 
cpan> install <MODULE_NAME>
```


### EXAMPLES ###

Read EXAMPLES.txt


### CONTACT ###

Official Website: http://dotdotpwn.sectester.net
Official Email:   dotdotpwn@sectester.net
Bugs / Contributions / Improvements: dotdotpwn@sectester.net


### AUTHORS ###

```
 Christian Navarrete aka chr1x         Alejandro Hernandez H. aka nitr0us
   http://twitter.com/chr1x              http://twitter.com/nitr0usmx
      chr1x@sectester.net                  nitrousenador@gmail.com
                                         http://www.brainoverflow.org

 CubilFelino Security Research Lab     Chatsubo [(in)Security Dark] Labs
   http://chr1x.sectester.net          http://chatsubo-labs.blogspot.com   
```

