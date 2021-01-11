/*
 Задача 2. MySQL
 В таблице users содержится информация о сотрудниках компании.
 CREATE TABLE `users` (
 	`id` int(11),
 	`name` varchar(255),
 	`gender` tinyint(4),
 	`dep_id` int(11)
 );
 Параметр gender содержит значения 1 для мужчин и 2 для женщин.
 Нужно выполнить запрос, который выведет таблицу из 3 колонок:
 - dep_id
 - количество мужчин в этом отделе
 - количество женщин в этом отделе
 А) Любой запрос
 Б) Без использования подзапросов и операций JOIN
*/

-- Запрос который будет как решением А так и решением Б
SELECT
	`dep_id`,
	COUNT(IF (`gender` = 1, 1, NULL)) as `men_count`,
	COUNT(IF (`gender` = 2, 1, NULL)) as `women_count`
FROM `users`
GROUP BY `dep_id`
;