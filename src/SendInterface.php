<?php

declare(strict_types=1);

namespace Kerox\Messenger;

interface SendInterface
{
    public const SENDER_ACTION_TYPING_ON = 'typing_on';
    public const SENDER_ACTION_TYPING_OFF = 'typing_off';
    public const SENDER_ACTION_MARK_SEEN = 'mark_seen';

    public const NOTIFICATION_TYPE_REGULAR = 'REGULAR';
    public const NOTIFICATION_TYPE_SILENT_PUSH = 'SILENT_PUSH';
    public const NOTIFICATION_TYPE_NO_PUSH = 'NO_PUSH';

    public const TAG_COMMUNITY_ALERT = 'COMMUNITY_ALERT';
    public const TAG_CONFIRMED_EVENT_REMINDER = 'CONFIRMED_EVENT_REMINDER';
    public const TAG_NON_PROMOTIONAL_SUBSCRIPTION = 'NON_PROMOTIONAL_SUBSCRIPTION';
    public const TAG_PAIRING_UPDATE = 'PAIRING_UPDATE';
    public const TAG_APPLICATION_UPDATE = 'APPLICATION_UPDATE';
    public const TAG_ACCOUNT_UPDATE = 'ACCOUNT_UPDATE';
    public const TAG_PAYMENT_UPDATE = 'PAYMENT_UPDATE';
    public const TAG_PERSONAL_FINANCE_UPDATE = 'PERSONAL_FINANCE_UPDATE';
    public const TAG_SHIPPING_UPDATE = 'SHIPPING_UPDATE';
    public const TAG_RESERVATION_UPDATE = 'RESERVATION_UPDATE';
    public const TAG_ISSUE_RESOLUTION = 'ISSUE_RESOLUTION';
    public const TAG_APPOINTMENT_UPDATE = 'APPOINTMENT_UPDATE';
    public const TAG_GAME_EVENT = 'GAME_EVENT';
    public const TAG_TRANSPORTATION_UPDATE = 'TRANSPORTATION_UPDATE';
    public const TAG_FEATURE_FUNCTIONALITY_UPDATE = 'FEATURE_FUNCTIONALITY_UPDATE';
    public const TAG_TICKET_UPDATE = 'TICKET_UPDATE';
}
