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
            }
            
            
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->fullname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->role}}</td>
                <td><img src="{{ public_path().'/images/' . $user->photo}}" width="50px"></td>
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