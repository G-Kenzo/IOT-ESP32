# IOT-ESP32
Projet : Système de collecte et d’affichage de données avec ESP32

Le but de ce projet est de créer un système connecté utilisant un capteur ultrasonique, une LED et une carte ESP32.
Le système permet de mesurer une distance, d’envoyer les données vers une page web et de contrôler la LED directement depuis cette page grâce à un bouton.

Fonctionnement du système
1. Détection avec le capteur ultrasonique

Le capteur ultrasonique mesure la distance entre le système et un obstacle.
Il envoie des ondes ultrasoniques puis calcule le temps de retour des ondes pour déterminer la distance.

Les données mesurées sont ensuite transmises à l’ESP32.

2. Traitement des données par l’ESP32

L’ESP32 reçoit les informations du capteur et les traite.
Grâce à sa connexion Wi-Fi, il peut envoyer ces données vers une page web accessible depuis un ordinateur ou un smartphone.

3. Affichage des données sur la page web

Une interface web permet d’afficher en temps réel :

la distance détectée par le capteur,
l’état actuel de la LED,
les informations envoyées par l’ESP32.

La page web sert donc d’interface de surveillance du système.

4. Contrôle de la LED depuis la page web

La page web contient également un bouton de commande permettant d’allumer ou d’éteindre la LED à distance.

Fonctionnement :
Lorsque l’utilisateur appuie sur le bouton :
la commande est envoyée à l’ESP32 via le réseau Wi-Fi,
l’ESP32 reçoit l’information,
puis active ou désactive la LED.

Cela permet un contrôle interactif du système directement depuis le navigateur web.

Technologies utilisées
ESP32
Capteur ultrasonique HC-SR04
LED
Wi-Fi
HTML / CSS / JavaScript
Programmation Arduino (C++)
Résultat attendu

Le système final permet :

de détecter une distance avec le capteur ultrasonique,
d’envoyer les données à l’ESP32,
d’afficher les mesures sur une page web,
et de contrôler la LED à distance grâce à un bouton intégré à l’interface web.
Applications possibles

Ce projet peut être utilisé dans :

la domotique,
les objets connectés (IoT),
les systèmes de surveillance,
les contrôles à distance,
les systèmes intelligents automatisés.
