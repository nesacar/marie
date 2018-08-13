<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use DB;

class Statistic extends Model
{
    protected $fillable = [];

    /**
     * method used to return clicks by months
     *
     * @param $newsletter_id
     * @param $start_date
     * @param $end_date
     * @return mixed
     */
    public static function getLastYearNewsletter($newsletter_id, $start_date, $end_date){
        return Click::select(DB::raw('EXTRACT(MONTH FROM created_at) AS month'), DB::raw('COUNT(*) AS number'))
            ->whereBetween('created_at', [$start_date, $end_date])->where('newsletter_id', $newsletter_id)
            ->groupBy(DB::raw('month'))->orderBy('created_at')
            ->get();
    }

    /**
     * method used to return clicks by months
     *
     * @param $stat
     * @param $month
     * @return array
     */
    public static function prepareLastYearNewsletter($stat, $month){
        $array = self::getMonths($month);
        if(count($stat) > 0){
            foreach($stat as $s){
                if($s->month == 1){ $array['Januar'] = $s->number; }
                if($s->month == 2){ $array['Februar'] = $s->number; }
                if($s->month == 3){ $array['Mart'] = $s->number; }
                if($s->month == 4){ $array['April'] = $s->number; }
                if($s->month == 5){ $array['Maj'] = $s->number; }
                if($s->month == 6){ $array['Jun'] = $s->number; }
                if($s->month == 7){ $array['Jul'] = $s->number; }
                if($s->month == 8){ $array['Avgust'] = $s->number; }
                if($s->month == 9){ $array['Septembar'] = $s->number; }
                if($s->month == 10){ $array['Oktobar'] = $s->number; }
                if($s->month == 11){ $array['Novembar'] = $s->number; }
                if($s->month == 12){ $array['Decembar'] = $s->number; }
            }
        }

        $labels = $data = [];
        foreach ($array as $key => $value){
            $labels[] = $key;
            $data[] = $value;
        }

        return ['labels' => $labels, 'data' => $data];
    }

    /**
     * method used to return clicks by months
     *
     * @param $newsletter_id
     * @param $start_date
     * @param $end_date
     * @return mixed
     */
    public static function getLastMonthNewsletter($newsletter_id, $start_date, $end_date){
        return Click::select(DB::raw('EXTRACT(DAY FROM created_at) AS day'), DB::raw('COUNT(*) AS number'))
            ->whereBetween('created_at', [$start_date, $end_date])->where('newsletter_id', $newsletter_id)
            ->groupBy(DB::raw('day'))->orderBy('created_at')
            ->get();
    }


    /**
     * method used to return clicks by months
     *
     * @param $stat
     * @param $month
     * @param $day
     * @return array
     */
    public static function prepareLastMonthNewsletter($stat, $month, $day){
        $days = self::getDays($month);
        $array = array();
        for($i=$day+1;$i<=$days;$i++){
            if($i==$days){
                $array[$i.'d'] = 0;
                $i=1;
                for($i=1;$i<$day;$i++){
                    $array[$i.'d'] = 0;
                }
                break;
            }else{
                $array[$i.'d'] = 0;
            }
        }

        if(count($stat) > 0){
            foreach($stat as $s){
                for($i=1;$i<=$days;$i++){
                    if($s->day == $i){ $array[$i.'d'] = $s->number; }
                }
            }
        }

        $labels = $data = [];
        foreach ($array as $key => $value){
            $labels[] = $key;
            $data[] = $value;
        }

        return ['labels' => $labels, 'data' => $data];
    }

