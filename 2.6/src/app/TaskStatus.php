<?php

namespace App;

class TaskStatus
{
    public const TODO = 'to do';
    public const IN_PROGRESS = 'in progress';
    public const DONE = 'done';
    public const ALL = [self::TODO,self::IN_PROGRESS,self::DONE];
}
