<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manage Users
        </h2>
    </x-slot>


    <div style="margin-left:30%">
        <div>
            <form action="{{route('users.update', [$User->id])}}" method="POST" class="form-horizontal custm-form" role="form">
                <!-- Add CSRF Token -->
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>User Edite</label><br />
                    <input type="text" class="form-control" name="name" value="{{$User->name}}" required>
                </div>
                <div class="form-group">
                    <label>email Edite</label><br />
                    <input type="text" class="form-control" name="email" value="{{$User->email}}" required>
                </div>
                <div class="form-group">
                    <label>type Edite</label><br />
                    <select name="type">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                </div>

                <br />
                <button type="submit">Submit</button>
            </form>

        </div>
    </div>


</x-app-layout>