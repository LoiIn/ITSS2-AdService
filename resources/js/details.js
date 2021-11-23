
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