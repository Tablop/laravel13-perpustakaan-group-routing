<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Peminjam</title>
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
            <h1>Peminjam</h1>
            <h3>Daftar Peminjam</h3>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Waktu</th>
                    <th>Buku</th>
                </tr>
                <tr>
                    <td>Anggota A</td>
                    <td>07/01/2026</td>
                    <td>Buku B</td>
                </tr>
                <tr>
                    <td>Anggota B</td>
                    <td>04/01/2026</td>
                    <td>Buku A</td>
                </tr>
            </table>
        </main>
    </body>
</html>
