# 🛒 Nexa Store

**Nexa Store** es una plataforma de comercio electrónico desarrollada para gestionar usuarios, productos, categorías, inventario y pedidos mediante una **API REST**.

El backend está construido con **PHP, MVC, MySQL, PDO y Composer**.

---

## 🛠️ Tecnologías

* PHP 8+
* MySQL
* Composer
* PDO
* REST API
* Apache
* MVC
* JSON

---

## 📁 Estructura del proyecto

```text
nexa-store/
│
├── database/
│   └── nexa_store.sql
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

---

## 🚀 Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/TU-USUARIO/nexa-store.git
```

### 2. Entrar al proyecto

```bash
cd nexa-store
```

### 3. Instalar dependencias

```bash
composer install
```

### 4. Configurar MySQL

Crear la base de datos:

```sql
CREATE DATABASE nexa_store;
```

También puedes importar directamente el archivo:

```text
database/nexa_store.sql
```

Este archivo contiene la estructura y los datos iniciales necesarios para probar el proyecto.

### 5. Configurar la conexión

Configura las credenciales de MySQL utilizadas por el proyecto:

```text
Host: localhost
Database: nexa_store
Username: root
Password: 
```

> Ajusta estos valores según la configuración de tu entorno local.

---

## ▶️ Ejecutar el proyecto

El proyecto puede ejecutarse utilizando **XAMPP/Apache**.

Coloca el proyecto dentro de:

```text
htdocs/
```

Por ejemplo:

```text
C:/xampp/htdocs/nexa-store
```

Inicia:

```text
Apache
MySQL
```

Luego puedes probar la API desde:

```text
http://localhost/nexa-store/
```

---

## 🔌 API REST

La API utiliza los métodos HTTP:

| Método | Uso        |
| ------ | ---------- |
| GET    | Consultar  |
| POST   | Crear      |
| PUT    | Actualizar |
| DELETE | Eliminar   |

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

---

## 🧪 Probar la API

Puedes utilizar:

* Postman
* Insomnia
* Thunder Client

Los endpoints y ejemplos de solicitudes se documentarán a medida que avance el proyecto.

---

## 🗄️ Módulos

Actualmente:

* 👤 Usuarios
* 🔐 Roles
* 🏷️ Categorías
* 📦 Productos
* 📊 Inventario
* 🛒 Carrito
* 🧾 Pedidos

---

## 🎨 Frontend

El frontend será desarrollado como un proyecto independiente utilizando:

* Vue 3
* TypeScript
* Tailwind CSS
* Pinia

### Frontend

**Repositorio:**
`[PEGAR AQUÍ EL ENLACE DEL FRONTEND]`

**Descripción:**

```text
Interfaz web de Nexa Store desarrollada con Vue 3 y TypeScript,
conectada a la API REST del proyecto.
```

---

## 📋 Roadmap

* [x] Configuración MVC
* [x] Composer
* [x] Conexión MySQL
* [x] Usuarios
* [ ] Autenticación
* [ ] Roles y permisos
* [ ] Categorías
* [ ] Productos
* [ ] Inventario
* [ ] Carrito
* [ ] Pedidos
* [ ] Frontend Vue 3

---

## 👨‍💻 Autor

**Elkin Murillo**

Proyecto desarrollado con fines de aprendizaje y construcción de portafolio profesional.
