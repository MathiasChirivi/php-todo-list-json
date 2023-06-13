const { createApp } = Vue

createApp({
  data() {
    return {
      apiUrl: "api.php",
      students: []
    }
  },
    methods:{
      },
      mounted(){
        console.log("App Caricata");
        axios.get(this.apiUrl).then((response) => {
            this.students = response.data;
        });
  }
}).mount('#app')