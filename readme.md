# LLamada a servicios web con el cliente Guzzle

Descripción del software para el desarrollo de la práctica

  - Laravel Framework 5.7.11
  - Guzzle ~6.0
  - Php Storm 2018.2

### Búsqueda de recetas por palabra clave.

Se implementa una función que espera el envío de una receta, la cual se le envía mediante una nueva instancia de Guzzle a la API, procesamos la respuesta y sacamos la salida en formato JSON.

El endpoint utilizado es  **/recipes/keyword/...**
Pruebas realizadas con POSTMAN 
![alt text](https://raw.githubusercontent.com/dramosbarajas/O2O/master/readme/img/Keyword.png)

### Búsqueda de recetas por ingredientes.

Se implementa una función que espera el envío de una cadena de ingredientes, los ingredientes deben de ir separados por coma. Mediante una instancia de Guzzle llamamos al API, procesamos la respuesta y sacamos la salida en formato JSON.

El endpoint utilizado es  **/recipes/ingredients/...**
Pruebas realizadas con POSTMAN 
![alt text](https://raw.githubusercontent.com/dramosbarajas/O2O/master/readme/img/Ingredients.png)
  
 David Ramos
