<?php 
    include 'connection.php';

    if (isset($_POST['update'])) {
        $nomEuipe=$_POST['nom_equipe'];
        $date_creation=$_POST['date_creation'];
        $nbr_joueur=$_POST['nbr_joueurs'];

        $query="UPDATE equipe SET Full texts
        nom_equipe='$nomEuipe', date_creation='$date_creation', nbr_joueurs='$nbr_joueur' WHERE nom_equipe='$nom_equipe'";

        // Execute the query
        if($connection->query($query)){
            echo"('location: listeEquipe.php')";
        }else{
            echo "Error updating record: " . $connection->error;
        }

    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        // Select the record that needs to be updated
        $query = "SELECT nom_equipe ,	date_creation ,	nbr_joueurs  FROM equipe WHERE nom_equipe='$id'";
        $result = $connection->query($query);
        $row = $result->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <form method="POST">
        <label for="enom_equipe">nom equipe</label>
        <input type="hidden" name="nom_equipe" value="<?php echo $row['nom_equipe']; ?>">
        <labeln for="date_creation">date dse date_creation:</label>
        <input type="date" name="date_creation" value="<?php echo $row['date_creation']; ?>"><br><br>
        <label for="nbr_joueurs">nombre de joueurs:</label>
        <input type="number" name="nbr_joueurs" value="<?php echo $row['nbr_joueurs']; ?>"><br><br>
      
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
<?php }  ?>