<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
	  <fieldset>
	    <legend>Signup</legend>
	    <div class="form-group row">
	      <div class="col-lg-10">
	        <?php echo $this->Form->control('email', ['placeholder' => 'Enter your email', 'class' => 'form-control']) ?>
	      </div>
	    </div>
	    <div class="form-group row">
	      <div class="col-lg-10">
	        <?php echo $this->Form->control('phone', ['placeholder' => 'Enter your phone', 'class' => 'form-control']) ?>
	      </div>
	    </div>
	    <div class="form-group row">
	      <div class="col-lg-10">
	      	<?php echo $this->Form->control('password', ['placeholder' => 'Enter your password', 'class' => 'form-control', 'type' => 'password']) ?>
	      </div>
	    </div>
	    <?= $this->Form->button(__('Signup'), ['class' => 'btn btn-primary']) ?>
	  </fieldset>
	<?= $this->Form->end() ?>
</div>
