@auth
<h1>Editar blog</h1>    
    <form action="" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="user_id" placeholder="Enter a user id" value="{{ $course->user_id }}">
        <input type="text" name="category" placeholder="Enter a category id" value="{{ $course->category_id }}">
        <input type="text" name="name" placeholder="enter a name" value="{{ $course->name }}">
        <input type="text" name="slug" placeholder="slug" value="{{ $course->slug }}">
        <input type="text" name="image" placeholder="Enter a image" value="{{ $course->image }}">
        <input type="text" name="description" placeholder="Enter a description" value="{{ $course->description }}">
        <button type="submit">Editar blog</button>
        <a href="clase.blade.php"></a>
    </form>
    <a href="clase">Volver al home</a>
@endauth