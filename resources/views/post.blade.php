<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>My Blog</title>
    <link href="{{ asset('/app.css') }}" rel="stylesheet">
    <article>
        <?= $post; ?>
    </article>
    <a href="/">Go Back</a>
</html>
