<h1>Nouveau message depuis le portfolio</h1>
<p><strong>Nom :</strong> {{ $contactMessage->name }}</p>
<p><strong>Email :</strong> {{ $contactMessage->email }}</p>
@if($contactMessage->phone)<p><strong>Téléphone / WhatsApp :</strong> {{ $contactMessage->phone }}</p>@endif
@if($contactMessage->project_type)<p><strong>Projet :</strong> {{ $contactMessage->project_type }}</p>@endif
<h2>Message</h2>
<p style="white-space:pre-line">{{ $contactMessage->message }}</p>
