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
            <?= $this->Html->link(__('List Routers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="routers form content">
            <?= $this->Form->create($router) ?>
            <fieldset>
                <legend><?= __('Add Router') ?></legend>
                <?php
                    echo $this->Form->control('sapid');
                    echo $this->Form->control('hostname');
                    echo $this->Form->control('loopback');
                    echo $this->Form->control('mac_address');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
