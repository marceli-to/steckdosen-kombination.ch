@component('mail::message')
# {{__('Bestätigung Produkteschulung')}}

<p>{{__('Hallo')}} {{$data['firstname']}} {{$data['name']}}</p>
<p>{{__('Vielen Dank für Ihre Anfrage. Wir prüfen Ihre Anfrage und melden uns raschmöglichst bei Ihnen. Ihre Angaben wie folgt:')}}</p>

@component('mail::table')
|     |     |
| --- | --- |
| {{__('Vorname, Name')}}| {{$data['firstname']}} {{$data['name']}} |
| {{__('Firma')}} | {{$data['company']}} |
| {{__('Telefon')}} | {{$data['phone']}} |
| {{__('E-Mail')}} | {{$data['email']}} |
| {{__('Gewünschtes Datum')}} | {{$data['date']}} |
@endcomponent

<p class="signature">
  {{__('Freundliche Grüsse')}} <br>
  {{env('APP_COMPANY')}}
</p>
@endcomponent