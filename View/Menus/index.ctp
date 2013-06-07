<?php echo $this->element('hero'); ?>

<div class="row-fluid">
    <?php $width = round(12 / count($menus));?>
    <?php foreach($menus as $menu): ?>
        <div class="span<?php echo $width; ?> well well-large">
            <h2><?php echo $menu['Menu']['name']; ?></h2>
            <p>Accepts online orders from <?php echo $this->Time->format('g:i a', $menu['Menu']['start_time']); ?> to <?php echo $this->Time->format('g:i a', $menu['Menu']['end_time']); ?>.</p>
            <p>
                <?php echo $this->Html->link(__('View Menu'), array('action' => 'view', $menu['Menu']['id']), array('class' => 'btn')); ?>
            </p>
        </div>
    <?php endforeach; ?>
</div>