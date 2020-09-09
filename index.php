<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorial</title>
</head>
<body>

	<?php
	include "header.html";
	?>
	<?php
	//VARIABLES AND PRINTING
		$name='Sofia';
		$age=25;
		echo "Hello World";
		echo "<h4>Welcome to my PHP Website</h4>";
		echo "<hr>";
		echo "<p>This is my site</p>";
		echo "I am $name <br>";
		echo "I am $age years old<br>";

	//DATA TYPES
		$phrase='to be or not to be'; //string
		$age=40; //int
		$gpa=3.6; //floatt
		$isMale=false; //boolean
		echo "$phrase $age $gpa<br>";

	//STRING
		$phrase="Hello";
		echo "$phrase<br>";
		echo strtolower($phrase)."<br>"; //lower
		echo strtoupper($phrase)."<br>"; //uppercase
		echo strlen($phrase)."<br>"; //string length
		echo "<$phrase[1]<br>"; //accessing each char
		//STRING REPLACE
		echo str_replace("Hello", "Hey", $phrase)."<br>"; //str_replace(string to replace, new string, var)
		//STRING SUBSTRING
		echo substr($phrase, 2)."<br>";
		echo substr($phrase, 2,2)."<br>";

	//NUMBERS

		$num=10;
		echo (10%3)."<br>";
		echo (4+5*10)."<br>";
		echo ((4+5)*10)."<br>";
		echo ++$num."<br>";
		echo --$num."<br>";
		echo abs(-100)."<br>";
		echo pow(2, 4)."<br>";
		echo sqrt(144)."<br>";
		echo max(2,10)."<br>";
		echo min(2,10)."<br>";
		echo round(3.2)."<br>";
		echo round(3.7)."<br>";
		echo ceil(3.2)."<br>";
		echo floor(3.2)."<br>";
	?>

	<!--GET FORMS-->
	<h4>GET FORMS</h4>
  <hr>
		<form action="index.php" method="get">
			Name: <input type="text" name="name">
			<br>
			Age: <input type="number" name="age">
			<input type="submit" name="btn">
		</form>

		Your name is <?php echo $_GET["name"]; ?>
		<br>
		Your age is <?php echo $_GET["age"]; ?>
		<br>

	<!--Building Basic Calculator-->
	<h4>BUILDING BASIC CALCULATOR</h4>
	<hr>
		<form action="index.php" method="get">
			Num1 : <input type="number" name="num1">
			<br>
			Num2 : <input type="number" name="num2">
			<input type="submit" name="btn2">
		</form>
		Answer : <?php echo $_GET["num1"]+$_GET["num2"];?>

	<!--Mid labs-->
	<h4>MID LABS</h4>
	<hr>

		<form action="index.php" method="get">
			Color : <input type="text" name="color">
			<br>
			Noun : <input type="text" name="pluralNoun">
			<br>
			Celebrity: <input type="text" name="celebrity">
			<br>
			<input type="submit" name="btn3">
		</form>
		<?php
			$color=$_GET["color"];
			$noun=$_GET["pluralNoun"];
			$celeb=$_GET["celebrity"];
			echo "Roses are $color <br>";
			echo "$noun are blue<br>";
			echo "I love $celeb<br>";
		?>

	<!--GET VS POST-->
		<!-- GET prints the info in the URL but POST does not print it on url-->
		<h4>GET VS POST</h4>
		<hr>

		<form action="index.php" method="post">
			Color : <input type="text" name="color2">
			<br>
			<input type="submit" name="btn4">
		</form>

		<?php

			echo $_POST["color2"];
		?>
	<!--Arrays-->
	<h4>ARRAY</h4>
	<hr>
		<?php
		$friends= array("Joey","Monica","Ross","Chandler");
		$friends[0]="Phoebe";
		$friends[4]="Joey";
		$friends[count($friends)]="Sofia";

		echo count($friends);
		echo $friends[0];
		echo $friends[count($friends)-1];
		?>
	<!--CheckBoxes-->
	<h4>CHECKBOX</h4>
	<hr>
		<form action="index.php" method="post">
			<input type="checkbox" name="fruits[]" value="apple"> Apple
			<br>
			<input type="checkbox" name="fruits[]" value="banana"> Banana
			<br>
			<input type="checkbox" name="fruits[]" value="orange"> Orange
			 <input type="submit" name="btn5">

		</form>

		<?php
			$fruits=$_POST["fruits"];
			echo $fruits[0]
		?>
	<!--Associative Array-->

		<?php
			$grades=array("Jim"=>"A+","Oscar"=>"B+","Katy"=>"B");
			echo $grades["Jim"]; ?>

	<!--Functions-->
	<h4>Function</h4>
	<hr>
		<?php
			function printString(){
				echo "<br>string<br>";
			}


			function sayHello($name){
				echo "<br>Hello $name<br>";
			}
			printString();
			sayHello("Sofia");
			sayHello("Sarah");
		?>
	<!--RETURN-->
	<h4>RETURN Statement</h4>
	<hr>
		<?php

			function cubeFunc($num)
			{
				return $num*$num*$num;
			}
			$result= cubeFunc(2);
			echo $result;


		 ?>
	<!--If else-->
	<h4>IF ELSE CONDITION</h4>
	<hr>
		<?php

				$num1=10;
				if($num1>5)
				{
					echo "<br>The number is greater than 5 <br>";
				}
				else {
					echo "<br>The number is less than 5<br>";
				}
		 ?>
	<!--BUILDING BETTER CALCULATOR + SWITCH-->
	<h4>BUILDING BETTER CALCULATOR</h4>
	<hr>
	<form class="" action="index.php" method="post">
		Number 1: <input type="number" name="n1">
		<br>
		Number 2: <input type="number" name="n2">
		<br>
		OP: <input type="text" name="op">
		<br>
		<input type="submit" name="btn6">
		<br>
	</form>
	Result:
	<?php
			switch ($_POST["op"]) {
				case '+':
					echo $_POST["n1"]+$_POST["n2"];
					break;
			case '-':
				echo $_POST["n1"]-$_POST["n2"];
				break;
			case '*':
				echo $_POST["n1"]*$_POST["n2"];
				break;
			case '/':
				echo $_POST["n1"]/$_POST["n2"];
				break;
			case '%':
				echo $_POST["n1"]%$_POST["n2"];
				break;


				default:
					// code...
					break;
			}
	 ?>
	 <!--INCLUDING PHP-->
	 <h4>INCLUDING PHP</h4>
	 <hr>
	 <?php
   	$title="My Blog";
  	$author="Sofia Neherin";
  	$content="This is my blog";
   	include "function.php";
  	postBlog($title,$author,$content);

   ?>
