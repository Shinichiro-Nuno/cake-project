<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Login Historys'), ['controller' => 'LoginHistorys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Login History'), ['controller' => 'LoginHistorys', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('account');
            echo $this->Form->control('password');
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('tel');
            echo $this->Form->control('created_user');
            echo $this->Form->control('modified_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
