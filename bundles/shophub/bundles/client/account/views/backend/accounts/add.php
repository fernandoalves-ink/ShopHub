<div id="main">
	<div class="page-header">
		<h1>Create a new Account</h1>
	</div>

	<?= Form::open('backend/accounts/add', 'POST', array('class' => 'form-horizontal')) ?>
		<?= Form::field('text', 'name', 'Name', array(Input::old('name')), array('error' => $errors->first('name'))) ?>
		<?= Form::field('text', 'email', 'E-mail address', array(Input::old('email')), array('error' => $errors->first('email'))) ?>
		<?= Form::field('password', 'password', 'Password', array(), array('error' => $errors->first('password'))) ?>
		<?= Form::field('select', 'role_uuids[]', 'Groups', array($roles, array(), array('multiple' => 'multiple')), array('error' => $errors->first('role_ids'))) ?>
		<?= Form::field('select', 'language_uuid', 'Language', array($languages, array()), array('error' => $errors->first('language_uuid'))) ?>

		<?= Form::actions(array(Form::submit('Add account', array('class' => 'btn large primary')))) ?>
	<?= Form::close() ?>
</div>