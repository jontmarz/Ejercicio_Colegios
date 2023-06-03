$(document).ready(function() {
    $("#schoolForm").hide();
    $("#studentForm").hide();
    $("#schools").on("click", function() {
        $("#schoolForm").show();
        $("#studentForm").hide();
    });
    $("#students").on("click", function() {
        $("#studentForm").show();
        $("#schoolForm").hide();
    });
});