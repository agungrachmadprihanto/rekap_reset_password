<table>
    <thead>
    <tr>
        <th>Tanggal</th>
        <th>Name</th>
        <th>User ID</th>
        <th>Cabang</th>
        <th>Denda</th>
        <th>Alasan</th>
        <th>Keterangan</th>
        <th>Status Bayar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($denda as $data)
        <tr>
            <td>{{ $data->date }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->user_id }}</td>
            <td>{{ $data->cabang }}</td>
            <td>{{ $data->denda }}</td>
            <td>{{ $data->alasan }}</td>
            <td>{{ $data->keterangan }}</td>
            <td>{{ $data->bayar }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
