<?php
    use App\Models\Held;
    use App\Models\City;
    use App\Models\Place;
    use App\Models\Event;
    use App\Models\Ticket;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <title>Send email</title>
  </head>
  <body>
    <?php
    $user = Auth::user();
    $ticket = Ticket::where('idUser', $user->id)->orderBy('tickets.id', 'desc')->first();
    $event = Event::where('events.id', $ticket->idEvent)->orderBy('events.id', 'desc')->first();
    $held = Held::where('helds.id', $ticket->idHeld)->orderBy('helds.id', 'desc')->first();
    $place = Place::where('places.id', $ticket->idPlace)->orderBy('places.id', 'desc')->first();
    $city = City::where('cities.id', $place->idCity)->orderBy('cities.id', 'desc')->first();
    $total = $ticket->quantity * $event->value;
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
		list($hour, $min, $sec) = explode(":", date($held->time));
		if ( $hour > 12){
			$period = 'pm';
		} else {
				$period = 'am';
		}
		?>
    <h2>{{ __('Reservación') }}: </h2>
    <ul>
      <li>{{ __('Name') }}: {{ $user->username }} {{ $user->lastname }}</li>
      <li>{{ __('Código de reservación') }}: {{ $ticket->id }}</li>
      <li>{{ __('Event') }}: {{ $event->name }}</li>
      <li>{{ __('City') }}: {{ $city->name }}</li>
      <li>{{ __('Place') }}: {{ $place->name }}</li>
      <li>{{ __('Date') }}: {{ $month }} {{ $day }}, {{ $year }}</li>
      <li>{{ __('Time') }}: {{ $hour }}:{{ $min }} {{ $period }}</li>
      <li>{{ __('Quantity') }}: {{ $ticket->quantity }}</li>
      <li>{{ __('Total') }}: {{ $total }}</li>
      <li>{{ __('Status') }}: {{ __('Pending') }}</li>
    </ul>
    <br>
    <p>{{ __('Your reservation is under review, once your order has been confirmed, we will notify you') }}</p>	
  </body>
</html>
