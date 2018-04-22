<script type="text/javascript"> 
document.getElementById("a1").classList.remove("selA");
document.getElementById("a2").classList.add("selA");
document.getElementById("a3").classList.remove("selA");
document.getElementById("a4").classList.remove("selA");
document.getElementById("a5").classList.remove("selA");	
</script>

<link rel="stylesheet" type="text/css" href="sites/news.css">
<div id="articleWrapper">
<?php 
	include 'dbh.php';

	if (!isset($_GET["article"])) {
		// Show all articles
		$sql = "SELECT * FROM news";
		$result = mysqli_query($conn, $sql);
		
		while ($row = $result->fetch_assoc()) {
			$template_file = $row['template'];
			$date = $row['date'];
			$hyperlink = $row['hyperlink'];
			$img = $row['img'];
			$bcol = $row['bcolor'];
			$heading = $row['heading'];
			$text = $row['content'];
			$id = $row['id'];
			$article_file = $row['article_file'];

			$template = file_get_contents("sites/" . $template_file);
			echo sprintf($template, "?site=news&article=" . $id, $heading, $bcol, $img, $text);
		}
	} else {
		$id = $_GET["article"];
		// Show particular article
		$sql = "SELECT * FROM news WHERE id=" . $id;
		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);
		include("articles/" . $row["article_file"]);
	}
	/*
	$temlate = file_get_contents("sites/articleTL.txt");
	$heading = "News 1";
	$bcol = "black";
	$img = "earth.jpg";
	$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat molestie mi quis imperdiet. Aenean eu est imperdiet, sollicitudin mi vitae, placerat est. Nunc accumsan sodales facilisis. Vivamus scelerisque lorem nec mauris lacinia faucibus. Nam lacinia tellus eget elit sollicitudin dapibus. Maecenas lacinia ante facilisis nibh vulputate varius. Praesent pretium elit eu nisl interdum, eget suscipit sapien volutpat. Praesent nulla turpis, convallis quis sapien id, semper feugiat magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vestibulum dapibus tellus at sagittis.<br>

		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat molestie mi quis imperdiet. Aenean eu est imperdiet, sollicitudin mi vitae, placerat est. Nunc accumsan sodales facilisis. Vivamus scelerisque lorem nec mauris lacinia faucibus.";

	echo sprintf($temlate, $heading, $bcol, $img, $text);

	$temlate = file_get_contents("sites/articleRightTL.txt");
	$heading = "News 2";
	$bcol = "transparent";
	$img = "sponsor.png";
	$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat molestie mi quis imperdiet. Aenean eu est imperdiet, sollicitudin mi vitae, placerat est. Nunc accumsan sodales facilisis. Vivamus scelerisque lorem nec mauris lacinia faucibus. Nam lacinia tellus eget elit sollicitudin dapibus. Maecenas lacinia ante facilisis nibh vulputate varius. Praesent pretium elit eu nisl interdum, eget suscipit sapien volutpat. Praesent nulla turpis, convallis quis sapien id, semper feugiat magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vestibulum dapibus tellus at sagittis.<br>

		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat molestie mi quis imperdiet. Aenean eu est imperdiet, sollicitudin mi vitae, placerat est. Nunc accumsan sodales facilisis. Vivamus scelerisque lorem nec mauris lacinia faucibus.";

	echo sprintf($temlate, $heading, $bcol, $img, $text);
	*/
 ?>
</div>