<template>
    <div>
        <h1>
            hello page 1
        </h1>
       <page2/>
    </div>
</template>
<script>
// import { defineComponent } from '@vue/composition-api'
import page2 from "@/views/Page2.vue";

export default{
    components:{
        page2,
    },
};

</script>
