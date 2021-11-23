<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <style>
        .avatar-50 {
            height: 50px;
            width: 50px;
            margin-right: 1rem;
        }
      
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <nav class="nav">
                <a class="nav-link active" aria-current="page" href="{{ route('store.index') }}">Store</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
            </nav>
        </div>
        <div class="col-lg-12">
            <!-- <div class="d-flex justify-content-end"> -->
                <div class="d-flex mt-3 col-4">
                    <form method="GET" action="{{ route('store.search') }}">
                        <div class="d-flex align-items-center">
                            <input type="text" name="query" class="form-control" placeholder="Enter store's name...." >
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            <!-- </div> -->
            <table class="table table-striped table-hover">
                <thead class="bg-white text-uppercase">
                    <tr>
                        <th class="sorting_asc" style="width: 22.4625px;">#</th>   
                        <th class="sorting" style="width: 75.6625px;">Name</th>
                        <th class="sorting" style="width: 220.387px;">Email</th>
                        <th class="sorting" style="width: 90px;">Address</th>
                        <th class="sorting" style="width: 90px;">Phone</th>
                        <th class="sorting" style="width: 100px;">Action</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($data as $key=>$item)
                    <tr>
                        <td>
                            <div>{{$key+1}}</div>
                        </td>
                        <td>
                            <div>{{$item->name}}</div>
                        </td>
                        <td>
                            <div>{{$item->email}}</div>
                        </td>
                        <td>
                            <div>{{$item->address}}</div>
                        </td>
                        <td>
                            <div>{{$item->phone}}</div>
                        </td>
                                
                        <td>
                            <div class="d-flex align-items-center">
                            @if ($item->is_accepted === 1)
                                <a class="btn btn-secondary">Accepted</a>
                            @else
                                <a class="btn btn-success" href="{{route('store.accept', $item->id)}}">Accept</a>
                            @endif
                                <a class="btn btn-danger" href="{{route('store.destroy', $item->id)}}">Delete</a>  
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$data->links()}}
        </div>
    </div>
</body>
</html>
