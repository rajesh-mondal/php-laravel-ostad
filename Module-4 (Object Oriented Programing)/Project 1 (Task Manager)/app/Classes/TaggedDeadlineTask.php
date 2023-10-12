<?php

namespace app\Classes;

use app\Classes\DeadlineTask;
use app\Traits\HasTagsTrait;
use app\Traits\HasAssigneeTrait;

class TaggedDeadlineTask extends DeadlineTask {
    use HasTagsTrait, HasAssigneeTrait;
}