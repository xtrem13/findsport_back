@php
use App\Sport;
@endphp

@section('title')
Findsport.uz
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/inner.3f453493.css')}}">
@endsection

@section('content')
<main style="margin-top:120px;">
  <div class="container">
    <div class="title"> <a href="assets#"> <i class="fas fa-arrow-left"></i> </a>
      <h1>{{json_decode($place->title)->$l}}</h1>
    </div>
    <div class="details">
      <div class="detail">
        <i class="fas fa-map-marker-alt"></i>
        <span>{{json_decode($place->address)->$l}}</span>
      </div>
      <div class="detail"> <i class="far fa-clock"></i>
        <span>
          с {{json_decode($place->open_time)->start}}
          до {{json_decode($place->open_time)->finish}}
        </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="slider-wrapper">
          <div class="inner-slider">
            <div> <img src="{{asset('assets/pitch.78265cba.jpg')}}" alt=""> </div>
            <div> <img src="{{asset('assets/volleyball.5368c7b2.jpg')}}" alt=""> </div>
            <div> <img src="{{asset('assets/football.feeb18a4.jpg')}}" alt=""> </div>
          </div>
          <div class="controls">
            <div class="inner-slider-left"> <i class="fas fa-arrow-left"></i> </div>
            <div class="inner-slider-right"> <i class="fas fa-arrow-right"></i> </div>
          </div>
          <div class="stars"> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="params">
          <div class="param">
            <span>
              {{json_decode($place->params)->height}}
              ×
              {{json_decode($place->params)->width}}
              ×
              {{json_decode($place->params)->length}}
            </span>
          </div>
          <div class="param">
            <span>
              {{json_decode($place->cover)->$l}}
            </span>
          </div>
          <div class="param"> <span>|</span> </div>
          <div class="param">
            <span>
              {{json_decode($place->type)->$l}}
            </span>
          </div>
        </div>
        <div class="capacity"> Вмещает игроков — {{$place->capacity}} </div>
        <hr>
        <div class="sport-tags">

          @foreach(Sport::find($place->sports())->all() as $index=>$val)
            <span>
              {{json_decode($val->title)->$l}}
            </span>
          @endforeach
        </div>
        <hr>
        <ul class="attrs">
          @foreach(json_decode($place->attributes, true) as $attr)
          <li>
            <span>{{$attr[$l]}}</span>
            <i class="fa fa-check"></i>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <div class="payment">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-3">
              <img src="{{asset('assets/motivation-comission.e0eb7666.svg')}}" alt="">
            </div>
            <div class="col-md-9"> <span> Не платите лишнего </span>
              <p> Мы не берем комиссию и не завышаем цены. Все цены на FindSport.ru формируются администрацией площадок. </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-3">
              <img src="{{asset('assets/motivation-payment.ebbcf073.svg')}}" alt="">
            </div>
            <div class="col-md-9"> <span> Не платите лишнего </span>
              <p> Оплачивайте как вам удобно - банковской картой - наличными на площадке - счетом для юридических лиц </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="table places-table">
      <table class="content-table">
        <thead>
          <tr>
            <th>MONDAY</th>
            <th>TUESDAY</th>
            <th>WEDNESDAY</th>
            <th>THURSDAY</th>
            <th>FRIDAY</th>
            <th>SATURDAY</th>
            <th>SUNDAY</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <span>18:00–19:30</span>
              <div>
                <button>
                  Показать телефон
                </button>
                <a href="tel:+998998261301">+998 99 826 13 01</a>
              </div>
            </td>
            <td>
              <span>18:00–19:30</span>
              <div>
                <button>
                  Показать телефон
                </button>
                <a href="tel:+998998261301">+998 99 826 13 01</a>
              </div>
            </td>
            <td>
              <span>18:00–19:30</span>
              <div>
                <button>
                  Показать телефон
                </button>
                <a href="tel:+998998261301">+998 99 826 13 01</a>
              </div>
            </td>
            <td>80</td>
            <td>hookie</td>
            <td>dominic</td>
            <td>80</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="content">
    <div class="container">
      {{json_decode($place->description)->$l}}
    </div>
  </div>
</main>

@endsection

@section('js')
<script src="{{asset('assets/inner.809837ad.js')}}"></script>
<script src="{{asset('assets/main.1a031342.js')}}"></script>
@endsection