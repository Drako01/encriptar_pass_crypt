### Encriptar Contraseña con Crypt de PHP

Este script PHP permite encriptar contraseñas utilizando la función `crypt` de PHP. Aquí está una explicación detallada de lo que hace el script:

#### Funcionamiento del Script

1. **Formulario HTML**: El script contiene un formulario HTML que permite a los usuarios ingresar una contraseña.

2. **Procesamiento del Formulario**: Cuando el usuario envía el formulario, el script verifica si se ha enviado mediante el método POST de HTTP.

3. **Obtención de la Contraseña**: Si el formulario se envía correctamente, el script obtiene la contraseña ingresada por el usuario a través del método POST.

4. **Generación de la Sal Personalizada**: El script utiliza una sal personalizada, que se define como `$customSalt`. La sal es una cadena aleatoria que se agrega a la contraseña para hacerla más segura. Aquí se recomienda cambiarla por una sal personalizada.

5. **Encriptación de la Contraseña**: Utilizando la función `crypt` de PHP, el script encripta la contraseña ingresada por el usuario utilizando la sal personalizada.

6. **Mostrar Resultados**: Finalmente, el script muestra tanto la contraseña ingresada por el usuario como la contraseña encriptada. Esto permite a los usuarios ver cómo se ha encriptado su contraseña.

#### Uso y Recomendaciones

- **Sal Personalizada**: Se recomienda encarecidamente cambiar la sal personalizada por una propia y única. Esto aumentará la seguridad de las contraseñas encriptadas.

- **Bootstrap**: El script enlaza Bootstrap para mejorar el aspecto visual del formulario. Si se utiliza una versión diferente de Bootstrap, asegúrese de actualizar la URL de la hoja de estilo correspondiente.

- **Imagen de Logo**: El script incluye una etiqueta `<img>` que hace referencia a una imagen de un logo (`logo.png`). Asegúrese de proporcionar la ruta correcta a la imagen del logo o elimine esta parte si no se utiliza.

#### Nota Importante

- Este script está diseñado con fines educativos y de demostración. No debe utilizarse en un entorno de producción sin antes realizar las debidas consideraciones de seguridad y buenas prácticas de desarrollo.

#### Contribuciones

- Siéntase libre de contribuir al proyecto para mejorar su funcionalidad o seguridad. Se aceptan solicitudes de extracción en el repositorio.



----




#### Autor

- Este script fue creado por Alejandro Daniel Di Stefano.


¡Gracias por utilizar este script para encriptar contraseñas con PHP! Si tiene alguna pregunta o sugerencia, no dude en contactar al autor o contribuir al proyecto.