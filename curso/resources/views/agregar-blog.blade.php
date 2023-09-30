@auth
<h1>Agregar blog</h1>    
    <form action="" method="POST">
        @csrf
        <input type="text" name="user_id" placeholder="Enter a user id">
        <input type="text" name="category" placeholder="Enter a category id">
        <input type="text" name="name" placeholder="enter a name">
        <input type="text" name="slug" placeholder="slug">
        <input type="text" name="image" placeholder="Enter a image">
        <input type="text" name="description" placeholder="Enter a description">
        <button type="submit">Agregar curso</button>
        <a href="clase">Devolverse al home</a>
    </form>
@else
    <h1>No estas registrado</h1>
@endauth