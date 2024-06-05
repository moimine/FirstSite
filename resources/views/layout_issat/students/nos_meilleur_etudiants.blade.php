<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Students</title>
    <style>
        .container {
  max-width: 1140px;
}

.card {
  border: 1px solid #ddd;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}

.card-header {
  background-color: #f5f5f5;
  border-bottom: 1px solid #ddd;
  padding: 15px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.card-body {
  padding: 15px;
}

.table {
  border-collapse: collapse;
  width: 100%;
}

.table th,
.table td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: left;
}

.table th {
  background-color: #f5f5f5;
}

.btn {
  border-radius: 5px;
  padding: 5px 10px;
  margin-right: 5px;
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
}

.btn-primary:hover {
  background-color: #0069d9;
}

.btn-danger {
  background-color: #dc3545;
  color: #fff;
}

.btn-danger:hover {
  background-color: #c82333;
}
    </style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!-- @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      @if(session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
      @endif -->
      <div class="card">
        <div class="card-header">
          <h4>Meilleurs étudiants de l'université</h4>
          <a href="{{ route('students.create') }}" class="btn btn-primary float-end">Ajouter un étudiant</a>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Score</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $student)
                <tr>
                  <td>{{ $student->name }}</td>
                  <td>{{ $student->email }}</td>
                  <td>{{ $student->score }}</td>
                  <td>{{ $student->action }}</td>
                </tr>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="post" style="display: inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant?')">Supprimer</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>