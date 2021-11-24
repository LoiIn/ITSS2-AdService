<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Product</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{--    <link rel="stylesheet" href="product.css">--}}
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="">Random</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('signup')}}">企業登録<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">商品管理</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">広告登録</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('report.index')}}">レボート</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    アカウント
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="">プロフィール</a>
                    <a class="dropdown-item" href="{{route('logout')}}">サインアウト</a>
                </div>
            </li>
        </ul>
    </div>
</nav>


<main class="container">
    <div class="search d-flex mt-5">
        <button style="border-radius: 0; box-shadow: 0 4px 25px 0 rgb(0 0 0 / 10%);" class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
        <input style="width: 300px; border-radius: 0; box-shadow: 0 4px 25px 0 rgb(0 0 0 / 10%);" class="form-control" type="search" placeholder="Search" aria-label="Search">
    </div>
    <div class="tabler mt-4">
        <table id="request-table" class="table table-striped table-hover">
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

</body>
<script>
    const myarr = [{
        "req_no": 1,
        "title": "Name1",
        "img": "https://images.unsplash.com/photo-1588702547919-26089e690ecc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8b25saW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
        "product": "Puma shoes",
        "startDate": "2021-11-21 14:41:43",
        "endDate": "2021-11-21 14:41:43",
        "content": "Best yasuo 10tr thong thao",
        "action": ""
    }, {
        "req_no": 1,
        "title": "Name1",
        "img": "https://images.unsplash.com/photo-1588702547919-26089e690ecc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8b25saW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
        "product": "Puma shoes",
        "startDate": "2021-11-21 14:41:43",
        "endDate": "2021-11-21 14:41:43",
        "content": "Best yasuo 10tr thong thao",
        "action": ""
    },
        {
            "req_no": 1,
            "title": "Name1",
            "img": "https://images.unsplash.com/photo-1588702547919-26089e690ecc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8b25saW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
            "product": "Puma shoes",
            "startDate": "2021-11-21 14:41:43",
            "endDate": "2021-11-21 14:41:43",
            "content": "Best yasuo 10tr thong thao",
            "action": ""
        },
        {
            "req_no": 1,
            "title": "Name1",
            "img": "https://images.unsplash.com/photo-1588702547919-26089e690ecc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8b25saW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
            "product": "Puma shoes",
            "startDate": "2021-11-21 14:41:43",
            "endDate": "2021-11-21 14:41:43",
            "content": "Best yasuo 10tr thong thao",
            "action": ""
        }];
    // on page load collect data to load pagination as well as table
    const data = {
        "req_per_page": document.getElementById("req_per_page").value,
        "page_no": 1
    };
    // At a time maximum allowed pages to be shown in pagination div
    const pagination_visible_pages = 4;
    // hide pages from pagination from beginning if more than pagination_visible_pages
    function hide_from_beginning(element) {
        if (element.style.display === "" || element.style.display === "block") {
            element.style.display = "none";
        } else {
            hide_from_beginning(element.nextSibling);
        }
    }
    // hide pages from pagination ending if more than pagination_visible_pages
    function hide_from_end(element) {
        if (element.style.display === "" || element.style.display === "block") {
            element.style.display = "none";
        } else {
            hide_from_beginning(element.previousSibling);
        }
    }
    // load data and style for active page
    function active_page(element, rows, req_per_page) {
        var current_page = document.getElementsByClassName('active');
        var next_link = document.getElementById('next_link');
        var prev_link = document.getElementById('prev_link');
        var next_tab = current_page[0].nextSibling;
        var prev_tab = current_page[0].previousSibling;
        current_page[0].className = current_page[0].className.replace("active", "");
        if (element === "next") {
            if (parseInt(next_tab.text).toString() === 'NaN') {
                next_tab.previousSibling.className += " active";
                next_tab.setAttribute("onclick", "return false");
            } else {
                next_tab.className += " active"
                render_table_rows(rows, parseInt(req_per_page), parseInt(next_tab.text));
                if (prev_link.getAttribute("onclick") === "return false") {
                    prev_link.setAttribute("onclick", `active_page('prev',\"${rows}\",${req_per_page})`);
                }
                if (next_tab.style.display === "none") {
                    next_tab.style.display = "block";
                    hide_from_beginning(prev_link.nextSibling)
                }
            }
        } else if (element === "prev") {
            if (parseInt(prev_tab.text).toString() === 'NaN') {
                prev_tab.nextSibling.className += " active";
                prev_tab.setAttribute("onclick", "return false");
            } else {
                prev_tab.className += " active";
                render_table_rows(rows, parseInt(req_per_page), parseInt(prev_tab.text));
                if (next_link.getAttribute("onclick") === "return false") {
                    next_link.setAttribute("onclick", `active_page('next',\"${rows}\",${req_per_page})`);
                }
                if (prev_tab.style.display === "none") {
                    prev_tab.style.display = "block";
                    hide_from_end(next_link.previousSibling)
                }
            }
        } else {
            element.className += "active";
            render_table_rows(rows, parseInt(req_per_page), parseInt(element.text));
            if (prev_link.getAttribute("onclick") === "return false") {
                prev_link.setAttribute("onclick", `active_page('prev',\"${rows}\",${req_per_page})`);
            }
            if (next_link.getAttribute("onclick") === "return false") {
                next_link.setAttribute("onclick", `active_page('next',\"${rows}\",${req_per_page})`);
            }
        }
    }
    // Render the table's row in table request-table
    function render_table_rows(rows, req_per_page, page_no) {
        const response = JSON.parse(window.atob(rows));
        const resp = response.slice(req_per_page * (page_no - 1), req_per_page * page_no)
        $('#request-table').empty()
        $('#request-table').append(
            '<tr class="titleTable" style="background: rgb(229, 229, 229)"><th>STT</th><th>Name</th><th>Product</th><th>Description</th><th>Action</th></tr>');
        resp.forEach(function(element, index) {
            if (Object.keys(element).length > 0) {
                const {
                    req_no,
                    title,
                    img,
                    product,
                    startDate,
                    endDate,
                    content
                } = element;
                const td = `<tr class="tableContent">
                                <td class="text-center">${++index}</td>
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
                            </tr>`;
                $('#request-table').append(td)
            }
        });
    }
    // Pagination logic implementation
    function pagination(data, myarr) {
        const all_data = window.btoa(JSON.stringify(myarr));
        $(".pagination").empty();
        if (data.req_per_page !== 'ALL') {
            let pager = `<a href="#" id="prev_link" onclick=active_page('prev',\"${all_data}\",${data.req_per_page})>&laquo;</a>` +
                `<a href="#" class="active" onclick=active_page(this,\"${all_data}\",${data.req_per_page})>1</a>`;
            const total_page = Math.ceil(parseInt(myarr.length) / parseInt(data.req_per_page));
            if (total_page < pagination_visible_pages) {
                render_table_rows(all_data, data.req_per_page, data.page_no);
                for (let num = 2; num <= total_page; num++) {
                    pager += `<a href="#" onclick=active_page(this,\"${all_data}\",${data.req_per_page})>${num}</a>`;
                }
            } else {
                render_table_rows(all_data, data.req_per_page, data.page_no);
                for (let num = 2; num <= pagination_visible_pages; num++) {
                    pager += `<a href="#" onclick=active_page(this,\"${all_data}\",${data.req_per_page})>${num}</a>`;
                }
                for (let num = pagination_visible_pages + 1; num <= total_page; num++) {
                    pager += `<a href="#" style="display:none;" onclick=active_page(this,\"${all_data}\",${data.req_per_page})>${num}</a>`;
                }
            }
            pager += `<a href="#" id="next_link" onclick=active_page('next',\"${all_data}\",${data.req_per_page})>&raquo;</a>`;
            $(".pagination").append(pager);
        } else {
            render_table_rows(all_data, myarr.length, 1);
        }
    }
    //calling pagination function
    pagination(data, myarr);
    // trigger when requests per page dropdown changes
    function filter_requests() {
        const data = {
            "req_per_page": document.getElementById("req_per_page").value,
            "page_no": 1
        };
        pagination(data, myarr);
    }
</script>
</html>
