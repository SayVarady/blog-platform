import { createApp, reactive } from "vue";

createApp({
    setup() {
        const data = reactive(
            {
                name: "testing",
                title: "testing title"
            },
        );

        return { data }
      },

    methods: {
        // getToLogin() {
        //     axios.get('/login').
        //     then()
        //     .catch(error => {
        //         console.log(error);
        //     });
        // }
    }
}).mount("#navbar");

