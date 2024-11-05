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

    SELECT * FROM item_table;

    INSERT INTO item_table(
                    item_name, item_red_hp, item_soul_hp, item_speed, item_tears, item_tears_mult, item_dmg, item_dmg_mult, item_range, item_shot_speed, item_deal_rate)
                    VALUES ('{$name}', 1, 1, 1, 1, 1, 1, 1, 1, 1, {$deal_rate});