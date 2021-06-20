<?php
$dbh = new PDO('mysql:host=localhost;dbname=blueline', 'root', '');
$page = isset($_GET['p'])? $_GET['p'] : '';
if($page=='add'){
    try{
        $id		= $_POST['id'];
        $nm 	= $_POST['nm'];
		
		
        
        $stmt 	= $dbh->prepare("INSERT INTO `departments`(dept_id,dept_name) VALUES(?,?)");
		
        $stmt->bindParam(1,$id);
        $stmt->bindParam(2,$nm);
		
        if($stmt->execute()){
            print "<div class='alert alert-success' role='alert'>Data has been added</div>";
        } else{
            print "<div class='alert alert-danger' role='alert'>Failed to add data</div>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    } 
} else if($page=='update'){
    try{
        $id		= $_POST['id'];
        $nm 	= $_POST['nm'];
		
        $stmt = $dbh->prepare("UPDATE departments SET dept_name=? WHERE dept_id=?");
        
        $stmt->bindParam(1,$nm);
        $stmt->bindParam(2,$id);
        if($stmt->execute()){
            print "<div class='alert alert-success' role='alert'>Data has been updated</div>";
        } else{
            print "<div class='alert alert-danger' role='alert'>Failed to update data</div>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    } 
} else if($page=='delete'){
    try{
        $id = $_POST['id'];
        $stmt = $dbh->prepare("DELETE FROM departments WHERE dept_id=?");
        $stmt->bindParam(1,$id);
        if($stmt->execute()){
            print "<div class='alert alert-success' role='alert'>Data has been deleted</div>";
        } else{
            print "<div class='alert alert-danger' role='alert'>Failed to delete data</div>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    } 
} else{
    try{
        $stmt = $dbh->prepare("SELECT * FROM departments ORDER BY dept_id DESC");
        $stmt->execute();
        while($row = $stmt->fetch()){
            print "<tr>";
            print "<td>".$row['dept_id']."</td>";
            print "<td>".$row['dept_name']."</td>";
			
            print "<td class='text-center'><div class='btn-group' role='group' aria-label='group-".$row['dept_id']."'>";
            ?> 
            <button onclick="editData('<?php echo $row['dept_id'] ?>','<?php echo $row['dept_name'] ?>')" class=''><i class="fa fa-edit text-success"></i></button>
            <button onclick="removeConfirm('<?php echo $row['dept_id'] ?>')" class=''><i class="fa fa-trash text-danger"></i></button>
            <?php 
            print "</div></td>";
            print "</tr>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    }
}
?>