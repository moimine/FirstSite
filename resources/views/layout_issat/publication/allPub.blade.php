<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les publicités</title>
    <style>
        .card {
  border: 1px solid #ddd;
  border-radius: 5px;
  overflow: hidden;
  transition: transform 0.3s;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.card-img-top {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.card-title {
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 0.5rem;
}

.card-text {
  font-size: 0.9rem;
  line-height: 1.5;
  margin-bottom: 0.5rem;
}

.text-muted {
  font-size: 0.8rem;
}
    </style>
</head>
<body>
<div class="container">
  <div class="row">
    @foreach($publications as $publication)
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="{{ $publication->image }}" class="card-img-top" alt="{{ $publication->title }}">
          <div class="card-body">
            <h5 class="card-title">{{ $publication->title }}</h5>
            <p class="card-text">{{ $publication->description }}</p>
            <p class="card-text"><small class="text-muted">Published by {{ $publication->company->name }}</small></p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
</body>
</html>