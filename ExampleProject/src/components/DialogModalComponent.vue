<template>
    <div>
        <v-card :title="title">
          <FormComponent :FormData="FormData"/>
          <br/>
          <bt/>
        </v-card>

    </div>
</template>
<script>
import FormComponent from '@/components/FormComponent.vue';
// import { stringify } from 'postcss';

export default{
  components:{
    FormComponent,
  },
data(){
  return{

  };

},
// parent eken ena titke eka
props:{
  title:String,
  FormData:Object,

}
}

</script>
