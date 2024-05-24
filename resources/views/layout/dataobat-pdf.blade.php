<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: blue;
}
</style>
</head>
<body>

<h1>Data Obat</h1>

<table id="customers">
<thead>
  <tr>
                        <th>Nama Pasien</th>
                        <th>Nama Obat</th>
                        <th>Jenis Obat</th>
                        <th>Harga Obat</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($obat as $b)

                    <tr>
                        <td>{{$b->Pasien->nama}}</td>
                        </td>
                        <td>{{$b->nama_obat}}</td>
                        <td>{{$b->jenis_obat}}</td>
                        <td>{{$b->harga}}</td>

                    </tr>

                    @endforeach
                </tbody>
            </table>

</body>
</html>
