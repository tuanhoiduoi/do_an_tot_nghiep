@extends('trangchu_admin')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <canvas id="myChart" width="300" height="100"></canvas>
        </div>
        <div class="col-md-6">

        </div>
    </div>

  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js"
integrity="sha512-mlz/Fs1VtBou2TrUkGzX4VoGvybkD9nkeXWJm3rle0DPHssYYx4j+8kIS15T78ttGfmOjH0lLaBXGcShaVkdkg=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{asset('assets/js/sample-chart.js')}}"></script>
</body>
</html>
@endsection
