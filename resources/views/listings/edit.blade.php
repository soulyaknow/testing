<x-flash-message />
<form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <h1>Edit</h1>
    <input type="text" name="title" placeholder="Title" value="{{$listing->title}}"><br>
    @error('title')
        <p>{{$message}}</p>
    @enderror

    <input type="text" name="tags" placeholder="Tags" value="{{$listing->tags}}"><br>
    @error('tags')
        <p>{{$message}}</p>
    @enderror

    <input type="text" name="company" placeholder="Company" value="{{$listing->company}}"><br>
    @error('company')
        <p>{{$message}}</p>
    @enderror

    <input type="text" name="location" placeholder="Address" value="{{$listing->location}}"><br>
    @error('location')
        <p>{{$message}}</p>
    @enderror

    <input type="email" name="email" placeholder="Email" value="{{$listing->email}}"><br>
    @error('email')
        <p>{{$message}}</p>
    @enderror

    <input type="text" name="website" placeholder="Website" value="{{$listing->website}}"><br>
    @error('website')
        <p>{{$message}}</p>
    @enderror

    <input type="file" name="logo"><br>
    @error('logo')
    <p>{{$message}}</p>
    @enderror

    <textarea name="description" cols="30" rows="10" placeholder="Description">{{$listing->description}}</textarea><br>
    @error('description')
        <p>{{$message}}</p>
    @enderror

    <button type="submit">Submit</button>
</form>