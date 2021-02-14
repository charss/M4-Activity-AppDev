<html>
	<head>
		<title>
		</title>
		<link rel='stylesheet' href='style.css'>
	</head>
	<body>
		<?php
		$names = array(
			'james'  , 'mary', 
			'bradley', 'charlotte', 
			'johnny' , 'kayla',
			'john'   , 'patricia',
			'robert' , 'jennifer',
			'michael', 'linda',
			'william', 'elizabeth',
			'david'  , 'barbara',
			'richard', 'susan',
			'joseph' , 'jessica');
			$vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
		?>


		<table>
			<tr>
				<th colspan='6'>List of names</th>
			</tr>
			<tr>
				<td>Name</td>
				<td>Number of Character</td>
				<td>Uppercase First Character</td>
				<td>Replace Vowels with @</td>
				<td>Check Position of Chracter 'a'</td>
				<td>Reverse Name</td>
			</tr>
			<?php
			
			for ($i = 0; $i < count($names); $i++) {
				echo "<tr>";
				echo "<td>$names[$i]</td>";
				$x = strlen($names[$i]);
				echo "<td>$x</td>";
				echo "<td>".ucfirst($names[$i])."</td>";

				echo "<td>".str_replace($vowels, '@', $names[$i])."</td>";
				echo "<td>".(int)strpos($names[$i], 'a')."</td>";
				echo "<td>".strrev($names[$i])."</td>";
				echo "</tr>";
			}

			?>
		</table>


	</body>

</html>