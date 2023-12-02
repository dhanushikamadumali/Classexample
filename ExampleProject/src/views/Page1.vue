<template>
    <div>
        <h1>
            hello page 1
        </h1>
        <v-container class="bg-red">
            <v-row no-gutters>

            <v-col cols="12" sm="4" md="4">
                <p class="ma-2 pa-2">one of three column</p>
            </v-col>
            <v-col cols="12" sm="4" md="4">
                <p class="ma-2 pa-2">one of three column </p>
            </v-col>
            <v-col  cols="12" sm="4" md="4">
                <p class="ma-2 pa-2">one of three column</p>
            </v-col>

            
            </v-row>
        </v-container>

       <page2/>
    </div>
</template>
<script>
// import { defineComponent } from '@vue/composition-api'
// import page2 from "@/views/Page2.vue";

export default{
    components:{

    },
};

</script>
