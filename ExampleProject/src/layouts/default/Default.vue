<template>
 <v-app>
<HedearComponent/>
<br>
<router-view/>
<br>
<FooterComponent/>
</v-app>
</template>

<script>
  import HedearComponent from '@/components/HedearComponent.vue';
  import FooterComponent from '@/components/FooterComponent.vue';


  export default{
      components: {

      HedearComponent,
      FooterComponent
  },
  };

</script>
