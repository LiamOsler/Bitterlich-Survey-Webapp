//Settigns for the data table:
$(document).ready(function() {
    $('#treePointTable').DataTable( {
        paging: false,
        info: false,
        "dom": '<"top"i>rt<"bottom"flp><"clear">'
    } );
} );

//Change cell's data value:
var update = document.getElementsByTagName("td");
for( var i = 0; i < update.length; ++i ) {
    update[i].onclick = function() { 
        $("#editCellModal").modal('show');
    }
}

// var video2 = document.querySelector("#videoElement2");

// if (navigator.mediaDevices.getUserMedia) {
//   navigator.mediaDevices.getUserMedia({
//     audio: false,
//     video: {
//       facingMode: "user"
//     }
//   })
//   .then(stream => video2.srcObject = stream)
//   .catch(console.error);
// }




//Functions for calling modals (should be refactored):
function openFileModal(){
  $('#openSurveyModal').modal('toggle');
}

function newFileModal(){
  $('#newSurveyModal').modal('toggle');
}
function newObservationModal(){
  $('#newObservationModal').modal('toggle');
}
function cameraModal(){
  $('#cameraModal').modal('toggle');
}
function clinometerModal(){
  $('#clinometerModal').modal('toggle');
}
function settingsModal(){
  $('#settingsModal').modal('toggle');
}
function editCellModal(){
  $('#editCellModal').modal('toggle');
}
function settingsModal(){
  $('#settingsModal').modal('toggle');
}
function cloudModal(){
  $('#cloudModal').modal('toggle');
}
function newUserModal(){
  $('#newUserModal').modal('toggle');
}



function heuristicMessage(messageText){
  $('#heuristic-text').html(messageText);
  document.getElementById("heuristic-message").style.zIndex = "1000 !important";
}






