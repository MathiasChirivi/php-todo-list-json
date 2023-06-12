const { createApp } = Vue

createApp({
  data() {
    return {
      apiUrl: "api.php",
      students: []
    }
  },
    methods:{
        caricaLista() {
            axios.get(this.apiUrl).then((response) => {
                this.students = response.data;
            });
        }
  },
  mounted(){
        console.log("App Caricata");
  }
}).mount('#app')