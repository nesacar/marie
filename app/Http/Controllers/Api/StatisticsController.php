<?php

namespace App\Http\Controllers\Api;

use App\Click;
use App\Newsletter;
use App\Statistic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    /**
     * method used to return clicks in last day
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function day($id){
        $start_date = date('Y-m-d H:m:s', strtotime('-1 day'));
        $end_date = Carbon::now();
        $start_date = Carbon::parse($start_date);
        $newsletter = Newsletter::find($id);
        $hour = $end_date->hour;
        $statistics = Statistic::getLastDayNewsletter($id, $start_date, $end_date);
        $clicks =  Statistic::prepareLastDayNewsletter($statistics, $hour);
        $sum = Click::where('newsletter_id', $newsletter->id)->whereBetween('created_at', [$start_date, $end_date])->count();
        $average = round($sum/24);

        return response()->json([
            'clicks' => $clicks,
            'newsletter' => $newsletter,
            'sum' => $sum,
            'average' => $average,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'hour' => $hour,
        ]);
    }

    /**
     * method used to return clicks in month day
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function month($id){
        $start_date = date('Y-m-d', strtotime('-1 month'));
        $end_date = Carbon::now();
        $start_date = Carbon::parse($start_date);

        $newsletter = Newsletter::find($id);
        $month = $start_date->month; $day = date('d');
        $statistics = Statistic::getLastMonthNewsletter($id, $start_date, $end_date);
        $clicks =  Statistic::prepareLastMonthNewsletter($statistics, $month, $day);
        $sum = Click::where('newsletter_id', $newsletter->id)->whereBetween('created_at', [$start_date, $end_date])->count();
        $days = Statistic::getDays($start_date->month);
        $average = round($sum/$days);

        return response()->json([
            'clicks' => $clicks,
            'newsletter' => $newsletter,
            'sum' => $sum,
            'average' => $average,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'days' => $days,
        ]);
    }

    /**
     * method used to return clicks in last year
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function year($id){
        $start_date = date('Y-m-d', strtotime('-1 year'));
        $end_date = Carbon::now();
        $newsletter = Newsletter::find($id);
        $statistics = Statistic::getLastYearNewsletter($id, $start_date, $end_date);
        $clicks =  Statistic::prepareLastYearNewsletter($statistics, $end_date->month);
        $sum = Click::where('newsletter_id', $newsletter->id)->whereBetween('created_at', [$start_date, $end_date])->count();
        $average = round($sum/12);
        $month = $end_date->month;

        return response()->json([
            'clicks' => $clicks,
            'newsletter' => $newsletter,
            'sum' => $sum,
            'average' => $average,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'month' => $month,
        ]);
    }
}
