<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Router $router
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Router'), ['action' => 'edit', $router->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Router'), ['action' => 'delete', $router->id], ['confirm' => __('Are you sure you want to delete # {0}?', $router->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Routers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Router'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="routers view content">
            <h3><?= h($router->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sapid') ?></th>
                    <td><?= h($router->sapid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hostname') ?></th>
                    <td><?= h($router->hostname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Loopback') ?></th>
                    <td><?= h($router->loopback) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mac Address') ?></th>
                    <td><?= h($router->mac_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($router->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($router->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($router->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
