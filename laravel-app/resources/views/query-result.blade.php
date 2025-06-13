<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Result</title>
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
            color: #e0f2f1;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        .result-container {
            background-color: #1f4f46;
            padding: 2rem;
            border-radius: 1rem;
            width: 100%;
            max-width: 1000px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            overflow-x: auto;
        }

        h2 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
        }

        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #3a6d62;
        }

        th {
            background-color: #2c6e5c;
            font-weight: 600;
        }

        tr:hover {
            background-color: #255348;
        }

        .back-link {
            text-align: center;
            margin-top: 1rem;
        }

        .back-link a {
            color: #a4dfd3;
            text-decoration: none;
            font-weight: 600;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h2>Query Result</h2>
        @if (!empty($results) && count($results) > 0)
            <table>
                <thead>
                    <tr>
                        @foreach (array_keys((array) $results[0]) as $column)
                            <th>{{ $column }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $row)
                        <tr>
                            @foreach ((array) $row as $value)
                                <td>{{ $value }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No results found or query returned no rows.</p>
        @endif
        <div class="back-link">
            <a href="{{ url()->previous() }}">&larr; Back</a>
        </div>
    </div>
</body>
</html>