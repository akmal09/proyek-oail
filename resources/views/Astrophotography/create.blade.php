<div class="form">

    <form action="{{route('add_astrophotography')}}" method="POST" enctype="multipart/form-data" class="image">
        @csrf    
        <div id="object_name">
            <label for="object_name">Object Name :</label>
            <input type="text" name="name" placeholder="Object Name">
        </div>

        <div id="ra">
            <label for="ra">RA :</label>
            <input type="text" name="ra" placeholder="RA" required>
        </div>

        <div id="dec">
            <label for="dec">DEC :</label>
            <input type="text" name="dec" placeholder="DEC" required>
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
            <label for="date">Tanggal :</label>
            <input type="date" name="date" placeholder="Date">
        </div>
        
        <div id="time">
            <label for="time">Waktu (UTC) :</label>
            <input type="time" step="3" name="time" placeholder="Time">
        </div>
        
        <div id="final_image">
            <label for="final_image">Final Image :</label>
            <input type="file" name="final_image" placeholder="Final Image">
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