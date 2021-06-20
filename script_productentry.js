$('table').dataTable();
viewData();
$('#update').prop("disabled",true);

function viewData(){
    $.get('server_productentry.php', function(data){
        $('tbody').html(data)
    })
}

function saveData(){
    var ac	 	= $('#ac').val()
    var id	 	= $('#id').val()
    var nm 		= $('#nm').val()
    var dr 		= $('#dr').val()
	
    $.post('server_productentry.php?p=add', {ac:ac, id:id, nm:nm, dr:dr}, function(data){
        viewData()
        $('#ac').val(' ')
        $('#id').val(' ')
        $('#nm').val(' ')
        $('#dr').val(' ')
    })
}

function editData(ac, id, nm, dr) {
    $('#ac').val(ac)
    $('#id').val(id)
    $('#nm').val(nm)
    $('#dr').val(dr)
	
    $('#id').prop("readonly",true);
    $('#save').prop("disabled",true);
    $('#update').prop("disabled",false);
}

function updateData(){
    var ac = $('#ac').val()
    var id = $('#id').val()
    var nm = $('#nm').val()
    var dr = $('#dr').val()
	
    $.post('server_productentry.php?p=update', {ac:ac, id:id, nm:nm, dr:dr}, function(data){
        viewData()
        $('#ac').val(' ')
        $('#id').val(' ')
        $('#nm').val(' ')
        $('#dr').val(' ')
		
        $('#id').prop("readonly",false);
        $('#save').prop("disabled",false);
        $('#update').prop("disabled",true);
    })
}

function deleteData(id){
    $.post('server_productentry.php?p=delete', {id:id}, function(data){
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