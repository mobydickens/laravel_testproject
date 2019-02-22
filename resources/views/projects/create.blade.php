<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h1>Create a new project</h1>

  <form method='POST' action='/projects'>

    {{ csrf_field() }}

    <div>
      <input type="text" name='title' placeholder='project title'>
    </div>
    <div>
      <textarea type="text" name='description' placeholder='project description'></textarea>
    </div>
    <div>
      <button type='submit'>Create</button>
    </div>
  </form>
</body>
</html> 