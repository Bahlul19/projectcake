<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projectcake[]|\Cake\Collection\CollectionInterface $projectcake
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projectcake'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projectcake index large-9 medium-8 columns content">
    <h3><?= __('Projectcake') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projectcake as $projectcake): ?>
            <tr>
                <td><?= $this->Number->format($projectcake->id) ?></td>
                <td><?= h($projectcake->email) ?></td>
                <td><?= h($projectcake->password) ?></td>
                <td><?= h($projectcake->phone) ?></td>
                <td><?= h($projectcake->created) ?></td>
                <td><?= h($projectcake->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projectcake->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projectcake->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projectcake->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectcake->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
