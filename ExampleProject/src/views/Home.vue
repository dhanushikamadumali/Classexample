<template>
  <div>
    <h1>hello world</h1>
    <v-btn @click="directPage()">submit</v-btn>
    <button type="button" class="btn btn-success" style="color: aliceblue">
      submit
    </button>
  </div>
</template>

<script>
// import HelloWorld from '@/components/HelloWorld.vue'

export default {
  methods: {
    directPage() {
      this.$router.push("/page1");
    },
  },
  //create wenns kalin
  beforeCreate() {
    console.log("before create");
  },
  //create unata passe
  created() {
    console.log("created");
  },
  //page eka load wena welawedi
  beforeMount() {
    console.log("before mount");
  },
  //page eka load unata passe
  mounted() {
    console.log("loaded");
  },

  beforeUpdate() {
    console.log("before update");
  },
  updated() {
    console.log("updated");
  },
};
</script>
