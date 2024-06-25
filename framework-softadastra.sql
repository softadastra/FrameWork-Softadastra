-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 juin 2024 à 01:02
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `framework-softadastra`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_articles`
--

CREATE TABLE `tbl_articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tbl_articles`
--

INSERT INTO `tbl_articles` (`id`, `title`, `content`) VALUES
(1, 'article 1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste officiis minima earum ea consequatur? Minus culpa excepturi commodi nobis, quisquam eligendi incidunt magnam ipsa suscipit saepe eveniet, ipsum error neque in fugit vel ullam! Modi suscipit repellendus debitis placeat aut sapiente saepe sunt expedita et ab? Enim totam maxime iure harum necessitatibus tempore. Asperiores, est neque provident saepe ducimus nisi!'),
(2, 'article 2', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste officiis minima earum ea consequatur? Minus culpa excepturi commodi nobis, quisquam eligendi incidunt magnam ipsa suscipit saepe eveniet, ipsum error neque in fugit vel ullam! Modi suscipit repellendus debitis placeat aut sapiente saepe sunt expedita et ab? Enim totam maxime iure harum necessitatibus tempore. Asperiores, est neque provident saepe ducimus nisi!'),
(3, 'article 3', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste officiis minima earum ea consequatur? Minus culpa excepturi commodi nobis, quisquam eligendi incidunt magnam ipsa suscipit saepe eveniet, ipsum error neque in fugit vel ullam! Modi suscipit repellendus debitis placeat aut sapiente saepe sunt expedita et ab? Enim totam maxime iure harum necessitatibus tempore. Asperiores, est neque provident saepe ducimus nisi!'),
(4, 'article 4', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste officiis minima earum ea consequatur? Minus culpa excepturi commodi nobis, quisquam eligendi incidunt magnam ipsa suscipit saepe eveniet, ipsum error neque in fugit vel ullam! Modi suscipit repellendus debitis placeat aut sapiente saepe sunt expedita et ab? Enim totam maxime iure harum necessitatibus tempore. Asperiores, est neque provident saepe ducimus nisi!'),
(5, 'article 5', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste officiis minima earum ea consequatur? Minus culpa excepturi commodi nobis, quisquam eligendi incidunt magnam ipsa suscipit saepe eveniet, ipsum error neque in fugit vel ullam! Modi suscipit repellendus debitis placeat aut sapiente saepe sunt expedita et ab? Enim totam maxime iure harum necessitatibus tempore. Asperiores, est neque provident saepe ducimus nisi!'),
(6, 'aricle 6', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste officiis minima earum ea consequatur? Minus culpa excepturi commodi nobis, quisquam eligendi incidunt magnam ipsa suscipit saepe eveniet, ipsum error neque in fugit vel ullam! Modi suscipit repellendus debitis placeat aut sapiente saepe sunt expedita et ab? Enim totam maxime iure harum necessitatibus tempore. Asperiores, est neque provident saepe ducimus nisi!'),
(7, 'article 7', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste officiis minima earum ea consequatur? Minus culpa excepturi commodi nobis, quisquam eligendi incidunt magnam ipsa suscipit saepe eveniet, ipsum error neque in fugit vel ullam! Modi suscipit repellendus debitis placeat aut sapiente saepe sunt expedita et ab? Enim totam maxime iure harum necessitatibus tempore. Asperiores, est neque provident saepe ducimus nisi!'),
(8, 'article 8', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste officiis minima earum ea consequatur? Minus culpa excepturi commodi nobis, quisquam eligendi incidunt magnam ipsa suscipit saepe eveniet, ipsum error neque in fugit vel ullam! Modi suscipit repellendus debitis placeat aut sapiente saepe sunt expedita et ab? Enim totam maxime iure harum necessitatibus tempore. Asperiores, est neque provident saepe ducimus nisi!');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
