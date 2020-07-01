CREATE TABLE atsumaris (
  id int(20) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(255) DEFAULT NULL,
  modified timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  created timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  team_id varchar(50) DEFAULT NULL,
  description text DEFAULT '',
  user_id varchar(50) DEFAULT '',
  start_time time DEFAULT '00:00:00',
  end_time time DEFAULT '00:00:00',
  date date DEFAULT'0000-00-00',
  place varchar(255) DEFAULT '',
  PRIMARY KEY (id)
);
