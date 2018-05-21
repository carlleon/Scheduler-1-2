<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/styles.css')?>">
</head>
<body ng-app='memo'>
    <div ng-controller='Controller'>
        <ul ng-repeat='records in records'>
            <li>{{records.description}}</li>
            <button ng-click="delete(records.id)" ng-model='id.id'>Delete{{records.id}}</button>
        </ul>
    <div class="dropdown"> 
        <div id="myDropdown" class="dropdown-content">
            <button onclick="myFunction()" class="dropbtn"><p>Room scheduler</p></button>
            <form>
            <label for="#">
                <strong>Room</strong>
            </label>
            <select class="form-control" type='text' ng-model='respost.id_room'>
                <option value="">--- Choose Room ---</option>
                <option value="0">Training Room</option>
                <option value="1">Conference Room</option>
            </select>
            <label for="#">
                <strong>Date</strong>
            </label><br>
            <input class="form-control col-md-12" id="scheduleDate" type="date" required>
            <label for="#">
                <strong>Time</strong>
            </label><br>
            <input class="form-control col-md-5 left" value="00:00" type="time" required>
            <span class='col-md-2'><strong>To</strong></span>
            <input class="form-control col-md-5 right" value="00:00" type="time" required>
            <label for="#">
                <strong>Notes/Description</strong>
            </label>
            <textarea class='form-control' placeholder="Add Description/Note here" ng-model='respost.description'></textarea>
            <button class="btn btn-warning px-5 float-right px-5 button-sbmit" type="button" ng-click='resrv()' disabled>Submit</button>
            </form>
            </div>
        </div>
    </div>
    
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropbtn");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
       
    </script>
<script src="<?=base_url('assets/js/angular.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.js')?>"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
<script src="<?=base_url('assets/js/app.js')?>"></script>
<script src="<?=base_url('assets/js/script.js')?>"></script>
</body>

</html>
