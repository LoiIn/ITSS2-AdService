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
                    <input type="search" class="form-control" placeholder="Enter name" >
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
                            <div onmousemove="storeDetail(event, 'detail_store',{{$item->store}})"
                                onmouseleave="outStoreDetail(event, 'detail_store')">
                                {{$item->store?$item->store->name:''}}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{$item->product?$item->product->image:''}}"
                                    class="img-fluid rounded avatar-50" title="product image" alt="image">
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
                                <a class="btn btn-secondary" href="">Accept</a>
                                <a class="btn btn-danger" href="{{route('advertisement.destroy', $item->id)}}">Delete</a>  
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
        <!-- <div>{{ $data->links() }}</div> -->
    </div>
    <script type="text/javascript">
        function storeDetail(evt, id_name, obj){
            html = `
                <div class="detail">
                        <div class="detail-logo">
                            <img class="detail-logo-100" src="${obj.logo?obj.logo:''}" alt="logo">
                        </div>
                        <div class="detail-info">
                            <ul class="detail-list">
                                <li >
                                    <strong class="detail-info-title">Name:</strong>
                                    <span>${obj.name?obj.name:''}</span> 
                                </li>
                                <li >
                                    <strong class="detail-info-title">Email:</strong>
                                    <span>${obj.email?obj.email:''}</span> 
                                </li>
                                <li >
                                    <strong class="detail-info-title">Phone:</strong>
                                    <span>${obj.phone?obj.phone:''}</span> 
                                </li>
                                <li >
                                    <strong class="detail-info-title">Address:</strong>
                                    <span>${obj.address?obj.address:''}</span> 
                                </li>
                                <li >
                                    <strong class="detail-info-title">Created_at:</strong>
                                    <span>${obj.created_at?obj.created_at:''}</span> 
                                </li>
                            </ul>
                        </div>
                    </div>`

            document.getElementById(id_name).style.display = "block";
            document.getElementById(id_name).style.left = `${evt.clientX+10}px`;
            document.getElementById(id_name).style.top = `${evt.clientY}px`; 
            document.getElementById(id_name).innerHTML = html;
            
        }

        function outStoreDetail(evt, id_name){
            document.getElementById(id_name).innerHTML = "";
            document.getElementById(id_name).style.display = "none";
        }
    </script>
    <div id="detail_store"></div>
</body>
</html>
