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

        #detail_store {
            position: fixed;
            display: none;
            border: 1px solid black; 
            background-color: rgb(255,255,255);
            border-radius: 5px;
            padding: 5px;
        }

        .detail {
            min-height: 100px;
            min-width: 350px;
        }

        .detail .detail-logo{
            min-width: 100px;
            float: left;
        }

        .detail .detail-logo .detail-logo-100 {
            height: 100px;
            width: 100px;
            border-radius: 5px;
            margin-top: 5px;
        }
        
        .detail .detail-info {
            width: 250px;
            float: left;
            margin-left: 10px;
        }
        

        .detail .detail-info .detail-list {
            margin: 0px;
            padding: 0px;
        }

        .detail .detail-info .detail-list li {
            list-style: none;
            word-wrap: break-word;
            
        }

        .detail .detail-info .detail-list .detail-info-title {
            color: rgb(0,120,0);
            font-weight: bold;
        }
      
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <!-- <div class="d-flex justify-content-end"> -->
                <div class="d-flex mt-3 col-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Search:</span>
                    </div>
                    <input type="search" class="form-control" placeholder="Enter advertisement name" >
                </div>
            <!-- </div> -->
            <table class="table table-striped table-hover">
                <thead class="bg-white text-uppercase">
                    <tr>
                        <th class="sorting_asc" style="width: 10%">#</th>   
                        <th class="sorting" style="width: 30%">Advertisement</th>
                        <th class="sorting" style="width: 30%">Site name</th>
                        <th class="sorting" style="width: 10%">Views</th>
                        <th class="sorting" style="width: 10%">Click</th>
                        <th class="sorting" style="width: 10%">Actions</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($data as $key=>$item)
                    <tr>
                        <td>
                            <div>{{$key+1}}</div>
                        </td>
                        <td>
                            <div>{{$item->advertisement->title}}</div>
                        </td>
                        <td>
                            <div>{{$item->site->name}}</div>
                        </td>
                        <td>
                            <div>{{$item->clicks}}</div>
                        </td>
                        <td>
                            <div>{{$item->views}}</div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-secondary" href="{{route('report.show', $item->id)}}">Details</a>  
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
  </body>
</html>
