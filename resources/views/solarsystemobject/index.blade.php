
<a href="{{route('create_image_solar')}}">Insert IMage Solar</a>
<a href="{{route('create_spectra_solar')}}">Insert spectra Solar</a>


<table id="image">
    <th>
        <td>#</td>
        <td>Name</td>
        <td>Telescope</td>
        <td>Detector</td>
        <td>Filter</td>
        <td>Date & Time</td>
        <td>Download As A Signle File</td>
        <td>Download Batch</td>
    </th>
    <tbody>
    @foreach($images as $index => $data)
        <tr>
            <td>{{$index+1}}</td>
            <td>{{$data->name}}</td>
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

<br>

<table id="spectra">
    <th>
        <td>#</td>
        <td>Name</td>
        <td>Telescope</td>
        <td>Detector</td>
        <td>Analisator</td>
        <td>Date & Time</td>
        <td>Download As A Signle File</td>
        <td>Download Batch</td>
    </th>
    <tbody>
    @foreach($spectra as $index => $data))
        <tr>
            <td>{{$index+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->teleskop}}</td>
            <td>{{$data->detektor}}</td>
            <td>{{$data->analisator}}</td>
            <td>{{$data->date_and_time}}</td>
            <td>{{$data->raw_data}}</td>
            <td>{{$data->reduced_data}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
