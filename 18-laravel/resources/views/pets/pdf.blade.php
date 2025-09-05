<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
    <style>
        table {
            border: 1px solid;
            border-collapse: collapse;
            img {
                width: 50px;
                height: 50px;
                
            }
            td {
                padding: 5px;
                height: 50px;
                text-align: center;
            }
            
            
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Kind</th>
                <th>Location</th>
                <th>Breed</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)

            <tr>
                <td>{{$pet->id}}</td>
                <td>{{$pet->name}}</td>
                <td>{{$pet->kind}}</td>
                <td>{{$pet->location}}</td>
                <td>{{$pet->breed}}</td>
                <td><img src="{{ public_path().'/images/' . $pet->image}}" width="50px"></td>
            </tr>

            @endforeach
        </tbody>
    </table>
    
    <script>
        const tr = document.querySelectorAll('tr')
        let index = 0
        tr.forEach(tr => {
            
            if(index % 2 == 0){
                tr.style.background = "#eea9"
            }
            index++
        })
    </script>
</body>
</html>