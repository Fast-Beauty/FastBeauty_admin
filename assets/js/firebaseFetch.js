class FirebaseUser{
    constructor(idTbody){
        this.objUser= document.getElementById(idTbody);
        this.URL = "https://api-users-6a304-default-rtdb.firebaseio.com/api/users"
    }
    //creamos un metodo para obtener todos los datos de usuarios
    async getDataUsers() {
        return fetch(this.URL + ".json")
            .then((res) => {
                if (!res.ok) {
                    console.error('Error al obtener datos de Firebase:', res.status);
                    throw new Error('No se pudieron obtener los datos de Firebase');
                }
                return res.json();
            })
            .then((data) => {
                console.log('Data from Firebase:', data);
                this.createTable(data);
            })
            .catch((error) => {
                console.error('Error en getDataUsers:', error);
            });
    }
    //creamos un metodo para obtener los datos especifico de un solo usuario
    async getDataUser(id) {
        return fetch(this.URL + "/" + id + ".json")
            .then((res) => {
                if (!res.ok) {
                    console.log('Result: Problem');
                    return;
                }
                return res.json();
            })
            .then((data) => {
                return data;
            })
            .catch((error) => {
                console.error(error);
            })
            .finally();
    }
     //creamos metodo para crear la tabla y traer los datos
     createTable(data) {
        let contRow = 1;
        let rowTable = "";
        let btnActions = "";

        for (const user in data) {
            let getId = "'" + user + "'";
            btnActions = '<div class="d-flex justify-content-around icon-table">' +
                '<button type="button" class="btn btn-primary" onclick="showUser(' + getId + ')"><span class="feather icon-eye"><p class="d-inline text-icn">Detalles</p></span></button>' +
                '<button type="button" class="btn btn-primary" onclick="editUser(' + getId + ')"><span class="feather icon-edit-2"><p class="d-inline">Editar</p></span></button>' +
                '<button type="button" class="btn btn-primary" onclick="deleteUser(' + getId + ')"><span class="feather icon-trash"><p class="d-inline">Eliminar</p></span></button>' +
                '</div>';

            rowTable += '<tr class="bg-white">' +
                "<td>" + contRow + "</td>" +
                "<td>" + data[user].img + "</td>" +
                "<td>" + data[user].nombre + "</td>" +
                "<td>" + data[user].nickname + "</td>" +
                "<td class='text-center'>" + data[user].valor + "</td>" +
                "<td class='text-center'>" + btnActions + "</td>" +
                '<tr>';
            contRow++;
        }
        this.objUser.innerHTML = rowTable;
    }
    //creamos un metodo para crear un usuario 
    async setCreateUser(data) {
        return fetch(this.URL + ".json", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then((res) => {
                if (!res.ok) {
                    console.log('Result: Problem');
                    return;
                }
                return res.json();
            })
            .then((data) => {
                this.getDataUsers();
            })
            .catch((error) => {
                console.error(error);
            })
            .finally();
    }
   //creamos un metodo para actualizar o editar un usuario en especifico
    async setUpdateUser(id, data) {
        return fetch(this.URL + "/" + id + ".json", {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then((res) => {
                if (!res.ok) {
                    console.log('Result: Problem');
                    return;
                }
                return res.json();
            })
            .then((data) => {
                this.getDataUsers();
            })
            .catch((error) => {
                console.error(error);
            })
            .finally();
    }
  //creamos un metodo para eliminar un usuario
    async setDeleteUser(id) {
        return fetch(this.URL + "/" + id + ".json", {
            method: 'DELETE'
        })
            .then((res) => {
                if (!res.ok) {
                    console.log('Result: Problem');
                    return;
                }
                return res.json();
            })
            .then((data) => {
                return data;
            })
            .catch((error) => {
                console.error(error);
            })
            .finally();
    }

}