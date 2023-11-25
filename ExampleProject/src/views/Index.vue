<template>
    <div>
      <HedearComponent/>

        <FormComponent :FormData="propData"/>
        <br/>
        <SliderComponent/>
        <br>
        <DialogComponent/>
        <br>
        <ConditinalExample/>
        <ListComponent/>


    </div>
</template>
<script>
import FormComponent from '@/components/FormComponent.vue';
import SliderComponent from '@/components/SliderComponent.vue';
import DialogComponent from '../components/DialogComponent.vue';
import ConditinalExample from '@/components/ConditinalExample.vue';
import ListComponent from '@/components/ListComponent.vue';



export default{
  // parent to child props pass karnne mulinma variable all karnawa
  data(){
    return{
      propData:"hey",
  };
  },
    components: {
    FormComponent,
    SliderComponent,
    DialogComponent,
    ConditinalExample,
    ListComponent



},
};
</script>
