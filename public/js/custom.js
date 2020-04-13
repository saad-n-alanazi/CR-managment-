$(document).ready(function () {
    $(".sidebarToggler").on("click", function () {
        $(".wrapper").toggleClass("active");
    });
});


$(document).ready(function () {
    $('#datatable').DataTable({
        ordering: false,
        "oLanguage": {
            "sSearch": "<span> بحث  :</span> _INPUT_", //search,
            "sLengthMenu": " <span>  اظهار </span>  _MENU_ ",
        },
        "bInfo": false,
    });
});




