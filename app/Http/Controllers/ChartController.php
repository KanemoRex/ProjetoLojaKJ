<?php

namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ChartController extends Controller
{
    public function tipo()
    {
        $labels = ['Maravilhosos', 'Armas mágicas', 'Armaduras mágicas', 'Focos Arcanos'];
        $data = [10, 15, 20, 5];

        $chart = (new LarapexChart)->pieChart()
            ->setTitle('Tipos de Itens Mais Vendidos')
            ->addData($data)
            ->setLabels($labels);

        return view('tipo', compact('chart'));
    }
}