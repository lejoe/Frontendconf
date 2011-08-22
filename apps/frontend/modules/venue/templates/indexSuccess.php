<div class="row">
    <div class="column grid_12">
        <h2>Venue</h2>
    </div>
</div>
<div class="row lastBeforeFooter">
    <div class="column grid_6">
        <div class="lead">The Frontend Conference 2011 will take place at the Department of Informatics kindly provided by the University of Zurich. It is situated in Zurich Oerlikon just 10 minutes from the city center by public transport.</div>
<br><br>
        <h4>The Conference Facilities</h4>
         Conference rooms are equipped with newest technology and there's WiFi in the whole venue. Of course, there are also nice recreational areas to have a chat with peers, drink a coffee or eat lunch together.

        <br><br>
        <div id="map_canvas"></div>
        <br>
        <h4>Address</h4>
        University of Zurich<br>
        Department of Informatics <br>
        Binzmühlestrasse 14<br>
        CH-8050 Zurich<br>
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
                        title:"University of Zurich, Department of Informatics"
                    });
            })();
        </script>
        <br><br>
        <h4>Hotel recommendations</h4>
        <h5>Near the conference venue:</h5>
        <ul class="point">
          <li><a href="http://www.holidayinn.com/hotels/us/en/zurich/zrhme/hoteldetail">Holiday Inn - Messe Zurich</a></li>
          <li><a href="http://www.swissotel.com/EN/Destinations/Switzerland/Swissotel+Zurich/Hotel+Home/Hotel+Home.htm">Swissôtel Zurich</a></li>
          <li><a href="http://www.marriott.de/hotels/travel/zrhcy-courtyard-zurich-north/">Marriott - Courtyard Zürich Nord</a></li>
        </ul>
        <h5>Other links:</h5>
        <ul class="point">
          <li>Find an hotel <a href="http://www.zuerich.com/en/Visitor/accommodation.html"> on zurich tourismus</a></li>
          <li>Lower costs: <a href="http://www.airbnb.com">rent a room on Airbnb</a></li>
          <li>No costs: <a href="http://www.couchsurfing.org">find a place on a couch</a></li>
        </ul>
    </div>
    <div class="column grid_1">
&nbsp;
    </div>
    <div class="column grid_5">

        <h4>Zurich</h4>
        The Frontend Conference willtake place in beautiful Zurich, Switzerland - conveniently located in the heart of Europe and easily reachable by plane, train or car.
        <br><br>
        <img src="/images/zhPanorama.jpg" class="fluid content" alt="A panoramic view of Zurich"><br>
        Image: <a href="http://www.flickr.com/photos/somemixedstuff/2489419301/">Davide Restivo</a><br><br>
        Whilst Zurich may be best known for its banks and as a global financial center, it's also the home of many European headquarters and R&D departments of well-known, global IT companies and of top universities (University of Zurich UZH, Swiss Federal Institute of Technology ETHZ and others). It also has a growing scene of IT and tech startups. Nice to know: Zurich is a good base for sightseeing in Switzerland too as any place in Switzerland can be reached by public transport within a few hours.

    </div>
</div>