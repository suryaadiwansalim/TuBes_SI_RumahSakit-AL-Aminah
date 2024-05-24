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
  color: white;
}
</style>
</head>
<body>

<h1>Data Kamar</h1>

<table id="customers">
  <tr>
  <th>Nama Pasien</th>
                        <th>Nomor Kamar</th>
                        <th>Jenis Kamar</th>
                        <th>Biaya Harian</th>
  </tr>
  @foreach($kamar as $b)
  <tr>
  <td>{{$b->Pasien->nama}}
                        </td>
                        <td>{{$b->nomor_kamar}}</td>
                        <td>{{$b->jenis_kamar}}</td>
                        <td>{{$b->biaya_harian}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
