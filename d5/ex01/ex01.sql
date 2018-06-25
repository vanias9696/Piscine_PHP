CREATE TABLE bd_ismus.ft_table(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	login VARCHAR(8) NOT NULL DEFAULT 'toto',
	`group` ENUM('staff', 'student', 'other') NOT NULL,
	creation_date DATE NOT NULL
);