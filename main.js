const { createApp } = Vue

createApp({
    data() {
      return {
        apiUrl : 'server.php',
        data: '',
        
      }
    },
    mounted() {
        this.callApi() 
    },
    methods: {
        callApi(){
            axios.get(this.apiUrl)
                .then((res) => {
                    this.data = res.data
                })
        }
    },
}).mount('#app')