<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<h2> tableau administatrion</h2>
<div class="table-wrapper"> 
   
        <a href="{{route('create')}}" class="btn btn-danger scrollto">create</a></td>


            <a href="{{route('home')}}" class="btn btn-primary scrollto">home</a></td>

    <table class="fl-table">
        
        <thead>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>email</th>
            <th>âge</th>
            <th>photo</th>
            <th>mot de passe</th>
            <th>edit/delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admins as $item)
        <tr>
            <td colspan="">{{$item->id}}</td>
        <td colspan="">{{$item->nom}}</td>
        <td colspan="">{{$item->email}}</td>
        <td colspan="">{{$item->age}}</td>
        <td colspan=""><img class="w-25" src="{{asset('storage/'.$item->img)}}">
        </td>
        <td colspan="">{{$item->motdepasse}}</td>
            <td colspan="">
                {{-- <a href="{{route('show',$item->id)}}" class="btn btn-primary scrollto">Show</a> --}}
                <a href="{{route('adminch',$item->id)}}" class="btn btn-warning scrollto">Edit</a>
                <a href="{{route('delete',$item->id)}}" class="btn btn-danger scrollto">Delete</a>

            </td>
                

        </tr>
        
            
        @endforeach
       
        <tbody>
            
    </table>

     
</div>