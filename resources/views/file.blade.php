<html lang="en">
<head>
  <title>File Upload</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"/>
</head>

<style>
body{
    font-family: 'Concert One', cursive;
    color: #3f4e59; 
    background-color: #e6e6e6;
}
</style>

<body>
  <div class="container"> 
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach 
        </ul>
      </div>
      @endif

        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif
   
    <h3 class="jumbotron" style="margin-top: 70px;  background-color: #1f2b38; color: #ffffff; font-family: 'Concert One', cursive; font-size: 2em; text-align: center;">Online Library File Upload</h3>
    <form method="post" action="/file/store" enctype="multipart/form-data">
      {{csrf_field()}}

        <div class="form-group" >
          
          <p><strong>Upload Files</strong> </p>
          <input type="file" name="fileName" class="form-control">&nbsp;
         
          <p><strong>Upload Images</strong> </p>
          <input type="file" name="images" class="form-control"> &nbsp;
          
          <p><strong>Select Category</strong> </p>          
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="category">
              <option value="">Category</option>
              <option value="Science">Science</option>
              <option value="Biology">Biology</option>
              <option value="Technology">Technology</option>
              <option value="Lifestyle">Lifestyle</option>
              <option value="Politics & Laws">Politics & Laws</option>
              <option value="Business & Career">Business & Career</option>
              <option value="Academic & Education">Academic & Education</option>
            </select>
          </div>&nbsp;

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Descriptions</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top:10px"><i class="upload icon"></i> Upload</button>
    </form>        
  </div>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('success'))
            toastr.success('{{ Session::get('success') }}')
        @endif
    </script>
     <script>
        @if(Session::has('error'))
            toastr.error('{{ Session::get('error') }}')
        @endif
    </script>
</html>