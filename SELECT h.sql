SELECT h.id_hotel, h.nombre, COUNT(r.id_reserva) AS total_reservas
FROM HOTEL h
JOIN RESERVA r ON h.id_hotel = r.id_hotel
GROUP BY h.id_hotel
HAVING COUNT(r.id_reserva) > 2;
