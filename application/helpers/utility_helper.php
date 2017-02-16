<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Array Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/helpers/array_helper.html
 */
// ------------------------------------------------------------------------

if (!function_exists('get_status')) {

    function get_status($status) {
        return ($status == "1" ? "Aktif" : "Non Aktif");
    }

}

if (!function_exists('set_session_table_search')) {

    function set_session_table_search($name, $value) {
        $ci = & get_instance();
        if ($value == "" || empty($value)) {
            $ci->session->unset_userdata($name);
            $value = $ci->session->userdata($name);
            return $value;
        } else {

            if ($value) {
                $ci->session->set_userdata($name, $value);
                return $value = $ci->session->userdata($name);
            } elseif ($ci->session->userdata($name)) {
                $value = $ci->session->userdata($name);
                return $value;
            } else {
                $ci->session->unset_userdata($name);
                $value = $ci->session->userdata($name);
                return $value;
            }
        }
    }

}

if (!function_exists('tanggalan')) {

    function tanggalan($tanggal) {
        $getyear = substr($tanggal, 0, 4);
        $getmonth = substr($tanggal, 5, 2);
        $getdate = substr($tanggal, 8, 2);

        switch ($getmonth) {
            case "01":
                $bulan = "Januari";
                break;

            case "02":
                $bulan = "Februari";
                break;

            case "03":
                $bulan = "Maret";
                break;

            case "04":
                $bulan = "April";
                break;

            case "05":
                $bulan = "Mei";
                break;

            case "06":
                $bulan = "Juni";
                break;

            case "07":
                $bulan = "Juli";
                break;

            case "08":
                $bulan = "Agustus";
                break;

            case "09":
                $bulan = "September";
                break;

            case "10":
                $bulan = "Oktober";
                break;

            case "11":
                $bulan = "November";
                break;

            case "12":
                $bulan = "Desember";
                break;

            default:
                $bulan = "Bulan tidak diketahui";
                break;
        }

        $hasil = $getdate . ' ' . $bulan . ' ' . $getyear;

        return $hasil;
    }

}
if (!function_exists('kekata')) {

    function kekata($x) {
        $x = abs($x);
        $angka = array("", "satu", "dua", "tiga", "empat", "lima",
            "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($x < 12) {
            $temp = " " . $angka[$x];
        } else if ($x < 20) {
            $temp = kekata($x - 10) . " belas";
        } else if ($x < 100) {
            $temp = kekata($x / 10) . " puluh" . kekata($x % 10);
        } else if ($x < 200) {
            $temp = " seratus" . kekata($x - 100);
        } else if ($x < 1000) {
            $temp = kekata($x / 100) . " ratus" . kekata($x % 100);
        } else if ($x < 2000) {
            $temp = " seribu" . kekata($x - 1000);
        } else if ($x < 1000000) {
            $temp = kekata($x / 1000) . " ribu" . kekata($x % 1000);
        } else if ($x < 1000000000) {
            $temp = kekata($x / 1000000) . " juta" . kekata($x % 1000000);
        } else if ($x < 1000000000000) {
            $temp = kekata($x / 1000000000) . " milyar" . kekata(fmod($x, 1000000000));
        } else if ($x < 1000000000000000) {
            $temp = kekata($x / 1000000000000) . " trilyun" . kekata(fmod($x, 1000000000000));
        }
        return $temp;
    }

}

if (!function_exists('terbilang')) {

    function terbilang($x, $style = 4) {
        if ($x < 0) {
            $hasil = "minus " . trim(kekata($x));
        } else {
            $hasil = trim(kekata($x));
        }
        switch ($style) {
            case 1:
                $hasil = strtoupper($hasil);
                break;
            case 2:
                $hasil = strtolower($hasil);
                break;
            case 3:
                $hasil = ucwords($hasil);
                break;
            default:
                $hasil = ucfirst($hasil);
                break;
        }
        return $hasil . " rupiah";
    }

}

if (!function_exists('date_range_no_weekend')) {

    function date_range_no_weekend($tglx, $hari) {
        $hr = substr($tglx, -2, 2);
        $bl = substr($tglx, -5, 2);
        $th = substr($tglx, 0, 4);
        $waktu = $hari * 2;
        $jum_libur = 0;
        $jum_hari = 0;
        for ($i = 0; $i <= $waktu; $i++) {
            $tgl = mktime(0, 0, 0, $bl, $hr + $i, $th);
            // Mengecek hari minggu
            if (date("l", $tgl) == "Sunday" || date("l", $tgl) == "Saturday") {
                $jum_libur++;
            } else {
                // Apablia jumlah hari sudah memenuhi// program berhenti
                if ($jum_hari == $hari) {
                    break;
                } else {
                    $jum_hari++;
                }
            }
        }
        $jumhari = $jum_hari + $jum_libur;
        $nextday = mktime(0, 0, 0, $bl, $hr + $jumhari, $th);
        return date('Y-m-d', $nextday);
    }

}

if (!function_exists('formatrp')) {

    function formatrp($angka) {
        $rupiah = number_format($angka, 0, ',', '.'); // membentuk tanda pemisah seperti (.)
        return $rupiah;
    }

}

if (!function_exists('currency_to_normal')) {

    function currency_to_normal($string) {
        //$num = (float) str_replace('.', '', $string);
        $num = (float) preg_replace('~\D~', "", $string);
        return $num;
    }

}

if (!function_exists('romanic_number')) {

    function romanic_number($integer, $upcase = true) {
        $table = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
        $return = '';
        while ($integer > 0) {
            foreach ($table as $rom => $arb) {
                if ($integer >= $arb) {
                    $integer -= $arb;
                    $return .= $rom;
                    break;
                }
            }
        }
        return $return;
    }

}

if (!function_exists('dump')) {

    function dump($var, $die = FALSE) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        if ($die)
            die;
    }

}

if (!function_exists('encode_url')) {

    function encode_url($string, $key = "", $url_safe = TRUE) {
        if ($key == null || $key == "") {
            $key = "tyz_mydefaulturlencryption";
        }
        $CI = & get_instance();
        $ret = $CI->encrypt->encode($string, $key);

        if ($url_safe) {
            $ret = strtr(
                    $ret, array(
                '+' => '.',
                '=' => '-',
                '/' => '~'
                    )
            );
        }

        return $ret;
    }

}

if (!function_exists('decode_url')) {

    function decode_url($string, $key = "") {
        if ($key == null || $key == "") {
            $key = "tyz_mydefaulturlencryption";
        }
        $CI = & get_instance();
        $string = strtr(
                $string, array(
            '.' => '+',
            '-' => '=',
            '~' => '/'
                )
        );

        return $CI->encrypt->decode($string, $key);
    }

}

if (!function_exists('status_transaksi')) {

    function status_transaksi($value) {
        switch ($value) {
            case 1:
                $status = "On Process";
                break;
            case 2:
                $status = "Canceled";
                break;
            case 3:
                $status = "Deleted";
                break;
            case 4:
                $status = "Void";
                break;
            case 5:
                $status = "Finish";
                break;
        }

        return $status;
    }

}