<!DOCTYPE html>
<html>
<head>
    <title>Input Pengguna</title>
</head>
<body>
    <form method="post" action="{{route('create')}}">
        @csrf
        <label for="data">Masukkan data:</label>
        <input type="text" name="data" id="data" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
