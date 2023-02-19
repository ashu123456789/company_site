<!DOCTYPE html>
<html>
<head>
    <title>Deorwine.com</title>
</head>
<body>
    <h3>Deorwine Infotech</h3>
    <p>Name: {{$name}}</p>
    <p>Email: {{$email}}</p>
    <p>Phone: {{$phone}}</p>

    @isset($messages)
    <p>Message: {{$messages}}</p>
    @endisset

    @isset($interesteds)
    <p>Interested: {{$interesteds}}</p>
    @endisset

    @isset($budgets)
    <p>Budget: {{$budgets}}</p>
    @endisset

    <p>URL: {{ url('/') }}/{{$url}}</p>
</body>
</html>