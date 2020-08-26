@component('mail::message', ['contact' => $contact])

# Nouveau message depuis le site {{config('app.name')}}!

**Nom:** {{$contact['lastname']}}<br>
**Prenom:** {{$contact['firstname']}}<br>
**Email:** {{$contact['email']}}<br>
**Téléphone:** {{$contact['phone']}}<br>
**Message:** {{$contact['message']}}<br>

@endcomponent