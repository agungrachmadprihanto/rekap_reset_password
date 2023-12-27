<table>
    <thead>
    <tr>
        <th>Tgl Update</th>
        <th>Perihal</th>                   
        <th>Name File Update</th>                   
        <th>Alasan Update</th>                   
        <th>Hasil Update</th>
        <th>User Update</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cbs as $item)
        <tr>
            <td>{{ $item->date }}</td>
            <td>{{ $item->perihal }}</td>
            <td>{{ $item->name_file }}</td>                  
            <td>{{ $item->alasan }}</td>
            <td>{{ $item->hasil }}</td>
            <td>{{ $item->user }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
