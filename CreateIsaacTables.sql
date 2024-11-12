USE isaac;

DROP TABLE IF EXISTS character_table;
CREATE table character_table(
    char_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    char_name VARCHAR(255), 
    char_red_hp INT,
    char_soul_hp INT,
    char_speed FLOAT,
    char_tears FLOAT,
    char_tears_mult FLOAT,
    char_dmg FLOAT,
    char_dmg_mult FLOAT,
    char_range FLOAT,
    char_shot_speed FLOAT
    );


DROP TABLE IF EXISTS item_table;
CREATE table item_table(
    item_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    item_name VARCHAR(255), 
    item_red_hp INT,
    item_soul_hp INT,
    item_speed FLOAT,
    item_tears FLOAT,
    item_tears_mult FLOAT,
    item_dmg FLOAT,
    item_dmg_mult FLOAT,
    item_range FLOAT,
    item_shot_speed FLOAT,
    item_deal_rate FLOAT
    );

DROP TABLE IF EXISTS run_table;
CREATE table run_table(
    run_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    character_id INT, 
    run_inventory VARCHAR(255),
    run_red_hp INT,
    run_soul_hp INT,
    run_speed FLOAT,
    run_tears FLOAT,
    run_tears_mult FLOAT,
    run_dmg FLOAT,
    run_dmg_mult FLOAT,
    run_range FLOAT,
    run_shot_speed FLOAT,
    run_deal_rate FLOAT,
    FOREIGN KEY (character_id) REFERENCES character_table(char_id)
    );

SELECT * FROM item_table