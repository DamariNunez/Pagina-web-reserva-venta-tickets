<?php
    use App\Models\Held;
    use App\Models\City;
    use App\Models\Place;
    use App\Models\Event;
    use App\Models\Ticket;
    use App\Models\User;
    use App\Models\Location;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <title>Send email</title>
  </head>
  <body>
    <?php
    $user = null;
    if ($id != 0){
      $user = User::where('id', $id)->get();
    }
    if (!empty($user)){
      $ticket = Ticket::where('idUser', $user[0]->id)->orderBy('tickets.id', 'desc')->first();
    }
    $event = Event::where('events.id', $ticket->idEvent)->orderBy('events.id', 'desc')->first();
    $held = Held::where('helds.id', $ticket->idHeld)->orderBy('helds.id', 'desc')->first();
    $place = Place::where('places.id', $ticket->idPlace)->orderBy('places.id', 'desc')->first();
    $city = City::where('cities.id', $place->idCity)->orderBy('cities.id', 'desc')->first();
    $location = Location::where('locations.id', $ticket->idLocation)->get();
    $total = $ticket->quantity * $location[0]->price;
    $limitDate = date("d-m-Y",strtotime(date("d-m-Y")."+ 3 days")); 
    list($limitDay, $limitMonth, $limitYear) = explode("-", $limitDate);
    list($year, $month, $day) = explode("-", date($held->date));
    switch ($month) {
      case 01: $month = 'Ene' ; break;
      case 02: $month = 'Feb' ; break;
      case 03: $month = 'Mar' ; break;
      case 04: $month = 'Abr' ; break;
      case 05: $month = 'May' ; break;
      case 06: $month = 'Jun' ; break;
      case 07: $month = 'Jul' ; break;
      case 8: $month = 'Ago' ; break;
      case 9: $month = 'Sep' ; break;
      case 10: $month = 'Oct' ; break;
      case 11: $month = 'Nov' ; break;
      case 12: $month = 'Dic' ; break;
    }
    switch ($limitMonth) {
      case 01: $limitMonth = 'Ene' ; break;
      case 02: $limitMonth = 'Feb' ; break;
      case 03: $limitMonth = 'Mar' ; break;
      case 04: $limitMonth = 'Abr' ; break;
      case 05: $limitMonth = 'May' ; break;
      case 06: $limitMonth = 'Jun' ; break;
      case 07: $limitMonth = 'Jul' ; break;
      case 8: $limitMonth = 'Ago' ; break;
      case 9: $limitMonth = 'Sep' ; break;
      case 10: $limitMonth = 'Oct' ; break;
      case 11: $limitMonth = 'Nov' ; break;
      case 12: $limitMonth = 'Dic' ; break;
    }
    list($limitHour, $limitMin, $limitSec) = explode(":", date("h:i:s"));
		list($hour, $min, $sec) = explode(":", date($held->time));
		if ( $hour > 12){
			$period = 'pm';
		} else {
			$period = 'am';
		}
    if ( $limitHour > 12){
			$limitPeriod = 'pm';
		} else {
			$limitPeriod = 'am';
		}
		?>
    <h2>{{ __('Reservación') }}: </h2>
    <ul>
      <li>{{ __('Name') }}: {{ $user[0]->username }} {{ $user[0]->lastname }}</li>
      <li>{{ __('Código de reservación') }}: {{ $ticket->id }}</li>
      <li>{{ __('Event') }}: {{ $event->name }}</li>
      <li>{{ __('City') }}: {{ $city->name }}</li>
      <li>{{ __('Place') }}: {{ $place->name }}</li>
      <li>{{ __('Localidad') }}: {{ $location[0]->name }}</li>
      <li>{{ __('Precio') }}: {{ $location[0]->price }}</li>
      <li>{{ __('Date') }}: {{ $month }} {{ $day }}, {{ $year }}</li>
      <li>{{ __('Time') }}: {{ $hour }}:{{ $min }} {{ $period }}</li>
      <li>{{ __('Quantity') }}: {{ $ticket->quantity }}</li>
      <li>{{ __('Total') }}: {{ $total }}</li>
      <li>{{ __('Status') }}: Aprobado</li>
    </ul>
    <br>
    <p>{{ __('La reservación ha sido aprobada, por lo tanto, tiene 72 horas para realizar el respectivo pago') }}</p>	
    <p>{{ __('Fecha límite: ') }} {{ $limitMonth }} {{ $limitDay }}, {{ $limitYear }} {{ $limitHour }}:{{ $limitMin }} {{ $limitPeriod }}</p>
  </body>
</html>