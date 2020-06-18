<?php
    function validation1(){
        if(strlen($_POST["first"]<2)||strlen($_POST["first"]>30)){
            echo "<br> saxeli ar unda iyos 2 asoze cota da 30 asoze meti";
        }
        else{
            echo "<table> <tr> <td>".$_POST["first"]."</td> </tr> </table>";
        }
    }
    function validation2(){
        if(strlen($_POST["last"]<3)||strlen($_POST["last"]>50)){
            echo "<br> gvari ar unda iyos 3 asoze cota da 50 asoze meti";
        }
        else{
            echo "<table> <tr> <td>".$_POST["last"]."</td> </tr> </table>";
        }
    }
    function validation3(){
        if(strlen($_POST["kursi"]<1)||strlen($_POST["kursi"]>4)){
            echo "<br> kursi unda iyos 1-dan 4-chatvlit";
        }
        else{
            echo "<table> <tr> <td>".$_POST["kursi"]."</td> </tr> </table>";
        }
    }
    function validation4(){
        if(strlen($_POST["id"]) != 11){
            echo "<br> piradi nomeri unda iyos 11 simbolosgan shemdgari";
        }
        else{
            echo "<table> <tr> <td>".$_POST["id"]."</td> </tr> </table>";
        }
    }
    function validation5(){
        if(strlen($_POST["address"]) > 70){
            echo "<br> misamarti ar sheidzleba iyos 70 simboloze grdzeli";
        }
        else{
            echo "<table> <tr> <td>".$_POST["address"]."</td> </tr> </table>";
        }
    }
    function validation6(){
         if(strlen($_POST["phone"]<6)||strlen($_POST["phone"]>30)){
            echo "<br> saxeli ar unda iyos 2 asoze cota da 30 asoze meti";
        }
        else{
            echo "<table> <tr> <td>".$_POST["phone"]."</td> </tr> </table>";
        }
    }
?>