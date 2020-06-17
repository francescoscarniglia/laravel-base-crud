<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eloquent ORM</title>
</head>
<body>
    <header>
    <h2>Eloquent ORM</h2>
    </header>    

    <main>
        <h3>Students list</h3>

        @foreach ($students as $student)
        <div class)"student">
            <!-- $student diventa un'oggetto (name/description sono proprietà dell'oggetto $student) -->
            <h4> {{ $student-> name }} </h4>
            <p> {{ $student-> description }}</p>
        </div>
        @endforeach
    </main>
    
</body>
</html>