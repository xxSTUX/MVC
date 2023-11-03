# Role Playing Game - Proyecto PHP MVC

Este proyecto es un juego de rol (Role Playing Game) implementado en PHP siguiendo la arquitectura MVC. Permite realizar operaciones CRUD (Crear, Leer, Actualizar y Borrar) de criaturas en el juego.

## Estructura del Proyecto

- `rolegame_creature.sql`: Base de datos.
- `index.php`: Archivo principal.
- `style.css`: Hoja de estilo CSS.
- `config/config.php`: Configuración del proyecto.
- `controllers/CreatureController.php`: Controlador para las criaturas.
- `models/CreatureModel.php`: Modelo para las criaturas.
- `views/creatures/`: Vistas relacionadas con las criaturas.
  - `create.php`: Vista para crear una criatura.
  - `detail.php`: Vista para ver detalles de una criatura.
  - `edit.php`: Vista para editar una criatura.
  - `list.php`: Vista para listar todas las criaturas.

## Uso
-Copia el proyecto a tu htdocs
-Abre el proyecto con Netbeans.
-Conecta la base de datos a Netbeans.
-Inicia el xampp y activa Apache y SQL.
-Desde el navegador entra a [localhost/"nombre_de_la_carpeta_del_proyecto"](http://localhost/roleplayinggame)

## Base de datos:

rolegame_creature.sql

## Contribuir

Si deseas contribuir a este proyecto, por favor, sigue estos pasos:

1. Haz un "fork" del repositorio.
2. Crea una rama para tus cambios: `git checkout -b feature/nueva-funcionalidad`.
3. Realiza tus cambios y haz "commit" con mensajes descriptivos.
4. Sube tus cambios a tu repositorio en GitHub: `git push origin feature/nueva-funcionalidad`.
5. Abre un "pull request" en el repositorio original.

## Licencia

Este proyecto está bajo la Licencia MIT.

---
Creado por Amin - [Enlace al mi git](https://github.com/xxSTUX)
