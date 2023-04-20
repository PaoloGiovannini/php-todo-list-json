const { createApp } = Vue

createApp({
  data() {
    return {
      toDoList: [],
      singleToDo: ''
    }
  },
  methods: {
    ReadListPhp() {
      axios.get('server.php')
        .then(response => {
          this.toDoList = response.data;
        })
    },
    addToDo() {
      const data = {
        element: this.singleToDo,
      };

      axios.post('server.php', data,
        {
          headers: { 'Content-Type': 'multipart/form-data' }
        }
      ).then(response => {
        this.toDoList = response.data;
        this.singleToDo = '';
        console.log(response);
      });

    }
  },
  mounted() {
    this.ReadListPhp();
  }
}).mount('#app')