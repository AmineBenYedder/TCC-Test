<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

    <body style="text-align:center;">
    <h1>Modifier les informations d'un employé</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('employee.update', ['employee' => $employee])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="nom" placeholder="Nom" value="{{$employee->nom}}" />
        </div>
        <br>
        <div>
            <label>Prénom</label>
            <input type="text" name="prénom" placeholder="Prénom" value="{{$employee->prénom}}" />
        </div>
        <br>
        <div>
            <label>Numéro de téléphone</label>
            <input type="text" name="phone" placeholder="Numéro" value="{{$employee->phone}}" />
        </div>
        <br>
        <div>
            <label>Adresse éléctronique</label>
            <input type="email" name="email" placeholder="E-mail" value="{{$employee->email}}" />
        </div>
        <br>
        <div>
            <input type="submit" value="Enregistrer" style="background-color: green;
            color: white;
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;"/>
        </div>
        <br>
        <a  href="{{route('employee.index')}}" style=" color: green;
        background-color: transparent;
        text-decoration: none;">Annuler</a>

    </form>
    
</body>
</html>