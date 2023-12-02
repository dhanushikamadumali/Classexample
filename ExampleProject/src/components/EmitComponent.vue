<template>
<div>

  <v-btn color="blue" elevation="12"  @click="emiting()" >Emiting data</v-btn>
</div>
</template>
<script>


export default {
  data() {
    return{
      emitingData:"emited",
    };

  },
  methods:{
    emiting(){
      this.$emit("emitingData",this.emitingData);
    },
  },
}
</script>
