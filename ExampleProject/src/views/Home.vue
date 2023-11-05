<template>
 <div>
  <h1>hello world</h1>
    <v-btn @click="directPage()">submit</v-btn>
    <button type="button" class="btn btn-success" style="color: aliceblue;">submit</button>
 </div>
</template>

<script>
  // import HelloWorld from '@/components/HelloWorld.vue'

  export default {
   methods: {
      directPage(){
          this.$router.push("/page1");
      },
   },
 
  };
</script>
