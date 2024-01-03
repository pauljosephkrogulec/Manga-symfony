{% extends 'base.html.twig' %}

{% block body %}
    <div class="container">
        <form method="post">
            {{ csrf_token('authenticate') }}

            <label for="username">Username:</label>
            <input type="text" id="username" name="_username" value="{{ last_username }}" required autofocus>

            <label for="password">Password:</label>
            <input type="password" id="password" name="_password" required>

            <button type="submit">Sign in</button>
        </form>
    </div>
{% endblock %}
