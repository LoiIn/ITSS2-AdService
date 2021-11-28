@extends('dashboard.dashboard')
@section('content')

<main class="container">
    <div class="search d-flex mt-5">
        <button style="border-radius: 0; box-shadow: 0 4px 25px 0 rgb(0 0 0 / 10%);" class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
        <input style="width: 300px; border-radius: 0; box-shadow: 0 4px 25px 0 rgb(0 0 0 / 10%);" class="form-control" type="search" placeholder="Search" aria-label="Search">
    </div>
    <div class="tabler mt-4">
        <table id="request-table" class="table table-striped table-hover">
            <tr class="titleTable" style="background: rgb(229, 229, 229)">
                <th>STT</th>
                <th>Name</th>
                <th>Product</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @for ($i=0; $i< 10; $i++)

                <tr class="tableContent">
                    <td class="text-center">{{'HELLO'}}</td>
                    <td>
                        <b>${title}</b>
                    </td>
                    <td>
                        <img style="float: left; width: 50%; border-radius: 20px" src="${img}">
                        <p class="mt-4">${product}<p>
                    </td>
                    <td>${content}</td>
                    <td>
                        <button class="btn" style="background: #6c757d; color: #fff">Accept</button>
                        <button class="btn" style="background: #198754; color: #fff">Edit</button>
                        <button class="btn" style="background: #dc3545; color: #fff">Delete</button>
                    </td>
                </tr>
            @endfor


        </table>

        <div class="clearfix">
            <div class="box options">
                <label>Requests Per Page: </label>
                <select id="req_per_page" onchange="filter_requests()" style="border-color: #ddd">
                <option>5</option>
                <option>10</option>
                <option>ALL</option>
            </select>
            </div>
            <div class="box pagination">
            </div>
        </div>
    </div>

</main>
@endsection
