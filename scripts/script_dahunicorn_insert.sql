/*****************************************************/
/*                    INSERT TYPE                    */
/*****************************************************/
INSERT INTO TYPE (type_libelle) values ("logement");
INSERT INTO TYPE (type_libelle) values ("nourriture");
INSERT INTO TYPE (type_libelle) values ("sante");

/*****************************************************/
/*                    INSERT LIEU                    */
/*****************************************************/
INSERT INTO LIEU (lieu_nom, lieu_description, lieu_periode, lieu_rue, lieu_complement, lieu_cp, lieu_ville, lieu_latitude, lieu_longitude) values ("Au marche", "C'est sur la place du marché, il y a de la nourriture", "de 7h à 13h le mercredi", "13 rue de Montaubant", null, "73100", "Le Montcel", 8.11111, 4.22222);
INSERT INTO LIEU (lieu_nom, lieu_description, lieu_periode, lieu_rue, lieu_complement, lieu_cp, lieu_ville, lieu_latitude, lieu_longitude) values ("Camp des oies", "Camp de réfugié massif", "toute l'année", "56 chemin des chats", null, "74000", "Annecy", 7.11111, 8.22222);
INSERT INTO LIEU (lieu_nom, lieu_description, lieu_periode, lieu_rue, lieu_complement, lieu_cp, lieu_ville, lieu_latitude, lieu_longitude) values ("Maison médical les prunes", "Médecins bénévoles gratuits", "de 8h à 16h du lundi au vendredi", "5 avenue Eisenhardt", "2 eme étage", "74000", "Annecy", 5.11111, 3.22222);

/*****************************************************/
/*                    INSERT TYPELIEU                    */
/*****************************************************/
INSERT INTO TYPELIEU (idtype, idlieu, typelieu_quantite, typelieu_quantite_estimee) values (2, 1, 60, 20);
INSERT INTO TYPELIEU (idtype, idlieu, typelieu_quantite, typelieu_quantite_estimee) values (2, 2, 100, 90);
INSERT INTO TYPELIEU (idtype, idlieu, typelieu_quantite, typelieu_quantite_estimee) values (1, 2, 70, 60);
INSERT INTO TYPELIEU (idtype, idlieu, typelieu_quantite, typelieu_quantite_estimee) values (3, 3, 10, 25);
