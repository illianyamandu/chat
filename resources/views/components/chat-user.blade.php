@props(['user'])
<li class="text-slate-300 flex space-x-2 px-4 py-1 w-full hover:bg-salte-800 rounded-lg cursor-default">
    <div>{{ $user->here ? '🟢' : '🔴'}}</div>
    <span>{{ $user->name }}</span>
</li>