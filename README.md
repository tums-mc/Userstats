Userstats
=========

User Stats

Testseite für die User Statistiken …


stats.php zeigt die Daten aus den Reihen 1,2,3,... nicht an. Warum? :(

User gibt seinen Namen auf index.php ein (nacher auf der Website) und
gelangt auf stats.php.
Dort soll dann der im Formular eingegebene Name die Tabelle Filtern und
alle Daten für den User ausgeben.
SELECT * FROM userstats WHERE username = $username

userstats ist die Tabelle
die hat 174 Spalten
1x username und dann die Zahlen 1-173 (Es gibt 173 Blöcke in MC)
Max's Plugin schreibt in die Datenbank wenn ein user einen Block abbaut.
Also z.b. mrheat baut 2 steine ab dann kommt in spalte 1 "mrheat" und in
Spalte 1 (Stein hat die ID 1) "2"

Hoffe du kannst mir weiterhelfen :/
