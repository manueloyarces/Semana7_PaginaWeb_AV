USE AGENCIA;

#Insertando 10 reservas en la tabla RESERVA
INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel) VALUES
    (1, '2025-03-01', 1, 1),
    (2, '2025-03-02', 2, 2),
    (3, '2025-03-03', 3, 3),
    (4, '2025-03-04', 1, 1),
    (5, '2025-03-05', 2, 2),
    (6, '2025-03-06', 3, 3),
    (7, '2025-03-07', 1, 1),
    (8, '2025-03-08', 2, 2),
    (9, '2025-03-09', 3, 3),
    (10, '2025-03-10', 1, 1);

#Mostrando la tabla RESERVA después de la inserción
SELECT * FROM RESERVA;
