<?php
$dbh = new PDO('mysql:host=localhost;dbname=it_assets', 'root', '');
$page = isset($_GET['p'])? $_GET['p'] : '';
if($page=='add'){
    try{
        $id		= $_POST['id'];
        $en 	= $_POST['en'];
        $dv 	= $_POST['dv'];
        $dp 	= $_POST['dp'];
        $dg 	= $_POST['dg'];
		
		
        
        $stmt 	= $dbh->prepare("INSERT INTO `employees`(employee_id,employee_name,division,department,designation) VALUES(?,?,?,?,?)");
		
        $stmt->bindParam(1,$id);
        $stmt->bindParam(2,$en);
        $stmt->bindParam(3,$dv);
        $stmt->bindParam(4,$dp);
        $stmt->bindParam(5,$dg);
		
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
        $en 	= $_POST['en'];
        $dv 	= $_POST['dv'];
        $dp 	= $_POST['dp'];
        $dg 	= $_POST['dg'];
		
        $stmt = $dbh->prepare("UPDATE employees SET employee_name=?,division=?,department=?,designation=? WHERE employee_id=?");
        
        $stmt->bindParam(1,$en);
        $stmt->bindParam(2,$dv);
        $stmt->bindParam(3,$dp);
        $stmt->bindParam(4,$dg);
        $stmt->bindParam(5,$id);
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
        $stmt = $dbh->prepare("DELETE FROM employees WHERE employee_id=?");
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
        $stmt = $dbh->prepare("SELECT * FROM employees ORDER BY employee_id DESC");
        $stmt->execute();
        while($row = $stmt->fetch()){
            print "<tr>";
            print "<td>".$row['employee_id']."</td>";
            print "<td>".$row['employee_name']."</td>";
            print "<td>".$row['division']."</td>";
            print "<td>".$row['department']."</td>";
            print "<td>".$row['designation']."</td>";
			
            print "<td class='text-center'><div class='btn-group' role='group' aria-label='group-".$row['employee_id']."'>";
            ?> 
            <button onclick="editData('<?php echo $row['employee_id'] ?>','<?php echo $row['employee_name'] ?>','<?php echo $row['division'] ?>','<?php echo $row['department'] ?>','<?php echo $row['designation'] ?>')" class=''><i class="fa fa-edit text-success"></i></button>
            <button onclick="removeConfirm('<?php echo $row['employee_id'] ?>')" class=''><i class="fa fa-trash text-danger"></i></button>
            <?php 
            print "</div></td>";
            print "</tr>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    }
}
?>