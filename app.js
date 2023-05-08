const { createApp } = Vue

createApp({
    data(){
        return{
            tasks: null,
            api: 'getTask.php',
            new_task: '',
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
    },
    methods:{
        add_task(){
            const data ={
                new_task: this.new_task
            }
            axios.post ('newTask.php', data, 
            {
                headers : {'Content-Type': 'multipart/form-data'}
            }) .then(response =>{
                console.log(response);
                this.tasks= response.data
            })
            .catch(error => {
                console.error(error.message);
            })

        },
        deleteItem(index){
            //this.tasks.splice(i, 1);

            const data ={
                index
            }
            axios.post ('deleteTask.php', data, 
            {
                headers : {'Content-Type': 'multipart/form-data'}
            }) .then(response =>{
                console.log(response);
                this.tasks= response.data
            })
            .catch(error => {
                console.error(error.message);
            })
        },
        doneItem(index){
            console.log(index)
            this.tasks[index].done = !this.tasks[index].done
        }
    }
}).mount('#app')