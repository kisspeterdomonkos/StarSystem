<?php
    function Planets()
    {
        $con = Connect();
        $sql = "SELECT * FROM bolygok";
        $result = mysqli_query($con, $sql);
        return $result;
        mysqli_close($con);
    }
    function Moons()
    {
        $con = Connect();
        $sql = "SELECT holdak.nev AS hold_neve, bolygok.id AS hold_id, bolygok.nev AS bolygo_neve, holdak.felfedezes As hold_felfedezes
        FROM holdak
        LEFT JOIN bolygok ON holdak.bolygo = bolygok.id";
        $result = mysqli_query($con, $sql);
        return $result;
        mysqli_close($con);
    }
    function Specific()
    {
        $con = Connect();
        $id = $_GET["id"];
        $sql = "SELECT * FROM bolygok WHERE id =".$id;
        $result = mysqli_query($con, $sql);
        return $result;
        mysqli_close($con);
    }
?>