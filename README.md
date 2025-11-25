# 📝 BLOG-LARAVEL — Proyecto CRUD con Laravel 10 + Breeze  
> Un blog moderno, rápido y con un diseño dark-mode profesional.

**Autor:** Alberto Jiménez Rodríguez
**Curso:** 2025/2026 — Desarrollo Web Full Stack (2º DAW)
**Profesor:** Alfredo Vozmediano

![Laravel](https://img.shields.io/badge/Laravel-10.x-ff2d20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.x-787cb5?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-00758f?style=for-the-badge&logo=mysql&logoColor=white)
![Status](https://img.shields.io/badge/Status-En%20desarrollo-purple?style=for-the-badge)

---

## 📌 Descripción del proyecto
**BLOG-LARAVEL** es un blog totalmente funcional construido con **Laravel 10**, que incluye:

✔ Sistema de autenticación completo (login + registro)  
✔ Gestión total de artículos (CRUD)  
✔ Panel “Mis artículos” filtrado por usuario  
✔ Protección de rutas mediante middleware  
✔ Diseño 100% personalizado en **dark mode violeta**  
✔ Formulario avanzado, inputs estilizados y cards estéticas  
✔ Listado moderno con hover, sombras suaves y tipografía profesional  

El objetivo del proyecto es aprender buenas prácticas en:  
🔹 Laravel  
🔹 Breeze  
🔹 MySQL  
🔹 Blade  
🔹 CSS personalizado  
🔹 Arquitectura MVC  

---

## 📚 Características principales

### 🔐 Autenticación (Laravel Breeze)
- Registro de usuarios  
- Inicio de sesión  
- Cierre de sesión  
- Validación server-side  
- Filtros de acceso  

### 📝 CRUD de Artículos
- Crear artículo  
- Editar artículo  
- Eliminar artículo  
- Ver artículo  
- Listado general del blog  
- Listado “Mis artículos” (solo del usuario actual)

### 🎨 Diseño UI/UX
- Paleta violeta + negro  
- Header moderno con botones  
- Cards con hover  
- Formularios minimalistas  
- Login/Register personalizados  
- Animaciones suaves  
- Layout master unificado  

---

## 🚀 Instalación y puesta en marcha

### 1️⃣ Clonar repositorio
```bash
git clone https://github.com/TU-USUARIO/TU-REPO.git
cd TU-REPO

```

### 2️⃣ Instalar dependencias
```bash
composer install
npm install
```

### 3️⃣ Crear archivo .env
```bash
cp .env.example .env
```

### 4️⃣ Generar clave de Laravel
```bash
php artisan key:generate
```

### 5️⃣ Configurar base de datos

En el `.env` define:

```bash
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=
```

### 6️⃣ Migrar tablas
```bash
php artisan migrate
```

### 7️⃣ Lanzar servidor
```bash
php artisan serve
npm run dev
```

```bash
🗂 Estructura del Proyecto
├─ app/
│  ├─ Models/
│  ├─ Http/
│  │  ├─ Controllers/
│  │  └─ Middleware/
├─ resources/
│  ├─ views/
│  │  ├─ articles/
│  │  ├─ layouts/
│  │  └─ components/
│  ├─ css/
│  └─ js/
├─ routes/
│  ├─ web.php
├─ public/
├─ database/
│  ├─ migrations/
│  └─ seeders/
└─ README.md
```

### 🎯 Rutas principales del proyecto

---

#### 🔓 Público
| Ruta | Descripción |
|------|-------------|
| `/articles` | Listado de artículos |
| `/articles/{id}` | Ver un artículo |

---

#### 🔐 Requiere login
| Ruta | Acción |
|------|--------|
| `/articles/create` | Crear artículo |
| `/articles/{id}/edit` | Editar artículo |
| `/articles/mine` | Tus artículos |
| `/logout` | Cerrar sesión |

---

### 🎨 Capturas

A continuación se muestran algunas pantallas del proyecto.  

---

#### 🟣 Página principal  
![Página principal](/img/pagina-principal.png)

---

#### 🔑 Login personalizado  
![Login](/img/login.png)

---

#### ✍️ Registro  
![Registro](/img/registro.png)

---

#### ✍️ Crear artículo  
![Crear artículo](/img/crear-articulo.png)

---

#### 📁 Mis artículos  
![Mis artículos](/img/mis-articulos.png)




---

### 🏁 Versión final

**Versión:** v1.0.0  
**Autor:** @jimeenx9  
**Fecha:** Noviembre 2025 

---

© 2025 — Práctica elaborada por **Alberto Jiménez**
