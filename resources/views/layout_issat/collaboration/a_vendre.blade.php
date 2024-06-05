<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les articles que l'ISSAT propose</title>
    <style>
        .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        }

        h1 {
        text-align: center;
        }

        .form-group {
        margin-bottom: 20px;
        }

        label {
        display: block;
        font-weight: bold;
        }

        textarea,
        input[type="text"],
        input[type="file"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        }

        .btn {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        }

        .btn-primary {
        background-color: #007bff;
        }

        .btn-primary:hover {
        background-color: #0056b3;
        }

        .btn-danger {
        background-color: #dc3545;
        }

        .btn-danger:hover {
        background-color: #c82333;
        }

        .table {
        width: 100%;
        border-collapse: collapse;
        }

        .table th,
        .table td {
        border: 1px solid #ccc;
        padding: 8px;
        }

        .table th {
        background-color: #f2f2f2;
        }

        .table img {
        max-width: 100%;
        height: auto;
        }

    </style>
</head>
<body>
<div class="container">
    <h1>Ajouter un article à vendre</h1>
    <form action="{{ route('articles.store') }}" method="POST" class="article-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nom de l'article:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description de l'article:</label>
            <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="photo">Photo de l'article:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter l'article</button>
    </form>

    <hr>

    <h1>Liste des articles à vendre</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>               
                    <td>{{ $article->name }}</td>
                    <td>{{ $article->description }}</td>
                    <td><img src="{{ asset('storage/'.$article->photo) }}" alt="{{ $article->name }}" style="max-width: 100px"/></td>
                    <td>
                        <form action="{{ route('articles.delete', $article) }}" method="post" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette publication?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>