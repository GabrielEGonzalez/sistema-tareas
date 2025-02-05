---

# 📌 Sistema de Registro de Tareas (MVC)  

Una aplicación web en **PHP nativo** que permite gestionar una lista de tareas pendientes con el patrón **Modelo-Vista-Controlador (MVC)**.  

## 🚀 Funcionalidades  

### 📋 Lista de Tareas  
- Muestra una tabla con las tareas registradas.  
- Cada tarea incluye: **nombre, descripción, fecha límite y estado**.  
- Opciones para **editar, cambiar estado o eliminar** una tarea.  

### ➕ Agregar Tarea  
- Formulario para ingresar una nueva tarea con:  
  - **Nombre** (obligatorio)  
  - **Descripción** (opcional)  
  - **Fecha límite** (obligatoria)  
  - **Estado inicial**: *Pendiente*  
- Validación de datos antes de guardar.  

### ✏️ Editar Tarea  
- Permite modificar los datos de una tarea existente.  
- Guarda los cambios y redirige a la lista principal.  

### 🔄 Cambiar Estado  
- Botón para cambiar el estado entre:  
  - Pendiente  
  - En Progreso  
  - Completada  

### ❌ Eliminar Tarea  
- Permite eliminar una tarea con un mensaje de confirmación previo.  

## 🏛️ Arquitectura MVC  

```
/sistema-tareas  
│── index.php                 # Punto de entrada principal  
│── /app  
│   │── /controllers  
│   │   │── TareaController.php  # Controlador para manejar la lógica de las tareas  
│   │── /models  
│   │   │── Tarea.php            # Modelo que representa una tarea  
│   │── /views  
│   │   │── tareas/  
│   │   │   │── lista.php         # Vista de la lista de tareas  
│   │   │   │── agregar.php       # Vista del formulario para agregar tareas  
│   │   │   │── editar.php        # Vista del formulario para editar tareas  
│── /config  
│   │── database.php           # Configuración de conexión a la base de datos  
│── /public  
│   │── assets/                # Archivos CSS y JS  
│── /storage  
│   │── tareas.json            # Archivo JSON (si no se usa base de datos)  
```

## 🗄️ Persistencia de Datos  
- Opción: Usar **base de datos MySQL**.  


## 📌 Instalación y Uso  

1️⃣ Clona el repositorio:  
```bash
git clone https://github.com/GabrielEGonzalez/sistema-tareas.git
```
2️⃣ Configura la base de datos en **config/database.php**.  
3️⃣ Abre el proyecto en tu servidor local (XAMPP, MAMP o similar).  
4️⃣ Accede desde tu navegador:  
