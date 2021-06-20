<?php
$dbh = new PDO('mysql:host=localhost;dbname=it_assets', 'root', '');
$page = isset($_GET['p'])? $_GET['p'] : '';
if($page=='add'){
    try{
        $id		= $_POST['id'];
        $nm 	= $_POST['nm'];
        $ad 	= $_POST['ad'];
        $em 	= $_POST['em'];
        $hp 	= $_POST['hp'];
        $web 	= $_POST['web'];
		
        
        $stmt 	= $dbh->prepare("INSERT INTO `vendors`(vendor_id,vendor_name,address,email,phone,web) VALUES(?,?,?,?,?,?)");
		
        $stmt->bindParam(1,$id);
        $stmt->bindParam(2,$nm);
        $stmt->bindParam(3,$ad);
        $stmt->bindParam(4,$em);
        $stmt->bindParam(5,$hp);
        $stmt->bindParam(6,$web);
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
        $ad 	= $_POST['ad'];
        $em 	= $_POST['em'];
        $hp 	= $_POST['hp'];
        $web 	= $_POST['web'];
        $stmt = $dbh->prepare("UPDATE vendors SET vendor_name=?, address=?, email=?, phone=?, web=? WHERE vendor_id=?");
        $stmt->bindParam(1,$nm);
        $stmt->bindParam(2,$ad);
        $stmt->bindParam(3,$em);
        $stmt->bindParam(4,$hp);
        $stmt->bindParam(5,$web);
        $stmt->bindParam(6,$id);
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
        $stmt = $dbh->prepare("DELETE FROM vendors WHERE vendor_id=?");
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
        $stmt = $dbh->prepare("SELECT * FROM vendors ORDER BY vendor_id DESC");
        $stmt->execute();
        while($row = $stmt->fetch()){
            print "<tr>";
            print "<td>".$row['vendor_id']."</td>";
            print "<td>".$row['vendor_name']."</td>";
            print "<td>".$row['address']."</td>";
            print "<td>".$row['email']."</td>";
            print "<td>".$row['phone']."</td>";
            print "<td>".$row['web']."</td>";
            print "<td class='text-center'><div class='btn-group' role='group' aria-label='group-".$row['vendor_id']."'>";
            ?> 
            <button onclick="editData('<?php echo $row['vendor_id'] ?>','<?php echo $row['vendor_name'] ?>','<?php echo $row['address'] ?>','<?php echo $row['email'] ?>','<?php echo $row['phone'] ?>','<?php echo $row['address'] ?>','<?php echo $row['web'] ?>')" class=''><i class="fa fa-edit text-success"></i></button>
            <button onclick="removeConfirm('<?php echo $row['vendor_id'] ?>')" class=''><i class="fa fa-trash text-danger"></i></button>
            <?php 
            print "</div></td>";
            print "</tr>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    }
}
?>