<?php
session_start(); // Iniciar la sesión

class tareaController
{
    public function vistaHome(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recoger los datos del formulario
            $tarea = $_POST['tarea'] ?? '';
            $descripcion = $_POST['descripcion'] ?? '';
            $flimite = $_POST['flimite'] ?? '';
            $estados = $_POST['estados'] ?? '';

            // Validar que no estén vacíos
            if (empty($tarea) || empty($descripcion) || empty($flimite) || empty($estados)) {
                echo "Todos los campos son obligatorios.";
                return;
            }

            // Crear un array con los datos
            $nuevaTarea = [
                'tarea' => $tarea,
                'descripcion' => $descripcion,
                'flimite' => $flimite,
                'estados' => $estados
            ];

            // Guardar en la sesión (para persistencia)
            if (!isset($_SESSION['tareas'])) {
                $_SESSION['tareas'] = [];
            }
            $_SESSION['tareas'][] = $nuevaTarea; // Agregar nueva tarea al array

            // Redireccionar para evitar reenvío del formulario
            header("Location: /");
            exit();
        }

        // Cargar la vista con las tareas almacenadas en la sesión
        $tareas = $_SESSION['tareas'] ?? [];
        require_once('app/views/inicio.php');
    }
}
