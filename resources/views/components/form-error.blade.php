@if ($errors->any())
    <div class="mb-4">
        <ul class="list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li class="text-red-500 italic">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif