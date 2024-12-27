CREATE TABLE IF NOT EXISTS `candidat` (
    `id_candidat` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
    `nom` varchar(25) DEFAULT NULL,
    `prenom` varchar(25) DEFAULT NULL,
    UNIQUE KEY `id_candidat` (`id_candidat`)
    ) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `candidat` (`id_candidat`, `nom`, `prenom`) VALUES
    (1, 'boissie', 'angel');

CREATE TABLE IF NOT EXISTS `election` (
    `id_election` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_etat` bigint UNSIGNED NOT NULL,
    UNIQUE KEY `id_election` (`id_election`),
    KEY `fk_election_etat` (`id_etat`)
    ) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
INSERT INTO `election` (`id_election`, `id_etat`) VALUES
                                                      (1, 0),(2, 0);

CREATE TABLE IF NOT EXISTS `etat_election` (
                                               `id_etat` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
                                               `nom_etat` varchar(25) DEFAULT NULL,
    UNIQUE KEY `id_etat` (`id_etat`)
    ) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
INSERT INTO `etat_election` (`id_etat`, `nom_etat`) VALUES
    (1, 'En cours');

CREATE TABLE IF NOT EXISTS `groupe` (
                                        `id_groupe` int DEFAULT NULL,
                                        `nom_groupe` varchar(25) DEFAULT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

INSERT INTO `groupe` (`id_groupe`, `nom_groupe`) VALUES
                                                     (1, 'Cyber'),
                                                     (2, 'Dev');

CREATE TABLE IF NOT EXISTS `utilisateur` (
                                             `id_utilisateur` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
                                             `nom` varchar(50) DEFAULT NULL,
    `prenom` varchar(50) DEFAULT NULL,
    UNIQUE KEY `id_utilisateur` (`id_utilisateur`)
    ) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`) VALUES
    (1, 'Boissie', 'Angel');

CREATE TABLE IF NOT EXISTS `vote` (
                                      `id_vote` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
                                      `num_tour` int DEFAULT NULL,
                                      `id_utilisateur` bigint UNSIGNED NOT NULL,
                                      `id_election` bigint UNSIGNED NOT NULL,
                                      UNIQUE KEY `id_vote` (`id_vote`),
    KEY `fk_vote_utilisateur` (`id_utilisateur`),
    KEY `fk_vote_election` (`id_election`)
    ) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
INSERT INTO `vote` (`id_vote`, `num_tour`, `id_utilisateur`, `id_election`) VALUES
    (1, 1, 1, 1);
COMMIT;

