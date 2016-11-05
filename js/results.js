function successDialog(data) {
	
    var message = "You finished this exercise in " + data.time + "; and your accuracy is " + data.accuracy + "%!";
    $("#modal-message").text(message);
    $("#modal-success").modal("show");
        $.post("/user/save_log",
        {
            user_id : userId,
            type : typeName,
            title : titleName,
            title_id : titleId,
            time : data.time,
            accuracy : data.accuracy,
            cpm : data.cpm
        },
        function(data, status){
        });
}