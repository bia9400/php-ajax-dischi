new Vue({
    el: "#app",
    data: {
        pageTitle: "I nostri prodotti",
        listaProdotti: []
    },
    mounted() {
        axios.get("../api/php_dbData.php")
            .then(resp => {
                this.listaProdotti = resp.data;
                
            })
    }
})