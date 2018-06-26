SELECT name, id_distrib FROM distrib
WHERE id_distrib = 42 OR
id_distrib BETWEEN 62 AND 71 OR
id_distrib BETWEEN 88 AND 90 OR
name LIKE "%y%y%"
LIMIT 5 OFFSET 2;