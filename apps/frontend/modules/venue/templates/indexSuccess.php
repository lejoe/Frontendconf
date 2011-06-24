<div class="row lastBeforeFooter">
    <div class="column grid_4">
        <h2>Venue</h2>
        <br><br>



    </div>
    <div class="column grid_8">
        <div id="map_canvas" style="width: 600px; height: 400px"></div>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script>
            (function(){
                var myLatlng = new google.maps.LatLng(47.41429, 8.54970);
                var myOptions = {
                      zoom: 14,
                      center: myLatlng,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        title:"Hello World!"
                    });
            })();

        </script>
    </div>
</div>