<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
<form action='{{ route("campaign.update", $campaign->id)}}' method='POST' enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Campaign For</label>
    <input type="text" class="form-control" id="" aria-describedby="" name='campaign' value='{{$campaign->name}}'>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Donation Amount</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name='donation' value='{{$campaign->price}}'>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">description</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name='description' value='{{$campaign->description}}'>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">category</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name='category' value='{{$campaign->category}}'>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">status</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name='status' value='{{$campaign->status}}'>
  </div>    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">image</label>
    <input type="file" class="form-control" id="" aria-describedby="emailHelp" name='image'>
  </div>  
  @if ($campaign->image) 
  <a href="{{asset('uploads').'/'.$campaign->image}}" target='_blank'><img src="{{ asset('uploads').'/'.$campaign->image}}" width="50" height="50" alt=""></a>
  @endif

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>