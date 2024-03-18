<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Отправить сообщение</h2>
        <form method="POST" action="{{ url('/contact') }}">
            @csrf

            <div>
                <label for="name">Имя отправителя:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            </div>

            <div>
                <label for="email">Контактная почта:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            </div>

            <div>
                <label for="message">Сообщение:</label>
                <textarea name="message" id="message" rows="5" required>{{ old('message') }}</textarea>
            </div>

            <div>
                <label for="custom_email">Почта получателя:</label>
                <input type="email" name="custom_email" id="custom_email" required>
            </div>

            <button type="submit">Отправить</button>
        </form>
    </div>
</body>
</html>
