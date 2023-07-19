DELIMITER $$
CREATE PROCEDURE obtenerNombrealumno()
BEGIN
	SELECT nombre as dato FROM basededatospractica.alumnos;
END $$
DELIMITER ;