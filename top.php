<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		.me{float: center;}
	</style>
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
 
<h1 style="text-align: center;">submit your marks to get mean grade</h1>
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">


         <form class="me" method="post">
         	<div class="container">
         	<br>math<br>
            <input type="numbers" name="b1"><br>
            <br>english<br>
            <input type="numbers" name="b1">
             <br> kiswa<br>
            <input type="numbers" name="b1">
             <br> chem<br>
            <input type="numbers" name="b1">
             <br> phyc<br>
            <input type="numbers" name="b1">
             <br> histo<br>
            <input type="numbers" name="b1">
              <br>cre<br>
            <input type="numbers" name="b1">
              <br>PE<br>
            <input type="numbers" name="b1">
           <br> agri<br>
            <input type="numbers" name="b2">
            <br>swimming<br>
            <input type="numbers" name="b2">
            <br>computer<br>
            <input type="numbers" name="b2">
            <br>parade<br>
            <input type="numbers" name="b2">
            
            <select name="operator" id="">
               <option>None</option>
               <option>Add</option>
               <option>Subtract</option>
               <option>Multiply</option>
               <option>Divide</option>
               <option>Square</option>
            </select>
            <button type="submit" name="submit" value="submit">Calculate</button>
</div>
</form>
</div>
</div>
</div>

<?php 

if (isset($_POST['submit'])) {
                $result1 = $_POST['b1'];
                $result2 = $_POST['b2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                    case 'None':
                        echo "You need to select any operator";
                        break;
                    case 'Add':
                        echo $result1 + $result2;
                        break;
                    case 'Subtract':
                        echo $result1 - $result2;
                        break;
                    case 'Multiply':
                        echo $result1 * $result2;
                        break;
                    case 'Divide':
                        echo $result1 / $result2;
                        break;
                    case 'Square':
                        echo $result1 ** $result2;
                        break;
                }
            }



 
 $total=$Maths+$English+$Physics+$Chemistry+$Geography+$Computer;
$meanscore=$total/6;

if (isset($_GET['grade']))   {
    # code...

    $grade=$_GET['grade'];
} 

if ($meanscore>=90) {
    # code...
    echo "<strong>You scored grade A</strong>";

 } 
elseif ($meanscore>=80) {
    # code...
    echo " <strong>You scored grade A-</strong>";
}

elseif ($meanscore>=70) {
    # code...
    echo "<strong>You Scored grade B+</strong>";

}

elseif($meanscore>=60) {
    # code...
    echo "<strong>You scored grade B</strong>";

}

elseif($meanscore>=50) {
    # code...

    echo "<strong> You scored grade B-</strong>";

}

elseif ($meanscore>=40) {
    # code...
    echo "<strong>You scored grade C</strong>";
}



 else {

    # code...
    echo "Your better than this. Never stop trying";

 }

 ?>
 </body>
</html>