<!--Classes and Objects-->
	 <h4>Classes and Objects</h4>
	 <hr>
	 <?php
		 class Book{
				var $title;
				public $author;
			};


			$book1 = new Book;
			$book1->title = "Harry Potter";
			$book1->author = "JK Rowling";

			echo $book1->title."<br>";
			echo $book1->author."<br>";

	  ?>

<!--COnstructor-->
		<h4>Constructor</h4>
		<hr>
		<?php
		class Blog{
			var $title;
			public $author;

			function __construct($title, $author){
					$this->title = $title;
					$this->author = $author;
			}
			};

			$blog1 = new Blog("Harry Potter", "JK Rowling");
			// $book1->title = "Half-Blood Prince";

			echo $blog1->title."<br>";
		 ?>
<!--Object METHODS-->
		<?php
			class Student{
				 public $name;
				 public $gpa;

				 function __construct($name, $gpa){
							$this->name = $name;
							$this->gpa = $gpa;
				 }

				 function hasHonors(){
							if($this->gpa >= 3.5){
									 return true;
							}
							return false;
				 }
				};
		 ?>
<!--GEtter Setter-->
	<h4>Getter and Setter</h4>
	<hr>
		<?php

			class Movie{
				public $title;
				private $rating;

				function __construct($title, $rating){
					$this->title = $title;
					$this->setRating($rating);
				}

				function getRating(){
					return $this->rating;
				}
				function setRating($rating){
					if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
							 $this->rating = $rating;
					} else {
							 $this->rating = "NR";
					}
				}
			};


		 ?>
	<!-- INHERITANCE -->
		<h4>INEHRITANCE</h4>
		<hr>
		<?php

				class Chef{
					 function makeChicken(){
								echo "The chef makes chicken";
					 }
					 function makeSalad(){
								echo "The chef makes salad";
					 }
					 function makeSpecialDish(){
								echo "The chef makes bbq ribs";
					 }
				};

				class ItalianChef extends Chef{
					 function makePasta(){
								echo "The chef makes pasta";
					 }
					 function makeSpecialDish(){
								echo "The chef makes chicken parm";
					 }
				};


				$chef = new Chef();
				$chef->makeChicken();
				echo "<br>";
				$italianChef = new ItalianChef();
				$italianChef->makeChicken();

		 ?>
	<!--INCLUDING HTML-->
	 <?php
	 	include "footer.html";
	 ?>



</body>
</html>
