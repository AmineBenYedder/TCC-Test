<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="text-align:center;">
    <div style="text-align: flex-start">
    <h3 >Test technique TCC</h3>
    <h1>Liste des employées</h1>
    </div>
    <br>
    @if(session()->has('success'))
    <div>
        {{session('success')}}
    </div>
    @endif
   
    <div >
<table border="1" style="border-color: green; width:100%" >
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Numéro de téléphone</th>
        <th>E-mail</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    @foreach($employees as $employee )
    <tr>
        <td>{{$employee->id}}</td>
        <td>{{$employee->nom}}</td>
        <td>{{$employee->prénom}}</td>
        <td>{{$employee->phone}}</td>
        <td>{{$employee->email}}</td> 
        <td>
            <a href="{{route('employee.edit', ['employee' => $employee])}}" style=" color: green;
                background-color: transparent;
                text-decoration: none;">Modifier les informations</a>
        </td>
        <td>
            <form method="post" action="{{route('employee.destroy', ['employee' => $employee])}}">
                @csrf 
                @method('delete')
                <input type="submit" value="Supprimer" />
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>
</div>
</body>
<br>
<footer>
    <div>
        <a href="{{route('employee.create')}}" style=" color: green;
        background-color: transparent;
        text-decoration: none;" >Ajouter un employé</a>
    </div>
    <br>
    <a href="{{ url('/dashboard') }}" style=" color: green;
    background-color: transparent;
    text-decoration: none;">
        Retour
    </a>
</footer>
</html>