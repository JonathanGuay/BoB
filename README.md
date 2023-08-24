Exercice S2- Programmation orientée objet en PHP et manipulation des dates
Objectifs
- Pratiquer la modélisation orientée-objet
- Pratiquer la manipulation des classes et des objets en PHP
- Pratiquer la manipulation de dates en PHP
- Pratiquer le traitement des formulaires
- Travailler en équipe
  Instructions
- Modéliser la situation en équipe et séparer le travail à faire
- Créer un projet dans GitHub pour travailler en équipe
- Créer des dossiers pour organiser votre code
- Implémenter la solution : chaque personne travail sur les classes et méthodes qui lui sont assigné
- Intégrer le projet : en équipe
  Situation à modéliser et implémenter
- Bob est une personne et plus particulièrement un programmeur.
- Comme toutes les personnes, il a un nom et un compte où il dépose son argent.
- À chaque jour, il travaille x nombre d'heures à un salaire de 22,50$/h. Cet argent est déposé dans son compte.
- Il a deux animaux : un chat (Mitaine) et un chien (Roboto).
- Les deux animaux s'expriment très bien. Mitaine fait « Miaou » et Roboto fait « Wouff».
- Les animaux peuvent avoir faim ou pas. Après avoir mangé ils n'ont plus faim.
- Quand Bob nourrit son chat, ça lui coûte 5$ et quand il nourrit son chien ça lui coûte 8$.
- Quand Bob nourrit ses animaux, il note la date et l'heure.
    - Il peut nourrir son chat seulement si ça fait plus de 10 heures depuis le dernier repas du chat.
    - Il peut nourrir son chien seulement si ça fait plus de 8 heures depuis le dernier repas du chien.
- Modéliser et créer toutes les classes, propriétés et méthodes nécessaires pour représenter la situation. S'assurer que :
    - Bob puisse travailler, manipuler son argent et nourrir ses animaux
    - Les animaux puissent s'exprimer et manger selon les restrictions imposées
    - D'ajouter une fonction qui permet d'avancer le temps :)
-	Déterminer les formulaires et boutons nécessaires pour pouvoir utiliser votre application.

Personne :
Nom
    Compte
    NbHeureTravaillerJour
    salaireHeure
    listeAnimaux
    string photo

méthode :
-	avancerTemps

Classe Compte :
    Solde

    Méthode :
        Dépôt
        Debit 

Classe animaux abstaite
     Nom
     Type
     Son
     AFaim
     DureeAvantFaim
     FraisNourriture
     Date_DernierRepas -> datetime
     String photo
     
    Méthode :
     	nourrireAnimaux
     	CalculerSiFaim-> compare la dure avant faim et change propriété faim

Classe Chien : Animaux
-	Son Miaou

Classe Chat : Animaux
-	Son Wouff



Exemple visuel : 
 
 

