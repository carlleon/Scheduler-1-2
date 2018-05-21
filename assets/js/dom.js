$(document).ready(function(){
    $("#signinfunc").click(function(){
    	$("#buttons").fadeOut(.001);
        $("#signin").fadeIn(2000);
    });

    $("#signupfunc").click(function(){
    	$("#buttons").fadeOut(.001);
        $("#signup").fadeIn(2000);
    });

    $("#gotologin").click(function(){
    	$("#signup").fadeOut(.001);
    	$("#signin").fadeIn(2000);
    });

    $("#register").click(function(){
        $("#signin").fadeOut(.001);
        $("#signup").fadeIn(2000);
    });
});