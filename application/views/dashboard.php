<!DOCTYPE html>
<html>
    <head>

    	<title>Hive Mind</title>

    	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.css')?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles.css'); ?>">
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar" data-color="white" data-image="assets/img/sidebar-5.jpg">
            	<div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="#" class="simple-text">Account</a>
                    </div>

                    <ul class="nav">
                        <li class="active">
                            <a href="dashboard.php">
                                <i class="pe-7s-graph3"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav">
                        <li class="active">
                            <a href="team.php">
                                <i class="pe-7s-graph2"></i>
                                <p>Team</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="active">
                            <a href="schedule.php">
                                <i class="pe-7s-graph"></i>
                                <p>Room Schedule</p>
                            </a>
                        </li>

                    </ul>
            	</div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-default navbar-fixed">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                   <a href="#"><b>Fly Away</b></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="dropdown"> 
                <div id="myDropdown" class="dropdown-content">
                    <button onclick="myFunction()" class="dropbtn"><p>Room scheduler</p></button>
                    <!-- Form Display -->
                    <div id="schedulePage">
                        <form id="scheduleForm">
                            <div class="form-group row col-md-12">
                                <label for="#"  class="label-control col-md-4">
                                    <strong>Title</strong>
                                </label>
                                <input class="form-control col-md-8 checkData" type="text" name="schedTitle" placeholder="Title">
                            </div >
                            <div class="form-group row col-md-12">
                                <label for="#"  class="label-control col-md-4">
                                    <strong>Room</strong>
                                </label>
                                <select class="form-control col-md-8 checkData" type='text' ng-model='respost.id_room'>
                                    <option value="">--- Choose Room ---</option>
                                    <option value="0">Training Room</option>
                                    <option value="1">Conference Room</option>
                                </select>
                            </div >
                            <div class="form-group row col-md-12">
                                <label for="#" class="label-control col-md-4">
                                    <strong>Date</strong>
                                </label><br>
                                <input class="form-control col-md-8 checkData" id="scheduleDate" type="date" required>
                            </div>
                            <div class="form-group row col-md-12">
                                <label for="#" class="label-control col-md-4">
                                    <strong>Time Start</strong>
                                </label><br>
                                <input class="form-control col-md-8 checkData" value="00:00" type="time" required>
                            </div>
                            <div class="form-group row col-md-12">
                                <label for="#" class="label-control col-md-4">
                                    <strong>Time End</strong>
                                </label>
                                <input class="form-control col-md-8 checkData" value="00:00" type="time" required>
                            </div>
                            <div class="form-group row col-md-12">
                                <label for="#" class="label-control col-md-4">
                                    <strong>Notes</strong>
                                </label>
                                <textarea class='form-control col-md-8' placeholder="Add Description/Note here" ng-model='respost.description'></textarea>
                            </div>
                            <button class="px-5 float-right px-5 button-sbmit" type="button" ng-click='resrv()' disabled>Submit</button>
                        </form>
                        <button onclick="roomOneSchedule()" id="openRoomTwo">Training Room</button>
                        <button onclick="roomTwoSchedule()" id="openRoomOne">Conference Room</button>
                    </div>

                    
                    <div class="col-md-12" id="roomOne">
                        <button onclick="openSchedule()" class="roomClose">X</button>
                        <p>Room One</p>
                    </div>
                    <div class="col-md-12" id="roomTwo" >
                        <button onclick="openSchedule()" class="roomClose">X</button>
                        <p>Room Two</p>
                    </div>
                </div>

                
            </div>
            <!-- Widget Ends here -->
    

        </div>

             <!--    Old Version of the widget -->
<!--         <div class="dropdown"> 
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
            </div> -->

        
    </body>
    <script src="<?=base_url('assets/js/jquery.js')?>"></script>
	<script src="<?=base_url('assets/js/bootstrap.js')?>"></script>
    <script src="<?=base_url('assets/js/script.js')?>"></script>
</html>
