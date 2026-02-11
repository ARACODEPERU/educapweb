<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio en Mantenimiento</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 600px;
            padding: 2rem 3rem;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-20px);
            animation: floatUp 0.8s ease-out forwards;
        }
        @keyframes floatUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        .icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 1.5rem;
            animation: spin 10s linear infinite;
        }
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        h1 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #1a202c;
        }
        p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #4a5568;
            margin-bottom: 2rem;
        }
        .footer {
            margin-top: 2.5rem;
            font-size: 0.9rem;
            color: #718096;
        }
    </style>
</head>
<body>

    <div class="container" style="opacity: 0;">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#4c51bf" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                <path d="M12 12l-2 2"></path>
                <path d="M16 8l-2 2"></path>
            </svg>
        </div>
        <h1>¡Estamos mejorando para ti!</h1>
        <p>
            Nuestro sitio web se encuentra actualmente en mantenimiento para ofrecerte una mejor experiencia.
            Volveremos a estar en línea muy pronto. ¡Gracias por tu paciencia!
        </p>

        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name', 'CPROD') }}. Todos los derechos reservados.
        </div>
    </div>

</body>
</html>