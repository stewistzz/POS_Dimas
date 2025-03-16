<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <thead>
            <tr>
                {{-- <th>Jumlah Pengguna</th> --}}
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $data->user_id }}</td>
                    <td>{{ $data->username }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->level_id }}</td>
                    {{-- <td>{{ $data }}</td> --}}
                </tr>
                
        </tbody>
    </table>
</body>
</html>
