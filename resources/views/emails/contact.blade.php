<div>
    <h3>New Contact Message</h3>
    <p>Name: {{ $contact->name }}</p>
    <p>Phone: {{ $contact->phone }}</p>
    @if ($contact->company)
        <p>Company: {{ $contact->company }}</p>
    @endif
    @if ($contact->message)
        <p>Message: {{ $contact->message }}</p>
    @endif
</div>
