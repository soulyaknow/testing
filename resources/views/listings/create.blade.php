<form method="POST" action="/listings" enctype="multipart/form-data">
    @csrf
    <h1>Add</h1>
    <input type="text" name="title" placeholder="Title" value="{{old('title')}}"><br>
    @error('title')
        <p>{{$message}}</p>
    @enderror

    <input type="text" name="tags" placeholder="Tags" value="{{old('tags')}}"><br>
    @error('tags')
        <p>{{$message}}</p>
    @enderror

    <input type="text" name="company" placeholder="Company" value="{{old('company')}}"><br>
    @error('company')
        <p>{{$message}}</p>
    @enderror

    <input type="text" name="location" placeholder="Address" value="{{old('location')}}"><br>
    @error('location')
        <p>{{$message}}</p>
    @enderror

    <input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
    @error('email')
        <p>{{$message}}</p>
    @enderror

    <input type="text" name="website" placeholder="Website" value="{{old('website')}}"><br>
    @error('website')
        <p>{{$message}}</p>
    @enderror

    <input type="file" name="logo"><br>

    <textarea name="description" cols="30" rows="10" placeholder="Description" value="{{old('description')}}"></textarea><br>
    @error('description')
        <p>{{$message}}</p>
    @enderror

    <button type="submit">Submit</button>
</form>