function getAllDataByVehiclenorepair() {
    var vehicleno = $("#search_by_vehicleno").val();
    $.ajax({
        type: "POST",
        url: "get_data_by_vehiclenorepair.php",
        data: 'vehicleno=' + vehicleno,
        success: function(data) {
            var my_data = JSON.parse(data);
            var return_message = my_data.result;
            if (return_message == 'success') {
                $("#search_message").show();
                $("#search_message").html("Data Found");
                var table_get_data = my_data.info_data;
                $("#vehicleno").val(table_get_data.vehicleno);
				$("#name").val(table_get_data.name);
				$("#registrationno").val(table_get_data.registrationno);
                $("#tax_issdt").val(table_get_data.tax_issdt);
                $("#tax_expdt").val(table_get_data.tax_expdt);
                $("#fit_issdt").val(table_get_data.fit_issdt);
                $("#fit_expdt").val(table_get_data.fit_expdt);
                $("#ins_issdt").val(table_get_data.ins_issdt);
                $("#ins_expdt").val(table_get_data.ins_expdt);
                $("#rou_issdt").val(table_get_data.rou_issdt);
                $("#rou_expdt").val(table_get_data.rou_expdt);
				$("#engineno").val(table_get_data.engineno);
                $("#chasisno").val(table_get_data.chasisno);
				$("#regdate").val(table_get_data.regdate);
				$("#serialno").val(table_get_data.serialno);
				$("#modelno").val(table_get_data.modelno);
				$("#ccno").val(table_get_data.ccno);
				$("#netvalue").val(table_get_data.netvalue);
				$("#myear").val(table_get_data.myear);
				$("#office").val(table_get_data.office);
				$("#division").val(table_get_data.division);
				$("#location").val(table_get_data.location);
				
				
            } else {
                $("#search_message").show();
                $("#search_message").html("Data Not Found. Please Give Correct Vehicleno");
            }
        }
    });
}