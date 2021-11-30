

// show details store for advertisement
function storeDetails(evt, id_name, obj){
    const keys_name = ["name", "email", "phone", "address", "created_at"];
    const title = {
        "name": "名前",
        "email": "メール",
        "phone": "電話番号",
        "address": "アドレス",
        "created_at": "作成日"
    };
    let data = {};
    keys_name.map((value) => {
        if (obj.hasOwnProperty(value)){
            data[value] = obj[value];
        }
    });
    console.log(data);
    const html = `
            <div class="detail">
                <div class="detail-logo">
                    <img class="detail-logo-100" src="${obj.logo?obj.logo:''}" alt="logo">
                </div>
                <div class="detail-info">
                    <ul class="detail-list">
                        ${showNewDetails(data, title)}
                    </ul>
                </div>
            </div>`;
    console.log(html);
    document.getElementById(id_name).style.display = "block";
    document.getElementById(id_name).style.left = `${evt.clientX+10}px`;
    document.getElementById(id_name).style.top = `${evt.clientY}px`; 
    document.getElementById(id_name).innerHTML = html;
}

//show list
function showDetails(obj){
    let data = "";
    for (const [key, value] of Object.entries(obj)) {
        data += `
            <li >
                <strong class="detail-info-title">${key}:</strong>
                <span>${value?value:''}</span> 
            </li>
        `
    }
    return data;
}

// show details store for advertisement
function productDetails(evt, id_name, obj){
    const keys_name = ["title", "info", "created_at"];
    const title = {"title":"名前", 
        "info": "情報", 
        "created_at": "作成日"};
    let data = {};
    keys_name.map((value) => {
        if (obj.hasOwnProperty(value)){
            data[value] = obj[value];
        }
    });
    console.log(data);
    const html = `
            <div class="detail">
                <div class="detail-logo">
                    <img class="detail-logo-100" src="${obj.image?obj.image:''}" alt="logo">
                </div>
                <div class="detail-info">
                    <ul class="detail-list">
                        ${showNewDetails(data, title)}
                    </ul>
                </div>
            </div>`;
    console.log(html);
    document.getElementById(id_name).style.display = "block";
    document.getElementById(id_name).style.left = `${evt.clientX+10}px`;
    document.getElementById(id_name).style.top = `${evt.clientY}px`; 
    document.getElementById(id_name).innerHTML = html;
}

//show list with new title
function showNewDetails(obj, title){
    let data = "";
    for (const [key, value] of Object.entries(obj)) {
        if (value){
            data += `
                <li >
                    <strong class="detail-info-title">${title[key]}:</strong>
                    <span>${value?value:''}</span> 
                </li>
            `
        }
    }
    return data;
}

// hide code and detail
function hideDetail(id_name){
    document.getElementById(id_name).innerHTML = "";
    document.getElementById(id_name).style.display = "none";
}