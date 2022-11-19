<?php

$data = $model->models;
?>

<table class="table table-bordered">
    <thead>
        <tr>
            <?php foreach($data[0]->attributeLabels() as $k => $v) : ?>
                <th><?= $v ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
</table>