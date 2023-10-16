<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($ads as $ad)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">    
                        <p>{{$ad->category}}</p>
                        <p>{{$ad->ad}}</p>
                        <p>Автор: {{$ad->user->name}}      Объявление подано: {{$ad->created_at}}</p> 
                </div>
            </div>
        @endforeach
        </div>
    </div>
</x-app-layout>