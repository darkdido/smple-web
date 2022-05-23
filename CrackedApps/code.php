<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KURDBOSS / CODE</title>
</head>
<style>
.header{
    background-color: #1c1c1d;
    width: ;
    padding: 15px;

}
body,html{
    background-color: black;
    margin: 0;

    padding: 0;
    width: 100%;
    height: 100%;
}
.title{
    color: white;
    font-family: arial;
    font-weight: bold;
    font-size: auto;
}
a{
    text-decoration: none;
    color: white;
}
.codeBG
{
    background-color: #1c1c1c;
    height: 250px;
    width: ;
    border: 1px solid white;
}
.btn{
    color: white;
    background: none;
    border: 2px solid white;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px;
    font-family: arial;
    font-weight: bold;
    width: auto;
    transition: 0.20s;
}
.btn:hover{
    border: 2px solid red;

}
.src{
    background: none;
    border: 2px solid green;
    border-radius: 25px;
    font-family: arial;
    font-weight: bold;
    padding: 10px;
    width: auto;
    color: white;
    transition: 0.20s;

}
.src:hover{
    border-radius: 2px solid white;
}
.nigga{
    color: white;
    font-weight: bold;
    font-family: arial;
}
.nigga2{
    color: red;
    font-weight: bold;
    font-family: arial;
}
.btn4{
    color: blue;
    font-family: arial;
    font-weight: bold;
    text-decoration: none;
transition: 0.20s;
}
.btn4:hover{
color: white;

}
</style>
<body>
<div class="header">
        <a href="#">
<h1 class="title">KURD BOSS - APPS</h1>
</a>        
</div>
<br>
<a class="btn4" href="index.html">
< Back
    </a>
<br>
<br>
<br>
<div class="codeBG">
<center>
<h2 style="color: white; font-weight: bold; font-family: arial;">CODE</h2>
<br>
<form action="" method="POST">

<input name="cd" id="cd" type="tel" class="src" placeholder="Enter the code..">
<br>
<br>
<input id="submit" name="submit" type="submit" class="btn" value="Submit">
</center>
</form>
</div>
<?php
if(isset($_POST["submit"]))
{
    $code = $_POST["cd"];
    if($code == "dyari"){
echo "<div class='nigga'>
Hello nigga

</div>";
    }else{
        echo "<div class='nigga2'>
FAILED

</div>";
    }
}

?>


</body>
</html>