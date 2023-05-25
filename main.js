const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            data: '',
            positionI: '1'
        }
    },
    methods: {
        chiamataApi() {
            axios.get(this.apiUrl)
                .then((res) => {
                    this.data = res.data
                });
        },
        position(index) {
            this.positionI = index
            console.log(this.positionI)
        }
    },
    mounted() {
        this.chiamataApi();
    }
}).mount('#app')