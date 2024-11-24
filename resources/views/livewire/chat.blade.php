<div class="flex flex-row text-sm h-[60vh]">
    <div class="bg-slate-700 rounded-tl-lg rounded-bl-lg p-7 text-white w-1/5">
        <div class="mb-8 font-semibold text-gray-400">
            SERES HUMANINHOS
            <hr>
        </div>
        <div class="p-2 h-[]">
            <div>
                @foreach($users as $user)
                    @if ($user->id != auth()->id())                    
                        <div class="mb-4 font-semibold">🟠 {{ $user->name }}</div>
                    @endif
                @endforeach
            </div>
            <div class="font-semibold mt-auto">🟢 {{ auth()->user()->name }}</div>
        </div>
    </div>
    <div class="bg-slate-400 rounded-tr-lg rounded-br-lg p-7 text-white flex-grow flex items-end">
        <input type="text" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" 
        wire:model="message" wire:keydown.enter="sendMessage" 
        placeholder="Digite sua mensagem...">
    </div>
</div>