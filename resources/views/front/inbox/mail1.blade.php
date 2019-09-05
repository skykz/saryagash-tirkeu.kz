
<h1>Привет, {{ $name }}</h1><br><hr>
<label style="font-weight: bold;"> Имя клиента:</label>
<h3>{{$client}}</h3><br><hr>

<label style="font-weight: bold;">Номер телефон клиента:</label>
<a href="tel:{{$telephone}}" style="color: red;font-size: 20px;">{{$telephone}}</a>
<br><hr>

<label style="font-weight: bold;">Название заявки:</label>
<a style="color: red;font-size: 20px;"><i class="fa fa-phone"> {{$subject}} </i></a><br><hr>

<label style="font-weight: bold;">Описание завяки:</label>
<h5>
    {!! $mes !!}
</h5>
