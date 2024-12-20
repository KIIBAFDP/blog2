<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $tournaments
 */
?>
<div class="tournaments index content">
    <?= $this->Html->link(__('New Tournament'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tournaments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('game_id') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('end_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tournaments as $tournament): ?>
                <tr>
                    <td><?= $this->Number->format($tournament->id) ?></td>
                    <td><?= h($tournament->name) ?></td>
                    <td><?= $this->Number->format($tournament->game_id) ?></td>
                    <td><?= h($tournament->start_date) ?></td>
                    <td><?= h($tournament->end_date) ?></td>
                    <td><?= h($tournament->created) ?></td>
                    <td><?= h($tournament->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tournament->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tournament->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tournament->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tournament->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
