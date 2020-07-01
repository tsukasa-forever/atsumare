<?php
/**
 * @var Atsumari[] $atsumaris
 */
use App\Model\Entity\Atsumari;
?>

<div class="newAtsumariContainer">
    <p class="newAtsumariContainer__titile">新着の集まり</p>
    <div class="atsumariCardContainer">
        <?php foreach ($atsumaris as $atsumari): ?>
        <a href="<?= $atsumari->getDetailUrl() ?>" class="atsumariCard">
            <p class="atsumariCard__title"><?= $atsumari->name ?></p>
            <p class="atsumariCard__datetime"><?= $atsumari->datetimeStr() ?></p>
        </a>
        <?php endforeach; ?>
    </div>
</div>


<style>
    * {
        font-family: "Helvetica Neue",roboto,droid sans,arial,sans-serif;
    }

    .newAtsumariContainer {
        margin-top: 40px;
    }

    .newAtsumariContainer__titile {
        color: #444;
        font-size: 20px;
        font-weight: bold;
        padding-left: 4px;
        margin-bottom: 18px;
    }
    .atsumariCardContainer {
        display: flex;
        flex-wrap: wrap;
        width: 760px;
    }
    .atsumariCard {
        height: 200px;
        width: 350px;
        background: #e8e8e8;
        border-radius: 8px;
        margin-right: 15px;
        margin-bottom: 15px;
        position: relative;
        display: block;
        text-decoration: none;
    }
    .atsumariCard__title {
        font-weight: bold;
        font-size: 20px;
        text-align: center;
        position: absolute;
        width: 100%;
        left: 0;
        top: 45%;
        transform: translate(0, -50%);
        color: #444;
    }
    .atsumariCard__datetime {
        position: absolute;
        bottom: 10px;
        right: 20px;
        text-align: right;
        color: #444;
        font-size: 16px;
    }
</style>
