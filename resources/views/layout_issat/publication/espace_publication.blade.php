<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issat publications</title>
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

.publication {
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  padding: 10px;
}

.publication .content img {
  max-width: 100%;
  height: auto;
  display: block;
  margin: 0 auto 10px;
}

.publication .content video {
  max-width: 100%;
  height: auto;
  display: block;
  margin: 0 auto 10px;
}

    </style>
</head>
<body>
<div class="container">
    <h1>Ajouter une publication</h1>
    <form action="{{ route('pub.store') }}" method="POST" class="publication-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="content">Contenu:</label>
            <textarea id="content" name="content" rows="4" ></textarea>
        </div>
        <div class="form-group">
            <label for="media">Média (Image ou Vidéo):</label>
            <input type="file" id="media" name="media">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

    <hr>

    <h1>Mes publications</h1>
    <div class="publications">
        @foreach($publications as $publication)
        <div class="publication">
            <div class="content">
              @if($publication->content)
                <p>{{ $publication->content }}</p>
                <!-- <p>Contenu de $publication->media : {{ $publication->media }}</p> -->
                @endif
                @if($publication->media)
                    @if($publication->media_type === 'image')
                    <img src="{{ asset('storage/'.$publication->media) }}" alt="Image">
                    @elseif($publication->media_type === 'video')
                    <video controls>
                        <source src="{{ asset('storage/'.$publication->media) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    @endif
                @endif
            </div>
            <form action="{{ route('pub.delete', $publication) }}" method="post" class="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette publication?')">Supprimer</button>
            </form>
            <br>
            <br>
            
        </div>
        @endforeach
    </div>
</div>
<a href="{{route('allPublication')}}">Toutes les publicités</a>
</body>
</html>