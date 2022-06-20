<div class="form">

    <form action="{{route('add_spectra_star')}}" method="POST" enctype="multipart/form-data" class="image">
        @csrf    
        <div id="object_name">
            <label for="object_name">Object Name :</label>
            <input type="text" name="name" placeholder="Object Name">
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
            <input type="text" name="teleskop" placeholder="Telescope">
        </div>
        
        <div id="detector">
            <label for="detector">Detector :</label>
            <input type="text" name="detektor" placeholder="Detector">
        </div>
        
        <div id="analisator">
            <label for="analisator">Analisator :</label>
            <input type="text" name="analisator" placeholder="Analisator">
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