INSERT INTO item_table (item_name, item_red_hp, item_soul_hp, item_speed, item_tears, item_tears_mult, item_dmg, item_dmg_mult, item_range, item_shot_speed, item_deal_rate)
VALUES 
('The Halo', 1, 0, 0.3, 0.2, 1.0, 0.3, 1.0, 0.25, 0.2, 1.0),
('Magic Mushroom', 1, 0, 0.3, 0.5, 1.5, 0.3, 1.5, 1.0, 0.2, 1.0),
('Sacred Heart', 0, 0, -0.15, 0, 1.0, 1.0, 2.3, 1.25, 0.4, 1.0),
('Sad Onion', 0, 0, 0, 0.7, 1.2, 0, 1.0, 0, 0, 1.0),
('The Pact', 0, 2, 0, 0.7, 1.2, 0.5, 1.0, 0.5, 0.2, 1.0),
('The Mark', 0, 1, 0.3, 0.5, 1.0, 0.3, 1.0, 0.25, 0.2, 1.0),
('Crickets Head', 0, 0, 0, 0, 1.0, 0.5, 1.5, 0, 0.2, 1.0),
('Growth Hormones', 0, 0, 0.3, 0, 1.0, 0.5, 1.0, 0.25, 0.2, 1.0),
('Spoon Bender', 0, 0, 0, 0, 1.0, 0, 1.0, 0, 0.3, 1.1),
('The Body', 3, 0, 0, 0, 1.0, 0, 1.0, 0, 0, 1.0),
('Dead Cat', -1, 0, 0, 0, 1.0, 0, 1.0, 0, 0, 1.0);


SELECT item_red_hp, item_soul_hp, item_speed, item_tears, item_tears_mult, item_dmg, item_dmg_mult, item_range, item_shot_speed, item_deal_rate
            FROM item_table WHERE item_name = 'Dead Cat';