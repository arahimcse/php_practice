<div>
        <h1>name: {{ $name }}</h1>
        <h1>email: {{ $email }}</h1>
        <p>Image Name: {{ $imageName }}</p>
        <img src="{{ asset('images/'.$imageName) }}" alt="{{ $imageName }}">
</div>
