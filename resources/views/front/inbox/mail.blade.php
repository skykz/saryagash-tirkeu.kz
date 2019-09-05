
<h1>Привет, {{ $name }}</h1><br><hr>
<label style="font-weight: bold;"> Имя клиента:</label>
<a href="mailto:{{$email}}" style="color: red;font-size: 20px;">{{$email}}</a>
<br><hr>
<label style="font-weight: bold;">Номер телефон клиента:</label>
<a href="tel:{!! $telephone!!}" style="color: red;font-size: 20px;"><i class="fa fa-phone"> {{$telephone}} </i></a>
