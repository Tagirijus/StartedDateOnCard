<?php if ($task['date_started'] != 0): ?>

    <div class="task-board-icons">
        <div class="task-board-icons-row" style="margin-top: -.5em; margin-bottom: -.5em;">
            <span title="<?= t('Start Date') ?>">
                <i class="fa fa-play" role="img" aria-label="<?= t('Start Date') ?>"></i>
                <?= $this->dt->date($task['date_started']) ?>
            </span>
        </div>
    </div>

<?php endif ?>
