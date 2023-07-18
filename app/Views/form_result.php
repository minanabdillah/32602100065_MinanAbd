<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Web Programming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form method='post' action= <?= Base_url('Form/submitForm'); ?>>

<table border=2 align="left">
  <tr>
    <td>Nama</td>
    <td>: <input type='text' name='nama' required></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>: <input type='text' name='Jurusan' required></td>
  </tr>
  <tr>
    <td>Mobile</td>
    <td>: <input type='text' name='NIM' required></td>
  </tr>
  
  <tr>
    <td colspan="3" align="center"><button type='submit'>Simpan</button></td>
  </tr>
</table>
</form>
</body>
</html>