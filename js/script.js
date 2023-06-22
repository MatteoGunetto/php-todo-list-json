const {createApp} = Vue;
createApp({
    data(){
        return{
            message: 'My todolist app!',
            urlApi: '/php-todo-list-json/api.php',
            tasksList: []
        }
    },
    methods:{

    },
    created(){
        axios.get(this.urlApi)
        .then(response => {
            console.log(response.data)
            this.tasksList = response.data.data
        })
    }
}).mount('#app');