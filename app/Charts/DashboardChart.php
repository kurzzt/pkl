<?php

namespace App\Charts;

use App\Models\Retribution;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class DashboardChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function retribution(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $verifiedRetribution = Retribution::where('status', true)->count();
        $unverifiedRetribution = Retribution::where('status', false)->count();
        return $this->chart->pieChart()
            ->setTitle('Status Pembayaran Retribusi')
            ->setSubtitle('Seluruh Data Tabel Retribusi')
            ->setDataset([$verifiedRetribution, $unverifiedRetribution])
            ->setLabels(['Sudah Diverfikasi', 'Belum Diverifikasi']);
    }
}
