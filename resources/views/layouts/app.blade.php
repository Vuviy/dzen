<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div id="app" class="d-flex flex-column bd-highlight mb-3 justify-content-center p-5">
        <comments-component></comments-component>
        <div style="margin-left: auto; margin-right: auto; margin-bottom: 50px;">_________________________________</div>
        <form-component></form-component>
    </div>
</body>
</html>
<script>
    // import ExampleComponent from "../../js/components/ExampleComponent";
    import CommentsComponent from "../../js/components/CommentsComponent";
    import FormComponent from "../../js/components/FormComponent";
    export default {
        components: {
            // ExampleComponent,
            CommentsComponent,
            FormComponent,
        }
    }
</script>
