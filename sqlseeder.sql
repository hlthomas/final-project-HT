
CREATE TABLE `music`.`songs` (
                                 `songNumber` INT NOT NULL AUTO_INCREMENT ,
                                 `songName` VARCHAR(50) NOT NULL ,
                                 `dateWritten` DATE NOT NULL ,
                                 `description` VARCHAR(200) NOT NULL ,
                                 PRIMARY KEY (`songNumber`)) ENGINE = InnoDB;


INSERT INTO `songs` (
    `songNumber`,
    `songName`,
    `dateWritten`,
    `description`
) VALUES
      (NULL, 'Control Yourself', '11/07/2024', 'Written on November 7th, 2024 after seeing a man tell a woman to \"control herself\" in her reaction to the Donald Trump winning the election. It is about the expectation for idle women in a society fervently denying their rights and safety.'),
      (NULL, 'Kneel', '08/13/2022', 'Written on August 13th 2022, this song deals with the confrontation of religion in Harlow\'s life after being raised Christian, and never fully understanding the faith.')' ||




