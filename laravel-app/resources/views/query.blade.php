<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Run Raw Query</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #0b2e2a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 1rem;
        }

        .query-card {
            background-color: #1f4f46;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 600px;
            color: #e0f2f1;
        }

        .query-card h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        textarea {
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.5rem;
            border: none;
            margin-bottom: 1.25rem;
            background-color: #e6f5f3;
            color: #0b2e2a;
            resize: vertical;
            min-height: 150px;
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
    </style>
</head>
<body>
    <div class="query-card">
        <h2>Execute Raw SQL</h2>
        <form method="POST" action="{{ route('raw.query') }}">
            @csrf
            <label for="raw_query">Raw SQL Query</label>
            <textarea id="raw_query" name="raw_query" placeholder="Write your SQL here..."></textarea>
            <button type="submit">Execute</button>
        </form>
    </div>
</body>
</html>
