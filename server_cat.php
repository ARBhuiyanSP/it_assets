<?php
$dbh = new PDO('mysql:host=localhost;dbname=it_assets', 'root', '');
$page = isset($_GET['p'])? $_GET['p'] : '';
if($page=='add'){
    try{
        $id		= $_POST['id'];
        $nm 	= $_POST['nm'];
		
		
        
        $stmt 	= $dbh->prepare("INSERT INTO `assets_categories`(assets_id,assets_category) VALUES(?,?)");
		
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
		
        $stmt = $dbh->prepare("UPDATE assets_categories SET assets_category=? WHERE assets_id=?");
        
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
        $stmt = $dbh->prepare("DELETE FROM assets_categories WHERE assets_id=?");
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
        $stmt = $dbh->prepare("SELECT * FROM assets_categories ORDER BY assets_id DESC");
        $stmt->execute();
        while($row = $stmt->fetch()){
            print "<tr>";
            print "<td>".$row['assets_id']."</td>";
            print "<td>".$row['assets_category']."</td>";
			
            print "<td class='text-center'><div class='btn-group' role='group' aria-label='group-".$row['assets_id']."'>";
            ?> 
            <button onclick="editData('<?php echo $row['assets_id'] ?>','<?php echo $row['assets_category'] ?>')" class=''><i class="fa fa-edit text-success"></i></button>
            <button onclick="removeConfirm('<?php echo $row['assets_id'] ?>')" class=''><i class="fa fa-trash text-danger"></i></button>
            <?php 
            print "</div></td>";
            print "</tr>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    }
}
?>