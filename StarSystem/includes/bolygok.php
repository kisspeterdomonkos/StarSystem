<?php
    include("header.php");
    $result = Planets();
    $row = mysqli_fetch_array($result); 
?>
<div class="container mydiv">
    <?php  while($row = mysqli_fetch_array($result)){ ?>
        <button type="button" class="btn btn-dark mybtn">
            <a href="bolygok.php?id=<?php echo $row['id']; ?>"><?php echo $row["nev"]; ?></a>
            <?php } ?>
        </button>
</div>     

<?php
    $result = Specific();
    $row = mysqli_fetch_array($result); 
?>
<div class='container'>
    <h2 class="h2 myh2 text-center display-6 py-3"><?php echo $row['nev'] ?></h2>
    <div class='row'>
        <div class="col-md">
            <table class='table table-bordered mytable'>
                <tr><th>Távolság a Naptól:</th><td><?php echo $row['tavolsag'] ?></td></tr>
                <tr><th>Átlag sebesség:</th><td><?php echo $row['sebesseg'] ?></td></tr> 
                <tr><th>Egyenlítő sugara:</th><td><?php echo $row['egyenlito'] ?></td></tr> 
                <tr><th>Keringési ideje a Nap körül:</th><td><?php echo $row['keringes'] ?></td></tr> 
                <tr><th>Atmoszféra az összetétele:</th><td><?php echo $row['atmoszfera'] ?></td></tr> 
            </table>
        </div>
        <div class="col-md">
            <img class="myimg" src="../sources/img/<?php echo $row['id'] ?>.png" alt="<?php echo $row['nev'] ?>">
        </div>
    </div>
        
    </div>
</div>









<?php
    include("footer.php");
?>
