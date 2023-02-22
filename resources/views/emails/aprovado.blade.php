<?php
    use App\Models\Held;
    use App\Models\City;
    use App\Models\Place;
    use App\Models\Event;
    use App\Models\Ticket;
    use App\Models\User;
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
    <h2>{{ __('Reservation') }}: </h2>
    <h4>{{ __('Name') }}: {{ $user[0]->username }} {{ $user[0]->lastname }}</h4>
    <h4>{{ __('Reservation code') }}: {{ $ticket->id }}</h4>
    <h4>{{ __('Event') }}: {{ $event->name }}</h4>
    <h4>{{ __('City') }}: {{ $city->name }}</h4>
    <h4>{{ __('Place') }}: {{ $place->name }}</h4>
    <h4>{{ __('Date') }}: {{ $month }} {{ $day }}, {{ $year }}</h4>
    <h4>{{ __('Time') }}: {{ $hour }}:{{ $min }} {{ $period }}</h4>
    <h4>{{ __('Quantity') }}: {{ $ticket->quantity }}</h4>
    <h4>{{ __('Total') }}: {{ $total }}</h4>
    <h4>{{ __('Status') }}: {{ __('Approved') }}</h4>
    <br>
    <p>{{ __('The reservation has been approved, therefore, you have 72 hours to make the respective payment.') }}</p>	
  </body>
</html>