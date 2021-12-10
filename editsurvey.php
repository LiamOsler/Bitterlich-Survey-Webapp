<?php include "includes/header.php" ?>

<div class = "row">

<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4><i class="bi bi-map-fill"></i> Map</h4>
            <div id="map"></div>
            <i class="bi bi-exclamation-diamond-fill" style = "margin-left: 90%" onclick = "heuristicMessage('match between the system and the real world:')"></i>

            <p></p>

            <button type="button" class="btn btn-outline-primary" onclick="getLocation()">
                My Position <i class="bi bi-person-circle"></i> 
            </button>

            <button type="button" id= "mapCenterButton" class="btn btn-primary" onclick="newObservationModal()">
                New Observation<i class="bi bi-geo-alt-fill"></i> 
            </button>
        </div>
    </div>
</div>

<div class = "col-sm-12">
    <div class="card point-list">
        <div class="card-body">
            <h4><i class="bi bi-geo-alt-fill"></i> Observations</h4>
            <div class = "table-wrap">        
                <table id = "treePointTable" class="table">
                    <thead>
                    <tr>
                        <th>Species</th>
                        <th>Diam.</th>
                        <th>Height</th>
                        <th>Damage</th>
                        <th>Notes</th>
                        <th>Position</th>
                        <th>ID</th>
                        <th>Lat</th>
                        <th>Long</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class = "presshold">Maple</td>
                        <td class = "presshold">12</td>
                        <td class = "presshold">12</td>
                        <td class = "presshold">Good Condition</td>
                        <td class = "presshold">Nothing Special</td>
                        <td class = "presshold">0</td>
                        <td class = "presshold">0</td>
                        <td class = "presshold">0</td>
                        <td class = "presshold">0</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <button type="button" id= "download-button" class="btn btn-primary">
                Download</i> 
            </button>
        </div>
    </div>
</div>

<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4><i class="bi bi-info-circle-fill"></i> Tree Survey Details</h4>


            <form>
            <p><b>Created:</b> November 1st, 2021, 11:00 AST</p>
              <div class="form-group">
                <label for="formGroupExampleInput2"><b>Field Notes:</b></label>
                <textarea class="form-control" id="formGroupExampleInput2" rows="4" placeholder=""></textarea>
              </div>

            </form>

        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="newObservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-geo-alt-fill"></i>New Observations</h5>
        <button type="button" class="close" onclick="newObservationModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Photos</h6>
        <button type="button" class="btn btn-outline-primary  btn-lg btn-block" onclick="cameraModal()">
            New Photo <i class="bi bi-camera"></i> 
        </button>

        <hr>
        <h6>Classification</h6>
            <form class="form-inline ">
                <div class="form-group side-by-side">
                    <input class="form-control" type="text" list="treeSpecies" id="treeSpeciesList" placeholder="Species" />
                        <datalist id="treeSpecies">
                        <option>Ash</option>
                        <option>Beech</option>
                        <option>Birch</option>
                        <option>Cedar</option>
                        <option>Cherry</option>
                        <option>Elm</option>
                        <option>Maple</option>
                        <option>Oak</option>
                        <option>Pine</option>
                        <option>Tamarack</option>
                        </datalist>
                </div>

                <div class="form-group side-by-side">
                    <select class="form-control" id="exampleFormControlSelect1 ">
                    <option selected>Single Tree</option>
                    <option>Multiple Trees</option>
                    </select>
                </div>

                <label class="sr-only" for="damageCondition">Damage Condition</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id = "damageTree" placeholder="Damage Condition">

                <label class="sr-only" for="notesTree">Notes</label>
                <input type="textarea" class="form-control mb-2 mr-sm-2" id="notesTree" placeholder="Notes">

                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="heightTreeLabel"> <a href ="#" onclick="clinometerModal()"><i class="bi bi-rulers"></i></a></span>
                    </div>
                    <input type="number" class="form-control" placeholder="Height" id="heightTree" aria-label="Tree Height" aria-describedby="heightTreeLabel">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="diameterTreeLabel"> <a href ="#" onclick="clinometerModal()"><i class="bi bi-rulers"></i></a></span>
                    </div>
                    <input type="number" class="form-control" placeholder="Diameter" aria-label="Tree Diameter" id="diameterTree" aria-describedby="diameterTreeLabel">
                
                </div>
            </form>

        <hr>    
        <h6>Map</h6>
        <form>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Lat.</span>
                </div>
                
                <input type="text" class="form-control" id = "latitude" placeholder="" aria-label="Username" aria-describedby="basic-addon1">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Long.</span>
                </div>

                <input type="text" class="form-control" id = "longitude" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </form>

        <div id="map2"></div>
        <p></p>
    
        <button type="button" class="btn btn-outline-primary" onclick="getLocation()">
                My Position <i class="bi bi-person-circle"></i> 
        </button>

        <button type="button" id= "mapCenterButton" class="btn btn-outline-primary" onclick="markMapCenter()">
                New <i class="bi bi-geo-alt-fill"></i> 
        </button>

        <br>  
        
      </div>

    </div>
  </div>
