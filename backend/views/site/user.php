<?php

use yii\helpers\Url;


$this->title = 'Foydalanuvchi';
if($user->type == 10){
    ?>
    
<?php
}
else if ($user->type == 5){
    echo 'children';
}
?>
