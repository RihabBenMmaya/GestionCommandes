<div>
    <x-data-table :data="$data" :model="$users">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        ID
                        @include('components.sort-icon', ['field' => 'id'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Name
                        @include('components.sort-icon', ['field' => 'name'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('email')" role="button" href="#">
                        Email
                        @include('components.sort-icon', ['field' => 'email'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                        Created Date
                        @include('components.sort-icon', ['field' => 'created_at'])
                    </a></th>
                @if (Auth::user()->isAdmin())
                <th>Action</th>
                @endif
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($users as $user)
            <tr x-data="window.__controller.dataTableController({{ $user->id }})">
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d M Y H:i') }}</td>
                @if (Auth::user()->isAdmin())
                <td class="whitespace-no-wrap row-action--icon">
                    <a role="button" href="{{ route('user.edit', $user->id) }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                    <a role="button" wire:click.prevent="deleteItem({{ $user->id }})" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                </td>
                @endif
            </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
