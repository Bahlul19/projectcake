<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projectcake $projectcake
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projectcake'), ['action' => 'edit', $projectcake->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projectcake'), ['action' => 'delete', $projectcake->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectcake->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projectcake'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projectcake'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projectcake view large-9 medium-8 columns content">
    <h3><?= h($projectcake->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($projectcake->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($projectcake->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($projectcake->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projectcake->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projectcake->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projectcake->modified) ?></td>
        </tr>
    </table>
</div>
