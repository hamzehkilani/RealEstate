<?php
namespace App\Enums;

enum StatesEnum: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';

    // Optional: Add helper methods
    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'قيد الانتظار',   // Arabic for "Pending"
            self::APPROVED => 'تمت الموافقة', // Arabic for "Approved"
            self::REJECTED => 'تم الرفض',     // Arabic for "Rejected"
        };
    }
}
