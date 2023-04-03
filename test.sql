
INSERT INTO equipe (nom_equipe)
VALUES ('Albi'),
       ('Castres'),
       ('Toulouse'),
       ('Paris'),
       ('Marseille');



INSERT INTO joueur (nom_joueur, prenom_joueur, id_equipe)
VALUES ('Becker', 'Paul', 1),
       ('Lagarde', 'Pauline', 1),
       ('Levy', 'Bernard', 1),
       ('Renard', 'Manon', 2),
       ('Nicolas-Chevallier', 'Gilbert', 2),
       ('Weber-Francois', 'Cécile', 2),
       ('Cousin', 'Patricia', 3),
       ('Dijoux', 'Nicolas', 3),
       ('Thomas', 'Marc', 3),
       ('Levy', 'Martin', 3);

INSERT INTO partie (date_match)
VALUES ('2023-01-12'),
       ('2023-01-17'),
       ('2023-02-14'),
       ('2023-02-16'),
       ('2023-03-03');


INSERT INTO stat(id_match, id_joueur, but, passe, carton)
VALUES (1, 1, 2, 10, 1),
       (1, 2, 3, 8, 0),
       (2, 3, 1, 6, 0),
       (2, 4, 2, 9, 1),
       (3, 4, 4, 9, 1),
       (3, 5, 0, 4, 0),
       (3, 6, 0, 12, 1),
       (4, 7, 2, 1, 0),
       (4, 8, 3, 14, 2),
       (5, 9, 9, 30, 2),
       (5, 10, 1, 0, 0);

INSERT INTO score(id_equipe1, id_equipe2, id_match, but1, but2)
VALUES (1, 2, 1, 2, 3),
       (2, 3, 2, 6, 3),
       (4, 5, 5, 8, 1);

-- update du Martin
UPDATE joueur
SET id_equipe = 3
WHERE nom_joueur < 'Martin';

-- Ciotti.sql

UPDATE equipe
SET nom_equipe = 'Nice'
WHERE id_equipe = 4;

-- cheat code +2 buts

UPDATE score
SET but1 = but1 + 2
WHERE id_equipe1 = 1;

-- plus de passes pour plus de buts

UPDATE stat
SET but = but + 3
WHERE passe > 4;

-- moins de passes moins de buts du coup

UPDATE stat
SET but = but - 1
WHERE passe < 2;

UPDATE score
SET but1 = but1 + 1
WHERE id_equipe1 IN (SELECT id_equipe FROM equipe WHERE nom_equipe = 'Toulouse');

UPDATE score
SET but2 = but2 + 1
WHERE id_equipe2 IN (SELECT id_equipe FROM equipe WHERE nom_equipe = 'Toulouse');