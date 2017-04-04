SET @hora = '23:26';

SELECT i.id, i.id_partida, i.id_destino, i.valor, i.status,
IFNULL(
(
	SELECT h.nome
	FROM circular_horario_itinerario hi INNER JOIN
	circular_horario h ON h.id = hi.id_horario
	WHERE hi.id_itinerario = i.id AND
	TIME(h.nome) > @hora AND
	segunda = -1
	ORDER BY h.id LIMIT 1
),
(
SELECT h.nome -- hi.id_horario
FROM circular_horario_itinerario hi INNER JOIN
     circular_horario h ON h.id = hi.id_horario
WHERE hi.id_itinerario = i.id AND terca = -1
ORDER BY h.id LIMIT 1
)) AS 'proximo',
 i.id_empresa, i.observacao
FROM circular_parada_itinerario pit INNER JOIN 
	  circular_parada p ON p.id = pit.id_parada LEFT JOIN 
	  circular_itinerario i ON i.id = pit.id_itinerario
WHERE p.id = 1
AND p.id <> (SELECT pit2.id_parada FROM circular_parada_itinerario pit2 WHERE pit2.id_itinerario = i.id
                ORDER BY ordem DESC LIMIT 1)
AND IFNULL(
(
	SELECT hi.id_horario
	FROM circular_horario_itinerario hi INNER JOIN
	circular_horario h ON h.id = hi.id_horario
	WHERE hi.id_itinerario = i.id AND
	TIME(h.nome) > @hora AND
	segunda = -1
	ORDER BY h.id LIMIT 1
),
(
SELECT hi.id_horario
FROM circular_horario_itinerario hi INNER JOIN
     circular_horario h ON h.id = hi.id_horario
WHERE hi.id_itinerario = i.id AND terca = -1
ORDER BY h.id LIMIT 1
)) != ''
ORDER BY IFNULL((
                SELECT 0
                FROM circular_horario_itinerario hi LEFT JOIN
                     circular_horario h ON h.id = hi.id_horario
                WHERE hi.id_itinerario = i.id
                AND TIME(h.nome) > @hora AND segunda = -1
                LIMIT 1
                ),
                1
               ), 
               IFNULL(
(
	SELECT hi.id_horario
	FROM circular_horario_itinerario hi INNER JOIN
	circular_horario h ON h.id = hi.id_horario
	WHERE hi.id_itinerario = i.id AND
	TIME(h.nome) > @hora AND
	segunda = -1
	ORDER BY h.id LIMIT 1
),
(
SELECT hi.id_horario
FROM circular_horario_itinerario hi INNER JOIN
     circular_horario h ON h.id = hi.id_horario
WHERE hi.id_itinerario = i.id AND terca = -1
ORDER BY h.id LIMIT 1
))