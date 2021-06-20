<?php
$dbh = new PDO('mysql:host=localhost;dbname=blueline', 'root', '');
$page = isset($_GET['p'])? $_GET['p'] : '';
if($page=='add'){
    try{
        $ac		= $_POST['ac'];
        $id		= $_POST['id'];
        $nm 	= $_POST['nm'];
        $dr 	= $_POST['dr'];
		
		
        
        $stmt 	= $dbh->prepare("INSERT INTO `products`(product_code,category,product_name,dep_rate) VALUES(?,?,?,?)");
		
        $stmt->bindParam(1,$id);
        $stmt->bindParam(2,$ac);
        $stmt->bindParam(3,$nm);
        $stmt->bindParam(4,$dr);
		
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
        $ac		= $_POST['ac'];
        $id		= $_POST['id'];
        $nm 	= $_POST['nm'];
        $dr 	= $_POST['dr'];
		
        $stmt = $dbh->prepare("UPDATE products SET category=?,product_name=?,dep_rate=? WHERE product_code=?");
        
        $stmt->bindParam(1,$ac);
        $stmt->bindParam(2,$nm);
        $stmt->bindParam(3,$dr);
        $stmt->bindParam(4,$id);
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
        $stmt = $dbh->prepare("DELETE FROM products WHERE product_code=?");
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
        $stmt = $dbh->prepare("SELECT * FROM products ORDER BY product_code DESC");
        $stmt->execute();
        while($row = $stmt->fetch()){
            print "<tr>";
            print "<td>".$row['category']."</td>";
            print "<td>".$row['product_code']."</td>";
            print "<td>".$row['product_name']."</td>";
            print "<td>".$row['dep_rate']."</td>";
			
            print "<td class='text-center'><div class='btn-group' role='group' aria-label='group-".$row['product_code']."'>";
            ?> 
            <button onclick="editData('<?php echo $row['category'] ?>','<?php echo $row['product_code'] ?>','<?php echo $row['product_name'] ?>','<?php echo $row['dep_rate'] ?>')" class=''><i class="fa fa-edit text-success"></i></button>
            <button onclick="removeConfirm('<?php echo $row['product_code'] ?>')" class=''><i class="fa fa-trash text-danger"></i></button>
            <?php 
            print "</div></td>";
            print "</tr>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    }
}
?>