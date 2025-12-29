CREATE DATABASE bus_reservation;
USE bus_reservation;

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    phone VARCHAR(15),
    bus_name VARCHAR(50),
    seat_no INT
);
