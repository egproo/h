<?php

namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;
use App\Models\Appointment;
use Filament\Facades\Filament;
class panelWidget3 extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'panelWidget3';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = null;

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
	$provider_id = Filament::auth('panel')->user()->id;		
    // استعلم عن إجمالي الحجوزات التي تخص العميل الحالي
    $totalAppointments = Appointment::where('provider_id', $provider_id)->count();
    // استعلم عن الحجوزات التي تخص العميل الحالي والتي تحمل الحالة "مكتملة"
    $completedAppointments = Appointment::where('provider_id', $provider_id)->where('status', 'ملغاه')->count();
/*
						'في الانتظار' => 'في الانتظار',
						'قيد التنفيذ' => 'قيد التنفيذ',
						'ملغاه' => 'ملغاه',
						'مكتملة' => 'مكتملة',
*/
    // احسب النسبة
    $percentage = ($totalAppointments > 0) ? ($completedAppointments / $totalAppointments) * 100 : 0;
		
        return [
            'chart' => [
                'type' => 'radialBar',
                'height' => 300,
            ],
            'series' => [$percentage],
            'plotOptions' => [
                'radialBar' => [
                    'hollow' => [
                        'size' => '70%',
                    ],
                    'dataLabels' => [
                        'show' => true,
                        'name' => [
                            'show' => true,
                            'fontFamily' => 'inherit'
                        ],
                        'value' => [
                            'show' => true,
                            'fontFamily' => 'inherit',
                            'fontWeight' => 600,
                            'fontSize' => '20px'
                        ],
                    ],

                ],
            ],
            'stroke' => [
                'lineCap' => 'round',
            ],
            'labels' => ['حجوزات ملغاه'],
            'colors' => ['#5aabd2'],
        ];
    }
}
