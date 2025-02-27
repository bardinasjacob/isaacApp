INSERT INTO run_table (character_name, run_inventory, run_red_hp, run_soul_hp, run_speed, run_tears, run_tears_mult, run_dmg, run_dmg_mult, run_range, run_shot_speed, run_deal_rate) 
VALUES 
("Isaac", 'Item A, Item B', 6, 2, 1.15, 1.0, 1.0, 3.5, 1.2, 7.5, 1.0, 0.1),
("Isaac", 'Item C, Item D', 4, 3, 1.05, 1.1, 0.9, 3.0, 1.3, 6.8, 1.1, 0.2),
("Isaac", 'Item E, Item F', 5, 1, 1.25, 1.2, 1.1, 4.0, 1.0, 8.0, 0.9, 0.15),
("Isaac", 'Item G, Item H', 3, 4, 1.0, 0.9, 0.8, 2.8, 1.1, 5.5, 1.2, 0.25),
("Isaac", 'Item I, Item J', 6, 2, 1.10, 1.05, 0.95, 3.3, 1.2, 7.0, 1.05, 0.3),
("Isaac", 'Item K, Item L', 7, 0, 1.2, 1.2, 1.2, 4.5, 1.15, 8.5, 1.1, 0.05),
("Isaac", 'Item M, Item N', 4, 3, 1.05, 1.0, 1.05, 3.2, 1.3, 6.5, 1.0, 0.35),
("Isaac", 'Item O, Item P', 3, 5, 1.3, 1.3, 1.15, 4.0, 1.1, 9.0, 0.95, 0.1),
("Isaac", 'Item Q, Item R', 5, 2, 1.0, 0.9, 0.9, 3.0, 1.05, 7.5, 1.15, 0.15),
("Isaac", 'Item S, Item T', 6, 1, 1.25, 1.1, 1.1, 4.2, 1.2, 8.0, 1.0, 0.2),
("Isaac", 'Item U, Item V', 4, 2, 1.1, 0.95, 1.05, 3.5, 1.0, 6.0, 1.05, 0.3),
("Isaac", 'Item W, Item X', 7, 3, 1.15, 1.0, 0.85, 3.8, 1.15, 7.8, 1.2, 0.25),
("Isaac", 'Item Y, Item Z', 5, 2, 1.05, 1.2, 1.0, 3.1, 1.3, 8.2, 1.1, 0.4),
("Isaac", 'Item AA, Item BB', 6, 1, 1.3, 1.1, 1.1, 4.0, 1.25, 7.0, 1.05, 0.15);

SELECT * FROM run_table;