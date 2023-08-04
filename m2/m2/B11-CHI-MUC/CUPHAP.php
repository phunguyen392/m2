1. xem index
SHOW INDEXES FROM ten_bang;
2. cu phap view 2  cot tu 2 bang
CREATE VIEW ten_view AS
SELECT t1.c1, t2.c2
FROM bang1 AS t1
JOIN bang2 AS t2 ON t1.khoa_lk = t2.khoa_lk;



3.CREATE VIEW ten_view AS
SELECT t1.cot1, t2.cot2, t3.cot3
FROM bang1 AS t1
JOIN bang2 AS t2 ON t1.khoa_lien_ket = t2.khoa_lien_ket
JOIN bang3 AS t3 ON t1.khoa_lien_ket = t3.khoa_lien_ket
WHERE <dieu_kien>;
4. check option.
CREATE VIEW ten_view AS
SELECT cot1, cot2
FROM ten_bang
WHERE dieu_kien
WITH CHECK OPTION;
5. procedure
DELIMITER
CREATE PROCEDURE ham(IN)
BEGIN
SELECT * FROM bang WHERE;
END
DELIMITER
goi de xem : call ten_ham()
