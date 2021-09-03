<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index($year = '2021', $month = '07')
    {
        // return 'hello world from controller' . $year.$month;
        $data = ['title' => $year . $month];
        $dt = new Carbon("$year-$month-1");
        $days = [];
        $week = [];
        while ($dt->month == $month) {
            if ($dt->dayOfWeek == 0) {
                $days[] = $week;
                $week = [];
            }
            $week[] = $dt->clone();
            $dt->addDay();
        }
        $days[] = $week;

        // $dt ->addDay();
        $data = ['weeks' => $days];
        return view('calender.calender', $data);
    }
    public function useDB(Request $request)
    {
        // $items = DB::select('select * from people');
        // DB::table('people')->insert(['name' => 'name']);
        // $items = DB::table('people')->where('id','>','10')->orWhere('name','name')->get();
        $person = new Person();
        // $person2 = new Person();
        $person->name = 'abc';
        $person->mail = 'def';
        $person->age = '15';
        // $person->save();
        $person = Person::find(3);
        $person->name = '123';
        $person->delete();
        $items = Person::all();
        $user = User::find(1);
        $dates = $user->dates();
        return view('home.index', ['items' => $items]);
    }
}
