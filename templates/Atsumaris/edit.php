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
        <form class="atsumariForm" action="/atsumaris/edit/<?= $atsumari->id ?>" method="POST">
            <p class="mokmokInfo__bar">This Atsumari</p>

            <label for="name" class="atsumariForm_label">タイトル</label><br>
            <input type="text" class="atsumariForm_text" id="name" name="name" value="<?= $atsumari->name ?>"><br>

            <label for="place" class="atsumariForm_label">場所</label><br>
            <input type="text" class="atsumariForm_text" name="place" id="place" value="<?= $atsumari->place ?>"><br>

            <label for="date" class="atsumariForm_label">日付</label><br>
            <input type="date" id="date" name="date" value="<?= $atsumari->date->format("Y-m-d") ?>"><br>

            <label for="start_time" class="atsumariForm_label">開始時間</label><br>
            <input type="time" id="start_time" name="start_time" value="<?= isset($atsumari->start_time) ? $atsumari->start_time->format('H:i') : "" ?>"><br>

            <label for="end_time" class="atsumariForm_label">終了時間</label><br>
            <input type="time" id="end_time" name="end_time" value="<?= isset($atsumari->end_time) ? $atsumari->end_time->format('H:i') : "" ?>"><br>

            <label for="description" class="atsumariForm_label">説明</label><br>
            <textarea id="description" class="atsumariForm_textarea" rows="10" name="description"><?= $atsumari->description ?></textarea>

            <input class="atsumariForm_submit" type="submit" value="保存">
        </form>
    </div>



    <style>

        .atsumariForm_label {
            margin-top: 20px;
            font-size: 15px;
        }

        .atsumariForm_text {
            font-size: 15px;
            width: 100%;
        }

        .atsumariForm_textarea {
            width: 100%;
            font-size: 14px;
        }

        .atsumariForm_submit {
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
            background: #2a6496;
            border-radius: 5px;
            font-size: 17px;
            height: 40px;
            color: white;
            font-weight: bold;
            border: none;  /* 枠線を消す */
            outline: none; /* クリックしたときに表示される枠線を消す */
            margin-top: 20px;
        }

        .mokmokInfo {
            margin: 50px 25px auto 0;
            width: calc((100% - 50px)*3/5);
            float: left;
        }
        .mokmokInfo__bar {
            background-color: #333;
            color:  white;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;

        }
    </style>