    /**
     * method used to return days by months
     *
     * @param $month
     * @return int
     */
    public static function getDays($month){
        $days = 30;
        if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12){
            $days = 31;
        }elseif($month == 2){
            $days = 28;
        }
        return $days;
    }

    /**
     * method used to return clicks by day
     *
     * @param $newsletter_id
     * @param $start_date
     * @param $end_date
     * @return mixed
     */
    public static function getLastDayNewsletter($newsletter_id, $start_date, $end_date){
        return Click::select(DB::raw('EXTRACT(HOUR FROM created_at) AS hour'), DB::raw('COUNT(*) AS number'))
            ->whereBetween('created_at', [$start_date, $end_date])->where('newsletter_id', $newsletter_id)
            ->groupBy(DB::raw('hour'))->orderBy('created_at')
            ->get();
    }

    /**
     * method used to return clicks by day
     *
     * @param $stat
     * @param $hour
     * @return array
     */
    public static function prepareLastDayNewsletter($stat, $hour){
        $array = array();
        for($i=$hour+1;$i<24;$i++){
            $array[$i.'h'] = 0;
        }
        for($i=0;$i<=$hour;$i++){
            $array[$i.'h'] = 0;
        }

        if(count($stat) > 0){
            foreach($stat as $s){
                for($i=0;$i<24;$i++){
                    if($s->hour == $i){ $array[$i.'h'] = $s->number; }
                }
            }
        }

        $labels = $data = [];
        foreach ($array as $key => $value){
            $labels[] = $key;
            $data[] = $value;
        }

        return ['labels' => $labels, 'data' => $data];
    }

    /**
     * method used to return months
     *
     * @param $date
     * @return array
     */
    public static function getMonths($date){

        switch ($date) {
            case 1:
                $array = array('Februar' => 0, 'Mart' => 0, 'April' => 0, 'Maj' => 0, 'Jun' => 0, 'July' => 0, 'Avgust' => 0, 'Septembar' => 0, 'Oktobar' => 0, 'Novembar' => 0, 'Decembar' => 0, 'Januar' => 0);
                break;
            case 2:
                $array = array('Mart' => 0, 'April' => 0, 'Maj' => 0, 'Jun' => 0, 'July' => 0, 'Avgust' => 0, 'Septembar' => 0, 'Oktobar' => 0, 'Novembar' => 0, 'Decembar' => 0, 'Januar' => 0, 'Februar' => 0);
                break;
            case 3:
                $array = array('April' => 0, 'Maj' => 0, 'Jun' => 0, 'July' => 0, 'Avgust' => 0, 'Septembar' => 0, 'Oktobar' => 0, 'Novembar' => 0, 'Decembar' => 0, 'Januar' => 0, 'Februar' => 0, 'Mart' => 0);
                break;
            case 4:
                $array = array('Maj' => 0, 'Jun' => 0, 'July' => 0, 'Avgust' => 0, 'Septembar' => 0, 'Oktobar' => 0, 'Novembar' => 0, 'Decembar' => 0, 'Januar' => 0, 'Februar' => 0, 'Mart' => 0, 'April' => 0);
                break;
            case 5:
                $array = array('Jun' => 0, 'July' => 0, 'Avgust' => 0, 'Septembar' => 0, 'Oktobar' => 0, 'Novembar' => 0, 'Decembar' => 0, 'Januar' => 0, 'Februar' => 0, 'Mart' => 0, 'April' => 0, 'Maj' => 0);
                break;
            case 6:
                $array = array('July' => 0, 'Avgust' => 0, 'Septembar' => 0, 'Oktobar' => 0, 'Novembar' => 0, 'Decembar' => 0, 'Januar' => 0, 'Februar' => 0, 'Mart' => 0, 'April' => 0, 'Maj' => 0, 'Jun' => 0);
                break;
            case 7:
                $array = array('Avgust' => 0, 'Septembar' => 0, 'Oktobar' => 0, 'Novembar' => 0, 'Decembar' => 0, 'Januar' => 0, 'Februar' => 0, 'Mart' => 0, 'April' => 0, 'Maj' => 0, 'Jun' => 0, 'July' => 0);
                break;
            case 8:
                $array = array('Septembar' => 0, 'Oktobar' => 0, 'Novembar' => 0, 'Decembar' => 0, 'Januar' => 0, 'Februar' => 0, 'Mart' => 0, 'April' => 0, 'Maj' => 0, 'Jun' => 0, 'July' => 0, 'Avgust' => 0);
                break;
            case 9:
                $array = array('Oktobar' => 0, 'Novembar' => 0, 'Decembar' => 0, 'Januar' => 0, 'Februar' => 0, 'Mart' => 0, 'April' => 0, 'Maj' => 0, 'Jun' => 0, 'July' => 0, 'Avgust' => 0, 'Septembar' => 0);
                break;
            case 10:
                $array = array('Novembar' => 0, 'Decembar' => 0, 'Januar' => 0, 'Februar' => 0, 'Mart' => 0, 'April' => 0, 'Maj' => 0, 'Jun' => 0, 'July' => 0, 'Avgust' => 0, 'Septembar' => 0, 'Oktobar' => 0);
                break;
            case 11:
                $array = array('Decembar' => 0, 'Januar' => 0, 'Februar' => 0, 'Mart' => 0, 'April' => 0, 'Maj' => 0, 'Jun' => 0, 'July' => 0, 'Avgust' => 0, 'Septembar' => 0, 'Oktobar' => 0, 'Novembar' => 0);
                break;
            default:
                $array = array('Januar' => 0, 'Februar' => 0, 'Mart' => 0, 'April' => 0, 'Maj' => 0, 'Jun' => 0, 'July' => 0, 'Avgust' => 0, 'Septembar' => 0, 'Oktobar' => 0, 'Novembar' => 0, 'Decembar' => 0);
        }
        return $array;
    }
}
