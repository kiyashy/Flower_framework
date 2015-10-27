<?php
/**
 * Part of practice_flower project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */
/**
 * @var array $apple
 */
?>
<style>
	.form-control{
	padding:5px;
	}
	.form-control label{
	float:left;
	min-width:100px;
	}
</style>
<h1>Edit Apple Form</h1>
<?php //echo Helper::show($apple); ?>

<?php foreach ($apple as $k => $v): ?>

	<form action="index.php?controller=Guava&action=save" method = "post">
		<div class="form-control">
			<label for="input-title">Title</label>
			<input type="text" name="title" id="input-title" value="<?php echo $v['title']; ?>" />
		</div>

		<div class="form-control">
			<label for="input-state">State</label>
			<select name="state" id="input-state">
				<option value="1">Enable</option>
				<option value="0">Disable</option>
			</select>
		</div>

		<div class="form-control">
			<label for="input-url">URL</label>
			<input type="text" name="url" id="input-url" value="<?php echo $v['url']; ?>" />
		</div>

		<div class="form-control">
			<label for="input-intro">Intro</label>
			<input type="text" name="introtext" id="input-intro" value="<?php echo $v['introtext']; ?>" />
		</div>

		<input name="id" type="hidden" value="<?php echo $v['id']; ?>" />

		<button type="submit">Edit</button>
		<button type="reset">Reset</button>
	</form>
<?php endforeach; ?>

