<?php
/**
 * @var User $current_user
 * @var Atsumari $atsumari
 * @var User $creator
 * @var User[] $members
 */

use App\Model\Entity\Atsumari;
use App\Model\Entity\User; ?>
    <div class="mokmokInfo">
        <p class="mokmokInfo__bar">This Atsumari</p>
        <p class="mokmokInfo__title"><?= $atsumari->title ?></p>
        <p class="mokmokInfo__place"><?= $atsumari->date->format("Y/m/d") ?> <?= $atsumari->start_time->format('H:i') ?> ~ <?= $atsumari->end_time->format('H:i') ?> @<?= $atsumari->place ?></p>
        <p class="mokmokInfo__desc"><?= nl2br($atsumari->description) ?></p>
        <div class="mokmokInfo__btnContainer">
            <a href="/atsumaris/newMember?redirect_url=/atsumaris/view/<?= $atsumari->id ?>"><div class="mokmokInfo__btn">参加する</div></a>
        </div>
    </div>

    <div>
        <div class="memnbersContainer">
            <p class="memberCord__role">Atsumari Creator</p>
            <div class="memberCord">
                <img class="memberCord__img" src="<?= $creator->image_url ?>">
                <p class="memberCord__name"><?= $creator->title ?></p>
                <?php if (isset($current_user) && $current_user->id === $creator->id): ?>
                <a href="/atsumaris/edit/<?= $atsumari->id ?>">編集する</a>
                <?php endif; ?>
            </div>
            <p class="memberCord__role">Atsumari Members</p>
            <?php foreach ($members as $member): ?>
            <div class="memberCord">
                <img class="memberCord__img" src="<?= $member->image_url ?>">
                <p class="memberCord__name"><?= $member->title ?></p>
            </div>
            <?php endforeach; ?>

        </div>
    </div>


    <style>

        .memberCord__role {
            font-size: 20px;
            padding: 10px;
            color: #333;
            border-bottom: 1px #333 solid;
            margin: 40px 0 0;
        }
        .memberCord__name {
            padding-left: 15px;
            font-size: 20px;
            display: inline-block;
            line-height: 50px;
            margin: 0;
        }
        .memberCord__img {
            height: 50px;
            width: 50px;
            border-radius: 50px;
        }
        .memberCord {
            border-bottom: 1px #ddd solid;
            padding: 5px;
        }

        .memnbersContainer {
            float: right;
            margin: 50px 0 auto 25px;
            width: calc((100% - 50px)*2/5);
        }

        .mokmokInfo {
            margin: 50px 25px auto 0;
            width: calc((100% - 50px)*3/5);
            float: left;
        }
        .mokmokInfo__place {
            text-align: right;
            font-size: 15px;
            color: #888;
            padding-right: 5px;
        }
        .mokmokInfo__btnContainer {
            text-align: center!important;
            margin-top: 15px;
        }
        .mokmokInfo__btn {
            width: 100%;
            padding: 10px 70px;
            text-decoration: none;
            font-size: 25px;
            background-color: #F57C00;
            color: white;
            border-radius: 3px;
            box-shadow: 1px 1px 2px 2px #aaa;
        }
        .mokmokInfo__desc {
            width: 100%;
            border: 1px #888 solid;
            border-radius: 5px;
            font-size: 20px;
            font-weight: 700;
            padding:  50px 25px;
        }

        .mokmokInfo__title {
            text-align:center;
            background-color: #F57C00;
            color: white;
            font-size: 30px;
            padding: 10px 30px;
            /* margin-bottom: -5px; */
        }
        .mokmokInfo__bar {
            background-color: #333;
            color:  white;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;

        }
    </style>
