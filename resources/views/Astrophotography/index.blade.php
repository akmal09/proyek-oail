<table id="astrophotography">
    <th>
        <td>#</td>
        <td>Name</td>
        <td>RA<br>(hh:mm:ss.ss)</td>
        <td>DEC<br>(dd:mm:ss.s)</td>
        <td>Telescope</td>
        <td>Detector</td>
        <td>Analisator</td>
        <td>Date & Time</td>
        <td>Raw Data (Zip)</td>
        <td>Final Images (Zip)</td>
    </th>
    <tbody>
    @foreach($astrophotography as $index => $data)
        <tr>
            <td>{{$index+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->ra}}</td>
            <td>{{$data->dec}}</td>
            <td>{{$data->teleskop}}</td>
            <td>{{$data->detektor}}</td>
            <td>{{$data->analisator}}</td>
            <td>{{$data->date_and_time}}</td>
            <td>{{$data->raw_data}}</td>
            <td>{{$data->final_image}}</td>
        </tr>
    @endforeach
    </tbody>
</table>