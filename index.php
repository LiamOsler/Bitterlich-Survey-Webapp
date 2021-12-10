<?php include "includes/header.php" ?>

<div class = "row">
<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
        <i class="bi bi-exclamation-diamond-fill" onclick = "heuristicMessage('Recognition rather than recall: the purpose and functionality of this application could be better communicated to the user on the home screen')"></i>
            <div class = "icon-large">
                <i class="bi bi-map-fill"></i>
            </div>
            <br>
            <a class="btn btn-primary btn-lg btn-block"  href= "newsurvey.php">
                New Survey
            </a>
            <button type="button" class="btn btn-outline-primary  btn-lg btn-block" onclick="openFileModal()">
            <i class="bi bi-exclamation-diamond-fill" onclick = "heuristicMessage('Recognition rather than recall: these menu options could be better optimized for quick user recognition')"></i>

            Open Survey
            </button>
            <a class="btn btn-outline-primary btn-lg btn-block" href= "editsurvey.php">Resume Latest Survey</a>
        </div>
    </div>
</div>


<div class = "col-6">
    <div class="card">
        <div class="card-body">
            <i class="bi bi-exclamation-diamond-fill" style = "margin-left: 45%" onclick = "heuristicMessage('Aesthetic and minimalist design: the aesthetic quality of these icons is subject to debate, and while very minimalist, something slightly more literal may better communicate their function')"></i>

            <div class = "icon-medium">
                <i class="bi bi-gear-fill"></i>
            </div>
            <br>
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick ="settingsModal()" >
                Settings
            </button>
        </div>
    </div>
</div>

<div class = "col-6">
    <div class="card">
        <div class="card-body">
            <div class = "icon-medium">
                <i class="bi bi-cloud-fill"></i>
            </div>
            <br>
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick ="cloudModal()">
                Cloud
            </button>
        </div>
    </div>
</div>

</div>

<script>
    var newUser = 1;
</script>


<!-- Button trigger modal -->

<?php include "includes/footer.php" ?>


<script type="text/javascript">
    $('#newUserModal').modal('toggle');
</script>
