<div class="w-fit shadow-md bg-slate-700 rounded-lg p-4 text-white">
    <div class="w-full sm:w-[400px]">
        <h2 class="text-lg font-bold">Change Password</h2>
        <form wire:submit.prevent="submit" class="flex flex-col gap-4">
            <div class="py-1">
                <label for="website-admin" class="block mb-2 text-sm font-medium text-white">New Password</label>
                <div class="flex flex-col gap-2">
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="fa-solid fa-key"></i>
                        </span>
                        <input type="password" required wire:model.lazy="password" id="website-admin"
                            class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="*********">
                    </div>
                    @error('password')
                        <p class="text-red-600">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="py-1">
                <label for="website-admin" class="block mb-2 text-sm font-medium text-white">Password
                    Confirmation</label>
                <div class="flex flex-col gap-2">
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="fa-solid fa-key"></i>
                        </span>
                        <input type="password" required wire:model.lazy="password_confirmation" id="website-admin"
                            class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="*********">
                    </div>
                </div>
            </div>
            <button type="submit" class="bg-blue-600 block w-fit text-white rounded-lg p-2 text-sm">Change
                Password</button>
        </form>
    </div>
</div>