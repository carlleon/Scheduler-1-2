$(document).ready(function() {
    var date = new Date();
    var day = ("0" + date.getDate()).slice(-2);
    var month = ("0" + (date.getMonth() + 1)).slice(-2);     
    var dateToday = date.getFullYear()+"-"+(month)+"-"+(day) ;   
    document.getElementById('scheduleDate').value = dateToday;


    $('#ScheduleForm .checkData').change(function() {
        var currentDate = new Date();
        console.log(currentDate);
        var empty = false;
        $('#ScheduleForm .checkData').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.button-sbmit').attr('disabled', 'disabled');
        } else {
            $('.button-sbmit').removeAttr('disabled');
        }
    });
});


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

        function openSchedule(){
            $('#schedulePage').css('display','block');         
            $('#roomOne').css('display','none');
            $('#roomTwo').css('display','none');
        }

        function roomOneSchedule(){
            $('#schedulePage').css('display','none');         
            $('#roomOne').css('display','block');
            $('#roomTwo').css('display','none');
        }

        function roomTwoSchedule(){
            $('#schedulePage').css('display','none');         
            $('#roomOne').css('display','none');
            $('#roomTwo').css('display','block');
        }
       
    
