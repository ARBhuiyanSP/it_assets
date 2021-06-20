function getAllDataByincidentid() {
    var incidentid = $("#search_by_incidentid").val();
    $.ajax({
        type: "POST",
        url: "get_data_by_incidentid.php",
        data: 'incidentid=' + incidentid,
        success: function(data) {
            var my_data = JSON.parse(data);
            var return_message = my_data.result;
            if (return_message == 'success') {
                $("#search_message").show();
                $("#search_message").html("Data Found");
                var table_get_data = my_data.info_data;
				
				
                $("#incidentid").val(table_get_data.incidentid);
				$("#driverdid").val(table_get_data.driverdid);
				$("#vehicleno").val(table_get_data.vehicleno);
                $("#accusedname").val(table_get_data.accusedname);
                $("#designation").val(table_get_data.designation);
                $("#licenseno").val(table_get_data.licenseno);
                $("#expirydate").val(table_get_data.expirydate);
                $("#vehicleuser").val(table_get_data.vehicleuser);
                $("#vdesignation").val(table_get_data.vdesignation);
                $("#vehicleinfo").val(table_get_data.vehicleinfo);
                $("#vehicleregno").val(table_get_data.vehicleregno);
				$("#department").val(table_get_data.department);
                $("#incidenttype").val(table_get_data.incidenttype);
				$("#datetimeincident").val(table_get_data.datetimeincident);
				$("#locationincident").val(table_get_data.locationincident);
				$("#investigatorname").val(table_get_data.investigatorname);
				$("#invdesignation").val(table_get_data.invdesignation);
				$("#detailincident").val(table_get_data.detailincident);
				$("#actionincident").val(table_get_data.actionincident);
				$("#inc_date").val(table_get_data.inc_date);
			
				
				
            } else {
                $("#search_message").show();
                $("#search_message").html("Data Not Found. Please Give Correct incidentid");
            }
        }
    });
}