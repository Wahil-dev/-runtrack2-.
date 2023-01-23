SELECT `etage`.`nom`, `salles`.`nom` AS `Biggest_Room`, MAX(`capacité`) as `capacity` FROM `salles` JOIN `etage` on `etage`.`id` = `salles`.`id`;
