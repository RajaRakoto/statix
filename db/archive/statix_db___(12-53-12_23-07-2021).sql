SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: `statix_db`
--




CREATE TABLE `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activityName` varchar(100) COLLATE utf8_bin NOT NULL,
  `activityFreq` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO activity VALUES
("1","Connexion","9","2021-07-23"),
("2","Etude","12","2021-07-23");




CREATE TABLE `etab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etabName` varchar(100) COLLATE utf8_bin NOT NULL,
  `etabFreq` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO etab VALUES
("1","ANKATSO","4","2021-07-23"),
("2","CNTEMAD","12","2021-07-23"),
("3","PRECAES","1","2021-07-23"),
("4","L.Andohalo","2","2021-07-23");




CREATE TABLE `filiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filiereName` varchar(100) COLLATE utf8_bin NOT NULL,
  `filiereFreq` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO filiere VALUES
("1","Informatique","5","2021-07-23"),
("2","Sociologie","3","2021-07-23"),
("3","Sc.Politiques","1","2021-07-23"),
("4","Gestion","4","2021-07-23"),
("5","Droit","2","2021-07-23"),
("6","Communication","2","2021-07-23");




CREATE TABLE `level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `levelName` varchar(100) COLLATE utf8_bin NOT NULL,
  `levelFreq` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO level VALUES
("1","L1","4","2021-07-23"),
("2","L2","3","2021-07-23"),
("3","L3","1","2021-07-23"),
("4","M1","1","2021-07-23"),
("5","Universitaire","8","2021-07-23");




CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `contact` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `etabEtu` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `filiereEtu` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `levelEtu` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `freqEtu` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;


INSERT INTO members VALUES
("1","RANDRIANARISON","Mitondrasoa Jesse","Andavamamba Anatihazo 1","0344186447","CNTEMAD","Informatique","L2","1","2021-07-23"),
("2","RAONIMAMPIANDRY","Mamisoa Fitiavana","-","-","ANKATSO","Sociologie","L1","1","2021-07-23"),
("3","RARIVOSON","Mihary Mamisoa Sylvie","-","-","ANKATSO","Sociologie","L1","1","2021-07-23"),
("4","YOLINIAINA","Mamitiana","-","-","ANKATSO","Sc.Politiques","L1","1","2021-07-23"),
("5","FANOMEZANA","Tsinjoarisoa Rina","-","-","CNTEMAD","Gestion","L3","1","2021-07-23"),
("6","HANTANIAINA","Dimby Erica Mederique","-","-","CNTEMAD","Communication","Universitaire","1","2021-07-23"),
("7","ANDRIAMPARANIONY","Liantsoa Peltereau","-","-","CNTEMAD","Gestion","Universitaire","1","2021-07-23"),
("8","RANDRIANASOLO","Avotriniaina","-","-","L.Andohalo","-","Lycee","1","2021-07-23"),
("9","FANOMEZANTSOA","Niaina Tiavina","-","-","CNTEMAD","Communication","Universitaire","1","2021-07-23"),
("10","RABENARIVELO","Nomenjanahary Mahery","-","-","CNTEMAD","Droit","Universitaire","1","2021-07-23"),
("11","RAZAFIMANDIMBIARSON","Tahiana Herizo","-","0345733572","PRECAES","Droit","M1","1","2021-07-23"),
("12","RAHOLIARIJAONA","Miarinaja Patricia","-","-","CNTEMAD","Gestion","Universitaire","1","2021-07-23"),
("13","RAKOTOMAMPIONONA","Fetraharitiana","-","-","CNTEMAD","Gestion","Universitaire","1","2021-07-23"),
("14","ANDRIANKOTOMIARINTSOA","Tsiry Nasandratra","-","-","CNTEMAD","Informatique","L2","1","2021-07-23"),
("15","RANDRIANAIVO","Andriazaka Justin","-","-","CNTEMAD","Informatique","Universitaire","1","2021-07-23"),
("16","RANDRIANTSOA","Riva Fanantenana","-","0349043762","CNTEMAD","Informatique","L2","1","2021-07-23"),
("17","RAZANADRASOA","Hantamalala","-","-","CNTEMAD","Informatique","Universitaire","1","2021-07-23"),
("18","VONINTSOA","Tanjoniaina Fitahiana","-","-","ANKATSO","Sociologie","L1","1","2021-07-23"),
("19","ANDRAMIZAKA","Herisoa Ronald",".",".","L.Andohalo","-","Lycee","1","2021-07-23"),
("20","ANTSOALATAFENO","Herisam J.Fabrice","-","-","CNTEMAD","Gestion","M1","1","2021-07-23"),
("21","RAZAFINDRAMBOA","Bemanatsoa Antonio","-","-","ANKATSO","Biologie","L2","1","2021-07-23"),
("22","FANEVA ","Valimbavaka","-","-","CNTEMAD","Droit","Universitaire","1","2021-07-23"),
("23","JAONASY","Malalatiana F.Meva Fanantenana","-","-","CNTEMAD","Communication","Universitaire","1","2021-07-23"),
("24","RAHARIMIRANTO","Onjaniaina David","-","-","CNTEMAD","Communication","Universitaire","1","2021-07-23"),
("25","RAMARIMANATSOA","Fitiavana Mendrika","-","-","CNTEMAD","Informatique","L1","1","2021-07-23"),
("26","MANJATOHARINAIVO","Nehemia Hajatiana","-","-","CNTEMAD","Informatique","L1","1","2021-07-23"),
("27","CAJEE","Gianna Fahendrena","-","-","CNTEMAD","Informatique","L1","1","2021-07-23"),
("28","RANDRIAMPARANY","Naritiana Rino","-","-","CNTEMAD","Droit","Universitaire","1","2021-07-23"),
("29","FEFAHARINTSARA","Mandinintsoa Lalaina","-","-","INSPNMAD","Paramede","L3","1","2021-07-23"),
("30","RAMANAMPIARO","Sandampitia Stephano","-","-","CNTEMAD","Informatique","L2","1","2021-07-23"),
("31","NANTENAINA","Iavo Manjaka","-","-","CNTEMAD","Informatique","L2","1","2021-07-23"),
("32","RAMIALIJAONARIVELO","Tantelu Angeline","-","-","ANKATSO","Histo-Geo","Universitaire","1","2021-07-23");




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;