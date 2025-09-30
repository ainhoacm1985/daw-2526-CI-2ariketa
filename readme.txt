Ejercicio 2: CI para una aplicación PHP – instalación y pruebas
Enunciado: Supongamos que tenemos una aplicación web escrita en PHP, con sus dependencias gestionadas por Composer y pruebas unitarias usando PHPUnit. Queremos automatizar un flujo de Integración Continua (CI) que, en cada push al repositorio, realice los siguientes pasos: 
•	(a) comprobar el código fuente (checkout),
•	(b) instalar PHP en la versión necesaria y las dependencias de Composer, 
•	(c) ejecutar la suite de pruebas. El objetivo es que cada vez que subimos código, sepamos automáticamente si las pruebas pasan o si algo se rompió, antes de pensar en desplegar. Crea un workflow YAML que implemente esta secuencia en GitHub Actions.
•	
