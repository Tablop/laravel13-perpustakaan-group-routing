<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Anggota</title>
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
            <h1>Anggota</h1>
            <h3>Daftar Buku</h3>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No telpon</th>
                </tr>
                <tr>
                    <td>Anggota A</td>
                    <td>Kab.xxxx, Kec.xxxx Ds.xxxx Dsn.xxxx</td>
                    <td>085xxxxx</td>
                </tr>
                <tr>
                    <td>Anggota B</td>
                    <td>Kab.xxxx, Kec.xxxx Ds.xxxx Dsn.xxxx</td>
                    <td>085xxxxx</td>
                </tr>
                <tr>
                    <td>Anggota C</td>
                    <td>Kab.xxxx, Kec.xxxx Ds.xxxx Dsn.xxxx</td>
                    <td>085xxxxx</td>
                </tr>
                <tr>
                    <td>Anggota D</td>
                    <td>Kab.xxxx, Kec.xxxx Ds.xxxx Dsn.xxxx</td>
                    <td>085xxxxx</td>
                </tr>
            </table>
        </main>
    </body>
</html>
