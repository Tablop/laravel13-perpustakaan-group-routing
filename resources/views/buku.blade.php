<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Buku</title>
        <style>
            * {
                padding: 0px;
                margin: 0px;
            }

            table,
            tr,
            th,
            td {
                border: 2px solid black;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 10px;
            }

            td {
                background-color: white;
            }

            th {
                background-color: #78ff8c;
            }

            main {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);

                background-color: lightblue;
                padding: 10px;
                border-radius: 5px;
                box-shadow: 0px 0px 5px black;
            }
        </style>
    </head>
    <body>
        <main>
            <h1>Buku</h1>
            <h3>Daftar Buku</h3>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Penulis</th>
                    <th>Tahun diterbitkan</th>
                </tr>
                <tr>
                    <td>Buku A</td>
                    <td>Penulis A</td>
                    <td>2000</td>
                </tr>
                <tr>
                    <td>Buku B</td>
                    <td>Penulis B</td>
                    <td>2010</td>
                </tr>
                <tr>
                    <td>Buku C</td>
                    <td>Penulis C</td>
                    <td>2009</td>
                </tr>
                <tr>
                    <td>Buku D</td>
                    <td>Penulis D</td>
                    <td>2004</td>
                </tr>
            </table>
        </main>
    </body>
</html>
