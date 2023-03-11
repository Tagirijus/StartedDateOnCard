<?php if ($task['date_started'] != 0): ?>

    <div class="task-board-icons">
        <div class="task-board-icons-row" style="margin-top: -.5em; margin-bottom: -.5em;">
            <span>
                <i class="fa fa-play" role="img" aria-label="<?= t('Start Date') ?>"></i>
                <?php if (date('Hi', $task['date_started']) === '0000' ): ?>
                    <?= $this->dt->date($task['date_started']) ?>
                <?php else: ?>
                    <?= $this->dt->datetime($task['date_started']) ?>
                <?php endif ?>
            </span>
        </div>
    </div>

<?php endif ?>
