<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;


class CalendarServices {
    public static function get_month_year($date) {
        return self::get_month($date). " " .date('Y', strtotime($date));
    }

    public static function get_month($date) {
        $monthes = array(
            1 => 'Январь', 2 => 'Февраль', 3 => 'Март', 4 => 'Апрель',
            5 => 'Май', 6 => 'Июнь', 7 => 'Июль', 8 => 'Август',
            9 => 'Сентябрь', 10 => 'Октябрь', 11 => 'Ноябрь', 12 => 'Декабрь'
        );
        return $monthes[(date('n', strtotime($date)))];
    }

    public static function get_dey($date) {
        $days = array(
            'воскресенье', 'понедельник', 'вторник', 'среда',
            'четверг', 'пятница', 'суббота'
        );
        return $days[(date('w', strtotime($date)))];
    }

	/**
	 * Вывод календаря на один месяц.
	 */
	public static function  getMonth($month, $year, $events = array())
	{
		$prazdniki = [
			'1.1.2025',
			'2.1.2025',
			'3.1.2025',
			'4.1.2025',
			'5.1.2025',
			'6.1.2025',
			'7.1.2025',
			'8.1.2025',

			'1.5.2025',
			'2.5.2025',
			'8.5.2025',
			'9.5.2025',
			'12.6.2025',
			'13.6.2025',
			'14.6.2025',
			'15.6.2025',
		];

		$work_wih = [
			"27.4.2024",
			"2.11.2024",
			'28.12.2024',
		];

		$months = array(
			1  => 'Январь',
			2  => 'Февраль',
			3  => 'Март',
			4  => 'Апрель',
			5  => 'Май',
			6  => 'Июнь',
			7  => 'Июль',
			8  => 'Август',
			9  => 'Сентябрь',
			10 => 'Октябрь',
			11 => 'Ноябрь',
			12 => 'Декабрь'
		);

		$month = intval($month);
		$out = '
		<div class="calendar-item">

			<table>
				<tr>
					<th><span class="dn_p">Понедельник</span> <span class="dn_s">Пн</span></th>
					<th><span class="dn_p">Вторник</span> <span class="dn_s">Вт</span></th>
					<th><span class="dn_p">Среда</span> <span class="dn_s">Ср</span></th>
					<th><span class="dn_p">Четверг</span> <span class="dn_s">Чт</span></th>
					<th><span class="dn_p">Пятница</span> <span class="dn_s">Пт</span></th>
					<th class="vihodnoi"><span class="dn_p">Суббота</span> <span class="dn_s">Сб</span></th>
					<th class="vihodnoi"><span class="dn_p">Воскресенье</span> <span class="dn_s">Вс</span></th>
				</tr>';

		$day_week = date('N', mktime(0, 0, 0, $month, 1, $year));
		$day_week--;

		$out.= '<tr>';

		for ($x = 0; $x < $day_week; $x++) {
			$out.= '<td class="calendar-day no_event"></td>';
		}



		$days_counter = 0;
		$days_month = date('t', mktime(0, 0, 0, $month, 1, $year));
		$t_index = 0;

		for ($day = 1; $day <= $days_month; $day++) {

            $vihodnoi = "";
            if (($day_week == 5 || $day_week == 6) && !in_array($day.".".$month.".".$year, $work_wih)) $vihodnoi = "vihodnoi";
            if (in_array( $day.".".$month.".".$year, $prazdniki) ) $vihodnoi = "vihodnoi";
			if (date('j.n.Y') == $day . '.' . $month . '.' . $year) {
				$class = 'today';
			} elseif (time() > strtotime($day . '.' . $month . '.' . $year)) {
				$class = 'last';
			} else {
				$class = '';
			}

			$event_show = false;
			$event_text = array();
			if (!empty($events)) {
				foreach ($events as $date => $text) {

                    $day_name = self::get_dey($date);

					$date = explode('.', $date);
					if (count($date) == 3) {
						$y = explode(' ', $date[2]);
						if (count($y) == 2) {
							$date[2] = $y[0];
						}

						if ($day == intval($date[0]) && $month == intval($date[1]) && $year == $date[2]) {
							$event_show = true;
							$event_text[] = $text;
						}
					} elseif (count($date) == 2) {
						if ($day == intval($date[0]) && $month == intval($date[1])) {
							$event_show = true;
							$event_text[] = $text;
						}
					} elseif ($day == intval($date[0])) {
						$event_show = true;
						$event_text[] = $text;
					}
				}
			}

			if ($event_show) {
				$out.= '<td class="calendar-day ' . $class ." ". $vihodnoi . ' event">';
                $out.= '<div class="dey_card">';
                    $out.= '<div class="data">';
                        $out.= $day." <span class='mobile_dey'>".$day_name."</span>";
                    $out.= '</div>';




                    foreach ($event_text[0] as $event_elem) {
						$empty_class = $event_elem['empty']?"empty_card":"";

                        $out.= '<a id="tcard_'.$t_index.'" target="_blanck" href="'.$event_elem['post_lnk'].'" class="calendar-tur-elem ' . $empty_class . '">';
                            $out.= '<div class="img_wraper">';
                                $out.= '<img src="'. (isset($event_elem['post_thumbinal'])?Storage::url($event_elem['post_thumbinal']):"") .'">';
                            $out.= '</div>';

                            $out.= '<h3>'. $event_elem['title'] .'</h3>';
                            $out.= '<p class="deys">'. $event_elem['dey_count'] .'</p>';
                            $out.= '<p class="price">'. $event_elem['price'] .' руб.</p>';
                        $out.= '</a>';

						$out.= '<div data-cardid="'.$t_index.'" class="calendar-tur-mobile ' .$empty_class. '">';
							$out.= '<img src="'. (isset($event_elem['post_thumbinal'])?Storage::url($event_elem['post_thumbinal']):"") .'">';
						$out.= '</div>';

						$t_index++;
                    }


                $out.= '</div>';
				$out.= '</td>';
			} else {
				$out.= '<td class="calendar-day ' . $class ." ". $vihodnoi . ' no_event">';
                    $out.= '<div class="dey_card">';
                        $out.= '<div class="data">';
                            $out.= $day." <span class='mobile_dey'>".$day_name."</span>";
                        $out.= '</div>';
                    $out.= '</div>';
                $out.= '</td>';
			}

			if ($day_week == 6) {
				$out.= '</tr>';
				if (($days_counter + 1) != $days_month) {
					$out.= '<tr>';
				}
				$day_week = -1;
			}

			$day_week++;
			$days_counter++;
		}

		$out .= '</tr></table></div>';
		return $out;
	}

	/**
	 * Вывод календаря на несколько месяцев.
	 */
	public static function  getInterval($start, $end, $events = array())
	{
		$curent = explode('.', $start);
		$curent[0] = intval($curent[0]);

		$end = explode('.', $end);
		$end[0] = intval($end[0]);

		$begin = true;
		$out = '<div class="calendar-wrp">';
		do {
			$out .= self::getMonth($curent[0], $curent[1], $events);

			if ($curent[0] == $end[0] && $curent[1] == $end[1]) {
				$begin = false;
			}

			$curent[0]++;
			if ($curent[0] == 13) {
				$curent[0] = 1;
				$curent[1]++;
			}
		} while ($begin == true);

		$out .= '</div>';
		return $out;
	}
}
