$(document).ready(function(){
    $("#supplierForm").submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: "save_supplier.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
                $("message").html("<div class='alert alert-success'>" + response + "</div>");
                $("#supplierForm")[0].reset();
            }
        });
    });
});