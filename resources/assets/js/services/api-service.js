import axios from 'axios';

class Api {
    call(method, url) {
        console.log(method,url)
        return axios[method](url)
    }   
}

export default new Api();