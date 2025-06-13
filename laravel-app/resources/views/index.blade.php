<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #0b2e2a; /* dark navy green */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 1rem;
        }

        .login-card {
            background-color: #1f4f46; /* softer green */
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            color: #e0f2f1;
        }

        .login-card h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.5rem;
            border: none;
            margin-bottom: 1.25rem;
            background-color: #e6f5f3;
            color: #0b2e2a;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #0e4038;
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #145f51;
        }

        .register-link {
            margin-top: 1rem;
            text-align: center;
            font-size: 0.9rem;
        }

        .register-link a {
            color: #a4dfd3;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required autofocus>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Log In</button>

            <div class="register-link">
                Don't have an account? <a href="{{ route('register') }}">Sign up</a>
            </div>
        </form>
    </div>
</body>
<script src="{{ asset('js/script.js') }}"></script>
</html>