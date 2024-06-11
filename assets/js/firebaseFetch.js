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
                this.createTable(data);
                return data;
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
     createTable(users) {
        this.objUser.innerHTML = '';
        const usuarios = Object.values(users);
        const keys = Object.keys(users);
        usuarios.forEach((usuario, i) => {
            const {id, nombre, email, telefono, documento, estado} = usuario;
            const tr = document.createElement('tr');
            tr.classList.add('bg-white');
            tr.innerHTML = `
            <td></td>
                <td>${id}</td>
                <td>${nombre}</td>
                <td>${email}</td>
                <td>${telefono}</td>
                <td>${documento}</td>
                <td><div class="bg-success text-center p-1 rounded">${estado}</div></td>
                <td>
                    <div class="d-flex justify-content-around icon-table">
                        <a href="#" class="fs-1" onclick="showUser('${keys[i]}')" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span class="feather icon-eye">
                                <p class="d-inline text-icn">Detalles</p>
                            </span>
                        </a>
                        <a href="#" onclick="editUser('${keys[i]}')" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span class="feather icon-edit-2">
                                <p class="d-inline">Editar</p>    
                            </span>
                        </a>
                        <a href="#" onclick="deleteUser('${keys[i]}')">
                            <span class="feather icon-trash">
                                <p class="d-inline">Eliminar</p>
                            </span>
                        </a>
                    </div>
                </td>
            
                `
                this.objUser.appendChild(tr);
        })
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
                this.getDataUsers();
                return data;
            })
            .catch((error) => {
                console.error(error);
            })
            .finally();
    }

}