</div>
<script>

    
$(document).ready(function() {
    getLocation();
});


   
function newObservationModal(){
  $('#newObservationModal').modal('toggle');
  getLocation();
}
    
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    alert("Unable to determine position");
  }
}

var positionCount = 0;
var observationCount = 0;


function showPosition(position) {
    document.getElementById("latitude").placeholder = position.coords.latitude;
    document.getElementById("longitude").placeholder = position.coords.longitude;

    map.panTo(new L.LatLng(position.coords.latitude,  position.coords.longitude));
    map2.panTo(new L.LatLng(position.coords.latitude,  position.coords.longitude));

    var personIcon = L.icon({
    iconUrl: 'icons/standingperson.png',
    iconSize:     [20, 20], // size of the icon
    iconAnchor:   [10, 10], // point of the icon which will correspond to marker's location
    zIndexOffset: -100,
    });


    var personIcon2 = L.icon({
    iconUrl: 'icons/standingperson.png',
    iconSize:     [20, 20], // size of the icon
    iconAnchor:   [10, 10], // point of the icon which will correspond to marker's location
    zIndexOffset: -100,
    });


    personIcon = new L.marker(map.getCenter(), {icon: personIcon, clickable:true});
    personIcon.addTo(map);

    personIcon2 = new L.marker(map2.getCenter(), {icon: personIcon2, clickable:true});
    personIcon2.addTo(map2);
    positionCount++;
  
}


function markMapCenter(){
    observationCount++;
    var curLat = map2.getBounds().getCenter().lat;
    var curLng  = map2.getBounds().getCenter().lng;
    document.getElementById("latitude").placeholder = map2.getBounds().getCenter().lat;
    document.getElementById("longitude").placeholder = map2.getBounds().getCenter().lng;

    document.getElementById("mapCenterButton").blur();

    L.marker([curLat, curLng]).addTo(map2);
    L.marker([curLat, curLng]).addTo(map); 



    var species = document.getElementById('treeSpeciesList').value;
    var diameter = document.getElementById('diameterTree').value;
    var height = document.getElementById('heightTree').value;
    var damage = document.getElementById('damageTree').value;
    var notes = document.getElementById('notesTree').value;
    
    console.log(species);
 
    var table = $('#treePointTable').DataTable();
    var rowNode = table
        .row.add( [ species, diameter, height, damage, notes, positionCount, observationCount,curLat, curLng ] )
        .draw()
        .node();

        table.row( ':eq(0)' ).delete( {
            title: 'Delete first row'
        } );     
    
    console.log(positionCount);
}



