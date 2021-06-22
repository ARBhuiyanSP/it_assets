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
                        <h4 class="page-title">Products List</h4>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div style="text-align:center;">
							<button class="btn btn-primary" onclick="window.location.href = 'allprint.php'" class=''> Print All Products <i class="fa fa-eye text-success"></i></button>
							<button class="btn btn-info" onclick="window.location.href = 'allview.php'" class=''> Print QR of All Products <i class="fa fa-eye text-success"></i></button>
						</div>
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>PID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Model</th>
                                    <th>Manufacturing SL</th>
                                    <th>Custodian</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                                    $sql = "select * from ams_products";
                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
										
									if($row['assign_status']=='assigned'){
										?>
								<tr class="edit_tr" style="background-color:#AF4940;color:#ffffff;">
									<?php } else{?>
								<tr class="edit_tr">
									<?php } ?>
                                    <td><span class="text"><?php
                                    $cat_id = $row['assets_category'];
                                    $sqlc = "select `assets_category` from `assets_categories` where `assets_id`='$cat_id';";
                                    $resultc = mysqli_query($link, $sqlc);
                                    $rowc = mysqli_fetch_array($resultc);
                                    echo $rowc['assets_category']
                                        ?></span></td>
										<td><span class="text"><?php echo $row['sl_no'] ?></span></td>
                                        <td><span class="text"><?php echo $row['item_name'] ?></span></td>
                                        <td><span class="text"><?php echo $row['assets_description'] ?></span></td>
                                        <td><span class="text"><?php echo $row['model'] ?></span></td>
                                        <td><span class="text"><?php echo $row['manu_sl'] ?></span></td>
                                        <td><span class="text"><?php echo $row['custody'] ?></span></td>
                                        <td class='text-center'> 
                                            <a href="products_edit.php?id=<?php echo $row['id'] ?>"><button><i class="fa fa-edit text-success"></i></button></a>

                                            <a href="del-product.php?id=<?php echo $row['id'] ?>"><button onclick="" class=''><i class="fa fa-trash text-danger"></i></button></a>
                                            <button onclick="window.location.href = 'qrview.php?id=<?php echo $row['id'] ?>'" class=''><i class="fa fa-eye text-success"></i></button>
                                            <button onclick="window.location.href = 'qrprintview.php?id=<?php echo $row['id'] ?>'" class=''><i class="fa fa-print text-success"></i></button>
                                        </td>
                                    </tr>

                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
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
