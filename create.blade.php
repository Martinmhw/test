<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MHW PROJECT | Upload Postingan</title>
     <!--css only -->
     <link href= "{{ asset ('bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- javascript -->
    <script src="{{ asset ('bootstrap5/js/bootstrap.bundle.min.js') }}" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

<h1>Upload Postingan</h1>
<form method="POST" action="{{ url('posts')}}" class="form-control">
  @csrf
  
<div class="mb-3">
  <label for="title" class="form-label">Judul</label>
  <input type="text" class="form-control" id="title" name="title">
</div>
<div class="mb-3">
  <label for="content" class="form-label">Konten</label>
  <textarea class="form-control" id="content" name="content" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Simpan</button>

</form>
    
</body>
</html>