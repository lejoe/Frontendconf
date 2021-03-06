CREATE TABLE attendees (id INT AUTO_INCREMENT, email VARCHAR(255) NOT NULL, entrytime DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE news (id INT AUTO_INCREMENT, date DATE NOT NULL, title VARCHAR(255) NOT NULL, news VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE programme (id INT AUTO_INCREMENT, fk_talks INT NOT NULL, room VARCHAR(32) NOT NULL, day text NOT NULL, timestart TIME, timeend TIME, type text NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE speakers (id INT AUTO_INCREMENT, name VARCHAR(32) NOT NULL, profession VARCHAR(32), bio TEXT NOT NULL, company VARCHAR(32), twitter VARCHAR(32), email VARCHAR(64) NOT NULL, website VARCHAR(64), img VARCHAR(32), costscovered VARCHAR(4), status text, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sponsors (id INT AUTO_INCREMENT, sponsor VARCHAR(32) NOT NULL, website VARCHAR(128) NOT NULL, package INT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE talks (id INT AUTO_INCREMENT, fk_speakers INT NOT NULL, title TEXT NOT NULL, abstract TEXT, datepreferencefortalk text, linktopresentation INT, PRIMARY KEY(id)) ENGINE = INNODB;
