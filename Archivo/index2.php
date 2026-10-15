<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Profesional</title>

    <style>
        /* Variables que definen los colores */
        :root {
            --bg-color: #ffffff;
            --text-color: #333333;
            --card-bg: #f5f5f5;
        }

        /* Modo oscuro */
        .dark-mode {
            --bg-color: #1a1a1a;
            --text-color: #ffffff;
            --card-bg: #333333;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: var(--card-bg);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.2s;
        }

        button:hover {
            background: #9279b9;
        }
    </style>
</head>

<body>

    <div class="card">
        <h1>Dashboard Profesional</h1>
        <p>Bienvenido al sistema. Puedes cambiar el tema visual aquí:</p>
        <button id="toggleTheme">Activar Modo Oscuro</button>
    </div>

    <script>
        // Seleccionamos el botón usando su ID
        const boton = document.getElementById('toggleTheme');

        // Escuchamos el evento click
        boton.addEventListener('click', () => {

            // Alternar la clase del modo oscuro
            document.body.classList.toggle('dark-mode');

            // Cambiar el texto del botón según el estado
            if (document.body.classList.contains('dark-mode')) {
                boton.textContent = "Activar Modo Claro";
            } else {
                boton.textContent = "Activar Modo Oscuro";
            }
        });
    </script>

</body>
</html>