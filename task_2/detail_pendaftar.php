<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, rgba(65, 120, 213, 0.615), rgba(58, 1, 92, 0.764));
            padding: 15px;
        }

        .container {
            max-width: 100%;
            width: 100%;
            margin: 80px, 50px, auto, 50px;
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            align-items: center;
        }

        h1 {
            font-size: 50px;
            text-align: center;
        }

        .container td {
            padding: 10px;
            text-align: justify;
        }

        .container table {
            width: 100%;
        }
    </style>
    <title>Data Pendaftar</title>
</head>

<body>
    <h1>Data Pendaftar</h1>
    <div class="container">
        <table border="1">
            <tr>
                <td>Nama Lengkap </td>
                <td> : </td>
                <td><?php echo $_GET['nama_pendaftar']; ?></td>
            </tr>

            <tr>
                <td>Email </td>
                <td> : </td>
                <td><?php echo $_GET['email_pendaftar']; ?></td>
            </tr>

            <tr>
                <td>Jenis Kelamin </td>
                <td> : </td>
                <td><?php echo $_GET['gender']; ?></td>
            </tr>

            <tr>
                <td>Tanggal Lahir </td>
                <td> : </td>
                <td><?php echo $_GET['tanggal_lahir']; ?></td>
            </tr>

            <tr>
                <td>Alamat </td>
                <td> : </td>
                <td><?php echo $_GET['alamat_pendaftar']; ?></td>
            </tr>

            <tr>
                <td>Password </td>
                <td> : </td>
                <td><?php echo $_GET['pwd']; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>