const { createApp } = Vue

createApp({
  data() {
    return {
      toDoList: [],
    }
  },
  methods: {
    ReadListPhp() {
      axios.get('server.php')
        .then(response => {
          this.toDoList = response.data;
        })
    }
  },
  mounted() {
    this.ReadListPhp();
  }
}).mount('#app')