<?php
include 'connect.php';
?>
<table border='1'>
    <tr>
        <th>
            Name
        </th>
        <th>
            Username
        </th>
    </tr>

<?php
$sq="select * from reg";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['name']?>
        </td>
        <td>
            <?php echo $f['username']?>
        </td>
    </tr>
    <?php
}
?>

<br><button><a href="home.php">Home</a></button> 
<button><a href="reg.php">Registration</a> </button>
<button><a href="viewall.php">view all</a></button>
<button><a href="edit.php">edit</a></button>
<button><a href="delete.php">delete</a></button>