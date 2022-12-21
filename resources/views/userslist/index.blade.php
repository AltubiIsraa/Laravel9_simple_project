<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manage Users
        </h2>
        <a href="create">add user</a>
    </x-slot>
    <style>
        .tb {
            border-collapse: collapse;

        }

        .tb th,
        .tb td {
            padding: 5px;
            border: solid 1px #777;
        }

        .tb th {
            background-color: lightblue;
        }
    </style>

    <div class="container p-5">
        <table class="tb" style="width: 100%;">
            <tr>
                <th>name</th>
                <th>email</th>
                <th>type</th>
                <th></th>
            </tr>
            @foreach($Users as $User)
            <tr>
                <td>{{$User->name}}</td>
                <td>{{$User->email}}</td>
                <td>{{$User->type}}</td>
                <td>

                    <form class="w-100" action="{{ route('users.destroy', $User->id) }}" method="POST" onsubmit="return confirm('Are you sure !! ');" style="display: inline-block;">

                        <input type="hidden" name="_method" value="DELETE">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">



                        <button class="dropdown-item w-100" type="submit"><i class="fas fa-trash"></i>delete</button>



                    </form>
                    <br>
                    <a href="users/{{$User->id}}/edit">edit</a>
                </td>
            </tr>

            @endforeach
        </table>
    </div>


</x-app-layout>