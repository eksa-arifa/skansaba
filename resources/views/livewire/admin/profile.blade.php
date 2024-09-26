<div class="w-fit h-fit shadow-md bg-slate-700 rounded-lg p-4 text-white">
    <div class="w-[400px]">
        <h2 class="text-lg font-bold">Your Profile</h2>
        <ul class="flex flex-col gap-1 px-4">
            <li>Email: {{auth()->user()->email}}</li>
            <li>Username: {{auth()->user()->name}}</li>
        </ul>
    </div>
</div>
