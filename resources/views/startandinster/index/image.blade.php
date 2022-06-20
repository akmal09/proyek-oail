
<a href="{{route('create_image_star')}}">Insert IMage Stars and Interstellar</a>

<table>
    <th>
        <td>#</td>
        <td>Name</td>
        <td>RA<br>(hh:mm:ss.ss)</td>
        <td>DEC<br>(dd:mm:ss.s)</td>
        <td>Telescope</td>
        <td>Detector</td>
        <td>Filter</td>
        <td>Date & Time</td>
        <td>Download As A Signle File</td>
        <td>Download Batch</td>
    </th>
    <tbody>
    @foreach($datas as $index => $data))
        <tr>
            <td>{{$index+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->ra}}</td>
            <td>{{$data->dec}}</td>
            <td>{{$data->teleskop}}</td>
            <td>{{$data->detektor}}</td>
            <td>{{$data->filter}}</td>
            <td>{{$data->date_and_time}}</td>
            <td>{{$data->raw_data}}</td>
            <td>{{$data->reduced_data}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
