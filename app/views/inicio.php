<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            padding: 1rem;
            text-align: center;
        }

        .tabla {
            padding: 1rem;
        }

        /* Estilo para el botón de agregar */
        #agregar {
            background: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        #agregar:hover {
            background: #0056b3;
        }

        /* Estilo del modal (ventana emergente) */
        .con-modal {
            display: none;
            /* Oculto por defecto */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 25px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            width: 400px;
            text-align: center;
            animation: fadeIn 0.3s ease-in-out;
        }



        /* Estilo del botón de cerrar */
        #cerrar {
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 50%;
            position: absolute;
            top: 8px;
            right: 10px;
            transition: background 0.3s ease-in-out;
        }

        #cerrar:hover {
            background: darkred;
        }

        /* Estilo de los inputs */
        input,
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Botón de enviar */
        input[type="submit"] {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background: #218838;
        }

        /* Animación de aparición */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translate(-50%, -55%);
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        .con_acciones {
            gap: 5px;
            margin-right: 10px;
            display: flex;
            flex-direction: row;
            align-content: end;
            justify-content: end;
        }

        .buscador {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            width: 250px;
            height: 40px;
            padding: 0 10px;
            border: 1px solid #ddd;
        }

        .buscador .icono {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            margin-right: 8px;
            /* Espacio entre el ícono y el input */
        }

        .buscador .inputContainer {
            flex-grow: 1;
            /* Hace que el input ocupe el espacio restante */
        }

        .buscador input[type="search"] {
            border: none;
            outline: none;
            background: transparent;
            width: 100%;
            font-size: 14px;
            color: #666;
            height: 100%;
        }
    </style>
    <title>inicio</title>
</head>

<body>
    <header>
        <h1>
            SISTEMA DE REGISTRO DE TAREAS 📚
        </h1>
    </header>

    <main>
        <div class="con_acciones">
            <div class="contendorBus">
                <div class="buscador">
                    <div class="icono">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </div>
                    <div class="inputContainer">
                        <input type="search" name="buscador" id="buscador" placeholder="Buscar tarea...">
                    </div>
                </div>
            </div>
            <div>
                <button type="button" id="agregar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="white" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg> agregar</button>
            </div>
        </div>

        <div class="con-modal">
            <span id="cerrar">x</span>

            <form action="/" method="post">

                <div class="con-x con-etiqueta">
                    <label for="tarea">nombre de tarea:</label>
                    <input type="text" name="tarea" id="tarea">
                </div>

                <div class="con-x con-etiqueta">
                    <label for="descripcion">descripcion:</label>
                    <input type="text" name="descripcion" id="descripcion">
                </div>

                <div class="con-x con-etiqueta">
                    <label for="flimite">fecha limite:</label>
                    <input type="date" name="flimite" id="flimite">
                </div>

                <div class="con-x con-etiqueta">
                    <label for="estado">estado:</label>
                    <select name="estados" id="estados">
                        <option value="Pendiente">Pendiente</option>

                        <option value="Enprogreso">En Progreso</option>

                        <option value="Completada">Completada</option>
                    </select>
                </div>

                <input type="submit" value="enviar">
            </form>
        </div>



        <div class="tabla">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nombre tarea</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fecha limite</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (isset($datos)): ?>
                        <?php foreach ($datos as $dato): ?>
                            <th></th>
                        <?php endforeach ?>
                    <?php else: ?>
                        <tr class="table-success" style="text-aling:center;">
                            <th colspan="5">ninguna tarea registrada</th>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="./public/js/modal.js"></script>
</body>

</html>