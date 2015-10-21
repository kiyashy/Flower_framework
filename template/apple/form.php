<?php
/**
 * Part of practice_flower project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 *
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
<h1>Apple Form</h1>

<form action="index.php?controller=Guava&action=save" method = "post">
	<div class="form-control">
		<label for="input-title">Title</label>
		<input type="text" name="title" id="input-title" value="" />
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
		<input type="text" name="url" id="input-url" value="" />
	</div>

	<div class="form-control">
		<label for="input-intro">Intro</label>
		<input type="text" name="introtext" id="input-intro" value="" />
	</div>

	<input name="id" type="hidden" value="" />

	<button type="submit">Save</button>
	<button type="reset">Reset</button>
</form>
