<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>My Blog</title>
    <link href="{{ asset('/app.css') }}" rel="stylesheet">
    <body>
    <?php  foreach ($posts as $post):?>
        <article class="body">
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
    </body>

</html>
