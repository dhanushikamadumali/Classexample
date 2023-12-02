<template>
    <div class="d-flex justify-content-center pt-8">

        <v-card title="User form" width="700" elevation="20" image="@/assets/image/abc.jpg">

            <v-form>
                <v-container>
                <v-row>
                    <v-col lg="6" cols="12" sm="6" md="6">
                        <lable class="header_color">first name</lable>
                        <v-text-field class="pt-2"  variant="outlined" >

                        </v-text-field>
                        <!-- {{ Formdata }} -->
                        two way data binding

                    </v-col>
                    <v-col lg="6"  cols="12" sm="6" md="6">
                        <lable class="header_color">last name</lable>
                        <v-text-field class="pt-2"   variant="outlined" ></v-text-field>
                    </v-col>
                </v-row>
                <!-- <v-row>
                    <v-col lg="6"  cols="12" sm="6" md="6">
                        <lable class="header_color">address 1</lable>
                        <v-text-field  class="pt-2" v-model="form.address1"  variant="outlined"></v-text-field>
                    </v-col>
                    <v-col lg="6"  cols="12" sm="6" md="6">
                        <lable class="header_color">address 2</lable>
                        <v-text-field  class="pt-2" v-model="form.address2"  variant="outlined"></v-text-field>
                    </v-col>
                </v-row> -->
                <!-- update eka use karanawa -->
                <!-- hjkhkljlkghng -->
                <v-row>
                <v-col lg="6"  cols="12" sm="6" md="6">
                  <v-btn color="white" title="submit" @click="getData()">SUBMIT</v-btn>
                  </v-col>
                  </v-row>

            </v-container>
            </v-form>

        </v-card>
    </div>
</template>
<script>

export default{
  data() {
    return {
      props:{
        // FormData:String,
        FormData:Object,

      },
      // hadana object athulata automaticaly ynawa form object ejken
      form:{},

    // v-model ekata use akrnane api type karana data eka ehemama enawa
      // firstname:"dahanu",
      // lastname:"afe",
      // address1:"sdgvds",
      // address2:"asfes"

    };
  },

  methods:{
    // getData(){
      //form object ekata adalawa console.log wenawa

      // console.log(this.form);

      // button eka click karanakota input filed eke data tika controler ekata gannawa
      // console.log(this.firstname),
      // console.log(this.lastname),
      // console.log(this.address1),
      // console.log(this.address2)

    // },
getData(){
  this.$emit("formData",this.FormData)
}

  },

  // page eka load weddima first name eka loada wela tiynne ona
  // use karanne beforemount,mounted
  // beforeMount(){//componet eka create wela load wenna kalin
  //   this.form.firstname="yasindu";
  //   this.form.lastname="fgsdrg";
  //   this.form.address1="fds";
  //   this.form.address2="segvr";

  // },
  // created(){//component eka create unata passe
  //   this.form.firstname="yasindu";
  //   this.form.lastname="fgsdrg";
  //   this.form.address1="fds";
  //   this.form.address2="segvr";

  // },
// beforemount eka wenne created eken passe
// before mount eka load wenna data eka onaa

  // beforecreate danna be page eka load weddi component eka create wala nathi nisa\
  // form ekak create wela nee

  // mounted eka wenne component create unata passe e nisa error ekak enne ne
  // mounted eke wenne component eka load unata passe wena de
  // mount eke wenne component eka load unata passe wena de wenne

  // mounted eke variable initialize karanne ne vauiables walta dana dewal thma initialixze karnne
// mounted eke form eke kalin tiyana variable initialize karanne ne mounted ekata adala dewal initialize karanne
  // component eka loada weddima form data eka auto maticali load wennawa


  updated(){
    // this.form.firstname="dharshan";
  }

}
</script>
