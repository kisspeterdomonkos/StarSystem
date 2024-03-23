<?php
    include("header.php");
    $result = Moons();
    $row = mysqli_fetch_array($result);
?>

<div class="container pb-2">
        <h1 class="text-center display-6 py-3">Holdak</h1>
        
        <table class="table table-bordered">
            <tr>
                <th>Név</th>
                <th>Bolygó</th>
                <th>Felfedezés</th>
            </tr>
            <?php while($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td>
                    <?php echo $row["hold_neve"];?>                   
                </td>

                <td>
                    <a href="bolygok.php?id=<?php echo $row["hold_id"]; ?>"><?php echo $row["bolygo_neve"];?></a>
                </td>

                <td>
                    <?php echo $row["hold_felfedezes"];?>
                </td>
                       
              <?php } ?>      

            </tr>


        </table>
       
    </div>


<?php
    include("footer.php");
?>
