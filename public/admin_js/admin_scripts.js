$(document).ready(function () {
    //Check Admin Password is correct or not//
    $("#current_pwd").keyup(function () {
        var current_pwd = $("#current_pwd").val();
        // alert(current_pwd);
        $.ajax({
            type: 'post',
            url: '../admin/check-current-pwd',
            data: {current_pwd: current_pwd},
            success: function (resp) {
                if (resp == "false") {
                    $("#chkCurrentPassword").html("<font color=red> Current Password is Incorrect</font>");
                } else if (resp == "true")
                    $("#chkCurrentPassword").html("<font color=green> Current Password is Correct</font>");
            },
            error: function () {
                alert("error");

            }
        });
    });
});
