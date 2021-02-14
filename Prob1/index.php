<html>
	<head>
		<title>
		</title>
		<link rel='stylesheet' href='style.css'>
	</head>
	<body>
		<?php
		$a_array = array();
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
				<th colspan='6' id='title'>List of names</th>
			</tr>
			<tr>
				<td class='headers'>Name</td>
				<td class='headers'>Number of Character</td>
				<td class='headers'>Uppercase First Character</td>
				<td class='headers'>Replace Vowels with @</td>
				<td class='headers'>Check Position of Chracter 'a'</td>
				<td class='headers'>Reverse Name</td>
			</tr>

			<?php
			for ($i = 0; $i < count($names); $i++) {
				$a_array = array();
				echo "<tr>";
				echo "<td class='name_column'>$names[$i]</td>";
				$x = strlen($names[$i]);
				echo "<td>$x</td>";
				echo "<td>".ucfirst($names[$i])."</td>";

				echo "<td>".str_replace($vowels, '@', $names[$i])."</td>";

				
				echo "<td>";
				$positions = '';
				for ($j = 0; $j < strlen($names[$i]); $j++) {
					if ($names[$i][$j] == 'a') {
						array_push($a_array, $j);
					}
				}

				if (count($a_array) == 0) {
					echo 'None';
				} else {
					for ($j = 0; $j < count($a_array); $j++) {
						echo "$a_array[$j]";
						if ($j != count($a_array) - 1) {
							echo ', ';
						} else {
							echo '';
						}
					}
				}
				echo "</td>";

				echo "<td>".strrev($names[$i])."</td>";
				echo "</tr>";
			}

			?>
		</table>


	</body>

</html>