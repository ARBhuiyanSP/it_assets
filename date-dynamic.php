<?php include('header.php'); ?>
            <!-- Left Sidebar End -->
			
			<!-- DataTables -->
        <link href="plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
			
		


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">
                           <div class="col-lg-12">
                                <div class="container" id="printableArea">
										
									<center><h5>Saif Powertec Vehicle Fitness Report </h5></center>
									<table class="table" id="dataTable">
                        <thead>
                          <tr>
                            <th>Select</th>
                            <!--<th>Date</th>-->
                            
                            <th>Types of Work</th>
                            <th>Date Assigned</th>
                            <th>Date Due</th>
                            <th>Priority</th>
                            <th>Frequency</th>
                            <th>Company</th>
                            <th>Description of Process</th>
                            <th>Second in Charge</th>
                            <th>Assigned By</th>
                            <th>Comments</th>
                            <th>Question</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td><input type="checkbox" name="chk"/></td>
                             <!-- <td><input type="text" name="date[]" value="" /></td>-->
                              <td><input type="text" name="work[]" value="" class="task" /></td>
                              <td><input type="text" name="assigned_date[]" value="" id="assigned_date" class="assigned_date" /></td>
                              <td><input type="text" name="last_date[]" value="" id="last_date" class="last_date" /></td>
                              <td><input type="text" name="priority[]" value="" /></td>
                              <td><input type="text" name="frequency[]" value="" /></td>
                              <td><input type="text" name="company[]" value="" /></td>
                              <td><input type="text" name="description[]" value="" /></td>
                              <td><input type="text" name="s_incharge[]" value="" /></td>
                              <td><input type="text" name="assigned_by[]" value="" /></td>
                              <td><input type="text" name="comments[]" value="" />
                              </td>
                              <td><input type="text" name="question[]" value="" />
                              </td>
                          </tr>

                        </tbody>
                      </table>
                      <input class="btn btn-primary" type="button" value="Add Row" onclick="addRow('dataTable1')" id="add_button" />
                      <input class="btn btn-primary" type="button" value="Delete Row" onclick="deleteRow('dataTable')" />
                      <input class="btn btn-primary" type="submit" name="submit" value="submit">
										<button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button>
							
							<script>
							function printDiv(divName) {
								 var printContents = document.getElementById(divName).innerHTML;
								 var originalContents = document.body.innerHTML;

								 document.body.innerHTML = printContents;

								 window.print();

								 document.body.innerHTML = originalContents;
							}
							</script>
								</div>
										
							</div>
						</div>

									




                    </div> <!-- container -->
                    </div> <!-- container -->
					

                </div> <!-- content -->

                <footer class="footer text-right">
                   2018 - <?php echo date('Y'); ?> © <a href="" target="blank">Saif Powertec</a>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>


		<script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();

        </script>
		<script>
		 function addRow(tableID) {
      $(".last_date").datepicker("destroy");
      $(".assigned_date").datepicker("destroy");
      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[1].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[1].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
              
        }
      }

	    var dateAssignedId = Math.round(new Date().getTime() + (Math.random() * 100));
      var dateDueId = Math.round(new Date().getTime() + (Math.random() * 100));
      $(row).find('.assigned_date')[0].id = dateAssignedId; 
      $(row).find('.last_date')[0].id = dateDueId;
      
      $(".assigned_date").datepicker({dateFormat: "yy-mm-dd"});
      $(".last_date").datepicker({dateFormat: "yy-mm-dd"});
    }

    function deleteRow(tableID) {
      try {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;

      for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
          if(rowCount <= 2) {
            alert("Cannot delete all the rows.");
            break;
          }
          table.deleteRow(i);
          rowCount--;
          i--;
        }


      }
      }catch(e) {
        alert(e);
      }
    }
 $(function(){
      $(".assigned_date").datepicker({dateFormat: "yy-mm-dd"});
      $(".last_date").datepicker({dateFormat: "yy-mm-dd"});
  });
		</script>
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>
		
		  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="plugins/datatables/jszip.min.js"></script>
        <script src="plugins/datatables/pdfmake.min.js"></script>
        <script src="plugins/datatables/vfs_fonts.js"></script>
        <script src="plugins/datatables/buttons.html5.min.js"></script>
        <script src="plugins/datatables/buttons.print.min.js"></script>
        <script src="plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="plugins/datatables/dataTables.colVis.js"></script>
        <script src="plugins/datatables/dataTables.fixedColumns.min.js"></script>


        <!-- Counter js  -->
        <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="plugins/morris/morris.min.js"></script>
		<script src="plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		
		
		

    </body>
</html>
