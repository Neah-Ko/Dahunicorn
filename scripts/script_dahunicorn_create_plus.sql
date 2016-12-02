



CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `user_mail` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;







CREATE TABLE IF NOT EXISTS `association` (
  `idassociation` int(11) NOT NULL AUTO_INCREMENT,
  `association_siren` int(11) NULL  DEFAULT NULL,
  `association_tel` char(10) NULL DEFAULT NULL,
  `association_nom` varchar(50) DEFAULT NULL,
  `association_description` varchar(200) DEFAULT NULL,
  `association_mail` varchar(50) DEFAULT NULL,
  `association_rue` varchar(50) DEFAULT NULL,
  `association_complement` varchar(50) DEFAULT NULL,
  `association_cp` varchar(10) DEFAULT NULL,
  `association_ville` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idassociation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;





CREATE TABLE IF NOT EXISTS `siteassociation` (
  `siteassociation_lieuid` int(11) NOT NULL AUTO_INCREMENT,
  `siteassociation_associationid` int(11) DEFAULT NULL,
  PRIMARY KEY (`siteassociation_lieuid`, `siteassociation_associationid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;







ALTER TABLE `siteassociation`
  ADD CONSTRAINT `siteassociation_ibfk_2` FOREIGN KEY (`siteassociation_lieuid`) REFERENCES `lieu` (`idlieu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siteassociation_ibfk_1` FOREIGN KEY (`siteassociation_associationid`) REFERENCES `association` (`idassociation`) ON DELETE CASCADE ON UPDATE CASCADE;







