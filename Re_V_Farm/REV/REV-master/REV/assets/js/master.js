$(document).ready(function () {
    $("#myBtn").click(function () {
        $("#myModal").modal();
    });
});

$(document).ready(function () {
    $(".nav-tabs a").click(function () {
        $(this).tab('show');
    });
});