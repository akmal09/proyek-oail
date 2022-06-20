<div class="form">

    <form action="{{route('add_image')}}" method="POST" enctype="multipart/form-data" class="image">
        @csrf    
        <div id="object_name">
            <label for="object_name">Object Name :</label>
            <input type="text" name="name" placeholder="Object Name" required>
        </div>

        <div id="ra">
            <label for="ra">RA :</label>
            <input type="text" name="ra" placeholder="RA" required>
        </div>

        <div id="dec">
            <label for="dec">DEC :</label>
            <input type="text" name="dec" placeholder="DEC" required>
        </div>
        
        <div id="teleskop">
            <label for="teleskop">Telescope :</label>
            <input type="text" name="teleskop" placeholder="Telescope" required>
        </div>
        
        <div id="detektor">
            <label for="detektor">Detector :</label>
            <input type="text" name="detektor" placeholder="Detector" required>
        </div>
        
        <div id="filter">
            <label for="filter">Filter :</label>
            <input type="text" name="filter" placeholder="Filter" required>
        </div>
        
        <div id="date">
            <label for="date">Date :</label>
            <input type="date" name="date" placeholder="Date" required>
        </div>
        
        <div id="time">
            <label for="time">Time (UTC) :</label>
            <input type="time" step="3" name="time" placeholder="Time" required>
        </div>
        
        <div id="reduced_data">
            <label for="reduced_data">Reduced Data :</label>
            <input type="file" name="reduced_data" placeholder="Reduced Data" required>
        </div>
        
        <div id="raw_data">
            <label for="raw_data">Raw Data :</label>
            <input type="file" name="raw_data" placeholder="Raw Data" required>
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
</div>