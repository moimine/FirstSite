<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation des Collaborations</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .btn-primary {
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }
    </style>
</head>
<body>
<table class="table">
    <thead>
        <tr>
            <th>Company Name</th>
            <th>Title</th>
            <th>Description</th>
            <th>Evaluation</th>
            <th>Response</th>
        </tr>
    </thead>
    <tbody>
        @foreach($offers as $offer)
            <tr>
                <td>{{ $offer->company->name }}</td>
                <td>{{ $offer->title }}</td>
                <td>{{ $offer->description }}</td>
                <!-- <td>
                    <form action="{{ route('offers.evaluate', $offer->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="evaluation">Evaluation</label>
                            <input type="number" name="evaluation" id="evaluation" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Evaluate</button>
                    </form>
                </td> -->
                <td>
                    <form action="{{ route('offers.respond', $offer->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="response">Response</label>
                            <textarea name="response" id="response" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Respond</button>
                    </form>
                    <!-- Cette réponse doit etre envoyé a la partie cliente(entreprise) -->
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>