USE isaac;

DROP TABLE IF EXISTS character_table;
CREATE table character_table(
    char_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    char_name VARCHAR(255), 
    char_hp INT,
    char_speed INT,
    char_tears INT,
    char_tears_mult INT,
    char_dmg INT,
    char_dmg_mult INT,
    char_range INT,
    char_shot_speed INT
    );


DROP TABLE IF EXISTS item_table;
CREATE table item_table(
    item_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    item_name VARCHAR(255), 
    item_hp INT,
    item_speed INT,
    item_tears INT,
    item_tears_mult INT,
    item_dmg INT,
    item_dmg_mult INT,
    item_range INT,
    item_shot_speed INT
    );