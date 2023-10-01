<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            background-color: #f9f9f9;
            border: 1px solid #000000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #000; 
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th style="text-align: center; width: 180px">Nip</th>
            <th style="text-align: center; width: 180px">Nama</th>
            <th style="text-align: center">Pangkat</th>
            <th style="text-align: center; width:20px">Jabatan</th>
        </tr>
    </thead>
    @foreach ($data as $item)
        
   
    <tbody>
        <tr>
            <td>
                {{ $loop->iteration }}
            </td>
            <td style="text-align: center">
                {{ $item->nip }} 
            </td>
            <td style="text-align: center">{{ $item->nama }}</td>
            <td style="text-align: center">{{ $item->pangkat }}</td>
            <td style="text-align: center">{{ $item->jabatan }}</td>
         
        </tr>
    </tbody>
    @endforeach
</table>

</body>
</html>
