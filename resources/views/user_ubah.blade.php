<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">  
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center text-primary">Form Ubah Data User</h2>
            <a href="{{ url('/user') }}" class="btn btn-secondary mb-3">&#8592; Kembali</a>
            
            <form method="post" action="{{ url('/user/ubah_simpan/' . $data->user_id) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukan Username" value="{{ $data->username }}" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="{{ $data->nama }}" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukan Password" value="{{ $data->password }} required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Level ID</label>
                    <input type="number" name="level_id" class="form-control" placeholder="Masukan ID Level" value="{{ $data->level_id }}" required>
                </div>
                
                <button type="submit" class="btn btn-success w-100">Ubah</button>
            </form>
        </div>
    </div>
</body>
</html>
