Create table category
(
	id int PRIMARY KEY AUTO_INCREMENT,
	name varchar(100) NOT NULL,
	parent int NULL DEFAULT '0',
	status tinyint NULL DEFAULT '1',
	created_at datetime DEFAULT CURRENT_TIMESTAMP,
	updated_at datetime DEFAULT CURRENT_TIMESTAMP
)
