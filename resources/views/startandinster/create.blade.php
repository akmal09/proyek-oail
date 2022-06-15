<div class="form">

    <form action="/startandinster/add" method="POST" enctype="multipart/form-data" class="image">
        @csrf    
        <div id="object_name">
            <label for="object_name">Object Name :</label>
            <input type="text" name="object_name" placeholder="Object Name">
        </div>
                
        <div id="ra">
            <label for="ra">RA :</label>
            <input type="text" step="2" name="ra" placeholder="RA">
        </div>

        <div id="dec">
            <label for="dec">DEC :</label>
            <input type="text" step="2" name="dec" placeholder="DEC">
        </div>
        
        <div id="telescope">
            <label for="telescope">Telescope :</label>
            <input type="text" name="telescope" placeholder="Telescope">
        </div>
        
        <div id="detector">
            <label for="detector">Detector :</label>
            <input type="text" name="detector" placeholder="Detector">
        </div>
        
        <div id="filter">
            <label for="filter">Filter :</label>
            <input type="text" name="filter" placeholder="Filter">
        </div>
        
        <div id="date">
            <label for="date">Date :</label>
            <input type="date" name="date" placeholder="Date">
        </div>
        
        <div id="time">
            <label for="time">Time :</label>
            <input type="time" step="3" name="time" placeholder="Time">
        </div>
        
        <div id="reduced_data">
            <label for="reduced_data">Reduced Data :</label>
            <input type="file" name="reduced_data" placeholder="Reduced Data">
        </div>
        
        <div id="raw_data">
            <label for="raw_data">Raw Data :</label>
            <input type="file" name="raw_data" placeholder="Raw Data">
        </div>

        <div>
            <input type="submit">
        </div>
        
    </form>


</div>