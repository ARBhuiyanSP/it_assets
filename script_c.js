$('table').dataTable();
viewData();
$('#update').prop("disabled",true);

function viewData(){
    $.get('server_c.php', function(data){
        $('tbody').html(data)
    })
}

function saveData(){
    var id	 	= $('#id').val()
    var name 	= $('#nm').val()
    var address = $('#ad').val()
    var email 	= $('#em').val()
    var phone 	= $('#hp').val()
    var web	 	= $('#web').val()
	
    $.post('server_c.php?p=add', {id:id, nm:name, ad:address, em:email, hp:phone, web:web}, function(data){
        viewData()
        $('#id').val(' ')
        $('#nm').val(' ')
        $('#ad').val(' ')
        $('#em').val(' ')
        $('#hp').val(' ')
        $('#web').val(' ')
    })
}

function editData(id, nm, ad, em, hp, web) {
    $('#id').val(id)
    $('#nm').val(nm)
    $('#ad').val(ad)
    $('#em').val(em)
    $('#hp').val(hp)
    $('#web').val(web)
	
    $('#id').prop("readonly",true);
    $('#save').prop("disabled",true);
    $('#update').prop("disabled",false);
}

function updateData(){
    var id = $('#id').val()
    var name = $('#nm').val()
    var address = $('#ad').val()
    var email = $('#em').val()
    var phone = $('#hp').val()
    var web = $('#web').val()
    $.post('server_c.php?p=update', {id:id, nm:name, ad:address, em:email, hp:phone, web:web}, function(data){
        viewData()
        $('#id').val(' ')
        $('#nm').val(' ')
        $('#ad').val(' ')
        $('#em').val(' ')
        $('#hp').val(' ')
        $('#web').val(' ')
        $('#id').prop("readonly",false);
        $('#save').prop("disabled",false);
        $('#update').prop("disabled",true);
    })
}

function deleteData(id){
    $.post('server_c.php?p=delete', {id:id}, function(data){
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