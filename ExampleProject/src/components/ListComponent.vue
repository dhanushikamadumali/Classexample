<template>
<div>
  <center>
  <v-row>
    <v-col lg="4" v-for="item in items" :key="item.firstname" >
      <v-list lines="three" >
        <v-list-item :title="item.firstname + ' '+ item.lastname" :subtitle="item.gendar"></v-list-item>
     <v-btn block="" color="blue" elevation="10" @click=" openDialog(item.title,item.firstname,item.lastname)">senddata</v-btn>
      </v-list>

    </v-col>


  </v-row>
</center>
<v-dialog width="500" v-model="dialog">
     <DialogModalComponent :title="title" :FormData="form" />
  </v-dialog>
</div>
</template>
<script>
import DialogModalComponent from '@/components/DIalogModalComponent.vue';

export default {
  components:{
      DialogModalComponent,
  },
  data(){
    return{

      items:[
        {
          title:"ehgrt",
        firstname:"ferf",
        lastname:"qwrdfweregf",
        gendar:"afertyh"
      },
      {
        title:"ehgrtsdreger",
        firstname:"ferf",
        lastname:"qwrdfweerg",
        gendar:"afer"
      },
      {
        title:"ehgrtdfgbvd",
        firstname:"ferf",
        lastname:"qwrdfweth",
        gendar:"afer"
      }

      ],
      dialog:false,
      title:"",
      form:{}
    };


  },
  methods:
  {
    openDialog(title,firstname,lastname){
      console.log(title);
        this.dialog=true;
        this.title=title;
        this.form.firstname=firstname;
        this.form.lastname=lastname;
    },


  },
}
</script>

