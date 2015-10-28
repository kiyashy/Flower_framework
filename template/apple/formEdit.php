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


	<form action="index.php?controller=Guava&action=save" method = "post">
		<div class="form-control">
			<label for="input-title">Title</label>
			<input type="text" name="title" id="input-title" value="<?php echo isset($apple['title'])? $apple['title']: ''; ?>" />
		</div>

		<div class="form-control">
			<label for="input-state">State</label>
			<select name="state" id="input-state">
				<option value="1" <?php echo (isset($apple) && $apple['state'] == 1 ? 'selected = "selected"':'') ?>>Enable</option>
				<option value="0" <?php echo (isset($apple) && $apple['state'] == 0 ? 'selected = "selected"':'') ?>>Disable</option>
			</select>
		</div>

		<div class="form-control">
			<label for="input-url">URL</label>
			<input type="text" name="url" id="input-url" value="<?php echo isset($apple['url']) ? $apple['url']: ''; ?>" />
		</div>

		<div class="form-control">
			<label for="input-intro">Intro</label>
			<input type="text" name="introtext" id="input-intro" value="<?php echo isset($apple['introtext']) ? $apple['introtext']:''; ?>" />
		</div>

		<input name="id" type="hidden" value="<?php echo isset($apple['id']) ? $apple['id']:''; ?>" />

		<button type="submit">Edit</button>
		<button type="reset">Reset</button>
	</form>


