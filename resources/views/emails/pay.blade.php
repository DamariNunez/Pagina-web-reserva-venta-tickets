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
    $user = Auth::user();
    if (!empty($user)){
        $ticket = Ticket::where('idUser', $user->id)->orderBy('tickets.id', 'desc')->first();
        $event = Event::where('events.id', $ticket->idEvent)->orderBy('events.id', 'desc')->first();
        $held = Held::where('helds.id', $ticket->idHeld)->orderBy('helds.id', 'desc')->first();
        $place = Place::where('places.id', $ticket->idPlace)->orderBy('places.id', 'desc')->first();
        $city = City::where('cities.id', $place->idCity)->orderBy('cities.id', 'desc')->first();
        $total = $ticket->quantity * $event->value;
    }
    
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
    <p>{{ __('Hello! Your purchase has been successfully completed') }} </p>
    <p>{{ __('The code is') }}: </p>
    <p>{{ __('The following are your payment instructions') }}:</p>
    <ul>
      <li>{{ __('Make the transfer of the amount with the code of your purchase in the description of your purchase.') }}</li>
      <li>{{ __('The data for the transfer are as follows') }}:</li>
      <ul>
        <li>{{ __('Produbanco savings account') }}</li>
        <li>{{ __('Account number') }}: 18059736857</li>
        <li>{{ __('RUC') }}: 1803855442001</li>
        <li>{{ __('Name') }}: Ticketspress</li>
        <li>{{ __('Mail') }}: ticketspress0@gmail.com</li>
      </ul>
      <li>{{ __('Your total payment is') }}: {{ $total }}</li>
      <ul>
        <li>{{ __('Event') }}: {{ $event->name }}</li>
        <li>{{ __('Place') }}: {{ $place->name }}, {{ $city->name }}</li>
        <li>{{ __('Date and time') }}: {{ $month }} {{ $day }}, {{ $year }} {{ $hour }}:{{ $min }} {{ $period }}</li>
        <li>{{ __('Tickets') }}: {{ $ticket->quantity }}</li>
      </ul>
    </ul>
    <br>
    <p>{{ __('We remind you that you have a maximum of 72 hours to make your payment') }}</p>
    <p>Failure to receive confirmation will affect your purchase</p>
    <p>Thank you for trusting us, we hope you enjoy your event</p>
  </body>
</html>