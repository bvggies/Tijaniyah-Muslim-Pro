<?php

namespace App\Services\Prayer;

use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class PrayerService
{
    /**
     * Calculate prayer times for a specific day
     */
    public function computeDayTimes(float $latitude, float $longitude, string $method = 'MWL', string $date = null): array
    {
        $date = $date ?: now()->format('Y-m-d');
        $cacheKey = "prayer_times:{$method}:{$latitude}:{$longitude}:{$date}";
        
        return Cache::remember($cacheKey, 3600, function () use ($latitude, $longitude, $method, $date) {
            return $this->calculatePrayerTimes($latitude, $longitude, $method, $date);
        });
    }

    /**
     * Calculate prayer times for a week
     */
    public function computeWeekTimes(float $latitude, float $longitude, string $method = 'MWL', string $startDate = null): array
    {
        $startDate = $startDate ?: now()->startOfWeek()->format('Y-m-d');
        $weekTimes = [];
        
        for ($i = 0; $i < 7; $i++) {
            $date = Carbon::parse($startDate)->addDays($i)->format('Y-m-d');
            $weekTimes[$date] = $this->computeDayTimes($latitude, $longitude, $method, $date);
        }
        
        return $weekTimes;
    }

    /**
     * Calculate prayer times using basic astronomical calculations
     */
    private function calculatePrayerTimes(float $latitude, float $longitude, string $method, string $date): array
    {
        $dateObj = Carbon::parse($date);
        $julianDay = $this->getJulianDay($dateObj);
        
        // Basic calculation for demonstration
        // In production, you would use a proper prayer times library like aladhan/prayer-times
        
        $sunrise = $this->calculateSunrise($julianDay, $latitude, $longitude);
        $sunset = $this->calculateSunset($julianDay, $latitude, $longitude);
        
        // Calculate prayer times based on method
        $fajr = $this->calculateFajr($julianDay, $latitude, $longitude, $method);
        $dhuhr = $this->calculateDhuhr($julianDay, $longitude);
        $asr = $this->calculateAsr($julianDay, $latitude, $longitude, $method);
        $maghrib = $sunset;
        $isha = $this->calculateIsha($julianDay, $latitude, $longitude, $method);
        
        return [
            'fajr' => $fajr,
            'sunrise' => $sunrise,
            'dhuhr' => $dhuhr,
            'asr' => $asr,
            'maghrib' => $maghrib,
            'isha' => $isha,
            'date' => $date,
            'method' => $method,
        ];
    }

    /**
     * Get Julian Day number
     */
    private function getJulianDay(Carbon $date): float
    {
        $year = $date->year;
        $month = $date->month;
        $day = $date->day;
        
        if ($month <= 2) {
            $year -= 1;
            $month += 12;
        }
        
        $a = intval($year / 100);
        $b = 2 - $a + intval($a / 4);
        
        return intval(365.25 * ($year + 4716)) + intval(30.6001 * ($month + 1)) + $day + $b - 1524.5;
    }

    /**
     * Calculate sunrise time
     */
    private function calculateSunrise(float $julianDay, float $latitude, float $longitude): string
    {
        // Simplified calculation - in production use proper astronomical formulas
        $hour = 6 + (90 - $latitude) / 15;
        return $this->formatTime($hour);
    }

    /**
     * Calculate sunset time
     */
    private function calculateSunset(float $julianDay, float $latitude, float $longitude): string
    {
        // Simplified calculation - in production use proper astronomical formulas
        $hour = 18 - (90 - $latitude) / 15;
        return $this->formatTime($hour);
    }

    /**
     * Calculate Fajr time
     */
    private function calculateFajr(float $julianDay, float $latitude, float $longitude, string $method): string
    {
        // Simplified calculation - in production use proper astronomical formulas
        $hour = 5 + (90 - $latitude) / 20;
        return $this->formatTime($hour);
    }

    /**
     * Calculate Dhuhr time
     */
    private function calculateDhuhr(float $julianDay, float $longitude): string
    {
        // Dhuhr is at solar noon
        $hour = 12 - $longitude / 15;
        return $this->formatTime($hour);
    }

    /**
     * Calculate Asr time
     */
    private function calculateAsr(float $julianDay, float $latitude, float $longitude, string $method): string
    {
        // Simplified calculation - in production use proper astronomical formulas
        $hour = 15 + (90 - $latitude) / 20;
        return $this->formatTime($hour);
    }

    /**
     * Calculate Isha time
     */
    private function calculateIsha(float $julianDay, float $latitude, float $longitude, string $method): string
    {
        // Simplified calculation - in production use proper astronomical formulas
        $hour = 19 + (90 - $latitude) / 20;
        return $this->formatTime($hour);
    }

    /**
     * Format time as HH:MM
     */
    private function formatTime(float $hour): string
    {
        $hours = intval($hour);
        $minutes = intval(($hour - $hours) * 60);
        
        return sprintf('%02d:%02d', $hours, $minutes);
    }

    /**
     * Get next prayer time
     */
    public function getNextPrayer(array $prayerTimes): ?array
    {
        $now = now();
        $prayers = [
            'fajr' => $prayerTimes['fajr'],
            'sunrise' => $prayerTimes['sunrise'],
            'dhuhr' => $prayerTimes['dhuhr'],
            'asr' => $prayerTimes['asr'],
            'maghrib' => $prayerTimes['maghrib'],
            'isha' => $prayerTimes['isha'],
        ];

        foreach ($prayers as $name => $time) {
            $prayerTime = Carbon::parse($prayerTimes['date'] . ' ' . $time);
            if ($prayerTime->isFuture()) {
                return [
                    'name' => ucfirst($name),
                    'time' => $time,
                    'datetime' => $prayerTime,
                ];
            }
        }

        return null;
    }
}
