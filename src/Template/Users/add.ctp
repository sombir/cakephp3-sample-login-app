<div class="container">
	<div class="jumbotron1">
		<h1>Add New User</h1>
		<div id="body">
			<div>
				<?= $this->Flash->render() ?>
				<?= $this->Form->create($user, ['class' => 'form-signin']) ?>
					<fieldset>
						<?= $this->Form->control('username', ['required' => true, 'class' => 'form-control', 'placeholder' => 'Username']) ?>
						<?= $this->Form->control('password', ['required' => true, 'class' => 'form-control', 'placeholder' => 'Password']) ?>
						<?= $this->Form->control('role', ['options' => ['admin' => 'Admin', 'author' => 'Author'], 'class' => 'form-control']) ?>
				   </fieldset>
				<?php echo $this->Form->input('Submit', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary btn-block', 'value' => 'Submit']) ?>
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>