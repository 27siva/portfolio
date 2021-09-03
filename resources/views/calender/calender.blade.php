<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2021 Calender</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/calender.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/calender.js') }}" defer></script>

    <style>
  

    </style>
</head>

<body>
    <div class="calender-container">
        <h1>{{$weeks[0][0]->englishMonth}} {{$weeks[0][0]->year}}</h1>

        <table class="calender">
            <tr>
            <td>SUN</td>
            <td>MON</td>
            <td>TUE</td>
            <td>WED</td>
            <td>THU</td>
            <td>FRI</td>
            <td>SAT</td>
            </tr>
            @foreach($weeks as $key => $week)
                
            
            <tr class="day">
                @foreach($week as $key => $day)
                    @if($loop->first)
                        @for($i=0; $i<$day->dayOfWeek; $i++)
                        <td>*</td>
                        @endfor
                    @endif
                
                <td>{{$day->day}}</td>
                @endforeach
                @if($loop->last)
                    @for($i-0; $i<7-count($week); $i++)
                    <td>*</td>
                    @endfor
                @endif
                {{-- <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td> --}}
            </tr>
            @endforeach
            {{-- <tr class="day">
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr class="day">
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
            </tr>
            <tr class="day">
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
            </tr>
            <tr class="day">
                <td>29</td>
                <td>30</td>
                <td>31</td>
                <td>*</td>
                <td>*</td>
                <td>*</td>
                <td>*</td>

            </tr> --}}

        </table>
    </div>
    <div id='overlay' class="hidden">

    </div>
    <div class=popup>
        <div class="content">
            <p>ここにカレンダー内容</p>
            <button id=close>閉じる</button>
        </div>
    </div>
</body>

</html>