var map = L.map('map').setView([44.740290, -63.560582], 18);
mapLink = 
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; ' + mapLink + ' Contributors',
    maxZoom: 18,
    }).addTo(map);

    var marker;

    var polyline = L.polyline([
    [44.740290, -63.560582],
    [44.740331, -63.558688],
    [44.739101, -63.558913],
    [44.739193, -63.557047],
    [44.738365, -63.557594],
    [44.737379, -63.559010],
    [44.736428, -63.558926],
    ], {
    color: 'red',
}).addTo(map);
    
    

var map2 = L.map('map2').setView([44.6369077, -63.59041448], 18);
mapLink2 = 
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; ' + mapLink2 + ' Contributors',
    maxZoom: 19,
    }).addTo(map2);

    var polyline = L.polyline([
    [44.740290, -63.560582],
    [44.740331, -63.558688],
    [44.739101, -63.558913],
    [44.739193, -63.557047],
    [44.738365, -63.557594],
    [44.737379, -63.559010],
    [44.736428, -63.558926],
    ], {
    color: 'red',
}).addTo(map2);

L.marker([44.740295, -63.560993]).addTo(map2);
L.marker([44.740295, -63.560993]).addTo(map);


// Add in a crosshair for the map
var crosshairIcon = L.icon({
    iconUrl: 'icons/crosshair.png',
    iconSize:     [20, 20], // size of the icon
    iconAnchor:   [20, 20], // point of the icon which will correspond to marker's location
});
crosshair = new L.marker(map.getCenter(), {icon: crosshairIcon, clickable:false});
crosshair.addTo(map2);



var startingFlagIcon = L.icon({
    iconUrl: 'icons/flag.png',
    iconSize:     [20, 20], // size of the icon
    iconAnchor:   [10, 10], // point of the icon which will correspond to marker's location
    zIndexOffset: -100,
    });
L.marker([44.740290, -63.560582], {icon: startingFlagIcon}).addTo(map);

var finishFlagIcon = L.icon({
    iconUrl: 'icons/flag-finish.png',
    iconSize:     [20, 20], // size of the icon
    iconAnchor:   [10, 10], // point of the icon which will correspond to marker's location
    zIndexOffset: -100,
    });
L.marker([44.736428, -63.558926], {icon: finishFlagIcon}).addTo(map);

// Comment out the below code to see the difference.
$('#newObservationModal').on('shown.bs.modal', function() {
  map2.invalidateSize();
});






// Move the crosshair to the center of the map when the user pans
map2.on('move', function(e) {
    crosshair.setLatLng(map2.getCenter());
    document.getElementById("latitude").placeholder = map2.getBounds().getCenter().lat;
    document.getElementById("longitude").placeholder = map2.getBounds().getCenter().lng;
});





// Move the crosshair to the center of the map when the user pans
map2.on('move', function(e) {
    crosshair.setLatLng(map2.getCenter());
    document.getElementById("latitude").placeholder = map2.getBounds().getCenter().lat;
    document.getElementById("longitude").placeholder = map2.getBounds().getCenter().lng;
});




function htmlToCSV(html, filename) {
	var data = [];
	var rows = document.querySelectorAll("table tr");
			
	for (var i = 0; i < rows.length; i++) {
		var row = [], cols = rows[i].querySelectorAll("td, th");
				
		for (var j = 0; j < cols.length; j++) {
		        row.push(cols[j].innerText);
        }
		        
		data.push(row.join(",")); 		
	}

	downloadCSVFile(data.join("\n"), filename);
}


function downloadCSVFile(csv, filename) {
	var csv_file, download_link;

	csv_file = new Blob([csv], {type: "text/csv"});

	download_link = document.createElement("a");

	download_link.download = filename;

	download_link.href = window.URL.createObjectURL(csv_file);

	download_link.style.display = "none";

	document.body.appendChild(download_link);

	download_link.click();
}   

document.getElementById("download-button").addEventListener("click", function () {
	var html = document.querySelector("table").outerHTML;
	htmlToCSV(html, "surveyfile.csv");
});



</script>


<?php include "includes/footer.php" ?>

