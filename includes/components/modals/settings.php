<div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-gear-fill"></i> Settings</h5>
          <button type="button" class="close" aria-label="Close" onclick="settingsModal()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h6>Survey Settings</h6>
            <form>
                <div class="form-group">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Record GPS position</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Record atmospheric conditions</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Auto-classify new observations</label>
                    </div>
                </div>
            </form>
            <hr>
            <h6>Instrument Settings</h6>

            <form>
                <div class="form-group">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" >
                        <label class="form-check-label" for="flexSwitchCheckChecked">External GPS Receiver</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" disabled>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Enable Differential GPS Mode</label>
                    </div>
                </div>
            </form>


            <hr>
            <h6>File Settings</h6>
            <form>
                <div class="form-group">
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02"><i class="bi bi-folder2-open"></i> Default File Path</label>
            </div>
        </div>
                </div>

            Default File Format:

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    .csv
                </label>
                </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    .xls
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                <label class="form-check-label" for="flexRadioDefault3">
                    .txt
                </label>
            </div>
            </form>

            <hr>
            <h6>Cloud Settings</h6>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Save observations to cloud
                </label>
            </div>

        </div>
        <div class="modal-footer">
        <i class="bi bi-exclamation-diamond-fill" onclick = "heuristicMessage('Visibility of system status: when the user activates the toggles, they may believe that the change has occurred instantly')"></i>
            <button type="button" class="btn btn-success" onclick= "settingsModal()">Change</button>
        </div>
      </div>
    </div>
  </div>
</div>