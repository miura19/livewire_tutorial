<div>
    <input wire:model="search" type="text" placeholder="Search users..."/>
    @if($search)
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
    @endif
</div>
