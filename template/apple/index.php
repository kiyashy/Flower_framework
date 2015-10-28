<?php
/**
 * Part of practice_flower project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

/**
 * @var array $apples
 */
function double($k)
{
	echo $k % 2 ==0 ? 'double' : ' ';
}
?>
<style>
	.double {
		background-color: beige;}
</style>
<h1>Apple Index</h1>
<a href="index.php?controller=Guava&action=edit">Create</a>

<table border = '1'>
	<tr>
		<th>EDIT</th>
		<th>ID</th>
		<th>Title</th>
		<th>URL</th>
		<th>State</th>
	</tr>

	<?php foreach ($apples as $k => $apple): ?>

		<tr class = '<?php double($k);  ?>'>
			<td>
				<a href = "index.php?controller=Guava&action=update&id=<?php echo $apple['id']?>">
				Edit
				</a>
			</td>
			<td>
				<?php echo $apple['id'] ?>
			</td>
			<td>
				<?php echo $apple['title'] ?>
			</td>
			<td>
				<?php echo $apple['url'] ?>
			</td>
			<td>
				<?php echo $apple['state'] ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
