<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projectcake $projectcake
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projectcake->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projectcake->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projectcake'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="projectcake form large-9 medium-8 columns content">
    <?= $this->Form->create($projectcake) ?>
    <fieldset>
        <legend><?= __('Edit Projectcake') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
