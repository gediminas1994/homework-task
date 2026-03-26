@if ($errors->any())
    <div class="flex justify-center mt-10 mb-6">
        <div class="w-full max-w-md bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg shadow">

            <p class="font-semibold text-center mb-2">
                Something went wrong
            </p>

            <ul class="text-sm space-y-1 text-center">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>

        </div>
    </div>
@endif