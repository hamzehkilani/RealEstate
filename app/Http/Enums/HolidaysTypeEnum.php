<?php
namespace App\Enums;

enum HolidaysTypeEnum: string
{
    case OFFICIAL = 'official';      // عطلة رسمية
    case PERSONAL = 'personal';      // عطلة شخصية
    case NATIONAL = 'national';      // عطلة وطنية
    case SICK = 'sick';              // إجازة مرضية
    case ANNUAL = 'annual';          // إجازة سنوية
    case CASUAL = 'casual';          // إجازة عرضية
    case UNPAID = 'unpaid';          // إجازة بدون راتب

    // Method to return Arabic labels
    public function label(): string
    {
        return match ($this) {
            self::OFFICIAL => 'عطلة رسمية',    // Official holiday
            self::PERSONAL => 'عطلة شخصية',    // Personal holiday
            self::NATIONAL => 'عطلة وطنية',    // National holiday
            self::SICK => 'إجازة مرضية',       // Sick leave
            self::ANNUAL => 'إجازة سنوية',     // Annual leave
            self::CASUAL => 'إجازة عرضية',     // Casual leave
            self::UNPAID => 'إجازة بدون راتب', // Unpaid leave
        };
    }
}
