<?php

namespace App\Enums;

enum NotificationEnum: string
{
    case PUSH = 'push';
    case SMS = 'sms';
    case EMAIL = 'email';
}
