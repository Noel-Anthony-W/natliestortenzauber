// In your resources/views/emails/contact.blade.php
<!DOCTYPE html>
<html>
<head>
    <title>Contact Email</title>
</head>
<body>
    <h1>New Message</h1>
    <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Content: {{ $content }}</p>

    {{-- If you absolutely want to see the whole array dumped for debugging
         within the view without stopping execution, you can use @json or
         a regular var_dump wrapped in pre tags, but this isn't dd().
         For simple display, just access the variables as above. --}}
    {{-- <pre>{{ var_dump($messageInformation) }}</pre> --}}
    {{-- Or for a JSON representation: --}}
    {{-- <pre>{{ json_encode($messageInformation, JSON_PRETTY_PRINT) }}</pre> --}}

</body>
</html>