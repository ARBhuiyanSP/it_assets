$('table').dataTable();
viewData();
$('#update').prop("disabled",true);

function viewData(){
    $.get('server_employee_entry.php', function(data){
        $('tbody').html(data)
    })
}

function saveData(){
    var id	 	= $('#id').val()
    var en 		= $('#en').val()
    var dv 		= $('#dv').val()
    var dp 		= $('#dp').val()
    var dg 		= $('#dg').val()
	
    $.post('server_employee_entry.php?p=add', {id:id, en:en, dv:dv, dp:dp, dg:dg}, function(data){
        viewData()
        $('#id').val(' ')
        $('#en').val(' ')
        $('#dv').val(' ')
        $('#dp').val(' ')
        $('#dg').val(' ')
    })
}

function editData(id, en, dv, dp, dg) {
    $('#id').val(id)
    $('#en').val(en)
    $('#dv').val(dv)
    $('#dp').val(dp)
    $('#dg').val(dg)
	
    $('#id').prop("readonly",true);
    $('#save').prop("disabled",true);
    $('#update').prop("disabled",false);
}

function updateData(){
    var id = $('#id').val()
    var en = $('#en').val()
    var dv = $('#dv').val()
    var dp = $('#dp').val()
    var dg = $('#dg').val()
	
    $.post('server_employee_entry.php?p=update', {id:id, en:en, dv:dv, dp:dp, dg:dg}, function(data){
        viewData()
        $('#id').val(' ')
        $('#en').val(' ')
        $('#dv').val(' ')
        $('#dp').val(' ')
        $('#dg').val(' ')
		
        $('#id').prop("readonly",false);
        $('#save').prop("disabled",false);
        $('#update').prop("disabled",true);
    })
}

function deleteData(id){
    $.post('server_employee_entry.php?p=delete', {id:id}, function(data){
        viewData()
    })
}

function removeConfirm(id){
    var con = confirm('Are you sure, want to delete this data!');
    if(con=='1'){
        deleteData(id);
    }
}

$(function() {

    var $sidebar   = $("#sidebar"), 
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 15;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }
    });
    
});