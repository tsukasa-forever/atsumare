<?php
/**
 * @var Mokmok[] $mokmoks
 */

use App\Model\Entity\Mokmok;

?>
<div class="container">
    <?php foreach ($mokmoks as $mokmok): ?>
    <h1><?= $mokmok->name ?></h1>
    <?php endforeach; ?>
</div>
