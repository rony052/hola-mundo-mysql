
# Aplicación Hola Mundo con PHP, MySQL y Docker Compose

## Descripción del proyecto

Este proyecto consiste en desarrollar una aplicación web sencilla utilizando PHP y MySQL, ejecutada mediante Docker Compose.

La aplicación muestra un mensaje de "Hola Mundo", establece una conexión con una base de datos MySQL y guarda un registro para comprobar que la conexión funciona correctamente.

## Tecnologías utilizadas

- PHP 8.2
- Apache
- MySQL 8.0
- Docker
- Docker Compose

## Estructura del proyecto

```text
hola-mundo-mysql/
│
├── src/
│   └── index.php
│
├── Dockerfile
│
├── docker-compose.yml
│
└── README.md
```

## Servicios configurados

**1. Aplicación PHP**

Ejecuta el código fuente mediante Apache y permite conectarse a MySQL.

**2. Base de datos MySQL**

Almacena la información de la aplicación en una base de datos llamada `hola_mundo`.

## Instalación y ejecución

1. Clonar el repositorio:

```bash
git clone https://github.com/TU_USUARIO/hola-mundo-mysql.git
```

2. Entrar en la carpeta del proyecto:

```bash
cd hola-mundo-mysql
```

3. Ejecutar los servicios:

```bash
docker compose up -d --build
```

4. Abrir la aplicación en el navegador:

http://localhost:8080

## Verificar los contenedores

Para comprobar que los servicios están funcionando:

```bash
docker ps
```

Para consultar los registros:

```bash
docker compose logs
```

## Detener los servicios

Para detener los contenedores:

```bash
docker compose down
```

## Resultado esperado

La aplicación debe mostrar:

¡Hola Mundo!

Aplicación PHP conectada correctamente a MySQL.

Registro guardado correctamente en MySQL.

## Autor

Proyecto realizado como práctica académica de Docker Compose.

**Objetivo:** Crear una aplicación web conectada a una base de datos MySQL utilizando contenedores Docker.
