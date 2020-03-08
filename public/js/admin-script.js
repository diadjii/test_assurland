var listUsers = [];

$(() => {
    getUsers(displayUserList);
})

$("#form-create-user-account").submit(e => {
    e.preventDefault();

    $.post("/user/create",$("#form-create-user-account").serialize()).done(response => {
        console.log(response)
    }).fail(error => {
        console.log(error)
    })
})

$("#list-user").on('click','.btn-edit',(e) => {
    let userId = e.currentTarget.attributes[1].value;
    let selectedUser = listUsers.filter(user => user.id == userId)[0];

    $("select[name='edit-user-type'").val(selectedUser.role)
    $("input[name='edit-username']").val(selectedUser.username);
    $("input[name='user-id']").val(selectedUser.id);
    $("input[name='edit-login']").val(selectedUser.login);

    $("#exampleModal").modal("show");
})

$("#list-user").on('click','.btn-delete',(e) => {
    if(confirm("Voulez-vous vraiment supprimer cet utilisateur ? ")){
        console.log("ok")
        let id = e.currentTarget.attributes[1].value
        $.post('/user/'+id+'/delete').done(response => {
            getUsers(displayUserList);
            alert("Le compte a bien été supprimé.")
        }).fail(error => {
            alert("Ouups une erreur s'est produite au niveau du serveur.")

            console.log(error)
        })
    }
})

$("#form-edit-user-account").submit(e => {
    e.preventDefault();

    $.post('/user/edit',$("#form-edit-user-account").serialize()).done(response => {
        getUsers(displayUserList);
        $("#exampleModal").modal("hide");
    }).fail(error => {
        console.log(error)
    })
});

$("#form-create-prospect").submit(e => {
    e.preventDefault();

    $.post('/prospect/create', $("#form-create-prospect").serialize()).done(response => {
        console.log(response)
    }).fail(error => {
        console.log(error);
    })
});

function getUsers(callback){
    $.getJSON('/users').done(response => {
        callback(response);
    }).fail(error => {
        console.log(error)
    })
}

function displayUserList(users) {
    $("#list-user").empty();
    listUsers = users;
    users.forEach((user,index) => {

        let userType = getUserType(user.role);

        let tr = `<tr>
            <th scope="row">${index+1}</th>
            <td>${user.username}</td>
            <td>${userType}</td>
            <td>
                <button type="button"  data=${user.id} class="btn btn-success btn-sm btn-edit">Modifier</button>
                <button type="button" data=${user.id} class="btn btn-danger btn-sm btn-delete">Supprimer</button>
            </td>
        </tr>`;

        $("#list-user").append(tr);
    })
}

function getUserType(i) {
    var userType = "";

    switch (parseInt(i)) {
        case 1:
            userType = "Client";
            break;
        case 2:
            userType = "Commercial";
            break;
        default:
            userType = "Administrateur";
    }

    return userType;
}

function getProspects(){
    $.getJSON('/propects').done(response => {
        console.log(response);
    }).fail(error =>{
            alert("Une erreur s'est produite au niveau du serveur");
    }
}