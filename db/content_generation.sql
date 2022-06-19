DROP DATABASE IF EXISTS content_generation;

CREATE DATABASE IF NOT EXISTS content_generation CHARACTER SET utf8 COLLATE utf8_general_ci;

USE content_generation;

DROP TABLE IF EXISTS `students`, `schools`, `sports`;

CREATE TABLE IF NOT EXISTS `content_generation`.`schools` (
     `school_id` INT(11) NOT NULL AUTO_INCREMENT, 
     `school_name` VARCHAR(45) NOT NULL,
     `student_id` INT,  
     PRIMARY KEY (`school_id`)) ENGINE=InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS `content_generation`.`sports` (
     `sport_id` INT(11) NOT NULL AUTO_INCREMENT, 
     `sport_name` VARCHAR(45) NOT NULL,  
     PRIMARY KEY (`sport_id`)) ENGINE=InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS `content_generation`.`students` (
     `student_id` INT(11) NOT NULL AUTO_INCREMENT, 
     `student_firstname` VARCHAR(45) NOT NULL,
     `student_lastname` VARCHAR(45) NOT NULL,
     `school_id` INT,
     `sport_id` INT, 
     PRIMARY KEY (`student_id`),
FOREIGN KEY (school_id) REFERENCES schools(school_id),
FOREIGN KEY (sport_id) REFERENCES sports(sport_id)
) ENGINE=InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

DROP TABLE IF EXISTS `students_data`;
CREATE TABLE IF NOT EXISTS `students_data` (
  `data_id` int NOT NULL AUTO_INCREMENT,
  `data_firstname` VARCHAR(45) NOT NULL,
  `data_lastname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`data_id`)
) ENGINE=InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

INSERT INTO students_data (data_id, data_firstname, data_lastname) 
     VALUES
          (1, 'Kyle', 'Mccann'),
          (2, 'Vanessa', 'Vaughan'),
          (3, 'Kristina', 'Smith'),
          (4, 'Teresa', 'Martin'),
          (5, 'Benjamin', 'Chen'),
          (6, 'Jessica', 'Woodward'),
          (7, 'Corey', 'Fisher'),
          (8, 'Christopher', 'Hernandez'),
          (9, 'Kiara', 'Escobar'),
          (10, 'Gregory', 'Williams'),
          (11, 'Paul', 'Richardson'),
          (12, 'Julia', 'Parker'),
          (13, 'Patricia', 'Wells'),
          (14, 'Candace', 'Johnson'),
          (15, 'Megan', 'Dennis'),
          (16, 'Joseph', 'Young'),
          (17, 'Shelley', 'Hamilton'),
          (18, 'Janet', 'White'),
          (19, 'Kevin', 'Gonzalez'),
          (20, 'Dean', 'Baker'),
          (21, 'Timothy', 'Morgan'),
          (22, 'Kimberly', 'Duncan'),
          (23, 'Lorraine', 'Sanford'),
          (24, 'Jennifer', 'Johnston'),
          (25, 'Lisa', 'Wilson');