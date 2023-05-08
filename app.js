const { createApp } = Vue

createApp({
    data(){
        return{
            tasks: null,
            api: 'getTask.php'
        }
    },
    mounted(){
        axios
        .get (this.api)
        .then(response => {
            console.log(response);
            this.tasks=response.data
        })
        .catch(error => {
            console.error(error.message);
        })
    }
}).mount('#app')