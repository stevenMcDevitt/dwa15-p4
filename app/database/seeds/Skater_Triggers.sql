delimiter $$

CREATE TRIGGER `calcageupd` BEFORE UPDATE ON `skaters`
 FOR EACH ROW BEGIN
  SET NEW.competition_age = (DATEDIFF('2015-07-01',NEW.date_of_birth)/365);
END
$$

CREATE TRIGGER `calcageins` BEFORE INSERT ON `skaters`
 FOR EACH ROW BEGIN
  SET NEW.competition_age = (DATEDIFF('2015-07-01',NEW.date_of_birth)/365);
END
$$

delimiter ;
