<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter un étudiant</title>
  <style>
    .container {
  max-width: 600px;
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

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

textarea {
  resize: vertical; /* Permet de redimensionner verticalement uniquement */
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

.btn:hover {
  background-color: #0056b3;
}

.student-form {
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 8px;
}

  </style>
</head>
<body>
  <div class="container">
    <h1>Ajouter un étudiant</h1>
    <form action="{{ route('students.store') }}" method="POST" class="student-form">
    @csrf
      <div class="form-group">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="score">Score:</label>
        <input type="text" id="score" name="score" required>
      </div>
      <div class="form-group">
        <label for="exploits">Exploits:</label>
        <textarea id="exploits" name="exploits" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Confirmer</button>
    </form>
  </div>
</body>
</html>
