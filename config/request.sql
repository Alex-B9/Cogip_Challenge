
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
                                           `CompaniesId` int(11) NOT NULL,
                                           `name of company` varchar(70) NOT NULL,
                                           `country` varchar(25) NOT NULL,
                                           `vat number` int(11) NOT NULL,
                                           PRIMARY KEY (`CompaniesId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
                                          `InvoicesId` int(11) NOT NULL,
                                          `number of the invoice` int(11) NOT NULL,
                                          `lastname` varchar(20) NOT NULL,
                                          `email` varchar(50) NOT NULL,
                                          PRIMARY KEY (`InvoicesId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
                                        `PeopleId` int(11) NOT NULL,
                                        `firstname` varchar(20) NOT NULL,
                                        `lastname` varchar(20) NOT NULL,
                                        `email` varchar(50) NOT NULL,
                                        PRIMARY KEY (`PeopleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type of company`
--

DROP TABLE IF EXISTS `type of company`;
CREATE TABLE IF NOT EXISTS `type of company` (
                                                 `TypeId` int(11) NOT NULL,
                                                 `client` varchar(100) NOT NULL,
                                                 `customer` varchar(100) NOT NULL,
                                                 PRIMARY KEY (`TypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `companies`
--
ALTER TABLE `companies`
    ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`CompaniesId`) REFERENCES `type of company` (`TypeId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
    ADD CONSTRAINT `fk_invoices_companies` FOREIGN KEY (`InvoicesId`) REFERENCES `companies` (`CompaniesId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `people`
--
ALTER TABLE `people`
    ADD CONSTRAINT `fk_people_companie` FOREIGN KEY (`PeopleId`) REFERENCES `companies` (`CompaniesId`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `fk_people_invoice` FOREIGN KEY (`PeopleId`) REFERENCES `invoices` (`InvoicesId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

