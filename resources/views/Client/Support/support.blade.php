<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mable- Website</title>
    @include('Client.Parts.metacss')
    @livewireStyles
</head>
<body>
@include('Client.Parts.navbar')

<section>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
                <h1>Support Form</h1>
                @livewire('multi-step-form')
        </div>
    </div>
</section>
@livewireScripts
@include('Client.Parts.footerjs')

</body>
</html>