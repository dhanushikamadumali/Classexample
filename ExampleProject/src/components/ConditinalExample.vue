<template>
<div>
  <h1 class="text-center" v-if=!show> example</h1>
  <!-- v-if="show === true" -->
  <!-- v-if=!show -->
<center>
  <div v-for="array in array1 " :key="array" class="" >
    {{ array }}

  </div>
</center>
</div>
</template>
<script>

export default {

  data(){
    return{
      show:false,
      array1:["data1","data2","data3"],
      array2:[]



    };

  },
  // data tiyana array eka page eka loda weddima array2 ekatma equeal karanwa mounted use karanwa
  mounted() {
    // ena api aray eke data array eka array2 ekata equal karanwa

    // this.array2 == data array
    this.functionarray();

  },

  // function call karanna one methods athulee
  methods:{
    functionarray(){
        // implementaion
      }
  },


}
</script>

