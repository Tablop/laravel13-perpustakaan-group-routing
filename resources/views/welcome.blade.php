<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
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
            <h1>Ini web perpustakaan</h1>
            <h3>Daftar route</h3>
            <table>
                <tr>
                    <th>Route</th>
                    <th>Penjelasan</th>
                </tr>
                <tr>
                    <td><a href="/perpustakaan/buku">/perpustakaan/buku</a></td>
                    <td>Untuk melihat daftar buku</td>
                </tr>
                <tr>
                    <td>
                        <a href="/perpustakaan/anggota"
                            >/perpustakaan/anggota</a
                        >
                    </td>
                    <td>Untuk melihat daftar anggota</td>
                </tr>
                <tr>
                    <td>
                        <a href="/perpustakaan/peminjaman"
                            >/perpustakaan/peminjaman</a
                        >
                    </td>
                    <td>Untuk melihat daftar buku yang dipinjam</td>
                </tr>
            </table>
        </main>
    </body>
</html>
