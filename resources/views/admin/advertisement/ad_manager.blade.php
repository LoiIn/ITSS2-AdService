<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('asset/css/admin/advertisement/details.css')}}">
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <!-- <div class="d-flex justify-content-end"> -->
                <div class="d-flex mt-3 col-4">
                    <form method="GET" action="{{ route('admin.advertisement.search') }}">
                        <div class="d-flex align-items-center">
                            <button type="submit" style="margin-right:5px;" class="btn btn-secondary">Search:</button>
                            <input type="text" name="query" value="{{$query??''}}" class="form-control text-truncate" placeholder="Enter name" >
                            
                        </div>
                    </form>
                    <!-- <div class="input-group-prepend">
                        <span class="input-group-text">Search:</span>
                    </div>
                    <input type="search" class="form-control" placeholder="Enter name" > -->
                </div>
            <!-- </div> -->
            <table class="table table-striped table-hover">
                <thead class="bg-white text-uppercase">
                    <tr>
                        <th class="sorting_asc" style="width: 22.4625px;">#</th>   
                        <th class="sorting" style="width: 75.6625px;">Name</th>
                        <th class="sorting" style="width: 75.6625px;">Store</th>
                        <th class="sorting" style="width: 220.387px;">Product</th>
                        <th class="sorting" style="width: 90px;">Start Date</th>
                        <th class="sorting" style="width: 90px;">End Date</th>
                        <th class="sorting" style="width: 109.75px;">Content</th>
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
                            <div>{{$item->title}}</div>
                        </td>
                        <td>
                            <div onmousemove="storeDetails(event, 'details',{{$item->store}})"
                                onmouseleave="hideDetail('details')">
                                {{$item->store?$item->store->name:''}}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span onmousemove="productDetails(event, 'details',{{$item->product}})"
                                onmouseleave="hideDetail('details')">
                                    <img src="{{$item->product?$item->product->image:''}}"
                                        class="img-fluid rounded avatar-50" title="" alt="image">
                                </span>
                                <div >
                                    <div>{{$item->product?$item->product->title:''}}</div>
                                    <p class="mb-0"><small>{{$item->product?$item->product->info:''}}</small></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div>{{$item->started_date}}</div>
                        </td>
                        <td>
                            <div>{{$item->ended_date}}</div>
                        </td>
                        <td>
                            <div>{{$item->content}}</div>
                        </td>
                                
                        <td>
                            <div class="d-flex align-items-center">
                                @if ($item->published_flag === 1)
                                    <a class="btn btn-secondary disabled" href="#">Accepted</a>
                                @else
                                    <a class="btn btn-secondary" href="{{route('admin.advertisement.accept', $item->id)}}">Accept</a>
                                @endif
                                <a class="btn btn-danger" href="{{route('admin.advertisement.destroy', $item->id)}}">Delete</a>  
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        
        </div>
        <div class="d-flex justify-content-end">{{ $data->links() }}</div>
    </div>
    <script src="{{asset('asset/js/admin/advertisement/details.js')}}"></script>
    <div id="details"></div>
</body>
</html>
