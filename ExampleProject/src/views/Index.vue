<template>
    <div>
        <FormComponent/>
        <br/>
        <SliderComponent/>
        <br>
        <DialogComponent/>
        <br>
        <ConditinalExample/>

    </div>
</template>
<script>
import FormComponent from '@/components/FormComponent.vue';
import SliderComponent from '@/components/SliderComponent.vue';
import DialogComponent from '../components/DialogComponent.vue';
import ConditinalExample from '@/components/ConditinalExample.vue';


export default{
    components: {
    FormComponent,
    SliderComponent,
    DialogComponent,
    ConditinalExample
},
};
</script>
