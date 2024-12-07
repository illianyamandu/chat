<x-chat>
    <x-slot:users>
        @foreach($this->users as $user)
            <x-chat-user :user="$user" />
        @endforeach
    </x-slot:users>
</x-chat>
