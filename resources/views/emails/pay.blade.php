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
    $total = 0;
    $user = Auth::user();
    if (!empty($user)){
      $events = DB::table('events')
                  ->join('tickets', 'tickets.idEvent', 'events.id')
                  ->join('helds', 'tickets.idHeld', 'helds.id')
                  ->join('places', 'tickets.idPlace', 'places.id')
                  ->join('cities', 'places.idCity', 'cities.id')
                  ->where('tickets.idUser', $user->id)
                  ->where('tickets.status', 'approved')
                  ->select('events.name as eventName', 'events.value as value', 'tickets.quantity as quantity', 
                          'places.name as placeName', 'cities.name as cityName','helds.date as date', 
                          'helds.time as time', DB::raw('(tickets.quantity * events.value) as total'))
                  ->get();
    }
    foreach ( $events as $event ){
      $total = $total + $event->total;
    }
    list($year, $month, $day) = explode("-", date($event->date));
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
		list($hour, $min, $sec) = explode(":", date($event->time));
		if ( $hour > 12){
			$period = 'pm';
		} else {
				$period = 'am';
		}
		?>
    <p>{{ __('Hello') }} {{ $user->username }} {{ $user->lastname }}! {{ __('Your purchase has been successfully completed') }} </p>
    <p>{{ __('The code is') }}: {{ $cad }}</p>
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
      @foreach ( $events as $event )
        <ul>
          <li><b>{{ __('Event') }}: {{ $event->eventName }}</b></li>
          <li>{{ __('Place') }}: {{ $event->placeName }}, {{ $event->cityName }}</li>
          <li>{{ __('Date and time') }}: {{ $month }} {{ $day }}, {{ $year }} {{ $hour }}:{{ $min }} {{ $period }}</li>
          <li>{{ __('Tickets') }}: {{ $event->quantity }}</li>
        </ul><br>
      @endforeach
    </ul>
    <br>
    <p>{{ __('We remind you that you have a maximum of 72 hours to make your payment') }}</p>
    <p>{{ __('Failure to receive confirmation will affect your purchase') }}</p>
    <p>{{ __('Thank you for trusting us, we hope you enjoy your event') }}</p>
  </body>
</html>