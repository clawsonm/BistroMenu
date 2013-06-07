<div class="hero-unit">
    <h1><?php echo $menu['Menu']['name']; ?></h1>
    <h4>Blendtec Bistro</h4>
</div>
<div class="row-fluid">
    <div class="span12">
        <?php foreach($menuItems as $groupName => $menuItemGroup): ?>
        <table class="table table-bordered table-striped">
            <caption><h4><?php echo Inflector::humanize($groupName); ?></h4></caption>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price $</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($menuItemGroup as $menuItem): ?>
                <tr>
                    <td><?php echo $menuItem['MenuItem']['name']; ?></td>
                    <td><?php echo $menuItem['MenuItem']['description'];?></td>
                    <td><?php echo $menuItem['MenuItem']['price'];?></td>
                    <td>
                        <?php
                        if(!empty($menuItem['OptionCategory'])) {
                            echo $this->Html->link('Configure', '#', array('class' => 'btn'));
                        }
                        else {
                            echo $this->Html->link('Add to Cart', '#', array('class' => 'btn'));
                        }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endforeach; ?>
    </div>
</div>