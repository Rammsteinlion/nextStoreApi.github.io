# 🛒 Nexa Store

API REST para una plataforma de comercio electrónico desarrollada con **PHP, MVC, MySQL y Composer**.

El proyecto busca construir el backend de una tienda online con gestión de usuarios, productos, categorías, inventario, carrito y pedidos.

## 🛠️ Tecnologías

* PHP 8+
* MySQL
* Composer
* PDO
* REST API
* Apache
* MVC
* JSON

## 📁 Estructura del proyecto

```text
nexa-store/
│
├── public/
│   └── index.php
│
├── src/
│   ├── Config/
│   │   ├── ResponseHttp.php
│   │   └── Security.php
│   │
│   ├── Controllers/
│   │   └── UserController.php
│   │
│   ├── DB/
│   │   ├── ConnectionDb.php
│   │   └── Sql.php
│   │
│   ├── Models/
│   │   └── UserModel.php
│   │
│   └── Routes/
│       └── router.php
│
├── vendor/
├── .htaccess
├── composer.json
├── composer.lock
└── README.md
```

## 🚀 Módulos

Actualmente se trabaja en:

* 👤 Usuarios
* 🔐 Roles
* 🏷️ Categorías
* 📦 Productos
* 📊 Inventario
* 🛒 Carrito
* 🧾 Pedidos

## 🔌 API

La API utiliza los métodos HTTP:

```text
GET       Consultar
POST      Crear
PUT       Actualizar
DELETE    Eliminar
```

Ejemplo:

```http
POST /user
```

```json
{
    "name": "Carlos Rodriguez",
    "username": "carlos.rodriguez",
    "email": "carlos.rodriguez@example.com",
    "role_id": 2,
    "password": "12345678",
    "confirmPassword": "12345678"
}
```

## 🔒 Seguridad

* Validación de datos
* Hash de contraseñas
* Consultas preparadas con PDO
* Manejo de respuestas HTTP
* Autenticación mediante tokens

## 📌 Roadmap

* [x] Configuración MVC
* [x] Composer
* [x] Conexión MySQL
* [x] CRUD de usuarios
* [ ] Autenticación
* [ ] Categorías
* [ ] Productos
* [ ] Inventario
* [ ] Carrito
* [ ] Pedidos
* [ ] Frontend con Vue 3 + TypeScript

## 👨‍💻 Autor

**Elkin Murillo**

Proyecto desarrollado con fines de aprendizaje y construcción de portafolio profesional.
