<?php
/**
 * @var Atsumari[] $atrumaris
 */

use App\Model\Entity\Atsumari;

?>
<div class="container">
    <?php foreach ($atrumaris as $atrumari): ?>
    <h1><?= $atrumari->title ?></h1>
    <?php endforeach; ?>
</div>
