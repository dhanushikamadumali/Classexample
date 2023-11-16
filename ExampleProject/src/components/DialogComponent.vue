<template>
    <div class="d-flex justify-content-center">
        <v-btn color="blue" elevation="20" @click="openDialog()">
                {{ openModal }}
        </v-btn>
    </div>
    <v-dialog width="500" v-model="dialog">
       <DialogModalComponent/>
    </v-dialog>
</template>
<script>
import DialogModalComponent from '@/components/DIalogModalComponent.vue';
export default {
    data (){
        return{
            openModal:"Open Dialog",
            data1:"may",
            data2:"3",
            object1: {

            },
            array1:[],
            dialog:false

        }
    },
    components:{
        DialogModalComponent,
    },
    methods: {
        openDialog(){
            this.dialog=true;
        },

    },
};
</script>
