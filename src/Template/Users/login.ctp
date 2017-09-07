<?php echo $this->Form->create('loginForm', ['method' => 'post', 'class' => 'form-signin']) ?>
<h2 class="form-signin-heading">Please sign in</h2>
<?php echo $this->Form->input('username', ['required' => true, 'class' => 'form-control', 'label' => false, 'placeholder' => 'Username', 'autofocus' => true]) ?>
<?php echo $this->Form->input('password', ['required' => true, 'class' => 'form-control', 'label' => false, 'placeholder' => 'Password']) ?>
<div class="checkbox">
  <?php echo $this->Form->input('remember-me', ['type' => 'checkbox', 'value' => 'remember-me', 'label' => 'Remember Me']) ?>
</div>
<?php echo $this->Form->input('login', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary btn-block', 'value' => 'Sign In']) ?>
<?php echo $this->Form->end() ?>
